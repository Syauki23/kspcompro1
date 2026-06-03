<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageCompressor
{
    /**
     * Compress an uploaded image and store it
     *
     * @param UploadedFile $file The uploaded file
     * @param string $folder The folder to store it in (inside public disk)
     * @param int $quality Quality from 0 to 100
     * @param int $maxWidth Max width to scale down to
     * @return string The path to the stored file
     */
    protected function compressAndStoreImage(UploadedFile $file, $folder = 'images', $quality = 80, $maxWidth = 1920)
    {
        // 1. Get original image properties
        $originalPath = $file->getRealPath();
        $mime = $file->getMimeType();
        
        // Convert all to webp for best compression/quality ratio
        $filename = Str::random(40) . '.webp'; 
        
        // Ensure path exists
        if (!Storage::disk('public')->exists($folder)) {
            Storage::disk('public')->makeDirectory($folder);
        }
        
        $targetPath = Storage::disk('public')->path($folder . '/' . $filename);
        $returnPath = $folder . '/' . $filename;

        // 2. Load image into GD resource
        switch ($mime) {
            case 'image/jpeg':
                $image = @imagecreatefromjpeg($originalPath);
                break;
            case 'image/png':
                $image = @imagecreatefrompng($originalPath);
                break;
            case 'image/webp':
                $image = @imagecreatefromwebp($originalPath);
                break;
            case 'image/gif':
                $image = @imagecreatefromgif($originalPath);
                break;
            default:
                // Not supported by compressor, just fallback to standard upload
                return $file->store($folder, 'public');
        }

        if (!$image) {
            // Fallback if GD fails to read
            return $file->store($folder, 'public');
        }

        // 3. Handle image orientation (EXIF) for JPEGs
        if ($mime == 'image/jpeg' && function_exists('exif_read_data')) {
            $exif = @exif_read_data($originalPath);
            if (!empty($exif['Orientation'])) {
                switch ($exif['Orientation']) {
                    case 3:
                        $image = imagerotate($image, 180, 0);
                        break;
                    case 6:
                        $image = imagerotate($image, -90, 0);
                        break;
                    case 8:
                        $image = imagerotate($image, 90, 0);
                        break;
                }
            }
        }

        // 4. Resize if width exceeds max width
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width > $maxWidth) {
            $newWidth = $maxWidth;
            $newHeight = floor($height * ($maxWidth / $width));
            
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            
            // Preserve transparency for WEBP
            imagealphablending($newImage, false);
            imagesavealpha($newImage, true);
            $transparent = imagecolorallocatealpha($newImage, 255, 255, 255, 127);
            imagefilledrectangle($newImage, 0, 0, $newWidth, $newHeight, $transparent);

            imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($image);
            $image = $newImage;
        } else {
            // Even if not resizing, preserve transparency
            $newImage = imagecreatetruecolor($width, $height);
            imagealphablending($newImage, false);
            imagesavealpha($newImage, true);
            $transparent = imagecolorallocatealpha($newImage, 255, 255, 255, 127);
            imagefilledrectangle($newImage, 0, 0, $width, $height, $transparent);
            
            imagecopyresampled($newImage, $image, 0, 0, 0, 0, $width, $height, $width, $height);
            imagedestroy($image);
            $image = $newImage;
        }

        // 5. Save as optimized WebP
        imagewebp($image, $targetPath, $quality);
        imagedestroy($image);

        return $returnPath;
    }
}

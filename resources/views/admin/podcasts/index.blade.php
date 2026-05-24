@extends('admin.layouts.app')

@section('title', 'Podcasts')
@section('header_title', 'Podcasts')

@section('content')
    @if(session('success'))
        <div style="background: rgba(13, 148, 136, 0.1); border: 1px solid rgba(13, 148, 136, 0.25); color: var(--accent-teal); padding: 12px 16px; border-radius: 12px; font-size: 14px; margin-bottom: 24px; display: flex; align-items: center; gap: 8px;">
            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2.5" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semua Podcasts</h3>
            <a href="{{ route('admin.podcasts.create') }}" style="background: var(--accent-orange); color: white; padding: 8px 18px; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none;">+ Tambah</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>EP</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Duration</th>
                        <th>Featured</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($podcasts as $podcast)
                        <tr>
                            <td style="color: var(--accent-orange); font-weight: 700;">{{ $podcast->episode_number ?? '-' }}</td>
                            <td style="font-weight: 600; max-width: 250px;">{{ Str::limit($podcast->title, 50) }}</td>
                            <td style="color: var(--text-muted); font-size: 12px;">{{ $podcast->category ?? '-' }}</td>
                            <td>{{ $podcast->duration ?? '-' }}</td>
                            <td>
                                @if($podcast->is_featured)
                                    <span style="color: var(--accent-orange); font-size: 12px; font-weight: 600;">★ Featured</span>
                                @else
                                    <span style="color: var(--text-dim); font-size: 12px;">-</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge {{ $podcast->is_active ? 'badge-read' : 'badge-unread' }}">
                                    {{ $podcast->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div style="display: flex; gap: 8px;">
                                    <a href="{{ route('admin.podcasts.edit', $podcast) }}" class="btn-secondary" style="padding: 6px 14px; font-size: 12px; text-decoration: none;">Edit</a>
                                    <form action="{{ route('admin.podcasts.destroy', $podcast) }}" method="POST" onsubmit="return confirm('Hapus podcast ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn-danger" style="padding: 6px 14px; font-size: 12px;">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" style="text-align: center; color: var(--text-muted); padding: 30px;">Belum ada data.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

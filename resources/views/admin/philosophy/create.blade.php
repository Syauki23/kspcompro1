@extends('admin.layouts.app')

@section('title', 'Tambah Philosophy Value')
@section('header_title', 'Tambah Philosophy Value')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Philosophy Value</h3>
            <a href="{{ route('admin.philosophy.index') }}" class="btn-secondary" style="padding: 8px 16px; font-size: 13px; text-decoration: none;">← Kembali</a>
        </div>
        <div style="padding: 24px;">
            <form action="{{ route('admin.philosophy.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.philosophy._form', ['nextIndex' => $nextIndex])
                <div class="form-actions">
                    <button type="submit" class="btn-save">Simpan</button>
                    <a href="{{ route('admin.philosophy.index') }}" class="btn-secondary" style="padding: 12px 20px; font-size: 14px; text-decoration: none;">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection

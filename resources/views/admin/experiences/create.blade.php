@extends('admin.layouts.app')

@section('title', 'Tambah Experience')
@section('header_title', 'Tambah Experience')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Experience</h3>
            <a href="{{ route('admin.experiences.index') }}" class="btn-secondary" style="padding: 8px 16px; font-size: 13px; text-decoration: none;">← Kembali</a>
        </div>
        <div style="padding: 24px;">
            <form action="{{ route('admin.experiences.store') }}" method="POST">
                @csrf
                @include('admin.experiences._form')
                <div style="margin-top: 24px; display: flex; gap: 12px;">
                    <button type="submit" style="background: var(--accent-orange); color: white; border: none; padding: 12px 28px; border-radius: 10px; font-size: 14px; font-weight: 600; cursor: pointer; font-family: var(--font-body);">Simpan</button>
                    <a href="{{ route('admin.experiences.index') }}" class="btn-secondary" style="padding: 12px 20px; font-size: 14px; text-decoration: none;">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection

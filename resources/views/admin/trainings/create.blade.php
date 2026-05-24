@extends('admin.layouts.app')

@section('title', 'Tambah Training')
@section('header_title', 'Tambah Training')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Training</h3>
            <a href="{{ route('admin.trainings.index') }}" class="btn-secondary" style="padding: 8px 16px; font-size: 13px; text-decoration: none;">← Kembali</a>
        </div>
        <div style="padding: 24px;">
            <form action="{{ route('admin.trainings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.trainings._form')
                <div class="form-actions">
                    <button type="submit" class="btn-save">Simpan</button>
                    <a href="{{ route('admin.trainings.index') }}" class="btn-secondary" style="padding: 12px 20px; font-size: 14px; text-decoration: none;">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection

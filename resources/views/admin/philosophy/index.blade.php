@extends('admin.layouts.app')

@section('title', 'Philosophy Values')
@section('header_title', 'Philosophy Values')

@section('content')
    @if(session('success'))
        <div style="background: rgba(13, 148, 136, 0.1); border: 1px solid rgba(13, 148, 136, 0.25); color: var(--accent-teal); padding: 12px 16px; border-radius: 12px; font-size: 14px; margin-bottom: 24px; display: flex; align-items: center; gap: 8px;">
            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2.5" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">SWARNADWIPA Values</h3>
            <a href="{{ route('admin.philosophy.create') }}" style="background: var(--accent-orange); color: white; padding: 8px 18px; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none;">+ Tambah</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Letter</th>
                        <th>Title</th>
                        <th>Features</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($values as $val)
                        <tr>
                            <td>{{ $val->index }}</td>
                            <td>
                                <span style="font-size: 22px; font-weight: 800; color: var(--accent-orange); font-family: var(--font-brand);">{{ $val->letter }}</span>
                            </td>
                            <td style="font-weight: 600;">{{ $val->title }}</td>
                            <td style="color: var(--text-muted);">{{ is_array($val->features) ? count($val->features) : 0 }} items</td>
                            <td>
                                <div style="display: flex; gap: 8px;">
                                    <a href="{{ route('admin.philosophy.edit', $val) }}" class="btn-secondary" style="padding: 6px 14px; font-size: 12px; text-decoration: none;">Edit</a>
                                    <form action="{{ route('admin.philosophy.destroy', $val) }}" method="POST" onsubmit="return confirm('Hapus value ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn-danger" style="padding: 6px 14px; font-size: 12px;">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" style="text-align: center; color: var(--text-muted); padding: 30px;">Belum ada data.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

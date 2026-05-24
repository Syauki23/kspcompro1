@extends('admin.layouts.app')

@section('title', 'Recent Training Events')
@section('header_title', 'Recent Training Events')

@section('content')
    @if(session('success'))
        <div style="background: rgba(13,148,136,0.1); border: 1px solid rgba(13,148,136,0.25); color: var(--accent-teal); padding: 12px 16px; border-radius: 12px; font-size: 14px; margin-bottom: 24px; display: flex; align-items: center; gap: 8px;">
            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2.5" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div style="margin-bottom: 16px;">
        <a href="{{ route('admin.settings.training') }}" style="color: var(--text-muted); font-size: 13px; text-decoration: none;">← Kembali ke Training Settings</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Workshop & Training Events</h3>
            <a href="{{ route('admin.training-events.create') }}" style="background: var(--accent-orange); color: white; padding: 8px 18px; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none;">+ Tambah Event</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Foto</th>
                        <th>Title</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($events as $event)
                        <tr>
                            <td style="color: var(--text-muted);">{{ $event->order_position }}</td>
                            <td>
                                @if($event->image)
                                    <img src="{{ str_starts_with($event->image, 'http') ? $event->image : Storage::url($event->image) }}" style="height: 44px; width: 70px; object-fit: cover; border-radius: 8px; border: 1px solid var(--border-glass);">
                                @else
                                    <div style="height: 44px; width: 70px; background: var(--bg-admin); border-radius: 8px; border: 1px solid var(--border-glass);"></div>
                                @endif
                            </td>
                            <td style="font-weight: 600;">{{ $event->title }}</td>
                            <td style="color: var(--text-muted);">{{ $event->event_date ? $event->event_date->format('d M Y') : '-' }}</td>
                            <td style="color: var(--text-muted);">{{ $event->location ?? '-' }}</td>
                            <td>
                                <span class="badge {{ $event->is_active ? 'badge-read' : 'badge-unread' }}">
                                    {{ $event->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div style="display: flex; gap: 8px;">
                                    <a href="{{ route('admin.training-events.edit', $event) }}" class="btn-secondary" style="padding: 6px 14px; font-size: 12px; text-decoration: none;">Edit</a>
                                    <form action="{{ route('admin.training-events.destroy', $event) }}" method="POST" onsubmit="return confirm('Hapus event ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn-danger" style="padding: 6px 14px; font-size: 12px;">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" style="text-align: center; color: var(--text-muted); padding: 30px;">Belum ada event.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('admin.layouts.app')

@section('title', 'Overview')
@section('header_title', 'Overview')

@section('content')
    <!-- Dashboard Stats Grid -->
    <div class="metrics-grid">
        <!-- 1. Services -->
        <div class="metric-card">
            <div class="metric-info">
                <span class="metric-label">Services</span>
                <span class="metric-value">{{ $counts['services'] }}</span>
            </div>
            <div class="metric-icon">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            </div>
        </div>

        <!-- 2. Trainings -->
        <div class="metric-card">
            <div class="metric-info">
                <span class="metric-label">Trainings</span>
                <span class="metric-value">{{ $counts['trainings'] }}</span>
            </div>
            <div class="metric-icon">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
            </div>
        </div>

        <!-- 3. Experience -->
        <div class="metric-card">
            <div class="metric-info">
                <span class="metric-label">Experiences</span>
                <span class="metric-value">{{ $counts['experiences'] }}</span>
            </div>
            <div class="metric-icon">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
            </div>
        </div>

        <!-- 4. Podcasts -->
        <div class="metric-card">
            <div class="metric-info">
                <span class="metric-label">Podcasts</span>
                <span class="metric-value">{{ $counts['podcasts'] }}</span>
            </div>
            <div class="metric-icon">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
            </div>
        </div>

        <!-- 5. Partners -->
        <div class="metric-card" onclick="window.location='{{ route('admin.partners.index') }}'" style="cursor: pointer;">
            <div class="metric-info">
                <span class="metric-label">Partners (Logos)</span>
                <span class="metric-value">{{ $counts['partners'] }}</span>
            </div>
            <div class="metric-icon">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
        </div>

        <!-- 6. Testimonials -->
        <div class="metric-card" onclick="window.location='{{ route('admin.testimonials.index') }}'" style="cursor: pointer;">
            <div class="metric-info">
                <span class="metric-label">Testimonials</span>
                <span class="metric-value">{{ $counts['testimonials'] }}</span>
            </div>
            <div class="metric-icon">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            </div>
        </div>

        <!-- 7. Inbox Messages -->
        <div class="metric-card" style="position: relative;">
            <div class="metric-info">
                <span class="metric-label">Total Messages</span>
                <span class="metric-value">{{ $counts['messages'] }}</span>
            </div>
            @if($counts['unread_messages'] > 0)
                <span style="position: absolute; top: 16px; right: 16px; background: var(--accent-orange); color: var(--text-white); font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 20px;">
                    {{ $counts['unread_messages'] }} UNREAD
                </span>
            @endif
            <div class="metric-icon">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
        </div>
    </div>

    <!-- Main Overview Row -->
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
        <!-- Left Side: Recent Messages -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Recent Inbox Messages</h3>
                <a href="{{ route('admin.inbox') }}" style="color: var(--accent-orange); font-size: 14px; text-decoration: none; font-weight: 500;">View All</a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sender</th>
                            <th>Company</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentMessages as $msg)
                            <tr>
                                <td>
                                    <div style="font-weight: 600;">{{ $msg->name }}</div>
                                    <div style="font-size: 12px; color: var(--text-muted);">{{ $msg->email }}</div>
                                </td>
                                <td>{{ $msg->company ?? '-' }}</td>
                                <td>{{ $msg->created_at->format('M d, Y H:i') }}</td>
                                <td>
                                    <span class="badge {{ $msg->is_read ? 'badge-read' : 'badge-unread' }}">
                                        {{ $msg->is_read ? 'Read' : 'Unread' }}
                                    </span>
                                </td>
                                <td>
                                    <button 
                                        class="btn-secondary" 
                                        style="padding: 6px 12px; font-size: 12px;"
                                        onclick="showQuickMessage('{{ addslashes($msg->name) }}', '{{ addslashes($msg->company) }}', '{{ addslashes($msg->email) }}', '{{ addslashes($msg->phone) }}', '{{ addslashes($msg->message) }}', '{{ route('admin.messages.read', $msg->id) }}', '{{ $msg->is_read ? 1 : 0 }}')"
                                    >
                                        Read
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="text-align: center; color: var(--text-muted); padding: 30px;">
                                    No contact messages found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Side: Quick Actions -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quick Actions</h3>
            </div>

            <div style="display: flex; flex-direction: column; gap: 12px;">
                <a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 14px; background: rgba(249,115,22,0.06); border: 1px solid rgba(249,115,22,0.2); border-radius: 14px; padding: 16px 20px; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='rgba(249,115,22,0.12)'" onmouseout="this.style.background='rgba(249,115,22,0.06)'">
                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(249,115,22,0.12); display: flex; align-items: center; justify-content: center; color: var(--accent-orange); flex-shrink: 0;">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                    </div>
                    <div>
                        <div style="font-weight: 600; font-size: 14px; color: var(--text-white);">View Website</div>
                        <div style="font-size: 12px; color: var(--text-muted); margin-top: 2px;">Buka halaman publik</div>
                    </div>
                    <svg viewBox="0 0 24 24" width="16" height="16" stroke="var(--accent-orange)" stroke-width="2" fill="none" style="margin-left: auto; flex-shrink: 0;"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                </a>

                <a href="{{ route('admin.inbox') }}" style="display: flex; align-items: center; gap: 14px; background: rgba(13,148,136,0.06); border: 1px solid rgba(13,148,136,0.2); border-radius: 14px; padding: 16px 20px; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='rgba(13,148,136,0.12)'" onmouseout="this.style.background='rgba(13,148,136,0.06)'">
                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(13,148,136,0.12); display: flex; align-items: center; justify-content: center; color: var(--accent-teal); flex-shrink: 0;">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <div>
                        <div style="font-weight: 600; font-size: 14px; color: var(--text-white);">Contact Inbox</div>
                        <div style="font-size: 12px; color: var(--text-muted); margin-top: 2px;">
                            @if($counts['unread_messages'] > 0)
                                <span style="color: var(--accent-orange); font-weight: 600;">{{ $counts['unread_messages'] }} pesan belum dibaca</span>
                            @else
                                Semua pesan sudah dibaca
                            @endif
                        </div>
                    </div>
                    <svg viewBox="0 0 24 24" width="16" height="16" stroke="var(--accent-teal)" stroke-width="2" fill="none" style="margin-left: auto; flex-shrink: 0;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>

                <a href="{{ route('admin.settings.home') }}" style="display: flex; align-items: center; gap: 14px; background: rgba(30,58,138,0.06); border: 1px solid rgba(30,58,138,0.15); border-radius: 14px; padding: 16px 20px; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='rgba(30,58,138,0.12)'" onmouseout="this.style.background='rgba(30,58,138,0.06)'">
                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(30,58,138,0.1); display: flex; align-items: center; justify-content: center; color: var(--accent-navy); flex-shrink: 0;">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </div>
                    <div>
                        <div style="font-weight: 600; font-size: 14px; color: var(--text-white);">Edit Settings</div>
                        <div style="font-size: 12px; color: var(--text-muted); margin-top: 2px;">Ubah teks & konten website</div>
                    </div>
                    <svg viewBox="0 0 24 24" width="16" height="16" stroke="var(--accent-navy)" stroke-width="2" fill="none" style="margin-left: auto; flex-shrink: 0;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Read Modal -->
    <div class="message-modal" id="quickMessageModal">
        <div class="message-modal-content">
            <div class="modal-header">
                <h3 class="card-title" style="margin-bottom: 0;">Contact Message Details</h3>
                <button class="modal-close-btn" onclick="closeQuickMessage()">
                    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>

            <div class="modal-details">
                <div class="detail-row">
                    <span class="detail-label">Sender</span>
                    <span class="detail-value" id="quickSender"></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Company</span>
                    <span class="detail-value" id="quickCompany"></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email</span>
                    <span class="detail-value" id="quickEmail"></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Phone</span>
                    <span class="detail-value" id="quickPhone"></span>
                </div>
            </div>

            <div class="message-text-box" id="quickMessageText"></div>

            <div class="modal-actions">
                <button class="btn-secondary" onclick="closeQuickMessage()">Close</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function showQuickMessage(name, company, email, phone, message, readUrl, isRead) {
        document.getElementById('quickSender').textContent = name;
        document.getElementById('quickCompany').textContent = company || '-';
        document.getElementById('quickEmail').textContent = email;
        document.getElementById('quickPhone').textContent = phone || '-';
        document.getElementById('quickMessageText').textContent = message;
        
        document.getElementById('quickMessageModal').style.display = 'flex';

        if (!parseInt(isRead)) {
            // Mark as read in background
            fetch(readUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(res => res.json())
            .then(data => {
                if(data.success) {
                    // Smoothly refresh after close to show clean status
                }
            });
        }
    }

    function closeQuickMessage() {
        document.getElementById('quickMessageModal').style.display = 'none';
        window.location.reload(); // Refresh to update count & read status badges
    }
</script>
@endsection

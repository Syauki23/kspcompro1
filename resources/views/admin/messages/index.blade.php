@extends('admin.layouts.app')

@section('title', 'Contact Inbox')
@section('header_title', 'Contact Inbox')

@section('content')
    @if(session('success'))
        <div style="background: rgba(13, 148, 136, 0.1); border: 1px solid rgba(13, 148, 136, 0.25); color: var(--accent-teal); padding: 12px 16px; border-radius: 12px; font-size: 14px; margin-bottom: 24px; display: flex; align-items: center; gap: 8px;">
            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2.5" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Message Submissions</h3>
        </div>

        <div class="inbox-list">
            @forelse($messages as $msg)
                <div 
                    class="inbox-item {{ $msg->is_read ? '' : 'unread' }} message-click-trigger"
                    data-name="{{ $msg->name }}"
                    data-company="{{ $msg->company }}"
                    data-email="{{ $msg->email }}"
                    data-phone="{{ $msg->phone }}"
                    data-message="{{ $msg->message }}"
                    data-read-url="{{ route('admin.messages.read', $msg->id) }}"
                    data-delete-url="{{ route('admin.messages.delete', $msg->id) }}"
                    data-is-read="{{ $msg->is_read ? 1 : 0 }}"
                >
                    <div class="inbox-item-header">
                        <div>
                            <div class="inbox-sender-name">{{ $msg->name }}</div>
                            <div style="font-size: 12px; color: var(--accent-orange); margin-top: 2px;">{{ $msg->company ?? 'No Company' }}</div>
                        </div>
                        <div class="inbox-meta">
                            <span>{{ $msg->created_at->diffForHumans() }}</span>
                            <span class="badge {{ $msg->is_read ? 'badge-read' : 'badge-unread' }}">
                                {{ $msg->is_read ? 'Read' : 'Unread' }}
                            </span>
                        </div>
                    </div>
                    <div class="inbox-body">{{ Str::limit($msg->message, 150) }}</div>
                </div>
            @empty
                <div style="text-align: center; color: var(--text-muted); padding: 40px;">
                    No contact form messages have been submitted yet.
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="pagination-nav">
            {{ $messages->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Message Detail Modal -->
    <div class="message-modal" id="detailsModal">
        <div class="message-modal-content">
            <div class="modal-header">
                <h3 class="card-title" style="margin-bottom: 0;">Message Content Details</h3>
                <button class="modal-close-btn" onclick="closeDetailsModal()">
                    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>

            <div class="modal-details">
                <div class="detail-row">
                    <span class="detail-label">Sender</span>
                    <span class="detail-value" id="msgSender"></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Company</span>
                    <span class="detail-value" id="msgCompany"></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email</span>
                    <span class="detail-value" id="msgEmail"></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Phone</span>
                    <span class="detail-value" id="msgPhone"></span>
                </div>
            </div>

            <div class="message-text-box" id="msgContent"></div>

            <div class="modal-actions">
                <form action="" method="POST" id="deleteForm" style="margin-right: auto;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Delete</button>
                </form>
                <button class="btn-secondary" onclick="closeDetailsModal()">Close</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const items = document.querySelectorAll('.message-click-trigger');
        items.forEach(item => {
            item.addEventListener('click', function () {
                const name = this.getAttribute('data-name');
                const company = this.getAttribute('data-company');
                const email = this.getAttribute('data-email');
                const phone = this.getAttribute('data-phone');
                const message = this.getAttribute('data-message');
                const readUrl = this.getAttribute('data-read-url');
                const deleteUrl = this.getAttribute('data-delete-url');
                const isRead = this.getAttribute('data-is-read');

                document.getElementById('msgSender').textContent = name;
                document.getElementById('msgCompany').textContent = company || '-';
                document.getElementById('msgEmail').textContent = email;
                document.getElementById('msgPhone').textContent = phone || '-';
                document.getElementById('msgContent').textContent = message;
                
                // Setup delete action form action URL
                document.getElementById('deleteForm').action = deleteUrl;
                
                document.getElementById('detailsModal').style.display = 'flex';

                if (!parseInt(isRead)) {
                    // Mark as read in background via AJAX
                    fetch(readUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            // It is read successfully
                        }
                    })
                    .catch(err => console.error(err));
                }
            });
        });
    });

    function closeDetailsModal() {
        document.getElementById('detailsModal').style.display = 'none';
        window.location.reload(); // Refresh to update count & read status badges
    }
</script>
@endsection

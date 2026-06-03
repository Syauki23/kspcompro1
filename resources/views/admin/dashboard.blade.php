@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('header_title', 'Dashboard')

@section('content')
@php
    $adminName = Auth::user()?->name ?? 'Administrator';
@endphp

<section class="erp-hero-panel">
    <div>
        <span class="erp-kicker">KSP Consulting Operations</span>
        <h2>Welcome back, {{ $adminName }}</h2>
        <p>Kelola konten website, inquiry klien, podcast, training, dan social proof dari satu control center.</p>
    </div>
    <div class="erp-status-card">
        <span class="erp-status-dot"></span>
        <div>
            <strong>System Online</strong>
            <small>{{ now()->format('d M Y, H:i') }}</small>
        </div>
    </div>
</section>

<div class="erp-metrics-grid">
    <a href="{{ route('admin.settings.services') }}" class="erp-metric-card metric-blue">
        <div class="erp-metric-top">
            <span>Services</span>
            <div class="erp-metric-icon"><svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" fill="none"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></div>
        </div>
        <strong>{{ $counts['services'] }}</strong>
        <small>Active service modules</small>
    </a>

    <a href="{{ route('admin.settings.training') }}" class="erp-metric-card metric-gold">
        <div class="erp-metric-top">
            <span>Trainings</span>
            <div class="erp-metric-icon"><svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg></div>
        </div>
        <strong>{{ $counts['trainings'] }}</strong>
        <small>Learning catalog items</small>
    </a>

    <a href="{{ route('admin.experiences.index') }}" class="erp-metric-card metric-teal">
        <div class="erp-metric-top">
            <span>Experiences</span>
            <div class="erp-metric-icon"><svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" fill="none"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></div>
        </div>
        <strong>{{ $counts['experiences'] }}</strong>
        <small>Portfolio milestones</small>
    </a>

    <a href="{{ route('admin.inbox') }}" class="erp-metric-card metric-red">
        <div class="erp-metric-top">
            <span>Unread Inbox</span>
            <div class="erp-metric-icon"><svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
        </div>
        <strong>{{ $counts['unread_messages'] }}</strong>
        <small>{{ $counts['messages'] }} total messages</small>
    </a>
</div>

<div class="erp-workspace-grid">
    <section class="erp-panel erp-panel-large">
        <div class="erp-panel-header">
            <div>
                <span class="erp-section-label">Client Pipeline</span>
                <h3>Recent Inquiries</h3>
            </div>
            <a href="{{ route('admin.inbox') }}" class="erp-link-btn">View All</a>
        </div>

        <div class="erp-table-wrap">
            <table class="erp-table">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Company</th>
                        <th>Status</th>
                        <th>Received</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentMessages as $msg)
                        <tr>
                            <td>
                                <div class="erp-client-cell">
                                    <span class="erp-avatar-mini">{{ strtoupper(substr($msg->name, 0, 1)) }}</span>
                                    <div>
                                        <strong>{{ $msg->name }}</strong>
                                        <small>{{ $msg->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $msg->company ?? 'Personal Inquiry' }}</td>
                            <td><span class="erp-badge {{ $msg->is_read ? 'is-done' : 'is-new' }}">{{ $msg->is_read ? 'Handled' : 'New Lead' }}</span></td>
                            <td>{{ $msg->created_at->diffForHumans() }}</td>
                            <td>
                                <button
                                    class="erp-action-btn recent-read-btn"
                                    data-name="{{ $msg->name }}"
                                    data-company="{{ $msg->company }}"
                                    data-email="{{ $msg->email }}"
                                    data-phone="{{ $msg->phone }}"
                                    data-message="{{ $msg->message }}"
                                    data-read-url="{{ route('admin.messages.read', $msg->id) }}"
                                    data-is-read="{{ $msg->is_read ? 1 : 0 }}"
                                >Open</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="erp-empty-state">Belum ada pesan masuk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    <aside class="erp-side-stack">
        <section class="erp-panel">
            <div class="erp-panel-header compact">
                <div>
                    <span class="erp-section-label">Quick Control</span>
                    <h3>Management</h3>
                </div>
            </div>
            <div class="erp-quick-grid">
                <a href="{{ route('admin.services.create') }}" class="erp-quick-card">
                    <span class="erp-quick-icon blue">+</span>
                    <strong>Add Service</strong>
                    <small>New offer</small>
                </a>
                <a href="{{ route('admin.podcasts.create') }}" class="erp-quick-card">
                    <span class="erp-quick-icon gold">+</span>
                    <strong>Add Podcast</strong>
                    <small>New episode</small>
                </a>
                <a href="{{ route('admin.partners.create') }}" class="erp-quick-card">
                    <span class="erp-quick-icon teal">+</span>
                    <strong>Add Partner</strong>
                    <small>Logo client</small>
                </a>
                <a href="{{ route('admin.settings.global') }}" class="erp-quick-card">
                    <span class="erp-quick-icon navy">⚙</span>
                    <strong>Settings</strong>
                    <small>Global data</small>
                </a>
            </div>
        </section>

        <section class="erp-panel erp-health-panel">
            <span class="erp-section-label">Content Health</span>
            <h3>Website Assets</h3>
            <div class="erp-health-list">
                <div><span>Podcasts</span><strong>{{ $counts['podcasts'] }}</strong></div>
                <div><span>Partners</span><strong>{{ $counts['partners'] }}</strong></div>
                <div><span>Testimonials</span><strong>{{ $counts['testimonials'] }}</strong></div>
            </div>
            <a href="{{ url('/') }}" target="_blank" class="erp-preview-btn">Preview Public Website</a>
        </section>
    </aside>
</div>

<div class="message-modal" id="quickMessageModal">
    <div class="message-modal-content">
        <div class="modal-header">
            <h3 class="card-title" style="margin-bottom: 0;">Contact Message Details</h3>
            <button class="modal-close-btn" onclick="closeQuickMessage()">
                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <div class="modal-details">
            <div class="detail-row"><span class="detail-label">Sender</span><span class="detail-value" id="quickSender"></span></div>
            <div class="detail-row"><span class="detail-label">Company</span><span class="detail-value" id="quickCompany"></span></div>
            <div class="detail-row"><span class="detail-label">Email</span><span class="detail-value" id="quickEmail"></span></div>
            <div class="detail-row"><span class="detail-label">Phone</span><span class="detail-value" id="quickPhone"></span></div>
        </div>

        <div class="message-text-box" id="quickMessageText"></div>
        <div class="modal-actions"><button class="btn-secondary" onclick="closeQuickMessage()">Close</button></div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const readBtns = document.querySelectorAll('.recent-read-btn');
        readBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const name = this.getAttribute('data-name');
                const company = this.getAttribute('data-company');
                const email = this.getAttribute('data-email');
                const phone = this.getAttribute('data-phone');
                const message = this.getAttribute('data-message');
                const readUrl = this.getAttribute('data-read-url');
                const isRead = this.getAttribute('data-is-read');

                document.getElementById('quickSender').textContent = name;
                document.getElementById('quickCompany').textContent = company || '-';
                document.getElementById('quickEmail').textContent = email;
                document.getElementById('quickPhone').textContent = phone || '-';
                document.getElementById('quickMessageText').textContent = message;
                document.getElementById('quickMessageModal').style.display = 'flex';

                if (!parseInt(isRead)) {
                    fetch(readUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }).catch(err => console.error(err));
                }
            });
        });
    });

    function closeQuickMessage() {
        document.getElementById('quickMessageModal').style.display = 'none';
        window.location.reload();
    }
</script>
@endsection

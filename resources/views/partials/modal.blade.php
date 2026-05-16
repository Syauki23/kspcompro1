<div class="consult-modal-overlay" id="modal-consultation">
  <div class="consult-modal-container">
    <button class="consult-modal-close" aria-label="Close modal">&times;</button>
    <div class="consult-modal-left">
      <img src="{{ asset('assets/bg-ship.jpg') }}" alt="Maritime Background">
    </div>
    <div class="consult-modal-right">
      <h2 class="consult-modal-title">Let’s Solve Your Operational Challenges Together</h2>
      <p class="consult-modal-desc">
        Need support for maritime consulting, operational assessment, inspections, or training programs? Our team is ready to help your company navigate complex operational challenges.
      </p>

      <form class="consult-form" id="consultationForm">
        <div class="form-row">
          <input type="text" class="consult-input" placeholder="Full Name" required>
          <input type="text" class="consult-input" placeholder="Company" required>
        </div>
        <div class="form-row">
          <input type="email" class="consult-input" placeholder="Email" required>
          <input type="tel" class="consult-input" placeholder="Phone Number" required>
        </div>
        <div class="form-row full-width">
          <div class="select-wrapper">
            <select class="consult-select" required>
              <option value="" disabled selected hidden>Service Needed</option>
              <option value="Maritime Consulting">Maritime Consulting</option>
              <option value="Risk Assessment">Risk Assessment</option>
              <option value="Vessel Inspection">Vessel Inspection</option>
              <option value="HR Assessment">HR Assessment</option>
              <option value="Workshop & Training">Workshop & Training</option>
              <option value="Due Diligence">Due Diligence</option>
            </select>
            <svg class="select-arrow" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </div>
        </div>
        <div class="form-row full-width">
          <textarea class="consult-textarea" placeholder="Message" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn-consult-submit">
          <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
          <span>Send Inquiry</span>
        </button>

        <button type="button" class="btn-consult-whatsapp" onclick="window.open('https://wa.me/62000000000', '_blank')">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
          <span>Continue via WhatsApp</span>
        </button>

        <div class="consult-secure-footer">
          <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
          <span>Your information is secure and confidential.</span>
        </div>
      </form>
    </div>
  </div>
</div>

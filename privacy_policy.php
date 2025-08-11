<!-- Privacy Policy Modal -->
<div id="privacyModal" class="privacy-modal">
    <div class="privacy-modal-content">
        <span class="close-btn" onclick="closePrivacyPolicy()">&times;</span>
        <h2>Privacy Policy</h2>
        <p>
            We value your privacy. Any personal information collected during the booking process or site usage will be used solely for the purpose of enhancing your travel experience. We do not sell or share your information with third parties.
        </p>
        <p>
            Your data is securely stored and only accessible by authorized personnel. By using our site, you consent to the terms of this privacy policy.
        </p>
    </div>
</div>

<script>
function showPrivacyPolicy() {
    const modal = document.getElementById('privacyModal');
    if (modal) modal.style.display = 'block';
}

function closePrivacyPolicy() {
    const modal = document.getElementById('privacyModal');
    if (modal) modal.style.display = 'none';
}

// Close when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('privacyModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}
</script>
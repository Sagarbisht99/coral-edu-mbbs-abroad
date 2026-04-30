<?php include 'site_identity.php'; ?>


<script>
function toggleCallbackPanel() {
    const panel = document.getElementById('callbackPanel');
    panel.classList.toggle('active');
}

function toggleEnquiryForm() {
    const modal = document.getElementById('enquiryModal');
    modal.classList.toggle('active');
}

// Auto-show callback panel after 5 seconds
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        const panel = document.getElementById('callbackPanel');
        if (!panel.classList.contains('active')) {
            panel.classList.add('active');
        }
    }, 5000);
});
</script>

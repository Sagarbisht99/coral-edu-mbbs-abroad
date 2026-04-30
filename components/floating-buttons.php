<?php include 'site_identity.php'; ?>


<style>
/* Floating Enquire Button */
.enquire-float-btn {
    position: fixed;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    background: linear-gradient(180deg, #22c55e 0%, #16a34a 40%, #dc2626 100%);
    color: #ffffff;
    padding: 20px 12px;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
    z-index: 9998;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    box-shadow: 4px 0 20px rgba(0, 0, 0, 0.25);
    transition: all 0.3s ease;
}

.enquire-float-btn:hover {
    padding: 20px 18px;
    box-shadow: 6px 0 25px rgba(0, 0, 0, 0.35);
}

.enquire-text {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.5px;
    writing-mode: vertical-rl;
    text-orientation: mixed;
    text-transform: uppercase;
}

.enquire-float-btn i {
    font-size: 14px;
    transform: rotate(90deg);
}

/* Callback Panel */
.callback-panel {
    position: fixed;
    right: -400px;
    top: 50%;
    transform: translateY(-50%);
    width: 380px;
    background: #ffffff;
    border-radius: 16px 0 0 16px;
    box-shadow: -10px 0 40px rgba(0, 0, 0, 0.25);
    z-index: 9997;
    transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
}

.callback-panel.active {
    right: 0;
}

.callback-header {
    background: linear-gradient(135deg, #1e3a5f 0%, #0a1628 100%);
    color: #ffffff;
    padding: 18px 22px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.callback-header h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
}

.callback-close {
    background: none;
    border: none;
    color: #ffffff;
    font-size: 20px;
    cursor: pointer;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: background 0.3s ease;
}

.callback-close:hover {
    background: rgba(255, 255, 255, 0.2);
}

.callback-form {
    padding: 30px;
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.callback-field {
    width: 100%;
}

.callback-input,
.callback-select {
    width: 100%;
    padding: 14px 18px;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    font-size: 15px;
    color: #333;
    background: #f9fafb;
    transition: all 0.3s ease;
}

.callback-input:focus,
.callback-select:focus {
    outline: none;
    border-color: #3b82f6;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.callback-submit {
    background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
    color: #ffffff;
    border: none;
    padding: 16px 25px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 12px;
}

.callback-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(34, 197, 94, 0.4);
}

/* Enquiry Modal */
.enquiry-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 10000;
    display: none;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.enquiry-modal.active {
    display: flex;
    opacity: 1;
}

.enquiry-modal-content {
    background: #ffffff;
    border-radius: 12px;
    width: 90%;
    max-width: 450px;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    transform: scale(0.9);
    transition: transform 0.3s ease;
}

.enquiry-modal.active .enquiry-modal-content {
    transform: scale(1);
}

.enquiry-modal-header {
    background: linear-gradient(135deg, #1e3a5f 0%, #0a1628 100%);
    color: #ffffff;
    padding: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 12px 12px 0 0;
}

.enquiry-modal-header h3 {
    margin: 0;
    font-size: 22px;
    font-weight: 600;
}

.enquiry-close {
    background: none;
    border: none;
    color: #ffffff;
    font-size: 22px;
    cursor: pointer;
    padding: 0;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: background 0.3s ease;
}

.enquiry-close:hover {
    background: rgba(255, 255, 255, 0.2);
}

.enquiry-form {
    padding: 30px;
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.enquiry-field {
    width: 100%;
}

.enquiry-input,
.enquiry-select {
    width: 100%;
    padding: 14px 18px;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    font-size: 15px;
    color: #333;
    background: #f9fafb;
    transition: all 0.3s ease;
}

.enquiry-input:focus,
.enquiry-select:focus {
    outline: none;
    border-color: #3b82f6;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
}

.enquiry-submit {
    background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
    color: #ffffff;
    border: none;
    padding: 16px 25px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
}

.enquiry-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(34, 197, 94, 0.4);
}

/* Responsive */
@media (max-width: 768px) {
    .enquire-float-btn {
        padding: 12px 8px;
    }
    
    .enquire-text {
        font-size: 12px;
    }
    
    .callback-panel {
        width: 100%;
        right: -100%;
        top: auto;
        bottom: 0;
        transform: none;
        border-radius: 20px 20px 0 0;
        max-height: 80vh;
        overflow-y: auto;
    }
    
    .callback-panel.active {
        right: 0;
    }
}
</style>

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

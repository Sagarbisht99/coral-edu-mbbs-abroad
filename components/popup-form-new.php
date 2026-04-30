<!-- Premium Global Popup Form Component -->
<div id="globalPopupModal"
    style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); z-index:10000; align-items:center; justify-content:center; backdrop-filter:blur(5px); font-family: 'Inter', -apple-system, sans-serif;">
    <div
        style="position:relative; background:linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); border-radius:24px; padding:0; width:90%; max-width:520px; box-shadow:0 30px 60px rgba(0,0,0,0.4), 0 0 0 1px rgba(74,144,226,0.1); overflow:hidden; font-family: 'Poppins', sans-serif;">

        <!-- Premium Header -->
        <div
            style="background:linear-gradient(135deg, #1e3a5f 0%, #0a1628 100%); padding:35px 40px 25px; text-align:center; position:relative; font-family: 'Poppins', sans-serif;">
            <div onclick="closeGlobalPopup()"
                style="position:absolute; top:15px; right:15px; width:40px; height:40px; background:rgba(255,255,255,0.2); border:1px solid rgba(255,255,255,0.3); border-radius:50%; display:flex; align-items:center; justify-content:center; cursor:pointer; color:#fff; font-size:18px; transition:all 0.3s ease; font-family: 'Poppins', sans-serif;">
                ✕
            </div>
            <div
                style="color:#4A90E2; font-size:13px; font-weight:700; text-transform:uppercase; letter-spacing:1.5px; margin-bottom:10px; opacity:0.95; font-family: 'Poppins', sans-serif;">
                Premium Consultation</div>
            <h3 style="color:#fff; font-size:30px; font-weight:700; margin:0; line-height:1.2; font-family: 'Poppins', sans-serif;">Start Your MBBS Abroad Journey
            </h3>
            <p style="color:rgba(255,255,255,0.95); font-size:15px; margin:10px 0 0; font-weight:500; font-family: 'Poppins', sans-serif;">Get expert guidance from Coral Educational Services
                counsellors</p>
        </div>

        <!-- YOUR WORKING FORM - EXACTLY AS IS, NOT MODIFIED -->
        <form style="padding:40px; width:100%; font-family: 'Poppins', sans-serif;" action="submit-form.php" method="POST">
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom:25px;">
                <!-- Left Side Fields -->
                <div>
                    <input type="text" name="name" placeholder="Full Name" required
                        style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e5e7eb; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; transition:all 0.3s ease; box-sizing:border-box; font-family: 'Poppins', sans-serif;">
                    <div style="margin-top:20px;">
                        <input type="email" name="email" placeholder="Email" required
                            style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e5e7eb; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; transition:all 0.3s ease; box-sizing:border-box; font-family: 'Poppins', sans-serif;">
                    </div>
                    <div style="margin-top:20px;">
                        <input type="tel" name="phone" placeholder="Mobile" required
                            style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e5e7eb; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; transition:all 0.3s ease; box-sizing:border-box; font-family: 'Poppins', sans-serif;">
                    </div>
                </div>

                <!-- Right Side Fields -->
                <div>
                    <input type="text" name="city" placeholder="City"
                        style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e5e7eb; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; transition:all 0.3s ease; box-sizing:border-box; font-family: 'Poppins', sans-serif;">
                    <div style="margin-top:20px;">
                        <select name="program" id="programSelect" required
                            style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e5e7eb; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; cursor:pointer; transition:all 0.3s ease; box-sizing:border-box; font-family: 'Poppins', sans-serif;">
                            <option value="">Select Program</option>
                            <option value="mbbs">MBBS</option>
                            <option value="bds">BDS</option>
                            <option value="md">MD/MS</option>
                        </select>
                    </div>
                    <div style="margin-top:20px;">
                        <select name="specialization" id="specializationSelect" required
                            style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e5e7eb; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; cursor:pointer; transition:all 0.3s ease; box-sizing:border-box; font-family: 'Poppins', sans-serif;">
                            <option value="">Select Specialization</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Premium Submit Button -->
            <button type="submit"
                style="width:100%; padding:18px; background:linear-gradient(135deg, #1e3a5f 0%, #0a1628 100%); border:none; border-radius:14px; color:#fff; font-size:16px; font-weight:700; cursor:pointer; margin-top:15px; transition:all 0.3s ease; text-transform:uppercase; letter-spacing:1.2px; box-shadow:0 8px 20px rgba(10,22,40,0.3); position:relative; overflow:hidden; font-family: 'Poppins', sans-serif;">
                <span style="position:relative; z-index:1; font-family: 'Poppins', sans-serif;">Request Call Back</span>
            </button>

            <!-- Trust Badge -->
            <div style="text-align:center; margin-top:25px; padding-top:20px; border-top:1px solid #e9ecef; font-family: 'Poppins', sans-serif;">
                <div
                    style="display:flex; align-items:center; justify-content:center; gap:8px; color:#6c757d; font-size:13px; font-weight:500; font-family: 'Poppins', sans-serif;">
                    <span>🔒</span>
                    <span>Your information is 100% secure & confidential</span>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    /* Popup Styles - Only visual enhancements, doesn't break functionality */
    #globalPopupModal input:focus,
    #globalPopupModal select:focus {
        border-color: #4A90E2 !important;
        box-shadow: 0 0 0 4px rgba(74, 144, 226, 0.15) !important;
        transform: translateY(-1px) !important;
    }

    #globalPopupModal button:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 12px 25px rgba(30, 58, 95, 0.4) !important;
    }

    #globalPopupModal button:active {
        transform: translateY(0) !important;
    }

    /* Close button hover */
    #globalPopupModal > div > div:first-child div:first-child:hover {
        background: rgba(255, 255, 255, 0.3) !important;
        transform: rotate(90deg) !important;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        #globalPopupModal > div {
            width: 95% !important;
            max-width: none !important;
            margin: 20px !important;
            border-radius: 20px !important;
        }

        #globalPopupModal form {
            padding: 30px 25px !important;
        }

        #globalPopupModal form > div:first-child {
            grid-template-columns: 1fr !important;
            gap: 15px !important;
        }

        #globalPopupModal > div > div:first-child {
            padding: 25px 30px 20px !important;
        }

        #globalPopupModal > div > div:first-child h3 {
            font-size: 24px !important;
        }

        #globalPopupModal > div > div:first-child p {
            font-size: 14px !important;
        }

        #globalPopupModal input,
        #globalPopupModal select {
            padding: 14px 16px !important;
            font-size: 14px !important;
        }

        #globalPopupModal button {
            padding: 16px !important;
            font-size: 15px !important;
        }
    }

    @media (max-width: 576px) {
        #globalPopupModal > div {
            width: 98% !important;
            margin: 10px !important;
            border-radius: 16px !important;
        }

        #globalPopupModal form {
            padding: 25px 20px !important;
        }

        #globalPopupModal input,
        #globalPopupModal select {
            padding: 12px 14px !important;
            font-size: 14px !important;
        }

        #globalPopupModal button {
            padding: 14px !important;
            font-size: 14px !important;
        }

        #globalPopupModal > div > div:first-child {
            padding: 20px 25px 15px !important;
        }

        #globalPopupModal > div > div:first-child h3 {
            font-size: 22px !important;
        }

        #globalPopupModal > div > div:first-child p {
            font-size: 13px !important;
        }

        #globalPopupModal > div > div:first-child div:first-child {
            width: 35px !important;
            height: 35px !important;
            font-size: 16px !important;
            top: 10px !important;
            right: 10px !important;
        }
    }
</style>

<script>
    // Specialization data for dynamic dropdown
    const specializationData = {
        mbbs: [
            { value: 'general_medicine', text: 'MBBS in General Medicine' },
            { value: 'surgery', text: 'MBBS in Surgery' },
            { value: 'pediatrics', text: 'MBBS in Pediatrics' },
            { value: 'cardiology', text: 'MBBS in Cardiology' }
        ],
        bds: [
            { value: 'oral_surgery', text: 'BDS in Oral Surgery' },
            { value: 'orthodontics', text: 'BDS in Orthodontics' },
            { value: 'periodontics', text: 'BDS in Periodontics' },
            { value: 'prosthodontics', text: 'BDS in Prosthodontics' }
        ],
        md: [
            { value: 'md_general', text: 'MD in General Medicine' },
            { value: 'ms_surgery', text: 'MS in General Surgery' },
            { value: 'md_peds', text: 'MD in Pediatrics' },
            { value: 'ms_ortho', text: 'MS in Orthopedics' }
        ]
    };

    // Update specializations based on program selection
    function updateSpecializations() {
        const programSelect = document.getElementById('programSelect');
        const specializationSelect = document.getElementById('specializationSelect');
        
        if (!programSelect || !specializationSelect) return;
        
        const selectedProgram = programSelect.value;
        specializationSelect.innerHTML = '<option value="">Select Specialization</option>';

        if (selectedProgram && specializationData[selectedProgram]) {
            specializationData[selectedProgram].forEach(spec => {
                const option = document.createElement('option');
                option.value = spec.value;
                option.textContent = spec.text;
                specializationSelect.appendChild(option);
            });
        }
    }

    // Open popup
    function openGlobalPopup() {
        const popup = document.getElementById('globalPopupModal');
        if (popup) {
            popup.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
    }

    // Close popup
    function closeGlobalPopup() {
        const popup = document.getElementById('globalPopupModal');
        if (popup) {
            popup.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeGlobalPopup();
        }
    });

    // Close when clicking outside
    const modal = document.getElementById('globalPopupModal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeGlobalPopup();
            }
        });
    }

    // Initialize specialization dropdown
    document.addEventListener('DOMContentLoaded', function() {
        const programSelect = document.getElementById('programSelect');
        if (programSelect) {
            programSelect.addEventListener('change', updateSpecializations);
        }
        
        // Auto open popup after 6 seconds (remove if not needed)
        setTimeout(function() {
            openGlobalPopup();
        }, 6000);
    });
</script>
<!-- Premium Global Popup Form Component -->
<div id="globalPopupModal">
    <div>

        <!-- Premium Header -->
        <div>
            <div onclick="closeGlobalPopup()">
                ✕
            </div>
            <div>
                Premium Consultation</div>
            <h3>Start Your MBBS Abroad
            </h3>
            <p>Get expert guidance from Coral Educational Services
                counsellors</p>
        </div>

        <!-- YOUR WORKING FORM - EXACTLY AS IS, NOT MODIFIED -->
        <form action="submit-form.php" method="POST">
            <div>
                <!-- Left Side Fields -->
                <div>
                    <input type="text" name="name" placeholder="Full Name" required>
                    <div>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="tel" name="phone" placeholder="Mobile" required>
                    </div>
                </div>

                <!-- Right Side Fields -->
                <div>
                    <input type="text" name="city" placeholder="City">
                    <div>
                        <select name="program" id="programSelect" required>
                            <option value="">Select Program</option>
                            <option value="mbbs">MBBS</option>
                            <option value="bds">BDS</option>
                            <option value="md">MD/MS</option>
                        </select>
                    </div>
                    <div>
                        <select name="specialization" id="specializationSelect" required>
                            <option value="">Select Specialization</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Premium Submit Button -->
            <button type="submit">
                <span>Request Call Back</span>
            </button>

            <!-- Trust Badge -->
            <div>
                <div>
                    <span>🔒</span>
                    <span>Your information is 100% secure & confidential</span>
                </div>
            </div>
        </form>
    </div>
</div>


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
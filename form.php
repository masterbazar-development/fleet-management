<?php include('components/header.php');
include('components/navbar.php');
?>


<div class="container mt-64">
    <form id="form" method="post" action="sendEmail.php">

        <div id="step1">
            <!-- Step 1: First Name, Last Name, Title -->
            <h2 class="mb-4 text-[#253c6a] text-2xl md:text-4xl lg:text-5xl font-semibold">Get a free demo of our platform and device!</h2>
            <h3 class="mb-6 text-[#253c6a] text-lg md:text-xl lg:text-3xl font-semibold">To get started, tell us more about you.</h3>
            <div class="form-group grid mb-4">
                <input type="text" id="firstName" name="firstName" required>
                <label for="firstName">First Name</label>
            </div>
            <div class="form-group grid mb-4">
                <input type="text" id="lastName" name="lastName" required>
                <label for="lastName">Last Name</label>
            </div>
            <div class="form-group grid  mb-4">
                <select id="title" name="title" required>
                    <option value="">Select Title</option>
                    <option value="manager">Manager</option>
                    <option value="engineer">Engineer</option>
                    <option value="analyst">Analyst</option>
                </select>
                <label for="title">Title</label>
            </div>
        </div>

        <div id="step2" style="display: none;">
        <h2 class="mb-4 text-[#253c6a] text-2xl md:text-4xl lg:text-5xl font-semibold">We personalize our demos to fit your company’s needs.</h2>
            <h3 class="mb-6 text-[#253c6a] text-lg md:text-xl lg:text-3xl font-semibold">Could you tell us a bit about your company?</h3>
            <!-- Step 2: Company Name, Industry, Question, Fleet Size -->
            <div class="form-group grid mb-4">
                <input type="text" id="companyNameStep2" name="companyNameStep2" required>
                <label for="companyNameStep2">Company Name</label>
            </div>


            <div class="form-group grid mb-4">
            <select id="title" name="title" required>
                    <option value="">Select Title</option>
                    <option value="manager">Manager</option>
                    <option value="engineer">Engineer</option>
                    <option value="analyst">Analyst</option>
                </select>
                <label for="title">Industry</label>
            </div>
            <div class="form-group grid mb-4">
            <select id="title" name="title" required>
                    <option value="">Select Title</option>
                    <option value="manager">Manager</option>
                    <option value="engineer">Engineer</option>
                    <option value="analyst">Analyst</option>
                </select>
                <label for="questionStep2">Does your company operate in multiple regions? (Optional)</label>
            </div>
            <div class="form-group grid mb-4">
                <select id="fleetSizeStep2" name="fleetSizeStep2" required>
                    <option value="">Select Fleet Size</option>
                    <option value="1-50">1-4</option>
                    <option value="51-100">5-49</option>
                    <option value="101-500">50-499</option>
                    <option value="501+">500+</option>
                </select>
                <label for="fleetSizeStep2">Fleet Size</label>
            </div>
        </div>

        <div id="step3" style="display: none;">
        <h2 class="mb-4 text-[#253c6a] text-2xl md:text-4xl lg:text-5xl font-semibold">Our products can assist you in a variety of different ways.</h2>
            <h3 class="mb-6 text-[#253c6a] text-lg md:text-xl lg:text-3xl font-semibold">Select some areas of interest to learn about in your demo.</h3>
            <!-- Step 3: Question with multiple answers -->
            <div class="grid grid-cols-2 gap-8">
            <div class="form-group border-2 p-2">
                <label class="">
                    <input type="checkbox" name="option1" value="Option 1">
                    Option 1
                </label>
            </div>
            <div class="form-group border-2 p-2">
                <label class="">
                    <input type="checkbox" name="option2" value="Option 2">
                    Option 2
                </label>
            </div>
            <div class="form-group border-2 p-2">
                <label class="">
                    <input type="checkbox" name="option3" value="Option 3">
                    Option 3
                </label>
            </div>
            </div>
        </div>

        <div id="step4" style="display: none;">
            <!-- Step 4: Additional Inputs -->
            <h2 class="mb-4 text-[#253c6a] text-2xl md:text-4xl lg:text-5xl font-semibold">We have countless solutions to help your business grow.</h2>
            <h3 class="mb-6 text-[#253c6a] text-lg md:text-xl lg:text-3xl font-semibold">Could you tell us where your company is located?</h3>
            <div class="form-group">
            <select id="fleetSizeStep2" name="fleetSizeStep2" required>
                    <option value="">Select Fleet Size</option>
                    <option value="1-50">1-4</option>
                    <option value="51-100">5-49</option>
                    <option value="101-500">50-499</option>
                    <option value="501+">500+</option>
                </select>
                <label for="fleetSizeStep2">Country</label>
            </div>
            <div class="form-group">
            <input type="text" id="companyNameStep2" name="companyNameStep2" required>
                <label for="fleetSizeStep2">City</label>
            </div>
        </div>

        <div id="step5" style="display: none;">
            <!-- Step 5: Email, Phone Number, How did you hear about us? -->
            <h2 class="mb-4 text-[#253c6a] text-2xl md:text-4xl lg:text-5xl font-semibold">Schedule your demo to hear all about our solutions!</h2>
            <h3 class="mb-6 text-[#253c6a] text-lg md:text-xl lg:text-3xl font-semibold">How can we best get in touch?</h3>
            <div class="form-group">
            <input type="mail" id="companyNameStep2" name="companyNameStep2" required>
                <label for="fleetSizeStep2">Email</label>
            </div>
            <div class="form-group">
            <input type="text" id="companyNameStep2" name="companyNameStep2" required>
                <label for="fleetSizeStep2">Phone</label>
            </div>
            <div class="form-group">
            <input type="text" id="companyNameStep2" name="companyNameStep2" required>
                <label for="fleetSizeStep2">How did you hear about us?</label>
            </div>
        </div>

        <div class="button-group flex justify-between">
            <button type="button" id="prevBtn" style="display: none;">Return to previous</button>
            <button type="button" id="nextBtn" class="px-3 py-2 bg-blue-500 text-white">Continue</button>
            <button type="submit" id="submitBtn" style="display: none;">Submit</button>
        </div>
    </form>
    <div class="progress">
        <div class="progress-bar" id="progressBar" style="width: 0;"></div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('form');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const progressBar = document.getElementById('progressBar');
        const steps = [
            document.getElementById('step1'),
            document.getElementById('step2'),
            document.getElementById('step3'),
            document.getElementById('step4'),
            document.getElementById('step5')
        ];
        const totalSteps = steps.length;
        let currentStep = 0;

        nextBtn.addEventListener('click', function() {
            if (validateInputs()) {
                steps[currentStep].style.display = 'none';
                currentStep++;
                steps[currentStep].style.display = 'block';
                prevBtn.style.display = 'block';
                if (currentStep === totalSteps - 1) {
                    nextBtn.style.display = 'none';
                    document.getElementById('submitBtn').style.display = 'block';
                }
                updateProgressBar();
            }
        });

        prevBtn.addEventListener('click', function() {
            steps[currentStep].style.display = 'none';
            currentStep--;
            steps[currentStep].style.display = 'block';
            nextBtn.style.display = 'block';
            document.getElementById('submitBtn').style.display = 'none';
            if (currentStep === 0) {
                prevBtn.style.display = 'none';
            }
            updateProgressBar();
        });

        function validateInputs() {
            const currentStepInputs = steps[currentStep].querySelectorAll('input, select');
            for (const input of currentStepInputs) {
                if (input.required && input.value.trim() === '') {
                    return false;
                }
            }
            return true;
        }

        function updateProgressBar() {
            const progress = ((currentStep + 1) / totalSteps) * 100;
            progressBar.style.width = `${progress}%`;
        }
    });
</script>

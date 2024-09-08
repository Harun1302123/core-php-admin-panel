<?php
// vc/vc_registration_form.php
include_once dirname(__DIR__).'/includes/header.php';
?>


    <!-- Header -->
    <header class="container">
        <div class="page-header text-center">
            <h1>VC Registration</h1>
        </div>
    </header>

    <!-- VC Registration Form -->
    <section class="container">
        <form>
            <!-- VC Firm Name -->
            <div class="form-group">
                <label for="vcFirmName">VC Firm Name</label>
                <input type="text" class="form-control" id="vcFirmName" placeholder="Enter VC Firm Name" required>
            </div>

            <!-- Type of VC (Dropdown) -->
            <div class="form-group">
                <label for="vcType">Type of VC</label>
                <select class="form-control" id="vcType">
                    <!-- Options will be populated from vc_types table based on country -->
                    <option value="">Select VC Type</option>
                </select>
            </div>

            <!-- VC Address -->
            <div class="form-group">
                <label for="vcAddress">VC Address</label>
                <input type="text" class="form-control" id="streetAddress" placeholder="Street Address" required>
                <input type="text" class="form-control" id="city" placeholder="City" required>
                <input type="text" class="form-control" id="state" placeholder="State" required>
                <input type="text" class="form-control" id="zipCode" placeholder="ZIP Code" required>
                <input type="text" class="form-control" id="countryAddress" placeholder="Country" required>
            </div>

            <!-- Representative Details -->
            <div class="form-group">
                <label for="repFirstName">Representative First Name</label>
                <input type="text" class="form-control" id="repFirstName" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
                <label for="repLastName">Representative Last Name</label>
                <input type="text" class="form-control" id="repLastName" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group">
                <label for="repTitle">Representative Title/Position</label>
                <input type="text" class="form-control" id="repTitle" placeholder="Enter Title/Position" required>
            </div>
            <div class="form-group">
                <label for="repPhone">Representative Phone Number</label>
                <input type="tel" class="form-control" id="repPhone" placeholder="Enter Phone Number" required>
            </div>
            <div class="form-group">
                <label for="repEmail">Representative Email Address</label>
                <input type="email" class="form-control" id="repEmail" placeholder="Enter Email Address" required>
            </div>

            <!-- Optional Information -->
            <div class="form-group">
                <label for="website">Website URL (optional)</label>
                <input type="url" class="form-control" id="website" placeholder="Enter Website URL">
            </div>
            <div class="form-group">
                <label for="socialMedia">Social Media Handles (optional)</label>
                <textarea class="form-control" id="socialMedia" rows="3" placeholder="Enter Social Media Handles"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-success">Register VC</button>
            </div>
        </form>
    </section>



<?php include_once dirname(__DIR__).('/includes/footer.php'); ?>



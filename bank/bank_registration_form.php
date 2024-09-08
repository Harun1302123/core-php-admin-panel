<?php
// bank/bank_registration_form.php
include_once dirname(__DIR__).'/includes/header.php';
?>

<!-- Header -->
<header class="container">
    <div class="page-header text-center">
        <h1>Bank Registration</h1>
    </div>
</header>

<!-- Bank Registration Form -->
<section class="container">
    <form>
        <!-- Bank Name -->
        <div class="form-group">
            <label for="bankName">Bank Name</label>
            <input type="text" class="form-control" id="bankName" placeholder="Enter Bank Name" required>
        </div>

        <!-- Type of Bank (Dropdown) -->
        <div class="form-group">
            <label for="bankType">Type of Bank</label>
            <select class="form-control" id="bankType">
                <!-- Options will be populated from bank_types table based on country -->
                <option value="">Select Bank Type</option>
            </select>
        </div>

        <!-- Country (Dropdown) -->
        <div class="form-group">
            <label for="country">Country</label>
            <select class="form-control" id="country">
                <option value="">Select Country</option>
            </select>
        </div>

        <!-- Bank Address -->
        <div class="form-group">
            <label for="bankAddress">Bank Address</label>
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

        <!-- Regulatory Authority Document Upload -->
        <div class="form-group">
            <label for="regulatoryDoc">Upload Regulatory Authority Document (optional)</label>
            <input type="file" class="form-control" id="regulatoryDoc">
        </div>

        <!-- License Number (optional) -->
        <div class="form-group">
            <label for="licenseNumber">License Number (optional)</label>
            <input type="text" class="form-control" id="licenseNumber" placeholder="Enter License Number">
        </div>

        <!-- Website URL (optional) -->
        <div class="form-group">
            <label for="website">Website URL (optional)</label>
            <input type="url" class="form-control" id="website" placeholder="Enter Website URL">
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-success">Register Bank</button>
        </div>
    </form>
</section>


<?php include_once dirname(__DIR__).('/includes/footer.php'); ?>



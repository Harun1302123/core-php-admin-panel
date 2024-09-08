<?php
// institutional_investor/registration_form.php
include_once dirname(__DIR__).'/includes/header.php';
?>

    <!-- Header -->
    <header class="container">
        <div class="page-header text-center">
            <h1>Institutional Investor Registration</h1>
        </div>
    </header>

    <!-- Institutional Investor Registration Form -->
    <section class="container">
        <form>
            <!-- Institution Name -->
            <div class="form-group">
                <label for="institutionName">Institution Name</label>
                <input type="text" class="form-control" id="institutionName" placeholder="Enter Institution Name (e.g., Pension Fund, Endowment)" required>
            </div>

            <!-- Type of Institution (Dropdown) -->
            <div class="form-group">
                <label for="institutionType">Type of Institution</label>
                <select class="form-control" id="institutionType">
                    <!-- Options will be populated from institution_types table based on country -->
                    <option value="">Select Type of Institution</option>
                </select>
            </div>

            <!-- Institution Address -->
            <div class="form-group">
                <label for="institutionAddress">Institution Address</label>
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
                <button type="submit" class="btn btn-success">Register Institution</button>
            </div>
        </form>
    </section>



<?php include_once dirname(__DIR__).('/includes/footer.php'); ?>



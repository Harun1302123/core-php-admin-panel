<?php
// business/registration_form.php
include_once dirname(__DIR__).'/includes/header.php';
?>
<!-- Header -->
<header class="container">
    <div class="page-header text-center">
        <h1>Business Registration</h1>
    </div>
</header>

<!-- Business Registration Form -->
<section class="container">
    <form>
        <!-- Business Name -->
        <div class="form-group">
            <label for="businessName">Business Name</label>
            <input type="text" class="form-control" id="businessName" placeholder="Enter Business Name" required>
        </div>

        <!-- Type of Business (Dropdown) -->
        <div class="form-group">
            <label for="businessType">Type of Business</label>
            <select class="form-control" id="businessType">
                <!-- Options will be populated from business_types table based on the selected country -->
                <option value="">Select Business Type</option>
            </select>
        </div>

        <!-- Country (Dropdown) -->
        <div class="form-group">
            <label for="country">Country</label>
            <select class="form-control" id="country">
                <option value="">Select Country</option>
            </select>
        </div>

        <!-- State of Incorporation -->
        <div class="form-group">
            <label for="stateIncorporation">State of Incorporation</label>
            <input type="text" class="form-control" id="stateIncorporation" placeholder="Enter State of Incorporation" required>
        </div>

        <!-- Year of Incorporation -->
        <div class="form-group">
            <label for="yearIncorporation">Year of Incorporation</label>
            <input type="number" class="form-control" id="yearIncorporation" placeholder="Enter Year of Incorporation" required>
        </div>

        <!-- Business Address -->
        <div class="form-group">
            <label for="businessAddress">Business Address</label>
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

        <!-- Optional Fields -->
        <div class="form-group">
            <label for="businessPhone">Business Phone Number (optional)</label>
            <input type="tel" class="form-control" id="businessPhone" placeholder="Enter Business Phone Number">
        </div>
        <div class="form-group">
            <label for="businessEmail">Business Email Address (optional)</label>
            <input type="email" class="form-control" id="businessEmail" placeholder="Enter Business Email Address">
        </div>
        <div class="form-group">
            <label for="taxId">Tax Identification Number (TIN) or Employer Identification Number (EIN) (optional)</label>
            <input type="text" class="form-control" id="taxId" placeholder="Enter TIN or EIN">
        </div>

        <!-- Proof of Business Registration Upload -->
        <div class="form-group">
            <label for="businessProof">Upload Proof of Business Registration (optional)</label>
            <input type="file" class="form-control" id="businessProof">
        </div>

        <!-- Optional Business Information -->
        <div class="form-group">
            <label for="numEmployees">Number of Employees (optional)</label>
            <input type="number" class="form-control" id="numEmployees" placeholder="Enter Number of Employees">
        </div>
        <div class="form-group">
            <label for="annualRevenue">Annual Revenue (optional)</label>
            <input type="text" class="form-control" id="annualRevenue" placeholder="Enter Annual Revenue">
        </div>
        <div class="form-group">
            <label for="businessDescription">Business Description (optional)</label>
            <textarea class="form-control" id="businessDescription" rows="3" placeholder="Enter Business Description"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-success">Register Business</button>
        </div>
    </form>
</section>

<?php include_once dirname(__DIR__).('/includes/footer.php'); ?>

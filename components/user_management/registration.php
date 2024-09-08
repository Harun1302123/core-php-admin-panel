<?php
// components/user_management/registration.php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<!-- Header -->
<header class="container">
    <div class="page-header text-center">
        <h1>Register</h1>
    </div>
</header>

<!-- Main Content: User Role Selection -->
<section class="container">
    <div class="well">
        <h3 class="text-center">Please select your user type to proceed with registration:</h3>
        <form>
            <!-- Radio Buttons for User Roles -->
            <div class="form-group">
                <label class="radio-inline">
                    <input type="radio" name="userRole" value="business"> Business
                </label>
                <label class="radio-inline">
                    <input type="radio" name="userRole" value="bank"> Bank
                </label>
                <label class="radio-inline">
                    <input type="radio" name="userRole" value="vc"> VC (Venture Capital)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="userRole" value="investor"> Institutional Investor
                </label>
            </div>
            
            <!-- Dropdown Menu Option for User Roles (Optional) -->
            <!--
            <div class="form-group">
                <label for="userRoleSelect">Select your user type:</label>
                <select class="form-control" id="userRoleSelect">
                    <option value="business">Business</option>
                    <option value="bank">Bank</option>
                    <option value="vc">VC (Venture Capital)</option>
                    <option value="investor">Institutional Investor</option>
                </select>
            </div>
            -->

            <!-- Continue Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Continue</button>
            </div>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="container text-center">
    <hr>
    <ul class="list-inline">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
    </ul>
</footer>

<?php include_once $_SERVER['DOCUMENT_ROOT'].('/includes/footer.php'); ?>


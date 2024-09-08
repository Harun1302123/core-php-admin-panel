<?php include_once 'includes/header.php'; ?>

<div id="page-" class="col-md-4 col-md-offset-4">
	
</div>

<div class="container">
        <header class="text-center">
            <h1>Register</h1>
        </header>
        <form action="/submit_registration" method="post">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="checkbox-group">
                <label>User Role Selection</label>
                <div class="checkbox">
                    <label><input type="checkbox" name="role[]" value="business"> Business</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="role[]" value="bank"> Bank</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="role[]" value="vc"> VC</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="role[]" value="institutional_investor"> Institutional Investor</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <footer>
            <p>
                <a href="/privacy-policy">Privacy Policy</a> | 
                <a href="/terms-of-use">Terms of Use</a>
            </p>
        </footer>
    </div>

<?php include_once 'includes/footer.php'; ?>

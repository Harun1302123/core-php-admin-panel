<?php
// bank/bid_submission.php
include_once dirname(__DIR__).'/includes/header.php';
?>

<!-- Header -->
<header class="container">
    <div class="page-header text-center">
        <h1>Bidding Interface</h1>
    </div>
</header>

<!-- Active Funding Requests Section -->
<section class="container">
    <h2>Active Funding Requests</h2>
    <div class="panel-group" id="funding-requests">
        <!-- Example of a funding request -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Request 1: <strong>Project ABC</strong></h3>
            </div>
            <div class="panel-body">
                <p><strong>Details:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <form>
                    <div class="form-group">
                        <label for="bid-amount-1">Enter your bid amount:</label>
                        <input type="number" class="form-control" id="bid-amount-1" placeholder="Enter amount">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Bid</button>
                </form>
            </div>
        </div>

        <!-- Another funding request -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Request 2: <strong>Project XYZ</strong></h3>
            </div>
            <div class="panel-body">
                <p><strong>Details:</strong> Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                <form>
                    <div class="form-group">
                        <label for="bid-amount-2">Enter your bid amount:</label>
                        <input type="number" class="form-control" id="bid-amount-2" placeholder="Enter amount">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Bid</button>
                </form>
            </div>
        </div>

        <!-- Add more requests as needed -->
    </div>
</section>

<!-- Footer Section: Summary of Tips for Bidding -->
<footer class="container text-center">
    <hr>
    <h3>Summary of Tips for Bidding</h3>
    <ul class="list-unstyled">
        <li>Tip 1: Make sure your bid is competitive.</li>
        <li>Tip 2: Review the project details carefully before bidding.</li>
        <li>Tip 3: Only bid on projects that match your expertise.</li>
    </ul>
</footer>

    

<?php include_once dirname(__DIR__).('/includes/footer.php'); ?>



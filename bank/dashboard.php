<?php
// bank/dashboard.php
include_once dirname(__DIR__).'/includes/header.php';
?>

    <style>
        body {
            padding-top: 50px;
        }
        
        .menubar .nav {
            margin-bottom: 20px;
        }

        .menubar {
            background: #f8f8f8;
            height: 100%;
        }

        .menubar a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }

        .content {
            padding: 20px;
        }
        .section-header {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .document-list {
            margin-top: 20px;
        }
    </style>

    <!-- Header -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Welcome [Bank Name]</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3 menubar">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#fundingRequests" data-toggle="tab">Review Funding Requests</a></li>
                    <li><a href="#manageOffers" data-toggle="tab">Manage Offers</a></li>
                    <li><a href="#notifications" data-toggle="tab">Notifications</a></li>
                    <li><a href="#accountSettings" data-toggle="tab">Account Settings</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 content">
                <div class="tab-content">
                    <!-- Active Offers List -->
                    <div class="tab-pane fade in active" id="manageOffers">
                        <h2 class="section-header">Active Offers List</h2>
                        <!-- Replace with dynamic content -->
                        <p>List of active offers based on bids.</p>
                    </div>

                    <!-- Funding Requests Under Review -->
                    <div class="tab-pane fade" id="fundingRequests">
                        <h2 class="section-header">Funding Requests Under Review</h2>
                        <!-- Replace with dynamic content -->
                        <p>List of funding requests linked to funding_requests table.</p>
                    </div>

                    <!-- Notifications -->
                    <div class="tab-pane fade" id="notifications">
                        <h2 class="section-header">Notifications</h2>
                        <!-- Replace with dynamic content -->
                        <p>e.g., New bids, Updates.</p>
                    </div>

                    <!-- Summary of Funding Trends -->
                    <div class="tab-pane fade" id="summaryTrends">
                        <h2 class="section-header">Summary of Funding Trends</h2>
                        <!-- Replace with dynamic content -->
                        <p>Charts or graphs showing offer statistics, bid acceptance rates, etc.</p>
                    </div>

                    <!-- Documents -->
                    <div class="tab-pane fade" id="documents">
                        <h2 class="section-header">Documents</h2>
                        <div class="document-list">
                            <!-- Replace with dynamic content -->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#">Document 1</a>
                                    <span class="pull-right">
                                        <a href="#" class="btn btn-default btn-xs">View</a>
                                        <a href="#" class="btn btn-default btn-xs">Download</a>
                                        <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                    </span>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Document 2</a>
                                    <span class="pull-right">
                                        <a href="#" class="btn btn-default btn-xs">View</a>
                                        <a href="#" class="btn btn-default btn-xs">Download</a>
                                        <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-primary">Upload New Document</button>
                    </div>

                    <!-- Analytics (Optional) -->
                    <div class="tab-pane fade" id="analytics">
                        <h2 class="section-header">Analytics</h2>
                        <!-- Replace with dynamic content -->
                        <p>Charts or graphs showing offer statistics, bid acceptance rates, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once dirname(__DIR__).('/includes/footer.php'); ?>




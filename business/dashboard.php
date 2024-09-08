<?php
// business/dashboard.php
include_once dirname(__DIR__).'/includes/header.php';
?>

<style>
    body {
        padding-top: 50px; /* Adjust to accommodate the fixed header */
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
    .menubar a:hover, .active {
        background: #ddd;
        color: #333;
    }
    .main-content {
        padding: 15px;
    }
    .panel-heading {
        background-color: #f5f5f5;
        border-bottom: 1px solid #ddd;
    }
    .panel-title {
        margin: 0;
    }
    .panel-body {
        padding: 15px;
    }
    .notification {
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 15px;
    }
    .notification-title {
        font-weight: bold;
    }
    footer {
        margin-top: 20px;
        text-align: center;
    }
</style>

<header class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Welcome [Business Name]</a>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="menubar">
                <h4>Menu</h4>
                <a href="#">Create Funding Request</a>
                <a href="#" class="active">View Bids</a>
                <a href="#">Notifications</a>
                <a href="#">Account Settings</a>
            </div>
        </div>
        <div class="col-md-9 main-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Active Funding Requests</h3>
                        </div>
                        <div class="panel-body">
                            <!-- Active Funding Requests List -->
                            <ul class="list-group">
                                <li class="list-group-item">Request 1</li>
                                <li class="list-group-item">Request 2</li>
                                <li class="list-group-item">Request 3</li>
                                <!-- Add more items as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Past Bids</h3>
                        </div>
                        <div class="panel-body">
                            <!-- Past Bids List -->
                            <ul class="list-group">
                                <li class="list-group-item">Bid 1</li>
                                <li class="list-group-item">Bid 2</li>
                                <li class="list-group-item">Bid 3</li>
                                <!-- Add more items as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">New Bids Received</h3>
                        </div>
                        <div class="panel-body">
                            <!-- Notification Area -->
                            <div class="notification">
                                <div class="notification-title">Notification 1</div>
                                <div class="notification-body">Details about notification 1.</div>
                            </div>
                            <div class="notification">
                                <div class="notification-title">Notification 2</div>
                                <div class="notification-body">Details about notification 2.</div>
                            </div>
                            <!-- Add more notifications as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include_once dirname(__DIR__).('/includes/footer.php'); ?>


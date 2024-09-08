<?php
// index.php

// If User has already logged in, redirect to dashboard page.
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == TRUE)
{
	header('Location:admin/dashboard.php');
}else{
	require_once 'components/user_management/registration.php'; // load file
	// require_once 'components/user_management/login.php'; // load file
	// header('Location:components/user_management/login.php'); // redirect url
}

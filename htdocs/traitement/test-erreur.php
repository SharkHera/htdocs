<?
require_once("database.php");

// Start a new session or resume an existing one
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // User is already logged in, redirect to personalized page
    header('Location: TopSons.php');
    exit;
}

// Validate user credentials and log in the user
$user_id =  "SELECT id_user FROM user WHERE user_name = :user_name";
var_dump($user_id)   // get the user id from the database
if ($user_id) {
    // User is logged in, set session variable for user id
    $_SESSION['user_id'] = $user_id;
    // Redirect to personalized page
    header('Location: TopSons.php');
    exit;
} else {
    // Invalid credentials, display error message
    echo "Invalid username or password";
}


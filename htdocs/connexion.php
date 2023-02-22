<?php

require_once('traitement/database.php');

$name_user_conn = $_POST['connection_user_name'];





/* $request = $conn->query("SELECT id_user FROM user WHERE user_name = '$name_user_conn'");
$name_user = $request->fetchAll();
var_dump($name_user); */


$request = "SELECT id_user FROM user WHERE user_name = '$name_user_conn'";
$result = $conn->query($request);

if ($result->rowCount() > 0) {
    // User found, retrieve the ID
    $row = $result->fetchColumn();
    $user_id = $row['0'];
} else {
    // User not found
    $user_id = null;
}


echo "Bonjour $name_user_conn";
echo "<input type='submit' name'id_user' value='$user_id'";
<?php
$user_id = $_GET['user']['id'] ?? 'not set';
$name = $_GET['user']['name'] ?? 'not set';
$email = $_GET['user']['email'] ?? 'not set';
$token = $_GET['token'] ?? 'not set'; // Use 'not set' if 'token' is not provided

// Use the data
echo 'User ID: ' . htmlspecialchars($user_id) . '<br>';
echo 'Name: ' . htmlspecialchars($name) . '<br>';
echo 'Email: ' . htmlspecialchars($email) . '<br>';
echo 'token  '. htmlspecialchars($token) . '<br>';
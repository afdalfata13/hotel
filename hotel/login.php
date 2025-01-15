<?php
// Example credentials
$credentials = [
    'admin' => ['password' => 'admin123', 'role' => 'admin'],
    'user' => ['password' => 'user123', 'role' => 'user']
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($credentials[$username]) && $credentials[$username]['password'] === $password) {
        $role = $credentials[$username]['role'];

        if ($role === 'admin') {
            header('Location: admin_dashboard.php'); // Redirect to admin dashboard
        } elseif ($role === 'user') {
            header('Location: user_dashboard.php'); // Redirect to user dashboard
        }
        exit;
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>
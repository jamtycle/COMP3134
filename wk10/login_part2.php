<style>
    input[type="text"] {
        border: 0
    }

    input[type="text"]:hover {
        border: 2px solid red;
    }
</style>

<h1>Weak Password</h1>

<?php
$passwords = ["123456", "123456789", "qwerty", "password", "111111", "12345678", "abc123", "1234567", "password1", "12345"]
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        if (in_array($password, $passwords)) {
            print "<h2>Successfully authenticated</h2>";
            return;
        } else {
            print "<h2>Invalid password</h2>";
        }
    }
} 
?>

<form method="post">
    <label>Password</label>
    <input type="text" name="username">
    <input type="password" name="password">
    <br/>
    <input type="submit">
</form>
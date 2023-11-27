<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Validate form data (add more validation as needed)

    // Prepare the data as a string
    $data = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nPassword: $password\n";

    // Specify the path to your text file
    $file = 'form_data.txt';

    // Open the file in append mode
    $handle = fopen($file, 'a');

    // Write the data to the file
    fwrite($handle, $data . PHP_EOL);

    // Close the file
    fclose($handle);

    // Redirect or show a thank you message
    header("Location: thank_you.html");
    exit();
}
?>

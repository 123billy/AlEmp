<?php

class Validator {
    public static function validateEmail($email) {
        // Use a regular expression to validate email addresses
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function validatePassword($password) {
        // Password should be at least 8 characters long
        // and contain at least one uppercase letter, one lowercase letter, and one digit
        if (strlen($password) >= 8 &&
            preg_match("/[A-Z]/", $password) &&
            preg_match("/[a-z]/", $password) &&
            preg_match("/[0-9]/", $password)) {
            return true;
        } else {
            return false;
        }
    }

    public static function validateName($name) {
        // Name should only contain letters and spaces
        if (preg_match("/^[a-zA-Z ]+$/", $name)) {
            return true;
        } else {
            return false;
        }
    }

    // Add more validation methods for other input fields as needed
}

// Example usage:
$email = "john@example.com";
$password = "Passw0rd";
$name = "John Doe";

if (Validator::validateEmail($email)) {
    echo "Email is valid.\n";
} else {
    echo "Email is invalid.\n";
}

if (Validator::validatePassword($password)) {
    echo "Password is valid.\n";
} else {
    echo "Password is invalid.\n";
}

if (Validator::validateName($name)) {
    echo "Name is valid.\n";
} else {
    echo "Name is invalid.\n";
}
?>
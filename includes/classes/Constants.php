<?php
class Constants {
    public static $firstNameCharacters = "Your first name must be between 2 and 25 characters";
    public static $lastNameCharacters = "Your last name must be between 2 and 25 characters";
    public static $usernameCharacters = "Your username must be between 5 and 25 characters";
    public static $usernameTaken = "This username already exists";
    public static $emailsDoNotMatch = "Your email do not match";
    public static $emailInvalid = "Please enter a valid email address";
    public static $emailTaken = "This email already exists";
    public static $passwordsDoNotMatch = "Your password do not match";
    public static $passwordNotAlphanumeric = "Your password can only contain numbers and letters";
    public static $passwordLength = "Your password must be between 3 and 30 characters";

    public static $loginFailed = "Your username or password was incorrect";
    public static $passwordIncorrect = "Incorrect password";
}
?>
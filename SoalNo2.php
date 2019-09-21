<?php 
function is_username_valid($username)
{
    return preg_match('/[a-z]{5,9}$/', $username);
}

function is_password_valid($password)
{
    return preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@$%^&*._-])[a-zA-Z0-9!@$%^&*._-]{10}$/', $password);
}

if (is_username_valid("rahman") && is_password_valid("k!t4Adalah")) {
    echo "valid";
} else {
    echo "Username Is Invalid";
}
?>
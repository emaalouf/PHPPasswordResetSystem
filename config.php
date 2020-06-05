<?php

//define the products, company, addresses, website and locations


define("PRODUCT_NAME", "[Product Name]"); // The name of your product (eg. Gmail)
define("COMPANY_NAME", "[Company Name, LLC]"); // The name of you company (eg. Google)
define("ADDR_LINE_1", "1234 Street Rd."); // Line 1 of your address
define("ADDR_LINE_2", "Suite 1234"); // Line 2 of your address
define("EMAIL_ID_FROM","webmaster@yoursite.com"); // The email-id of your domain which would be seen in from field
define("RESET_PAGE_LOCATION", "http://yoursite.com/reset.php"); // Link to file on your website where reset.php is stored
define("EMAIL_PAGE_LOCATION", "http://yoursite.com/email.php"); // Link to file on your website where email.php is stored

function sqlf($email)
{
    $sql = "SELECT * FROM users WHERE email='$email'"; // This query selects the user email from 'users' table
    return $sql;

}
function sqlonef($email,$token,$expiry)
{
    $sqlone =  "INSERT INTO forgot_pass (email,token,expiry)VALUE ('$email','$token','$expiry')"; // SQL query to insert a new token request into the table 'forgot_pas'
    return $sqlone;
}

function pass_encrypt($password)
{
    $password = hash('sha512', $password);
    return $password;
}
function sqlresetf($email,$password)
{
    $sqlreset =  "UPDATE users SET pass='$password' WHERE email='$email'"; 
    return $sqlreset;
}
function sqldelf($email,$token)
{
    $sqldel = "DELETE FROM forgot_password WHERE email='$email' AND token='$token'"; // SQL Code to delete the token entry from table once the user resets his password

    return $sqldel;
}
?>

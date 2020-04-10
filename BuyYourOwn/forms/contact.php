<?php
include'connect.php';
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

   if(isset($_POST["submit"]) && $_POST["submit"]!=""){ 
    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

//INSERT QUERY
// INSERT INTO `contact` VALUES (1,'','','','');
if(mysqli_query("INSERT INTO contact VALUES ($name,$email,$subject, $message)")){
    echo "Record inserted successfully";
    $message = "Record inserted successfully";
}} else {
  echo "Error";
    $message = "error while saving data !";
}

?>

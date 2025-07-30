<?php
$email_to = 'sanskarperformances@gmail.com';
$email_subject = 'Join Us Form Submission';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
$full_name = $_POST['full_name'];
$phone_no = $_POST['countrycode'] . ' ' .$_POST['phone'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$services = array();
 if (isset($_POST['guide'])) 
$services[] = 'Guide';
 if (isset($_POST['hotel'])) 
$services[] = 'Hotel Services'; 
if (isset($_POST['tour'])) 
$services[] = 'Tour Services';  
if (isset($_POST['local'])) 
$services[] = 'Local Business';    
$business_description = $_POST['business_description']; 
 $message = "Join Us Form Submission:\n\n";   
$message .= "Full Name: $full_name\n";   
$message .= "Phone No.: $phone_no\n";    
$message .= "Email: $email\n";   
$message .= "Gender: $gender\n"; 
$message .= "Date of Birth: $dob\n";   
$message .= "Address: $address\n";   
$message .= "State: $state\n";  
 $message .= "Services: " . implode(', ', $services) . "\n";   
$message .= "Business Description: 
$business_description\n";    
$headers = "From: noreply@(https://github.com/AshiTomar210/test)\r\n";    
$headers .= "Reply-To: $email\r\n"; mail($email_to, $email_subject, $message, $headers);    
header('Location: index.html');    
exit;}
?>
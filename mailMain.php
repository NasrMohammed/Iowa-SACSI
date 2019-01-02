<?php 
/* set recipient email*/
$recipient = "alsaddigabaker1@gmail.com";
/* receive form inputs */
$firstname = $_post['firstname'];
$lastname =$_post['lastname'];
$emaile = $_post['email'];
$message =$_post['message'];
$youvisited =$_post['$youvisited'];
$headers = "from $email";
$subject = "New Comment From Web From";

/*prepare the message  */
$message ="
Frist Name:$firstname
last Name:$lastname
Email:$email
Message:
$message
Have you visited the Amazement Park before?:$youvisited



";
/* send using mail function  */
mail($recipient,$subject,$message ,$headers);
/*Redirect visitor    */
header('Location:Thanks.html');
exit();


?>
 <?php 
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];



 $email_from = 'diegodevonjour@gmail.com';

 $email_subject = 'New Ofrm Submission';

 $email_body = "User Name: $name.\n".
               "User Name: $visitor_email.\n".
               "Subject: $subject.\".
               "User Message: $message .\n";


 $to = 'delacruzleydan@gmail.com';

 $headers  = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>







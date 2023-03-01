<?php
$pemail=$_POST['em'];
$otp= rand(1000,100000);
$to       =$pemail;
$subject  = 'Verification mail';
$message  = "Hello!
                   To verify your email address please choose the verification code!!!!!<br>
                   <br><b>$otp</b>";
$headers  = 'From: d4u2022@gmail.com' . "\r\n" .
                 'MIME-Version: 1.0' . "\r\n" .
				 'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
{
    echo $otp;
}
    else
    {
        echo "Email sending failed";
    }
    
?>
<<<<<<< HEAD

<?php
$to = 'tanushreewaghmare11@gmail.com';

$subject = 'Testing sendmail.exe';

$message = 'Hi, you just received an email using sendmail!';

$headers = 'From: kshirsagarmansi1302@gmail.com' . "\r\n" .
     'MIME-Version: 1.0' . "\r\n" .
     'Content-type: text/html; charset=utf-8';

if(mail($to, $subject, $message, $headers))
{
echo "Email sent";
}
else
{
echo "Email sending failed";
}
?>

=======

<?php
$to = 'tanushreewaghmare11@gmail.com';

$subject = 'Testing sendmail.exe';

$message = 'Hi, you just received an email using sendmail!';

$headers = 'From: kshirsagarmansi1302@gmail.com' . "\r\n" .
     'MIME-Version: 1.0' . "\r\n" .
     'Content-type: text/html; charset=utf-8';

if(mail($to, $subject, $message, $headers))
{
echo "Email sent";
}
else
{
echo "Email sending failed";
}
?>

>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb

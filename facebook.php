<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "dqutesalam@gmail.com";

mail($recipient, $subject, $message ,$mailheader);
or die("Error!");

echo'

<html>
<head>
<title>done</title>
</head>
<body>
<h1> MESSSAGE SENT </h1>
</body>
</html>
'


?>

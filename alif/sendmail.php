<html>
<body>
<?
    //change this to your email.
    $to = "alifnetpoint@gmail.com";
    $from = "alifnetpoint@gmail.com";
    $subject = $subject;
    $headers  = $headers;
    //$headers .= "Content-type: text/html\r\n"; 
    //begin of HTML message
    mail($to, $subject, $message, $headers);

    echo "Mail send to Alif Net Point.";
?> 
</body>
</html>

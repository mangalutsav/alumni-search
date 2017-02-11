<?php
    $msg = '';
    $to = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $msg = "hi";
        // $msg = "NAME: "  .test_input($_POST['name']  )  ."<br>\n";
        // $msg .= "EMAIL: "  .test_input($_POST['course'])    ."<br>\n";
        // $msg .= "WEBSITE: "  .test_input($_POST['email'])    ."<br>\n"; 
        // $msg .= "COMMENTS: "  .test_input($_POST['comments'])    ."<br>\n";
        $to = test_input($_POST['to']);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $subject = "A new query";   
    $headers  = 'From:  Alumnicell@iitr.ac.in' . "\r\n";
    $headers .= 'Reply-To: Alumnicell@iitr.ac.in' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $msg, $headers);
    if(!$mail->Send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
	exit;
	}
	 echo 'Message has been sent';

?>

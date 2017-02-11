<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
    $msg = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $msg = "NAME: "  .test_input($_POST['name']  )  ."<br>\n";
        $msg .= "EMAIL: "  .test_input($_POST['course'])    ."<br>\n";
        $msg .= "WEBSITE: "  .test_input($_POST['email'])    ."<br>\n"; 
        $msg .= "COMMENTS: "  .test_input($_POST['comments'])    ."<br>\n";
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $subject = "A new query"
    $to = $_POST['Toemail'];
    $headers  = 'From:  Alumnicell@iitr.ac.in' . "\r\n";
    $headers .= 'Reply-To: Alumnicell@iitr.ac.in' . "\r\n" .;
    $headers .= 'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $msg, $headers);
?>
<body>
  <form id="contactForm" action="'<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'" method="POST">
                <fieldset>                      
                    <p>
                        <label for="name" >Name</label>
                        <input name="name"  id="name" type="text"title="Enter your full name" />
                    </p>
                    <p>
                        <label for="course" >course</label>
                        <input name="course"  id="course" type="text"title="Enter your course" />
                    </p>
                    <p>
                        <label for="email" >Email</label>
                        <input name="email"  id="email" type="text" title="Enter your email address" />
                    </p>
                    <p>
                        <label for="comments">Message</label>
                        <textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your Message"></textarea>
                    </p>
                    <button type="submit" name="submit"></button>
                </fieldset>

    </form>
</body>
</html>
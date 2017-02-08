<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form id="contactForm" action="#" method="post">
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
                    <!-- send mail configuration -->
                    <input type="hidden" value=<?php echo $_POST['email']?>" name="to" id="to" />
                    <input type="hidden" value="Email received from Website" name="subject" id="subject" />
                    <input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
                    <!-- ENDS send mail configuration -->

                    <p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
                </fieldset>

    </form>
</body>
</html>
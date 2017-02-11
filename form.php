<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form id="contactForm" action="send-mail.php" method="POST">
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
                    <input type="hidden" value=<?php echo $_POST['semail']?>" name="to" id="to" />
                </fieldset>
                <button type="submit" name="submit"></button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Register page</title>
<link rel="stylesheet" href="style2.css">
<!-- <link rel="stylesheet" href="style1.css"/> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
<div class="signup-form">
    <form action="register_a.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Name" required="required">    	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="country" placeholder="Countrycode" required="required">
        </div>
        <div class="form-group">
        <select id="type" name="type"  >
            <option value="" disabled selected hidden>Select Type...</option>
            <option >Patient</option>
            <option>Doctor</option>
        </select>
        </div>
        <div class="form-group">
            <button type="submit" name="save" >Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
</body>
</html>
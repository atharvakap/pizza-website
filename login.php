<form action="login_check.php" method="post">
        <h2>Login Form</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<input type="submit" class="button" value="Login">
        <p class="ca">New Admin? <a href="register.php">Click here</a></p>
     </form> 
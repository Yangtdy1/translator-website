<?php
include'header.php';
		//connecting to oracle
	if(array_key_exists('create_user', $_POST))
	{
		$username =  trim(strip_tags($_POST['username']));
		$fname =  trim(strip_tags($_POST['firstname']));
		$lname =  trim(strip_tags($_POST['lastname']));
		$password =  trim(strip_tags($_POST['password']));
		$p_num =  trim(strip_tags($_POST['phonenumber']));
		$email =  trim(strip_tags($_POST['email']));
		
		$query="insert into client (client_user, client_pwd,client_fname,client_lname,client_phone,client_email)
							   values
						       ('".$username."', '".$fname."', '".$lname."','".$password."','".$p_num."', '".$email."')";
	
		
			if ($mysqli->query($query) === TRUE) 
			{
				$_SESSION['C_LoggedIn'] = 1;
				$_SESSION["username"]= $username;
				echo "<meta http-equiv='refresh' content='0;user_account.php' />";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		
	
	}
	else
	{
		?>
		
		<ul id="nav-list">
			<li class="dropdown"><a href="index.php" class="dropbtn">Home</a></li>
			<li><a href="find.php">Find Translator</a></li>
	    </ul>
		</div>
		<div class="content-container">
		<form method="post"
			action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
			<fieldset class="box">
				<legend> Sign Up </legend>

			<label > Name: </label></br>
			<input type="text" name="firstname" id="username" placeholder="First" required="required" />
			<input type="text" name="lastname" id="username" placeholder="Last" required="required" /></br>
	
			<label for="Username"> Create a username </label></br>
			<input type="text" name="username" required="required" placeholder="abc123" /></br>
			
			<label > Create a password </label></br>
			<input type="password" name="password" required="required" /></br>
			
			<label > Phone number </label></br>
			<input type="text" name="phonenumber" required="required" /></br>
			
			<label > Email</label></br>
			<input type="text" name="email" required="required" /></br>
			
			<div class="submit">
			<input type="submit"  name="create_user" value="Creat Account" />
            </div>
			</fieldset>
        </form>
	</div>
		<?php
		
	}
	
	
	
	?>
	


</body>
</html>  

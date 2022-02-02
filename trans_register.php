<?php
include'header.php';
	if(array_key_exists('create_user', $_POST))
	{
		$loc_state = trim(strip_tags($_POST['state']));
		$loc_result = $mysqli->query("select loca_id
								      from location l
								      where l.loc_state = '".$loc_state."'");
		
		$row=$loc_result->fetch_assoc();
		$loc_state = $row["loca_id"];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$rate	= $_POST['rate'];
		$p_num  = $_POST['phonenumber'];
		$email = $_POST['email'];
		
		$trans_insert_query= "insert into translator 
		            (loca_id, trans_user, trans_pwd, trans_fname, trans_lname, trans_rate, trans_phone, trans_email)
					values
					('".$loc_state."', '".$username."', '".$password."', '".$fname."', '".$lname."', '".$rate."', '".$p_num."', '".$email."')";

			if ($mysqli->query($trans_insert_query) === TRUE) 
			{
				$_SESSION['T_LoggedIn'] = 1;
				$_SESSION["username"]= $username;
				$_SESSION["password"]=$password;
				echo "<meta http-equiv='refresh' content='0;trans_account.php' />";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		
	
	}	
	else
	{
		
		?> 
		<ul id="nav-list">
			<li class="dropdown"><a href="index.php" class="dropbtn">Home</a></li>
	    </ul>
		</div>
		<div class="content-container">
		<form method="post"
			action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
				<fieldset id="box">
					<legend> Sign up to be a translator </legend>
					<label> NAME: </label> </br>
					<input type="text" name="firstname" id="username" placeholder="First" required="required"/> 
					<input type="text" name="lastname" id="username" placeholder="Last" required="required"/> </br>
					
					<label for="Username"> Create a username </label> </br>
					<input type="text" name="username" required="required" placeholder="enter username"/> </br>
					
					<label> Create a password </label> </br>
					<input type="password" name="password" required="required" /> </br>
					
					<label> Phone number </label> </br>
					<input type="text" name="phonenumber" required="required" /> </br>
					
					<label> Email </label> </br>
					<input type="text" name="email" required="required" /> </br>

					<label> State </label> </br>
					<input type="text" name="state" required="required" /> </br>
					
					<label> Rate </label> </br>
					<input type="rate" name="rate" required="required" />
					
					<div class="submit">
					<input type="submit" name="create_user" value="Log in" />
					
					</fieldset>
					
				</form>
	</div>
					
		<?php
		}
		?>
		
</body>
</html>
		
		
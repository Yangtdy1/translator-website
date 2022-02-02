<?php
include'header.php';
?>
<?php
if((!empty($_SESSION['T_LoggedIn']) && !empty($_SESSION['username']))
   || (!empty($_SESSION['C_LoggedIn']) && !empty($_SESSION['username'])) ) //if user already login , goes here
{
    if(!empty($_SESSION['T_LoggedIn']))
	{?>		
		<ul id="nav-list">
			<caption>Welcome, </caption>
			<li class="dropdown"><a href="trans_account.php" class="dropbtn"><?php echo $_SESSION['username']?></a> 
				<ul class="dropdown-content">
            		    <li><a href="">Manage account</a> </li>
						<li><a href="">My client</a> </li>
						<li><a href="">Setting</a> </li>
						<li><a href="review.php">My review</a> </li>
						<li><a href="signout.php">Signout</a> </li>
				</ul>
			</li>	
			<li><a href="trans_contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</div>

		 <?php
		 content();
		//echo "<meta http-equiv='refresh' content='0;trans_account.php' />";
	}
	else
	{   ?>
		 <ul id="nav-list">
		 <caption>Welcome, </caption>
			<li class="dropdown"><a href="user_account.php" class="dropbtn"><?php echo $_SESSION['username']?></a>
				<ul class="dropdown-content">
					<li><a href="signout.php">Signout</a></li>
				</ul>
			</li>
			<li><a href="find.php">Find Translator</a></li>
			<li><a href="user_contact.php">Contact</a></li>
			<li><a href="user_about.php">About</a></li>
	</ul>
	</div>
	
		 <?php
		 content();
		//echo "<meta http-equiv='refresh' content='0;user_account.php' />";
	}
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{// if you have database user and pwd go here
	$usr = trim(strip_tags(($_POST['username'])));
	$pwd = trim(strip_tags(($_POST['password'])));
	$result = $mysqli->query("select *
							  from translator
	                          where trans_user = '".$usr."'
		                      and
		                            trans_pwd = '".$pwd."'");
		//check if the user is a translator
		if($result->num_rows >0) // if translator account exist
		{        
			$_SESSION['username'] = $usr;
			$_SESSION['password'] = $pwd;
			$_SESSION['T_LoggedIn'] = 1;
			echo "<meta http-equiv='refresh' content='0;trans_account.php' />";

         	exit();
		}
		else //if translator account not exist. try client account.
		{
			$result = $mysqli->query("select *
									  from client
									  where client_user='".$usr."'
										    and
										    client_pwd= '".$pwd."'");
			if($result->num_rows >0) //if client account exist. show them their client account.
			{         
				$_SESSION['username'] = $usr;
				$_SESSION['password'] = $pwd;
				$_SESSION['C_LoggedIn'] = 1;
				echo "<meta http-equiv='refresh' content='0;user_account.php' />";
				exit();
			}
			else // no account exist.
			{	
				echo"No account exist"; 
				user_login();
			}
			exit();
		}
 exit();
}
else
{
    user_login();
}
?>

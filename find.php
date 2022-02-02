<?php
include'header.php';
?>

<ul id="nav-list">
			<li class="dropdown"><a href="user_account.php" class="dropbtn">My Account</a>
				<ul class="dropdown-content">
					<li><a href="signout.php">Signout</a></li>
				</ul>
			</li>
			<li><a href="find.php">Find Translator</a></li>
			<li><a href="user_contact.php">Contact</a></li>
			<li><a href="user_about.php">About</a></li>
	</ul>
	</div>
	<div class="content-container" >
<?php
if(isset($_POST["from_lang"]))
{
	find();
    
	if($_SESSION["found"] >0)
	{
		display();
		unset($_SESSION['from_lang']);
		unset($_SESSION['to_lang']);
		unset($_SESSION['zip_code']);
	}
	else
	{
?>		
        <p> Sorry, we do not have someone who speaks <strong><?php echo $desired_from_lang ?> </strong>
			and <strong><?php echo $desired_to_lang?> </strong>on this 
			aread code: <strong><?php echo $desired_zip ?> </strong>. 
			<br/>
			<strong>Try another search below</strong>
		</p>

<?php		
		select();


	}
}
else{
	select();
}	
 ?>    
</body>
</html>
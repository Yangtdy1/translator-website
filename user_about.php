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
			<li><a href="about.php">About</a></li>
	</ul>
	</div>
	<div class="content-container" >
	<p> About page <p>
	<h1>About us</h1> 
	<h3> Team Members: </h3>
	    <p> ThongChai Yang </p>
  	    <p> Jared Conn </p> 
	    <p> Kevin Navarro </p>
	    <p> Joshua Stewart </p>
	    <p> Angel Ruiz </p>
	
	<h2> Who we are: </h2>
	    <p> We are students at Humboldt State University in the Fall '17 
		Software Engineering class. </p> 

        <h2> Our Mission: </h2> 
	    <p> To create a web application that would help non-native speakers
	        find translators when they are in need of one. The application 
		is easy to use with options to find and pick the best suited 
  		translator for the customers situation. </p>

	
	
			<p> <?= $_SESSION['username'] ?>

</div>
</body>
</html>
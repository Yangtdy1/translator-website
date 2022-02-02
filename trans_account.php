<?php
include'header.php';

if(!empty($_SESSION['T_LoggedIn']))
{
?>


<ul id="nav-list">
			<li class="dropdown">
				<a href="trans_account.php" class="dropbtn">My Profile</a> 
				
			<ul class="dropdown-content">
					<li><a href="review.php">My review</a> </li>
					<li><a href="signout.php">Signout</a> </li>
			</ul></li>	
			<li><a href="trans_contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>
</ul>

</div>
	<div class="content-container" >
		
	<h2> Ex of page attribute. </br>
	     Will have better layout, once done.</h2>
    <p> User: <?=$_SESSION['username']?> </br>
		<img src="https://picsum.photos/200" alt="Profile picture" 
		height="250" width="250"></br>
		You have: 0 Message</br>
		New review: 2</p>
		

<?php		
  }
  else{
      
	  echo "you do not have promission to be here";
  }  	
	
  ?>
	 </div>
</body>
</html>
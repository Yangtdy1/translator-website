<?php
include'header.php';

if(!empty($_SESSION['C_LoggedIn']))
{
?>

	<ul id="nav-list">
			<li class="dropdown">
				<a href="user_account.php" class="dropbtn">My Account</a> 
				
			<ul class="dropdown-content">
				<li><a href="signout.php">Signout</a> </li>
			</ul>
		</li>	
			<li><a href="find.php">Find Translator</a></li>
			<li><a href="user_contact.php">Contact</a></li>
			<li><a href="user_about.php">About</a></li>
</ul>
</div>
	<div class="content-container" >

	<div id="container-wrapper">
		<div class="container1">
			<div class="profile-img-box">
				<img class="profile-img" src="avatar.png" alt="Profile picture" height="150" width="150">
			</div>
			<div class="profile-name">
				<h2> <?= $_SESSION['username'] ?></h2>
				<p>Translator<p>
			</div>
			<div class="profile-navbar">
				<div class="profile-navlink">
					<a href="#">Profile</a>
				</div>
				<div class="profile-navlink">
					<a href="#">Messages</a>
				</div>
				<div class="profile-navlink">
					<a href="#">My translator</a>
				</div>
				<div class="profile-navlink">
					<a href="#">Files</a>
				</div>
				<div class="profile-navlink">
					<a href="#">Calendar</a>
				</div>
				<div class="profile-navlink">
					<a href="#">Settings</a>
				</div>
				<div class="profile-navlink">
					<a href="signout.php">Logout</a>
				</div>
				
			</div>

		</div>
		<div class="container2">
			<div class="content-box">
				<form method="POST" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
					<div class="checkbox-header-box">
						
						<h3>Completed files</h3>
						
						
					</div>
					<hr>
					<div class="content-display-box">
						
						<ul class="checkbox">
								<li class="task-list">How to built a chair.</li>
								<li class="task-list">Vertal contract document in Spanish</li>
							</ul>
					</div>	
				</form>
				
			</div>
			<div class="content-box">
				<div class="content-header-box">
					<h3>My Translator<h3>
						<hr>
				</div>
				<div class="content-display-box">
					<ul class="content-display-ul">
						<li class="content-display-list">
							<a href="#"> Jacob .P</a>
						</li>
						<li class="content-display-list">
							<a href="#"> Micheal Golden</a>
						</li>
						<li class="content-display-list">
							<a href="#"> Camille Burgess</a>
						</li>
						<li class="content-display-list">
							<a href="#"> Tabitha Vaughn</a>
						</li>
						<li class="content-display-list">
							<a href="#"> Rachel Lamb</a>
						</li>
						<li class="content-display-list">
							<a href="#"> Eloise Alexander</a>
						</li>
					</ul>

				</div>
			
			</div>
			<div class="content-box">
				<div class="content-header-box">
					
				</div>
				<div class="content-display-box">
					

				</div>
			
			</div>

			
		</div>
	</div>

		<?php		
  }
  else{
	  echo"you do not have promission to be here";
	 
  }
	
  ?>
   </div>
</body>
</html>

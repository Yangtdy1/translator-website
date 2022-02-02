<?php
include'header.php';

if(!empty($_SESSION['T_LoggedIn']))
{
?>
	<ul id="nav-list">
			<li class="dropdown"><a href="trans_account.php" class="dropbtn">My Profile</a> 
				<ul class="dropdown-content">
            			<li><a href="review.php">My review</a> </li>
						<li><a href="signout.php">Signout</a> </li>
				</ul>
			</li>	
			<li><a href="trans_contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>
	</ul>
	
</div>
<div class="content-container">
<?php
/*
Grabbing translator ID and the review.
*/
$password=$_SESSION["password"];
$result_trans_id= $mysqli->query("select trans_id
								  from translator
								  where trans_user = '".$_SESSION["username"]."'
								  and trans_pwd = '".$password."'");

$trans_row = $result_trans_id->fetch_assoc();
$trans_id= $trans_row["trans_id"];


$result_review = $mysqli->query("select note, client_fname, client_lname
						         from review, client
						         where client.client_id = review.client_id
						         and trans_id = '".$trans_id."' ");
?>
	<h1> Testimonails for user, <a style="color:blue;" href="index.php" ><?php echo $_SESSION["username"];?></a> </h1>
<?php
	while($review_row = $result_review->fetch_assoc()) 
	{
?>
	<div class="trans-list-container">
				<img class="trans_img" src="https://picsum.photos/200" alt="Avatar" style="width:90px">
				<h3>
				<?php echo $review_row["client_fname"];?> <?php echo ucfirst($review_row["client_lname"]); ?> 
				</h3>
				<h5>Comments:</h5>
				<p><?php echo $review_row["note"];?> </p>
				
	</div>
	<?php
	} 

}
?>

</div>
</body>
</html>



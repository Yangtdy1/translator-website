<?php
include'header.php';

if(!empty($_SESSION['T_LoggedIn']))
{
?>


<ul id="nav-list">
			<li class="dropdown">
				<a href="trans_account.php" class="dropbtn">My Profile</a> 
				
			<ul class="dropdown-content">
            <li><a href="">Manage account</a> </li>
					<li><a href="">My client</a> </li>
					<li><a href="">Setting</a> </li>
					<li><a href="review.php">My review</a> </li>
					<li><a href="signout.php">Signout</a> </li>
			</ul></li>	
			<li><a href="trans_contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>
</ul>

</div>
    <div class="content-container" >
        <table id="t01"> 
             <caption> Team Members: </caption>	
            <tr>
                <th> Name </th>
                <th> Email </th>
                <th> Phone </th>
            </tr>
            <tr>
                <td>Jarod Conn</td>
                <td>jc1092@gmail.com</td>
                <td>707-263-3944</td>
            </tr>
            <tr> 
                <td>Angel Ruiz</td>
                <td>ar234@hotmail.com</td>
                <td>761-523-1234</td>
            </tr>
            <tr>
                <td>Joshua Stewart</td>
                <td>jsj38283@gmail.com</td>
                <td>505-333-4444</td>
            </tr>
            <tr>
                <td>Kevin Navarro</td>
                <td>kvb321@yahoo.com</td>
                <td>421-123-4567</td>
            </tr>
            <tr>
                <td>ThongChai Yang</td>
                <td>td123@gmail.com</td>
                <td>891-657-8274</td>
            </tr>
        </table>	
<?php		
  }
  else{
	  echo"you do not have promission to be here";
  }  
	
?>
</div>
    
</body>
</html>
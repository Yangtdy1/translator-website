<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml">

<head>  
    <title> Find Translator</title>
    <meta charset="utf-8" />

    <?php
        require_once("hsu_conn.php");
    ?>
	
	<link href="translator.css" type="text/css" rel="stylesheet" />
	<link href="find.css" type="text/css" rel="stylesheet" />
	
</head> 

<body>
    <h1 style="color:red;"> VERTAAL </h1>

	<ul>
			<li class="dropdown">
				<a href="user_account.php" class="dropbtn">My Account</a>
				<div class="dropdown-content">
					<a href="signout.php">Signout</a>
				</div>
				</li>
			<li><a href="find.php">Find Translator</a></li>
			<li><a href="user_contact.php">Contact</a></li>
			<li><a href="user_about.php">About</a></li>
	</ul>

<?php
 /*-----------------------
 by:Jared
latest modified: 11.7.2017 12:06AM	
*/
 function display_review()
 { 
		//connecting to oracle
	 	$conn = hsu_conn($_SESSION['username'],$_SESSION['password']);
		
	 	$trans_id = trim($_SESSION['selectionTransId']); // trans_id from previous page's table
	 	
	 	$trans_query = 'select note, client_fname, client_lname
				from review, client
				where client.client_id = review.client_id
				and trans_id = :bind_variable';
	 
	 
	$trans_stmt = oci_parse($conn, $trans_query);
	 	
	oci_bind_by_name($trans_stmt, ":bind_variable", $trans_id);
	 
	 oci_execute($trans_stmt, OCI_DEFAULT);
        ?>
        
	<table id="t02">
		<caption> Reviews: </caption>
		<tr> <th scope="col"> Client </th>
		     <th scope="col"> What They Said </th>
		</tr>
		
        <?php
	
        while(oci_fetch($trans_stmt))
        {	
        	$note = oci_result($trans_stmt, "NOTE");
            	$client_first = oci_result($trans_stmt, "CLIENT_FNAME");
		$client_last = oci_result($trans_stmt, "CLIENT_LNAME");
		
		?> 
		
		<tr><td> <?= $client_first ?> <?= $client_last ?> </td>
		    <td> <?= $note ?> </td> 
                </tr>
            
		<?php
        }
	?>
	<?php	
        // FREE your statement, CLOSE your connection
        oci_free_statement($trans_stmt);
       // oci_close($conn);
}
?>
<?php
 /*-----------------------
 by:dao

 adapted by: Kevin
 Latest modified: 11/18/17

 adapted by: Jared
  
 This file contain functions for about.php,contact.php,find.php,home.php
 
-------------------------------------------------------------------------
function dropdown. Connect to the database, select lang from langs and 
populate the dropdown menu for client to choose language from. 
*/
    function select()
    {
		$mysqli=getConnection();
        $lang_result= $mysqli->query("select lang
									   from languages
									   order by lang asc");
		
		?> 
		
    <form class="find-form" method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>" id="valueForm">

        <div class="input-container">

        <div class="input-field">
            <legend class="find-label"> Source language </legend>
        
            <select class="find-select" name="from_lang"  required="required">
                <?php
			while($row_lang = $lang_result->fetch_assoc())
		   { 

	        ?>
                <option class="find-option" value=" <?php echo $row_lang["lang"]?> "><?php echo $row_lang["lang"]?></option>                    
                <?php
            } 
            ?>
            </select>
            
        </div>
 
        <div class="input-field">
            <legend class="find-label">Target language </legend>
           
            <select class="find-select" name="to_lang"  required="required">
                <?php
			$lang_result->data_seek(0);
			while($row_lang = $lang_result->fetch_assoc())
		   { 
	        	?>
                <option class="find-option" value=" <?php echo $row_lang["lang"]?> "><?php echo $row_lang["lang"]?></option>
                <?php
            } 
            ?>
            </select>
        </div>
        
        <div class="input-field">
             
        <legend class="find-label"> Zip Code </legend>
        
            <input class="find-select" type="text" id="zip"  maxlength="5" name="zip_code" placeholder="95503"
            required="recquired"/>
            </div>
        </div>
        <div class="submitbtn-container">
            <input class="find-sumbit-btn" type="submit"  name="find_trans" value="Search"/>
        </div>
    </form> 	
			
       <?php
	}	
	?>

	 
	
<?php /*

	Display function display the result of calling two language and a zipcode. It will also display attributes of the translator
	such as their full name, phone, charge rate, and email.

*/
function find()
{
	//connecting to MySQL database
	$mysqli = getConnection();
	//passing the query to trans_query
	$desired_from_lang= trim(strip_tags($_POST['from_lang']));
	$desired_to_lang= trim(strip_tags($_POST['to_lang']));
	$desired_zip= trim(strip_tags($_POST['zip_code']));

	$result = $mysqli->query("select t.trans_id, t.trans_fname, t.trans_lname 
                                from translator t, location l
                                where ((t.loca_id = l.loca_id) and (zipcode = '".$desired_zip."')) 
                                and (t.trans_id in 
                                     			((select trans_id 
                                                  from tran_lang 
                                                  where lang_id = (select lang_id 
                                                                   from languages 
                                                                   where lang = '".$desired_from_lang."')))
                                                 and (t.trans_id in 
                                                 (select trans_id 
                                                  from tran_lang 
                                                  where lang_id = (select lang_id 
                                                                   from languages 
                                                                   where lang = '".$desired_to_lang."'))))");

	$row=$result->fetch_assoc();
	if($row)
	{
		$_SESSION["found"]=1;
		
	}
	else
	{
		$_SESSION["found"] =0;
	}

}

 function display()
 { 
		//connecting to MySQL database
	 	$mysqli = getConnection();
		//passing the query to trans_query
		$desired_from_lang= trim(strip_tags($_POST['from_lang']));
		$desired_to_lang= trim(strip_tags($_POST['to_lang']));
		$desired_zip= trim(strip_tags($_POST['zip_code']));

		$result = $mysqli->query("select *
                                from translator t, location l
                                where ((t.loca_id = l.loca_id) and (zipcode = '".$desired_zip."')) 
                                and (t.trans_id in 
                                     			((select trans_id 
                                                  from tran_lang 
                                                  where lang_id = (select lang_id 
                                                                   from languages 
                                                                   where lang = '".$desired_from_lang."')))
                                                 and (t.trans_id in 
                                                 (select trans_id 
                                                  from tran_lang 
                                                  where lang_id = (select lang_id 
                                                                   from languages 
                                                                   where lang = '".$desired_to_lang."'))))");
?>
        
        <h1> Translators in your area </h1>
<?php
        while($row=$result->fetch_assoc())
        {	
        	$trans_fname = $row["trans_fname"];
			$t_id = $row[ "trans_id"];
			$trans_lname = $row["trans_lname"];
			$trans_rate = $row["trans_rate"];
        	$trans_phone = $row["trans_phone"];
			$trans_email = $row["trans_email"];
?>
			<div class="trans-list-container">
				<img class="trans_img" src="https://picsum.photos/200" alt="Avatar" style="width:90px">
				<h3>
				<?= $trans_fname ?>  <?= ucfirst($trans_lname[0])?>
				
				</h3>
				<p><span>$<?= $trans_rate ?>/hr </span> </p>
				<p>You can email me at: <strong><?= $trans_email ?></strong> or call me:
				 <strong><?= $trans_phone?></strong>. 
			       I hope to see you soon and help you with your translator needs.
				</p>
			</div>
			
<?php
    }
			
}
	function user_login()
    {
        ?> 
     <div id="login">
			<form method="post" id="form"
			action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
		

			<input type="text" class="login" name="username" id="username" required="required" 
			placeholder="Username"/><br/>
			
			<input type="password" class="login"  name="password" required="required"
					id="password" placeholder="Password"/><br/>
		
			<input type="submit"  class="login_button" name="user_login" value="Login" />

			</form>       
		<div class="drop_down">
				<button class="drop_btn">Sign up</button>
					<div class="dropdown-item">
						<a href="user_register.php">Client</a>
						<a href="trans_register.php">Translator</a>
					</div>
		</div>   
		</div>	
	</div>   
	
        <?php
		content();
    }

	function content()
	{?>
		<div class="content-container">
		<div class="mainblock-container">
			<h1> Hire a translator</h1>
			<p> Find a translator that meets your needs.
				<br/>
				Flat rate, no hidden fees.
				<br/>
				Get hire or hire someone.
			</p>
			<a class="main-join-btn" tabindex="0" href="signup.php">
				<span class="main-join-btn-label"> Sign up today</span>
			</a>
			
		</div>
		<div class="question-container">
			<div class="question-container-question">
				<h2> When do you need a translator?</h2>

			</div>
			<div class="question-link-container-root">
				<div class="question-link-root">
					<a class="question-link" href="signup.php">Right Now</a>
				</div>
				<div class="question-link-root">
					<a class="question-link" href="signup.php">Tomorrow</a>
				</div>
				<div class="question-link-root">
					<a class="question-link" href="signup.php">In 2-4 weeks</a>
				</div>
				<div class="question-link-root">
					<a class="question-link" href="signup.php">In 2-4 months</a>
				</div>
				<div class="question-link-root">
					<a class="question-link" href="signup.php">Near future</a>
				</div>
			</div>
					
		</div>
		<div class="translist-container">
			<div class="transfilter-container">
				<?php
				select();
				?>
			</div>
			<div class="filter-divider">
				<hr class="hrline">
			</div>
			<div id="trans-list" class="trans-display-container">
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
						<p> Sorry, we do not have someone who speaks <strong><?php echo $_POST["from_lang"] ?> </strong>
							and <strong><?php echo $_POST["to_lang"]?> </strong>on this 
							aread code: <strong><?php echo $_POST["zip_code"] ?> </strong>
						</p>
						<p> <strong>Try another search below</strong></p>
				
				<?php		
						exit();
				
				
					}
				}
				else{
					exit();
				}?>  
			</div>
		</div>

	</div>
	</body>
	</html>
	<?php
	}
?>
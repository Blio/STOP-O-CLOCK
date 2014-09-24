

    <?php
    //Start session
    session_start();    
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);
    ?>


    <!DOCTYPE html>
    <html>
    <head>
        <title>STOP O'CLOCK</title>
        
        <link rel="stylesheet" type="text/css" href="styles/styles.css"/>
        <link href="styles/bootstrap.min.css" rel="stylesheet"/>
        <script src="js/bootstrap.min.js"></script>
        
        <style>
		body {
			background-color:#FFF;
			font-size:30px;	
	}
				
h1 {
	color:#F33;
	alignment:center;
	font-family:"Comic Sans MS", cursive;
	
	}
		
		
		
		 </style>
        
        
        
        
    </head>

<body>

<div id="content">

<h1 align="center"> STOP O'CLOCK </h1>


	<div title="form">
                

    <form name="loginform" action="login_exec.php" method="post">
    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->
    <?php
    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul class="err">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li>',$msg,'</li>';
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
    }
    ?>
    </td>
    </tr>
    <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
    </tr>
    <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" /></td>
    </tr>
    <tr>
    <td><h1 align="center"><a href="register.php">Register</a></h1></td>
    <td><input name="" type="submit" class="btn btn-success" value="Login" /></td><br>
    </tr>
    <tr>	
    <td>    </td>
    </tr>
    
    
    </table>
    </form>
</div>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

</div>

    </body>
</html>

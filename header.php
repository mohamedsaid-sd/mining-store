<header>

<img src="image/logo.png" style="width: 200px;height: 100px;float: right;" />

<br/><br/>

<form method="post" action="index.php">
<button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="ar"><img src="image/ar.png"/></button>
<button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="en"><img src="image/eng.png"/> </button>
</form>


<br/><br/>

<form><b style="color: #fff;"><?php echo _LOGIN; ?></b>
	<input type="text" name="user" placeholder="<?php echo _USER_NAME; ?>">
	<input type="password" name="pass" placeholder="<?php echo _PASSWORD; ?>">
	<input style="margin: 5px;" type="submit" class="btn btn-success" name="login" value="<?php echo _LOGIN; ?>">
	<a href=""> <?php echo _CREATE; ?> </a>

	
</form>
</header>

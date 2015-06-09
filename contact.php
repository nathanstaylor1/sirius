<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/mplus_webfonts.css" />  
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel='stylesheet' type="text/css" href='resources/css/style.css'/>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='resources/js/script.js'></script>
</head>
<body>

<!-- NAVBAR -->

<?php include 'navbar.php';?>

<!-- NIGHT SKY AND TITLE -->

<div class = "sky"></div>

<!-- CONTENT -->
<div class="container">
	<div class="panel panel-default">
	  <div class="panel-body">

	  	<form role="form">
	  	 <div class="form-group">
		    <label for="name">Name:</label>
		    <input type="name" class="form-control" id="pwd">
		  </div>
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email">
		  </div>
	      <div class="form-group">
		    <label for="query">Query:</label>
		    <textarea class="form-control" rows="10" id="query"></textarea>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>

	  </div>
	</div>
</div>

<!-- FOOTER-->

<?php include 'footer.php';?>

<?php include 'modal.php';?>



</body>

</html>

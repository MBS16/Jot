<?

	session_start();
	
	include("connection.php");
	
	$query = "SELECT `diary` FROM `users` WHERE `id`='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	$diary = $row['diary'];
	
	

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jot</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
          <link rel="stylesheet" type="text" href="css/ionicons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
      <link href="css/style.css" rel="stylesheet">


	
  </head>
  <body>
    
	<div class="navbar navbar-default navbar-fixed-top clear-nav">
		
		<div class="container">
			<div class="navbar-header pull-left">
				
                <a href="index.php" class="navbar-brand">Jot&nbsp;<i class="ion-edit icon-md"></i></a>
				
			</div>
			
			<div class="navbar-collapse pull-right">
				
				<ul class="navbar-nav nav">
					<li><a href="index.php?logout=1">Log Out</a></li>
				</ul>
				
				
				
			</div>
		
		</div>
	
	</div>
	<div id="topContainer" class="contentContainer">
	
		<div class="row diaryArea">
            <div class="col-md-6"><h2>Start jotting down your thoughts.  They will be saved automatically.  When you're done, log out in the upper right hand corner.  </br></br>Everything will be here for you the next time you log in. </h2></div>
			<div class="col-md-5" >
                
                <textarea name="diary" class="form-control diary" placeholder="Jot it down!"><?php echo $diary; ?></textarea>
			</div>
			
		</div>
	
	</div>
	
	
	

	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	
		$("#topContainer").css("height",$(window).height());
			
		$(".contentContainer").css("min-height",$(window).height());
		
		$("textarea").css("height",$(window).height()-100);
		
		$("textarea").keyup(function(){
			
		$.post("updatediary.php", {diary:$("textarea").val()});
		});
	</script>
	
  </body>
</html>

















<? include("login.php");?>

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
    <header>
        <nav class="navbar navbar-default navbar-fixed-top clear-nav">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Jot&nbsp;<i class="ion-edit icon-md"></i></a>
                </div><!--navbar-header-->
                <div class="collapse navbar-collapse">
                    <form method="post" class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="email" name="loginemail" id="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']);?>" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']);?>"/>
                        </div>
                        <button type="submit" value="Log In" name="submit" class="btn btn-success">Log In</button>
                    </form>
                </div><!--navbar collapse-->
            </div><!--container-->
        </nav>
    </header>

<div class="container">
    <div class="row">
        <div class="col-md-6 rightBG topRow">				
            <img src="typewriter.jpg">
        </div>
        <div class="col-md-6 topRow">
            <h1 class="marginTop">Jot&nbsp;<i class="ion-edit icon-md icon-up"></i></h1>
            <p>Everyday your mind is full of thoughts. Full of ideas, moments, questions - things you don't want to forget.  If you can get those thoughts off your mind, you will be more focused and less stressed.  Wherever you are, whatever you're thinking, jot it down.  It will be here when you need it.</p><p> Jot it down. Clear your mind.</p>
            <?php
                if ($error){

                    echo '<div class="alert alert-danger" role="alert">'.addslashes($error).'</div>';

                }

                if ($message){

                    echo '<div class="alert alert-success" role="alert">'.addslashes($message).'</div>';

                }
            ?>

        <div class="row logInBox">
            <div class="col-md-6 logIn">
                <form class="marginTop" method="post">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="loginemail" id="loginemail" placeholder="Email" value="<?php echo addslashes($_POST['email']);?>" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="loginpassword" placeholder="Password" id="password" value="<?php echo addslashes($_POST['password']);?>" />
                    </div>   
                    <button type="submit" value="Log In" name="submit" class="btn btn-success btn-lg">Log In</button>
                </form>
            </div>

            <div class="col-md-6 signUp">
                <form class="marginTop" method="post">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email"  />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" />
                    </div>
                    <button type="submit" name="submit" value="Sign Up" class="btn btn-info btn-lg">Sign Up - It's Free!</button>
                    <p class="small">Password needs to be at least 8 characters and include 1 number, 1 capital and 1 lower case letter</p>
                </form>
                </div>
             </div>
        </div>
    </div><!--row-->
</div><!--container-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#topContainer").css("height",$(window).height());
        $(".contentContainer").css("min-height",$(window).height());
    </script>
</body>
</html>

















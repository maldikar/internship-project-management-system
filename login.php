<!DOCTYPE html>
<html lang="en">
<?php 
@session_start();
if (isset($_SESSION['username'])){
    echo '<script language="javascript"> alert("LOGIN OUT.."); </script>';
    session_unset();
    session_destroy();
}

?>

<head>
    <title>WDLx2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">

    <!-- Internal CSS -->
    <style>
        .header__bg {
            position: fixed;
            top: 32%;
            bottom: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: 48%;
            background-image: linear-gradient(white, #3e4750);
            transform: skewY(-12deg);
            transform-origin: bottom right;
            z-index: -1;
        }

        #try {
            -webkit-box-shadow: 11px 11px 25px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 11px 11px 25px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 11px 11px 25px 0px rgba(0, 0, 0, 0.75)
        }
    </style>
</head>

<body>

    <!-- Header -->
    <!-- <p class="text-center" style="font-family: 'Bangers', cursive; font-size: 80px; margin-top: 2%;">Hello World!</p> -->

    <!-- Categories -->
    <div class="container" style="margin-top: 7%;">

        <!-- Gradient -->
        <div class="header__bg"></div>

        <div class="row">
            <div class="col-sm-4">
            </div>

            <div class="col-sm-4">
                <div class="card" style="width:450px">
                    <div class="card-body">

                        <!-- Login -->
                        <form action="verifylogin.php" method="POST">
                            <div class="form-group">
                                <p class="d-flex justify-content-center" style="font-family: 'Caveat', cursive; font-size: 40px;">
                                    <b>Good To See You Again!</b>
                                </p>
                                <br>
                                <input type="text" class="form-control" placeholder="Enter Username" name="username">

                                <br>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <br>
                            <br>
                            <a href="#" class="card-link d-flex justify-content-center">Forgot Password?</a>
                            <br><br>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">login</button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-sm-4">
            </div>

        </div>
    </div>

    <br><br><br><br>


    <!-- Footer -->
    <div class="jumbotron text-center" style="background-color:transparent">
        <div class="btn-group text-center" style="font-family: 'Fira Code', monospace;">
            <div class="row">
                <div class="col-sm-3"><a href="index.php" class="btn" style="padding: .375rem 5rem;"><b>HOME</b></a>
                </div>
                <div class="col-sm-3"><a href="signup.html" class="btn"
                        style="padding: .375rem 5rem;"><b>SIGNUP</b></a>
                </div>
                <div class="col-sm-3"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>ABOUT</b></button>
                </div>
                <div class="col-sm-3"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>CONTACT</b></button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php
@session_start();
//session variables
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $phone_no = $_SESSION['phone_no'];
    $email = $_SESSION['email'];
    $category=$_SESSION['category'];
}
//variable init if the user is not logged in
else {
    $category=$_SESSION['category'];
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
    <p class="text-center" style="font-family: 'Bangers', cursive; font-size: 80px; margin-top: 2%;">Hello echo("article_type")</p>


    
    <br><br>
    <br><br>
    <!-- Categories -->
    <div class="container">

        <!-- Gradient -->
        <div class="header__bg"></div>

        <!-- Row1 -->
        <div class="row" >


        <?php
        include('connect.php');
        $query = "select * from details where title = '$category'";
        $res = mysqli_query($conn, $query);

        if (!(mysqli_num_rows($res) > 0)){ ?>
            <p class="text-center" style="font-family: 'Bangers', cursive; font-size: 80px; margin-top: 2%;">Articles on <?php echo $category,"not found" ;?></p><br>        
            // <p class="text-center" style="font-family: 'Bangers', cursive; font-size: 80px; margin-top: 2%;"></p>
        <?php }

        while($row=mysqli_fetch_assoc($res)){
            $title = $row['title'];
            $content = $row['content'];
            $username = $row['username'];
?>
            <div class="col-sm-4" style="margin-top: 5%;">
                <div class="card" style="width:300px">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo"'$title'";  ?></h4>
                        <p class="card-text"><?php echo"'$content'"; ?></p>
                    </div>
                </div>
            </div>
<?php
        }


        ?>
            <!-- <div class="col-sm-4">
                <div class="card" style="width:300px">
                    <div class="card-body">
                        <h4 class="card-title">echo ("destination")</h4>
                        <p class="card-text"> echo ("experience")</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:300px">
                    <div class="card-body">
                        <h4 class="card-title">echo ("cuisine")</h4>
                        <p class="card-text"> echo ("experience")</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:300px">
                    <div class="card-body">
                        <h4 class="card-title">echo ("tune")</h4>
                        <p class="card-text"> echo ("experience")</p>
                    </div>
                </div>
            </div>  
        </div>

        
        <div class="row" style="margin-top: 5%;">
            <div class="col-sm-4">
                <div class="card" style="width:300px">
                    <div class="card-body">
                        <h4 class="card-title">echo ("destination")</h4>
                        <p class="card-text"> echo ("experience")</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:300px">
                    <div class="card-body">
                        <h4 class="card-title">echo ("cuisine")</h4>
                        <p class="card-text"> echo ("experience")</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <br><br><br><br>


    <!-- Footer -->
    <div class="jumbotron text-center" style="background-color:transparent">
        <div class="btn-group text-center" style="font-family: 'Fira Code', monospace;">
            <div class="row">
            <div class="col-sm-2"><a href="explore.php" class="btn" style="padding: .375rem 5rem;"><b>BACK</b></a>
                </div>
                <div class="col-sm-2"><a href="login.php" class="btn" style="padding: .375rem 5rem;"><b>LOGOUT</b></a>
                </div>
                <div class="col-sm-2"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>JOIN</b></button>
                </div>
                <div class="col-sm-2"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>ABOUT</b></button>
                </div>
                <div class="col-sm-2"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>CONTACT</b></button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
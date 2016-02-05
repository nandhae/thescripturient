<!DOCTYPE html>
<html>
<head lang="en">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Caveat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/icon" href="./images/iconpng.png">
    <title>Welcome to thescripturient</title>
    <style>
        body{
            background-image: url("./images/inkwel.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        #logo{
            margin-top:3%;
            margin-bottom: 0%;
            border:#993366 solid  3px ;
            border-radius: 30%;
        }

        #name{
            font-family: 'Caveat', cursive;
            color: indigo;
            font-size: 118px;
            padding-top:0% ;
            padding-bottom: 0%;
            margin-bottom: 0%;
            padding-right: 5%;
        }

        #subheading{
            padding-top: 7px;
            padding-left: 280px;
            font-size: 25px;
            color: purple;
        font-family: monospace,cursive;
        }
        #subheading2{
            color: darkred;
            font-family: 'Caveat' , cursive;
            font-size: 30px;
        }

        #loginbutton , #signupbutton{
            margin-top: 3%;
            margin-right: 1%;
            height: 30  px;
            width: 200px;
            background: blueviolet ;
            border-radius: 7;
            box-shadow: 50px;
            margin-top: 7%;
            margin-bottom: 0%
        }
        .buttontext{
            font-family:'Montserrat' ,sans-serif;
            font-size: 13px;
            color:white;

        }

    </style>
</head>
<body>

<div class="container" align="center">
    <img id="logo" class="img-responsive" height="150px" width="150px" src="./images/logo.jpg">
    <h1 id="name">Thescripturient</h1>
    <h2 id="subheading">(adj.) <span id="subheading2"> having a consuming passion to write...</span> </h2>
    <button type="button"  id="loginbutton" class="buttontext btn bottom z-depth-5" data-toggle="modal" data-target="#popup" >Login</button>
    <button type="button" id="signupbutton" class="buttontext btn bottom z-depth-5"  >Sign Up</button>
</div>

<div id="popup" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h2>Login:</h2>
                <button type="button" data-dismiss="modal" class="close" >&times;</button>
            </div>
        <div class="modal-body">
    <form >
        <h4>Username</h4><input class="form-control" type="text" placeholder="Email">
        <h4>Password</h4><input class="form-control" type="password" placeholder="Password">
        
        <input type="submit" class="btn btn-primary " value="login">
    </form>
        </div>
            
        </div>
    </div>
</div>
<script type="text/javascript" >
</script>


</body>

</html>
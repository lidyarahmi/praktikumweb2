<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            height: 100vh;
            width: 100%;
            background-color: #C1E7E3;
            padding-left: 5%;
            padding-right: 5%;
            box-sizing: border-box;
            position: relative;
    
        }
        .navbar{
            width: 100%;
            height: 15vh;
            margin: auto;
            display: flex !important;
            align-items: center !important;

        }
        nav{
            flex: 1;
            padding-left: 40%;
        }
        nav ul li{
            display: inline-block;
            list-style: none;
            margin: 0px 30px;
            font-size: 20px;
          
        }
        nav ul li a{
            text-decoration: none;
            color: #333;
        }
        .content{
            font-size: 40px;
            font-weight: 100;
            margin-top: 24px;
            margin-bottom: 15px;
            color: #232d60;
            margin-left: 40%;
        }   
        .gambar{
            margin-left: 48%;
        }
        .content a{
            margin-left: 14%;
        }
        </style>
</head>
<body>
    <div class="container">
       <div class="navbar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>
       </div>
        <div class="gambar">
        <img src="img/fotolidya.jpg" width="100px" height="100px">
        </div>

       <div class="content">
       
        <h1>Hi! I'm <span>Lidya Rahmi</span></h1>
        <h1>NIM : <span>2110817320001</span></h1>
        <a class="btn btn-primary" href="/home/profile" role="button">PROFILE</a><br><br>
       </div>
    </div>
</body>
</html>
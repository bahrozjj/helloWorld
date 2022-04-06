<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .container{
            width: 100vw;
            height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

        }
        
        nav{
            width: 40vw;
            height: 60px;
            background-color: blueviolet;

            display: flex;
            align-items: center;
            justify-content: space-around;

            border-radius: 30px;
        }

        a{
            color: #fff;
            text-decoration: none;
        }
    </style>

</head>
<body>
    <div class="container">
        <nav>
            <a href="pro">Profile</a>
            <a href="aboutUs">aboutUs</a>
        </nav>
    </div>

</body>
</html>
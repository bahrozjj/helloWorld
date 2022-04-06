<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container{
            width: 100%;
            height: 100vh;

            display:flex;
            align-items: center;
            justify-content: center;
            
        }

        .card{
            display:flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            width: 25%;
            height: 50%;

            padding: 1.4rem;

            box-shadow: .1rem .1rem 1rem rgba(0, 0, 0, .1);
            border-radius: 10px;
            transition: .2s ease-out;
        }

        .card:hover{
            transform: translateY(-2%);
            box-shadow: .2rem .2rem 1rem rgba(0,0,0,.2);
        }



        .img{
            width: 100px;
            height: 100px;
            border-radius: 50%;

        }

        h1{
            margin: 2rem 0 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="/ass/img/pic.jpg" alt="" class="img">
            <div class="info">
                <h1>Bahroz Jaza</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum consequuntur consectetur voluptate accusantium ut ab laudantium ea! Suscipit voluptates et earum voluptas vel atque dignissimos?</p>

            </div>
        </div>
    </div>

</body>
</html>

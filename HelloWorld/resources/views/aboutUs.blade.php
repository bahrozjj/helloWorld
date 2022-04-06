<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        .main{
            width: 100vw;
            height: 80vh;
            padding: 1.5rem;

            display: flex;
        }

        .text{
            flex: 1 1 ;
            display: flex;
            flex-direction: column;
            align-items: left;
            padding: 2rem;

            justify-content: center;

        }

        p{
            margin: 2rem 0;
        }

        .img{
            flex: 1 1 ;


        }
    </style>
</head>
<body>
    <div class="main">
        <div class="text">
            <h1>Bahroz</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempore cum deleniti aliquam, laboriosam a laudantium voluptate id in earum? Reiciendis non fuga id dolorum distinctio enim odit possimus consequuntur corporis, blanditiis aliquid tempore, magni repellat asperiores qui quae ipsa!</p>
            <div><button>Learn More</button></div>
        </div>
        <img src="/ass/img/pic.jpg" alt="hey" class="img">
    </div>
</body>
</html>

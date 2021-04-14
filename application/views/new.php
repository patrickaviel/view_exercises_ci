<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        .main-container{
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border:2px solid black;
            box-shadow: 5px 10px #888888;
        }  
        .label p, input{
            padding: 2px;
            margin: 8px 0;
        }
        .label{
            display: inline-block;
            font-size: 20px;
        }
        form{
            vertical-align: top;
            display: inline-block;
        }
        input{
            display: block;
            font-size: 15px;
        }
        h1{
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h1>Create new User</h1>
        <div class="label">
            <p>First Name: </p>
            <p>Last Name: </p>
            <p>Email: </p>
        </div>
        <form action="create" method="POST">
            <input type="text" name="first_name" id="">
            <input type="text" name="last_name" id="">
            <input type="text" name="email" id="">
            <input type="submit" value="Create new user">
        </form>
    </div>
</body>
</html>
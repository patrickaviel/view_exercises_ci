<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Exercises</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        body{
            background-color: #f2f2f2;
        }
        .main-container{
            text-align: center;
            width: 100%;
            margin: auto;
            font-family: 'Montserrat', sans-serif;
        }
        .main-container img{
            width: 250px;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h1>Awesome Ninjas</h1>
<?php   
        $images=array('https://static.wikia.nocookie.net/naruto-bleach/images/7/7c/SasukeGenin01.png/revision/latest/scale-to-width-down/340?cb=20110630193247','https://play-lh.googleusercontent.com/kdVmKZQjphHVYGOlp9bjSIz-30-VkW26byn4pIb-7RZdb6Bv_44IQHS49x9fOr2-eg','https://en.memesrandom.com/wp-content/uploads/2021/01/sakura-haruno.jpg');
        for($i=0;$i<$no;$i++){  ?>
            <img src="<?=$images[0]?>" alt="">
<?php   }                       ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes Review</title>
</head>
<body>
    <p>Hello Users!</p>
    <p>You visited this site <?=$this->session->userdata('counter')?> time(s)!</p>
    <a href="count">Visit Count</a>
    <a href="reset">Reset</a>
</body>
</html>
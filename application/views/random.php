<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Generator</title>
    <style>
        .container{
            max-width: 900px;
            margin: 60px auto;
            text-align: center;
        }
        h1{
            border:3px solid black;
            padding:20px;
        }
        a{
            text-decoration: none;
            color:white;
            background: black;
            padding: 8px 20px;
            box-shadow: 1px 1px 5px rgba(0,0,0,.6);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Random Word (attemp #<?= $this->session->userdata('attemp_count') ?>) </h2>
        <h1><?= $random_string ?></h1>
        <a href="/">Generate</a>
    </div>
</body>
</html>
<html>
<head>
    <title>Quick Start</title>
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <?php

            $conn = mysqli_connect('db', 'user', 'test', "myDb");

            $query = 'SELECT * From Person';
            $result = mysqli_query($conn, $query);

            var_dump($result);

            $result->close();
            mysqli_close($conn);

        ?>
    </div>
</body>
</html>

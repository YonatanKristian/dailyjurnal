<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('Asia/Jakarta');

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "webdailyjurnal"; //nama database

        //create connection
        $conn = new mysqli($servername,$username,$password,$db);

        //check apakah ada error connection
        if($conn->connect_error){
            //jika ada, hentikan script dan tampilkan pesan error
            die("Connection failed : ".$conn->connect_error);
        }

        //echo "Connected successfully<hr>";
    ?>
</body>
</html>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "linchangco756";


        $conn = new mysqli($servername, $username, $password, $database);

        if($conn->connection_error){
            die("Connection Failed:" . $conn -> connection_error);
        }
    ?>
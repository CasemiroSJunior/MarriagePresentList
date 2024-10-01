<?php
class DatabaseConnector{
    function createConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "casamentodb";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
        }

        return $conn;
    }

    function closeConnection(){
        $conn = null;
    }

    function executeQuery($query){
        $conn = $this->createConnection();
        $result = $conn->query($query);
        $this->closeConnection();
        return $result;
    }
}
?>
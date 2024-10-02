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
    
            return $conn;

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

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
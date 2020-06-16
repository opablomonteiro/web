<?php
class ConnectionFactory{
    public static function getConnection(){
        $servername = "localhost:3306"; 
        $username = "root";
        $password = "123456";
        $dbname = "avian_bd";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        echo "conectado com sucesso";
        }
      catch(PDOException $e)
        {
        //devia fazer um through
        echo"erro na conexao" . $e->getMessage();
        return null;
        }
    }
}
?>
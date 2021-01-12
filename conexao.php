<?php
//define('DB_HOST'        , "18.228.225.99");
//define('DB_USER'        , "sa");
//define('DB_PASSWORD'    , "Willian25");
//define('DB_NAME'        , "advanced");
define('DB_DRIVER'      , "sqlsrv");


class Conexao
{
    private static $connection;

    private function __construct(){}

    public static function getConnection($db_host,$db_user,$db_pass,$db_name) {

        $pdoConfig  = DB_DRIVER . ":". "Server=" . $db_host . ";";
        $pdoConfig .= "Database=".$db_name.";";

        try {
            if(!isset($connection)){
                $connection =  new PDO($pdoConfig, $db_user, $db_pass);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $connection;
         } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
         }
     }
}
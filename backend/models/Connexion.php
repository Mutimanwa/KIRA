<?php 
include '../config/constantes.php';
class Connexion{
    private static $pdo = null;
    
    public static function getConnexion(){
        if(self::$pdo == null){
            try{
                self::$pdo = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PSWD);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Erreur de connexion : ".$e->getMessage();
            }
        }
        return self::$pdo;
    }

}

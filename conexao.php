<?php 
 /*  
  * Constantes de parтmetros para configuraчуo da conexуo  
  */  
 define('HOST', 'localhost');  
 define('DBNAME', 'produtos');  
 define('CHARSET', 'utf8');  
 define('USER', 'root');  
 define('PASSWORD', '');  
 
 class Conexao {  
 
   /*  
    * Atributo estсtico para instтncia do PDO  
    */  
   private static $pdo;
 
   /*  
    * Escondendo o construtor da classe  
    */ 
   private function __construct() {  
     //  
   } 
 
   /*  
    * Mщtodo estсtico para retornar uma conexуo vсlida  
    * Verifica se jс existe uma instтncia da conexуo, caso nуo, configura uma nova conexуo  
    */  
   public static function getInstance() {  
     if (!isset(self::$pdo)) {  
       try {  
         $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);  
         self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD, $opcoes);  
       } catch (PDOException $e) {  
         print "Erro: " . $e->getMessage();  
       }  
     }  
     return self::$pdo;  
   }  
 }
 ?>
<?php

/**
 * Description of Conexao
 * Classe para se conectar ao banco de dados
 * 
 * @author Rafael Jeferson <rafa.jefer@gmail.com>
 */

require_once 'config.php';

class Conexao {
   
   private static $instance;
   
   public static function getInstance()
   {
      if(!isset(self::$instance)) {
         try {
            self::$instance = new PDO('mysql:host='.HOST.';dbname='.BASE, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
         } catch (PDOException $ex) {
            echo "Erro na conexão: ".$ex->getMessage();
         }
         return self::$instance;
      }
   }
   
   public static function prepare($sql) {
      return self::getInstance()->prepare($sql);
   }
}

<?php

/**
 * Description of Assunto
 *
 * @author Rafael Jeferson <rafa.jefer@gmail.com>
 */
require_once 'Conexao.class.php';

class Assunto {
   
   private $table = "form_assuntos";
   
   // 
   public function findAll() {
      
      $sql = "SELECT * FROM $this->table";
      $stmt = Conexao::prepare($sql);
      $stmt->execute();
      
      if($stmt->rowCount() > 0) {
         return $stmt->fetchAll();
      } else {
         return array();
      }
   }
   
   
}

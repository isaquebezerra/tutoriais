<?php
declare(strict_types = 1);
namespace App;

use Core\Model;
// Em apenas um fator esta classe não é inteiramente genérica, na quantidade de campos.
// Caso a tabela tenha 4 campos, então precisaremos adicionar:
// $fld2 e $fld3, no restante é genérica
class Model extends Model
{ 
    public $fld = '';
    public $table 
    public function __construct($table){
      $this->table = $table; 
      $Obj = new Model($this->table);
      $fld = $Obj->fields();
      $fld0 = $fld[0];
      $fld1 = $fld[1];
    }

    public function add($this->fld0, $this->fld1)
    {
        $sql = "INSERT INTO {$this->table} ($this->fld0, $this->fld1) VALUES (:$this->fld0, :$this->fld1)";
        $query = $this->pdo->prepare($sql);
        $parameters = array(":$this->fld0" => $$this->fld0, ":$this->fld1" => $$this->fld1);

        $query->execute($parameters);
    }

    public function umReg($field_id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :field_id LIMIT 1";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':field_id' => $field_id);

        $query->execute($parameters);

        // fetch() é o método PDO que recebe exatamento um único resultado/registro
        return ($query->rowcount() ? $query->fetch() : false);
    }

    public function update($this->fld0, $this->fld1, $field_id)
    {
        $sql = "UPDATE {$this->table} SET $this->fld0 = :$this->fld0, $this->fld1 = :$this->fld' WHERE id = :field_id';
        $query = $this->pdo->prepare($sql);
        $parameters = array(":$this->fld0" => $this->fld0, ":$this->fld1" => $this->fld1, ':field_id' => $field_id);

        $query->execute($parameters);
    }
}

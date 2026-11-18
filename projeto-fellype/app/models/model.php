<?php
require_once __DIR__ . '/../../config/Database.php';

abstract class Model {
    protected $db;
    protected $table;
    protected $primarykey = 'id';
 
    public function __construct() {
        $this->db = Database::getConnection ();
    }

    //public function

    public function __construct

}

public function update($id, $data) {
    $fields = 
}
?>

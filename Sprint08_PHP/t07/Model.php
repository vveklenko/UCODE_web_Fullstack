<?php
    include 'DatabaseConnection.php';

    abstract class Model {
        private $database;
        public function __construct() {
            setTable();
            setConnection();
        }
        protected function setTable()
        {
            $table='USE ucode_web;
            SELECT * FROM heroes;';
            $create=$this->database->connection->prepare($table);
            $create->execute(); 
        }
        protected function setConnection() {
            $this->database = new DatabaseConnection("127.0.0.1", "3000", "vveklenko", "securepass", "ucode_web");
        }
        abstract public function find($id);
        abstract public function delete();
        abstract public function save();
    }
?>
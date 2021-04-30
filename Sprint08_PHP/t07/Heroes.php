<?php
    include 'Model.php';
    class Heroes extends Model{
        public $id, $name, $description, $race, $class_role;

        public function find() {
            if($this->database->connection) {
                $sql = "SELECT * FROM heroes WHERE id =" . $this->id . ";";
                $request = $this->database->connection->prepare($sql);
                $request->execute(); 
                $answer = $request->fetchAll();
                $this->id = $answer[0]['id'];
                $this->name = $answer[0]['name'];
                $this->description = $answer[0]['description'];
                $this->race = $answer[0]['race'];
                $this->class_role = $answer[0]['class_role'];
            }
        }

        public function delete() {
            if($this->database->connection) {
                if($this->id){
                    $sql = 'DELETE FROM heroes WHERE id =' . $this->id . ';';
                    $request = $this->database->connection->prepare($sql);
                    $request->execute(); 
                }
            }
        }

        public function save() {
            if($this->database->connection) {
                $sql = "SELECT * FROM heroes WHERE id =" . $this->id . ';';
                $request = $this->database->connection->prepare($sql);
                $request->execute(); 
                $answer = $request->fetchAll();
                if($answer){
                    $sql = 'UPDATE heroes SET description = "update" WHERE id = ' . $this->id . ';';
                    $request = $this->database->connection->prepare($sql);
                    $request->execute(); 
                    $this->description = 'update';
                }
                else {
                    $sql = "INSERT INTO heroes ('name','description','race','class_role') VALUES('".$this->name."','".$this->description."','".$this->race."','".$this->class_role."')";
                    $request = $this->database->connection->prepare($sql);
                    $request->execute(); 
                }
            }
        }
    }
?>

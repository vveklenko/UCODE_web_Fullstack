<?php
    include('./model/model.php');
    include('./connection/connection.php');
   
    class Users extends Model {
        private $login, $password, $confirm, $name, $email;

        function __construct($login, $password, $confirm, $name, $email) {
            $this->login = $login;
            $this->password = $password;
            $this->confirm = $confirm;
            $this->name = $name;
            $this->email = $email;
            parent::__construct();
        }

        function __destruct() {
            $this->db_connection = NULL;
        }

        function show_error() {
            return $this->error;
        }

        function success() {
            return $this->success;
        }

        function valid() {
            if ($this->connection->getConnectionStatus()) {
                $inquiry = $this->connection->connection->query("SELECT * FROM users WHERE login=\"$this->login\";");
                $check = $inquiry->fetch(PDO::FETCH_ASSOC);
                if ($check != NULL) {
                    $this->error = "This login is already used!";
                    return false;
                }

                if(strcmp($this->password, $this->confirm) != 0) {
                    $this->error = "Passwords are not match!";
                    return false;
                }

                $inquiry = $this->connection->connection->query("SELECT * FROM users WHERE email=\"$this->email\";");
                $check = $inquiry->fetch(PDO::FETCH_ASSOC);
                if ($check != NULL) {
                    $this->error = "This email is already used!";
                    return false;
                }
                return true;
            }
            return false;
        }

        function save_to_db() {
            $sql = 'INSERT INTO users(login, password, name, email) VALUES ("'.$this->login.'","'.$this->password.'","'.$this->name.'","'.$this->email.'");';
            $this->connection->connection->query($sql);
            $this->success = "Account was created successfully!";
        }
    }

    $error = "";
    $succes = "";

    if (isset($_POST['create'])) {
        $user = new Users($_POST['login'], $_POST['password'], $_POST['confirm'], $_POST['name'], $_POST['email']);

        if ($user->valid() == true) {
            $user->save_to_db();
            $succes = $user->success();
        }
        else {
            $error = $user->show_error();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Registration</h1>
        <form action="index.php" method="post">
            <p><input required name="login" type="text" placeholder="Input login..." id="login" pattern="^[\w\d]+$"></p>
            <p><input required name="password" type="password" placeholder="Input password..." id="password" pattern="^[\w\d]+$"></p>
            <p><input required name="confirm" type="password" placeholder="Confirm password..." id="confirm" pattern="^[\w\d]+$"></p>
            <p><input required name="name" type="text" placeholder="Input name..." id="name" pattern="^[\w\d ]+$"></p>
            <p><input required name="email" type="email" placeholder="Input email..." id="email" pattern="^[\w\d\.\@_\-]+$"></p>
            <p><input name="create" type="submit" id="create" value="Create an account"></p>
        </form>
        <p id="error">
            <?php echo $error?>
        </p>
        <p id="success">
            <?php echo $succes?>
        </p>
    </div>
    
</body>
</html>
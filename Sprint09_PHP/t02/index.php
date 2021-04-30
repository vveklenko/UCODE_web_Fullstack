<?php
    include('./model/model.php');
    include('./connection/connection.php');
   
    class Users extends Model {
        private $login, $password, $admin_status;

        function __construct($login, $password) {
            $this->login = $login;
            $this->password = $password;
            parent::__construct();
        }

        function __destruct() {
            $this->db_connection = NULL;
        }

        function show_error() {
            return $this->error;
        }

        function valid() {
            if ($this->connection->getConnectionStatus()) {
                $inquiry = $this->connection->connection->query("SELECT * FROM users WHERE login=\"$this->login\"");
                $check = $inquiry->fetch(PDO::FETCH_ASSOC);

                if ($check == NULL) {
                    $this->error = "User does not exist!";
                    return false;
                }

                if (strcmp($this->password, $check['password']) != 0) {
                    $this->error = "Wrong password!";
                    return false;
                }

                $this->admin_status = $check['is_admin'];
                return true;
                
            }
            return false;
        }

        function remind() {
            $inquiry = $this->connection->connection->query("SELECT * FROM users WHERE login=\"$this->login\"");
            $check = $inquiry->fetch(PDO::FETCH_ASSOC);
            if($check != NULL) {
                mail($check['email'], 'Remind password', 'Your password: '.$check['password']);
                return true;
            }
            return false;
        }

        function get_status() {
            return $this->admin_status;
        }

        function get_login() {
            return $this->login;
        }
    }

    $error = "";
    $success = "";
    $sign = false;


    if (isset($_POST['signin'])) {
        $user = new Users($_POST['login'], $_POST['password']);
        if ($user->valid() == true) {
            $name = $user->get_login();
            $check = $user->get_status();
            if($check == 1) {
                $status = "Admin";
            }
            else {
                $status = "User";
            }
            $sign = true;
        }
        else {
            $error = $user->show_error();
        }
    }

    if(isset($_POST['remind'])) {
        $user = new Users($_POST['login'], null);
        if($user->remind()) {
            $success = "Password has been sent to your email!";
        }
        else {
            $error = "This user does not exist!";
        }
        
    }

    if (isset($_POST['signout'])) {
        $name = null;
        $status = null;
        $sign = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if ($sign == true) {
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Successful sign in</title>
                <link rel='stylesheet' href='style.css'>
            </head>
            <body>
                <div>
                    <h1>Successful sign in</h1>
                    <form action='index.php' method='post'>
                        <p>Hello $name!</p>
                        <p>Status is: $status</p>
                        <p><input name='signout' type='submit' id='signin' value='Sign out'></p>
                    </form>
                </div>
                
            </body>
            </html>";
        }
        else {
            echo "<div>
            <h1>Sign in</h1>
            <form action='index.php' method='post'>
                <p><input required name='login' type='text' placeholder='Input login...' id='login' pattern='^[\w\d]+$'></p>
                <p><input name='password' type='password' placeholder='Input password...' id='password' pattern='^[\w\d]+$'></p>
                <p><input name='signin' type='submit' id='signin' value='Sign in'></p>
                <p><input name='remind' type='submit' id='remind' value='Remind password'></p>
            </form>
            <p id='error'>
                $error
            </p>
            <p id='success'>
                $success
            </p>
        </div>";
        }
    
    ?>
    
    
</body>
</html>
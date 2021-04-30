<?php
    include('./model.php');
    include('../connection/connection.php');
    include('../view/View.php');

    session_start();

    class Sign_in extends Model {
        private $login, $password, $error, $admin_status;

        function __construct($login, $password) {
            $this->login = $login;
            $this->password = $password;
            parent::__construct();
        }

        function __destruct() {
            $this->connection = NULL;
        }

        function show_error() {
            return $this->error;
        }

        function valid() {
            if($this->connection->getConnectionStatus()) {
                $inquiry = $this->connection->connection->query("SELECT * FROM users WHERE login=\"$this->login\"");
                $check = $inquiry->fetch(PDO::FETCH_ASSOC);

                if($check == NULL) {
                    $this->error = "The user does not exist!";
                    return false;
                }

                if(strcmp($this->password, $check['password']) != 0) {
                    $this->error = "Wrong password!";
                    return false;
                }

                $this->admin_status = $check['is_admin'];
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


    if (isset($_POST['signin'])) {
        $user = new Sign_in($_POST['login'], $_POST['password']);
        if ($user->valid() == true) {
            $name = $user->get_login();
            $_SESSION['name'] = $name;
            $check = $user->get_status();
            if($check == 1) {
                $status = "Admin";
            }
            else {
                $status = "User";
            }
            $_SESSION['status'] = $status;
            $router = new View("./user_page.php");
            $router->render();
            exit;
            
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
    <link rel='stylesheet' href='../style.css'>
    <title>Sign in</title>
</head>
<body>
    <div>
        <h1>Sign in</h1>
        <form action='' method='post'>
            <p><input required name='login' type='text' placeholder='Input login...' id='login' pattern='^[\w\d]+$'></p>
            <p><input required name='password' type='password' placeholder='Input password...' id='password' pattern='^[\w\d]+$'></p>
            <p><input name='signin' type='submit' id='signin' value='Sign in'></p>
            <p id="link"><a href="./signup.php">Follow this link to sign up</a></p>
            <p id="link"><a href="./remind.php">Forget your password?</a></p>
        </form>
        <p id='error'>
            <?php echo $error; ?>
        </p>
    </div>
</body>
</html>


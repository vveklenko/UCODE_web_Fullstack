<?php
    include('./model.php');
    include('../connection/connection.php');
    include('../view/View.php');

    class Remind extends Model {
        private $login;

        function __construct($login) {
            $this->login = $login;
            parent::__construct();
        }

        function __destruct() {
            $this->connection = NULL;
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
    }

    if(isset($_POST['remind'])) {
        $user = new Remind($_POST['login']);
        if($user->remind()) {
            $success = "Password has been sent to your email!";
        }
        else {
            $error = "This user does not exist!";
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
    <title>Remind password</title>
</head>
<body>
    <div>
        <h1>Remind password</h1>
        <form action='' method='post'>
            <p><input required name='login' type='text' placeholder='Input login...' id='login' pattern='^[\w\d]+$'></p>
            <p id='error'>
                <?php echo $error; ?>
            </p>
            <p id='success'>
                <?php echo $success; ?>
            </p>
            <p>
                <button id="signin" onclick="document.location='./signin.php'">
                    Back
                </button>
                <input name='remind' type='submit' id='signin' value='Remind password'>
            </p>
        </form>
        
    </div>
</body>
</html>
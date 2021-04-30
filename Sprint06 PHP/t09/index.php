<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A new set</title>
</head>
<body style="margin-left: 50px;">
    <h2>Superhero Form</h2>
        
    <div style="background: grey;">
        <?php 
            $arr = [
                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "age" => $_POST['age'],
                "description" => $_POST['description'],
                "photo" => $_POST['photo']
            ];
            if(!$arr['name']){
                echo ""; 
            }
            else{
                echo ('<fieldset height="300px" class="gg">');
                echo ('<h2>POST</h2>');
                echo ('<pre>');
                print_r ($arr);
                echo ('<pre>');
                echo ('</fieldset>');
            }
        ?>
    </div>
    
    <form action="index.php" method="post" style="margin-top: 50px;">
        <fieldset class="border">
            <fieldset class="border">
                <legend>About the Superhero</legend>
                    <label>Name</label>
                    <input type="text" placeholder="Tell your name" required name="name">
                    <label>E-mail</label>
                    <input type="text" placeholder="Tell your e-mail" required name="email">
                    <label>Age</label>
                    <input type="number" min="1" max="100" step="1" required name="age">
                    <br><br>
                    <label>About</label>
                    <textarea type="text" maxlength="500" rows="5" cols="70" placeholder="Information about yourself, max 500 symbols" required name="description"></textarea>
                    <br><br>
                    <label>Your photo:</label>
                    <input type="file" id="choose" required name="photo">
            </fieldset>
            <br>
            <input type="reset" value="Clear" />
            <input type="submit" value="Send" />
        </fieldset>
    </form>
</body>
</html>
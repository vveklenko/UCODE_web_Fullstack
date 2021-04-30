<?php
    $counter = null;
    
    for ($i=0; $i < 6; $i++) { 
        if($_POST['experience'.$i] == "on") {
            $counter++;
        }
    }

    $arr = [
        "name" => $_POST['name'],
        "alias" => $_POST['alias'],
        "age" => $_POST['age'],
        "description" => $_POST['description'],
        "photo" => $_POST['photo'],
        "experience" => $counter,
        "level" => $_POST['level'],
        "purpose" => $_POST['purpose'],
    ];
    
    if(!$arr['name']){
        echo "<h1>Session for new</h1>
        <form id='form' action = 'index.php' method = 'post'> 
            <fieldset>
                <legend>
                    About HERO
                </legend>
                <p>
                    Real Nmae
                    <input type='text' placeholder='Superhero real name' required name='name'>
                    Current alias
                    <input type='text' placeholder='Superhero alias' name='alias'>
                    Age
                    <input type='number' placeholder='Age' min='1' max='999' name='age'>
                </p>
                <p>
                    About
                    <textarea name='description' cols='70' rows='5' placeholder='Information about the superhero, max 500 symbols' maxlength='500'></textarea>
                </p>
                <p>
                    Photo:
                    <input type='file' placeholder='Choose file' name='photo'>
                </p>
            </fieldset>
            <fieldset>
                <legend>
                    Powers
                </legend>
                <p>
                    <input type='checkbox' name = 'experience0'>Strength 
                    <input type='checkbox' name = 'experience1'>Speed 
                    <input type='checkbox' name = 'experience2'>Inteligence 
                    <input type='checkbox' name = 'experience3'>Teleportation 
                    <input type='checkbox' name = 'experience4'>Immortal 
                    <input type='checkbox' name = 'experience5'>Another
                </p>
                <p>
                    Level of control:
                    <input type='range' min='0' max='10' value='1' name='level'>
                </p>
            </fieldset>
            <fieldset>
                <legend>
                    Publicity
                </legend>
                <p>
                    <input type='radio' name='purpose' value = '0'>UKNOWN  
                    <input type='radio' name='purpose' value = '1'>LIKE A GHOST 
                    <input type='radio' name='purpose' value = '2'>I AM IN COMICS 
                    <input type='radio' name='purpose' value = '3'>I HAVE FUN CLUB
                    <input type='radio' name='purpose' value = '4'>SUPERSTAR
                </p>
            </fieldset>
            <p>
                <input type='reset' value='CLEAR'> 
                <input type='submit' value='SEND'>  
            </p>
        </form>"; 
    }
    else {
        echo ('<fieldset height="300px" class="gg">');
        echo ('<h1>Session for new</h1>');
        echo ('<pre>');
        foreach ($arr as $key => $value) {
            echo "$key: $value\n";
        }
        echo ('<pre>');
        echo ('</fieldset>');
        echo ('<br><br><br><fieldset height="300px" class="gg">');
        echo('<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form id="form" action = "index.php" method = "post"> 
                    <p>
                        <input type="submit" value="FORGET" name="forget"> 
                    </p>
                </form>
            </body>
            </html>');
        echo ('</fieldset>');
    }
?>

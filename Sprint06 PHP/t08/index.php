<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin-left: 50px;">
<h1>ZXC?</h1>
<form action="index.php" method="post" style="font-size: 25px">
    <input type="radio" name="field" value="1" > Чел ты... <br>
    <input type="radio" name="field" value="2" > Забудь кнопку чата, клоун. <br>
    <input type="radio" name="field" value="3" > Ты свой пятиугольник видел? <br><br><br>
    
    <input type="submit" value="Отправить", style="font-size: 25px; border-radius: 15px; width: 250px; height: 50px; background: red; border: none; outline: none;">
</form>

<p style="font-size: 25px; color: red;">
    <?php 
        $messege = $_POST['field'];
        if ($messege) {
            if ($messege == "1") {
                echo "<br><br> Разбил шмотки.";
            }
            else if ($messege == "2") {
                echo "<br><br> Ты не гуль.";
            }
            else if($messege == "3") {
                echo "<br><br> Ты настоящий dead inside анямэ псих!";
            }
        }
    ?>
</p>
</body>
</html>
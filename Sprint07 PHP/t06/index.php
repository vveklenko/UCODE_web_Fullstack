<?php 
    function autoload($pClassName){
        include(__DIR__. '/' . $pClassName. '.php');
    }
    spl_autoload_register("autoload");
    error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <h1>Notepad</h1>
    <form action="index.php" method="post">
        <p><input type="text" placeholder="Input file name" name="name"></p>
        <p><select name="importance">
            <option value="low">low</option>
            <option value="medium">medium</option>
            <option value="high">high</option>
        </select></p>
        <p><textarea name="content" cols="30" rows="3" placeholder="Input some text..."></textarea></p>
        <p><input type="submit" value="Create" name="create"></p>
    </form>

    <?php 
        if(isset($_POST['create'])) {
            $filename = $_POST['name'];

            $name = "<li>"."Name: "."<b>".$_POST['name']."</b>"."<br>"."</li>";
            $importance = "<li>"."Importance: "."<b>".$_POST['importance']."</b>"."<br>"."</li>";
            $content = "<li>"."Text: "."<b>".$_POST['content']."</b>"."<br>"."</li>";

            $date = new DateTime('now');
            

            $tolkonejson = $date->format('Y-m-d H:i:s')." > ".$filename;
            $file = new Note("tmp/$tolkonejson");

            $date = "<li>"."Date: "."<b>".$date->format('Y-m-d H:i:s')."</b>"."<br>"."</li>";
            
            $file->write($date);
            $file->write($name);
            $file->write($importance);
            $file->write($content);

            $list= new NotePad("tmp");
            $info = $list->toList();

            echo "<h2>FilesList</h2>
                <ul>$info</ul>";
        }
        if($_GET['file']) {
            $arr = scandir("./tmp");
            foreach ($arr as $value) {
                if ($_GET['file'] == $value)  {
                    $tmp = "tmp/$value";
                    $file = new Note($tmp);

                    $content = $file->toList();

                    $list= new NotePad("tmp");
                    $info = $list->toList();

                    list($data, $fname) = explode(" > ", $value);

                echo "<h2>FilesList</h2>
                <ul>$info</ul>
                    <br> 
                        <form action='index.php' method='POST'> 
                            <h2>Detail of: \"$fname\"</h2> 
                            <ul>$content</ul>
                        </form>
                    <br> <br>";
                }  
            }
        }
        if($_GET['delete']) {
            $deleted = $_GET['delete'];
           
            unlink("tmp/".$deleted); // delete file

            $list= new NotePad("tmp");
            $info = $list->toList();

            echo "<h2>FilesList</h2>
                <ul>$info</ul>";
        }
        
    ?>
</body>
</html>
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
    <h1>Files</h1>
    <form action="index.php" method="post">
        <p>File name: 
        <input type="text" placeholder="Input file name" name="name">
        Content: 
        <textarea name="content" cols="30" rows="3"></textarea>
        <input type="submit" value="Create file" name="create">
        </p>
    </form>

    <?php 
        if(isset($_POST['create'])) {
            $filename = $_POST['name'];
            $content = $_POST['content'];

            $file= new File("tmp/$filename");
            $file->write($content);

            $content= $file->toList();

            $list= new FilesList("tmp");
            $info = $list->toList();

            echo "<h2>FilesList</h2>
                <ul>$info</ul>";
        }
        if($_GET['file']) {
            $arr = scandir("./tmp");
            foreach ($arr as $value) {
                if ($_GET['file'] == $value)  {
                    $tmp = "tmp/$value";
                    $file = new File($tmp);
                    $content= $file->toList();

                    $list= new FilesList("tmp");
                    $info = $list->toList();

                echo "<h2>FilesList</h2>
                <ul>$info</ul>
                    <br> 
                        <form action='index.php' method='POST'> 
                            <h2>Selected file: <i>\"$tmp\"</i></h2> 
                            <input type='text' name='temp' value='$tmp' hidden>
                            <input type='submit' name='delete' value='Delete file'> 
                        </form>
                    <br> <br> Content: $content";
                }  
            }
        }
        if(isset($_POST['delete'])) {
            $deleted = $_POST['temp'];
           
            unlink(glob($deleted)[0]); // delete file

            $list= new FilesList("tmp");
            $info = $list->toList();

            echo "<h2>FilesList</h2>
            <ul>$info</ul>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $myArr = array('name1', 'name2', 'name3');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searching_name = $_POST["search_name"];
        $flag = 0;
        foreach($myArr as $val){
            if($val == $searching_name){
                
                $flag = 1;
                break;
            }
        
        }

        if($flag == 1)
        echo "name was  present";
        else{
        echo "name was not present, added success";
                
        }
    }

    ?>

    <form action="" method="post">
        enter name: <br/>
        <input type="text" name="search_name" id="search_name"> <br/>
        <input type="submit" value="submit">
    </form>
</body>
</html>
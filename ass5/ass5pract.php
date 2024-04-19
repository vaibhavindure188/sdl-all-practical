<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        class shape{
            public function getArea(){
                return 0;
            }

        }
        class triangle extends shape{
            
           private $len ;
           private $wid ;

           public function setVal($len, $wid){
              $this->len = $len;
              $this->wid = $wid;
           }

           public function getArea()
           {
            return ($this->len * $this->wid)/2;
           }

        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $val =  $_POST["shape"];
            if($val == "triangle"){
                 $t = new triangle();
                 $t->setVal(5,6);
                 $ans = $t->getArea();
                 echo "$ans";
            }
        }
    ?>


  <form action="" method="post">
    <input type="radio" name="shape" value="triangle"> triangle <br/>
    <input type="radio" name="shape" value="circle"> circle <br/>
    <input type="radio" name="shape" value="square"> square <br/>
    <input type="submit" value="submit">  <br/>

  </form>



   
</body>
</html>
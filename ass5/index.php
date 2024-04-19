<!DOCTYPE html>
<html>

<head>
    <title>Inheritance Example</title>
</head>

<body>

    <?php
/****************************************************************************** */
    class Shape
    {
        public function getArea()
        {
            return 0; // Placeholder method, each subclass will override it
        }
    }
    
    class Triangle extends Shape
    {
        private $base;
        private $height;
    
        public function setDimensions($base, $height)
        {
            $this->base = $base;
            $this->height = $height;
        }
    
        public function getArea()
        {
            return 0.5 * $this->base * $this->height;
        }
    }
    
    class Square extends Shape
    {
        private $side;
    
        public function setSide($side)
        {
            $this->side = $side;
        }
    
        public function getArea()
        {
            return $this->side * $this->side;
        }
    }
    
    class Circle extends Shape
    {
        private $radius;
    
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
    
        public function getArea()
        {
            return pi() * $this->radius * $this->radius;
        }
    }
//************************************************************************** */
    // Display area based on user selection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedShape = $_POST["shape"];  // these two lines are mendetory as it is 

        switch ($selectedShape) {
            case "triangle":
                $shape = new Triangle();
                $shape->setDimensions(10, 5); // Sample dimensions
                break;
            case "square":
                $shape = new Square();
                $shape->setSide(8); // Sample side length
                break;
            case "circle":
                $shape = new Circle();
                $shape->setRadius(4); // Sample radius
                break;
            default:
                $shape = new Shape(); // Default shape (will return 0 area)
        }

        $area = $shape->getArea();
        echo "<p>Area of the selected shape ($selectedShape) is: $area</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>
            <input type="radio" name="shape" value="triangle" checked /> Triangle 
            <!--default checked, name should be same and values should be different because we are using radio button -->
        </label>
        <label>
            <input type="radio" name="shape" value="square" /> Square
        </label>
        <label>
            <input type="radio" name="shape" value="circle"> Circle
        </label>
        <br>
        <input type="submit" value="Calculate Area">
    </form>

</body>

</html>
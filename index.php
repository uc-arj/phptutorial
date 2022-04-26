<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    echo "Hello World!";
    ?>

    <?php
    echo "<h1> Comment Declaration</h1>";  
    echo "Jai Bharat";
    //add comment  to the code single line
    # another method of single line com
    /* this is multiline comment method for multiple purpose*/
    echo "hello";
    // Declaring Varible
    echo"<h1> Variable Declartion</h1>";
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5; 
    $y = 4;
    echo "<br> $txt1<br>";
    echo "<h1> Scope test </h1>";
    //Global variable acessing
    function testScope(){
        //this will generate an error for user
        // echo"<br>Function for scope in local the code: $x";
        // echo "<p>Variable x inside function is: $x</p>";
    }
    testScope();

    //local varible acessing
    echo "<p>Variable x outside function is: $x</p>";

    echo "<h1> Inside Scope declartion</h1>";
    function insidescope(){
        $z=5;
        echo "inside varible: $z";
    }

    insidescope();
    //this will throw an error for not Acessing outside variable
    // echo"Acessing Inside Variable For local Scope Verification: $z ";

    //global varible aceessing by global keyword
    echo "<h1> Global Keyword Testing </h1>";
        function myTest() {
        global $x, $y;
        $y = $x + $y;
        }

        myTest();
        echo $y; // outputs 15
    
    echo "<h1> Echo/print Function </h1>";
    /* Echo print Print_r var_dump  function */
    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;

    // The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions.
    // echo can take multiple parameters (although such usage is rare) while print can take one argument. 
    //echo is marginally faster than print.
    
    echo "<h1> var_dump Function and print_r </h1>";
    $x = 5985;
    var_dump($x);

    echo "<br>";
    echo "<h3> print_r </h3>";
    $a = array("red", "green", "blue");
    print_r($a);

    echo "<br>";

    $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    print_r($b);

    echo "<br>";
    $cars = array("Volvo","BMW","Toyota");
    echo "<br>";
    var_dump($cars);
    echo "<br>";
    
    echo "<h1> Class Declartion</h1>";
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("black", "Volvo");
      echo $myCar -> message();
      echo "<br>";
      $myCar = new Car("red", "Toyota");
      echo $myCar -> message();
    echo "<br>";

    // A variable of data type NULL is a variable that has no value assigned to it.

    // Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

    // Variables can also be emptied by setting the value to NULL:
    echo "<h3> Null Defination </h3>";
    $x = "Hello world!";
    $x = null;
    var_dump($x);


    ?>

</body>

</html>
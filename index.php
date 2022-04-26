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

    echo "<h1>String Function Declartion</h1>";
    $x="faul Paul";
    echo "<h4>String length</h4>";
    echo strlen($x);
    echo "<br>";
    echo "<h4>String word count</h4>";
    echo str_word_count($x);
    echo "<br>";
    echo "<h4>String reverse</h4>";
    echo strrev($x);
    echo "<br>";
    echo "<h4>String postion finder of Pa</h4>";
    echo strpos($x,"Pa");
    echo "<br>";
    echo "<h4>String replace</h4>";
    echo str_replace("Paul","carry",$x);
    echo "<br>";

    echo "<h4>For Nan Checking</h4>";
    $x= 8;
    var_dump($x);
    echo is_nan($x);
    
    
    echo "<br>";
    echo "<h4>Constant define</h4>";
    define("follow","hello this is constant value of pi define by myside");
    define("pi","992");
    echo "pi:", pi;
    echo "<br>";
    echo follow;
    echo "<br>";
    echo "<h1>Concat</h1>";
    $x="hello";
    $y="Arpan";
    echo $x.$y;
    echo "<h1>If else condition</h1>";
    echo" <h4>Define for day when user Hour more than 20</h4>";
    $t=date("H");
    if ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }
    echo "<br>";
    if ($t < "10") {
      echo "Have a good morning!";
    } elseif ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }
    echo "<br>";
    echo "<h1>Switch Case condition</h1>";
    $favcolor = "violet";

    switch ($favcolor) {
      case "red":
        echo "Your favorite color is red!";
        break;
      case "blue":
        echo "Your favorite color is blue!";
        break;
      case "green":
        echo "Your favorite color is green!";
        break;
      default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    echo "<br>";

    echo "<h1>Break and Continue</h1>";
    for ($x = 0; $x < 10; $x++) {
      if ($x == 4) {
        break;
      }
      echo "The number is: $x <br>";
    }
    for ($x = 0; $x < 10; $x++) {
      if ($x == 4) {
        continue;
      }
      echo "The number is: $x <br>";
    }
    $x=0;
    while($x<10){
      if($x==4){
        $x++;

        // echo "$x";
        
      }
  
     echo "the number is for : $x <br>";
     $x++;
     echo"$x";
    }
    echo "<h1>Loops</h1>";
    $x = 1;

     while($x <= 5) {
      echo " while loop The number is: $x <br>";
      $x++;
    }
    echo "<br>";
    for($x=0;$x<10;$x++){
      echo "for loop the Number: $x<br>";
    }
    echo "<br>";
    do {
      echo " do while The number is: $x <br>";
      $x++;
    } while ($x <= 12);
    echo "<br>";
    $colors = array("red", "green", "blue", "yellow");

    echo"for each<br>";
    foreach ($colors as $value) {
      echo "$value <br>";
    }

    echo "<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "for each <br>";
      foreach($age as $x => $val) {
        echo " $x = $val<br>";
      }
    echo "<h1>Function</h1>";
    function familyName($fname) {
      echo "Function value $fname Refsnes.<br>";
    }
    
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    echo "<br>";
    $d=cal_days_in_month(CAL_GREGORIAN,10,2005);
      echo "There was $d days in October 2005";

    echo "<br>";
    echo "<h4>default parameter</h4>";
      function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>";
      }
      
      setHeight(350);
      setHeight(); // will use the default value of 50
      setHeight(135);
      setHeight(80);
      echo "<br>";
      echo "<h4>sum Function</h4>";
      function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
      }

      echo "5 + 10 = " . sum(5, 10) . "<br>";
      echo "7 + 13 = " . sum(7, 13) . "<br>";
      echo "2 + 4 = " . sum(2, 4);
      echo "<br>";
      echo "<h4>Function by pass by reference</h4>";
      function add_five(&$value) {
        $value += 5;
      }
      
      $num = 2;
      echo($num);
      echo "<br>";
      add_five($num);
      echo $num;
      echo "<br>";
      echo "<h4>Function by pass by call</h4>";
      function add_fivecall($value) {
        $value += 5;
      }
      
      $num = 2;
      echo($num);
      echo "<br>";
      add_fivecall($num);
      echo $num;
    ?>
    


</body>

</html>

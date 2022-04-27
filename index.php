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
      echo "<br>";
      echo "<h1>Array</h1>";
      $employ=array("scoda","bMw","toytoa");
      echo "I have $employ[0]<br>";
      
      echo "<br>";
      $arrlength=count($employ);
      echo "array loop <br>";
      for($x=0;$x<$arrlength;$x++){
        echo $employ[$x];
        echo"<br>";
      }

      echo "<h1>Associated Array</h1>";
      $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

      foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
      }
      echo "<h1>MultiDimensional Array</h1>";

      $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );

      for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
      }
      echo"<br>";
      echo "<h4>Sorting</h4>";
      echo "<p>sort()</p>";
      sort($employ);
      print_r($employ);
      echo"<br>";
      ksort($age);
      print_r($age);
      echo"<br>";


      echo "<h4>Key Finder</h4>";
      $a=array("Volvo"=>"XC90","BMW"=>"X5");
      echo "$a[Volvo]<br>";
      if (array_key_exists("Volvo",$a))
        {
        echo "Key exists!";
        }
      else
        {
        echo "Key does not exist!";
        }

      
      echo "<h4> Mapping</h4>";
        function myfunction($v)
          {
            return($v*$v);
          }

          $a=array(1,2,3,4,5);

      echo "<h4>count</h4>";
      echo count($employ);
      echo"<br>";

      echo "<h4>in_array</h4>";

      if (in_array("bMw", $employ))
      {
      echo "Match found";
      }
    else
      {
      echo "Match not found";
      }
      echo "<h4>array_columnn</h4>";
      $a = array(
        array(
          'id' => 5698,
          'first_name' => 'Peter',
          'last_name' => 'Griffin',
        ),
        array(
          'id' => 4767,
          'first_name' => 'Ben',
          'last_name' => 'Smith',
        ),
        array(
          'id' => 3809,
          'first_name' => 'Joe',
          'last_name' => 'Doe',
        )
      );
      echo"<br>";
      $last_names = array_column($a,'last_name','id');
      print_r($last_names);
      echo"<br>";
      echo "<h4>array_combine</h4>";
      $fname=array("Peter","Ben","Joe");
        $age=array("35","37","43");

        $c=array_combine($fname,$age);
        print_r($c);
        echo"<br>";
        echo "<h4>array_merge</h4>";
        print_r(array_merge($fname,$age));
        echo"<br>";
        echo "<h4>array push and pop</h4>";
        $a=array("red","green","blue");
        array_pop($a);
        print_r($a);
        
        echo"<br>";
        array_push($a,"blue","yellow");
        print_r($a);
        echo "<h4>array_difference and unique</h4>";
        $a2=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a1=array("e"=>"red","f"=>"green","g"=>"blue");
        
        $result=array_diff($a1,$a2);
        // echo"<br>";
        $result=array_diff_key($a1,$a2);
        // echo"<br>";
        print_r(array_unique($a1));


        echo "<h4>array_value</h4>";
        print_r(array_values($a));
        echo"<br>";
        echo" <h1>Json function</h1>";
        echo "<h4>Jso function decode encode</h4>";
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        var_dump(json_decode($jsonobj));
        echo"<br>";
        echo"<br>";
        echo json_encode($jsonobj);
        echo" <h1>Date function</h1>";
        echo "Today is " . date("Y/m/d") . "<br>";  
        echo "The time is " . date("h:i:sa");
        echo "<h4>Dat eAdd function</h4>";
        echo"<br>";
        $date=date_create("2013-03-15");
        date_add($date,date_interval_create_from_date_string("40 days"));
        echo date_format($date,"Y/m/d");
        echo"<br>";
        echo "<h4>date format</h4>";
        $date=date_create("2013-03-15 124520");
        echo date_format($date,"Y/m/d H:i:s");
        echo "<h4>gettimeof day</h4>";
        echo(strtotime("last Sunday"));
        echo"<br>";
        echo gettimeofday(true);
        $t=time();
        echo "<h4>time function</h4>";
        echo($t . "<br>");
        echo(date("Y-m-d H:m:s",$t));
?>




        
    ?>
    


</body>

</html>

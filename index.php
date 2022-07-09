<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Php</title>
</head>
<body>
  <h2>First code</h2>
  <!-- First php line of code -->
  <?php echo "Hello World, Denzel is learning Php"; ?>
  <br> <br>

  <!-- Variables -->
  <h2>Variables</h2>
  <?php
  // function varTest() {
  $val_1 = 2.2888880;
  $val_2 = 2.21111200;
  $result = $val_1 + $val_2;
    // print("$val_1 + $val_2 = $result");
    echo "$val_1 + $val_2 = $result";
    echo "<br><br>"; // To space
  // }
  // varTest(); I was trying out a function, and it worked.
  
  // // The if condition
    // // The result is 4.5
    
    $ifTesting = 4.5;
    if($result == $ifTesting){
      echo "Hurray, you have understood the if statement";
    } else {
      echo "Nope, give it another try";
      
    }
  echo "<br><br>";

  // Still on variables
  // The string with the double qoutes can read variables, 
  // while the one with the single quotes is interpreted literally
  $stringTest = "Denzel";
  $singleQuotes = 'My name is $stringTest';

  echo $singleQuotes;
  print "<br><br>";

  $doubleQuotes = "My name is $stringTest";
  echo $doubleQuotes;
  ?>
  <br><br>
    <!-- Creating another php tag won't break the connection from the later one, this is just to take on a different topic -->
    <h3>Variable scope</h3>
    <!-- Variable scope -->
    <h4>Local Variable</h4>
    <?php
    // Global and Local variable
    // A global variable is one that can be accessed anywhere in a code.
    // Local variable is a variable inside a function is accesible only in that function, unless reassigned elsewhere outside the function.
    $num1 = 4;
      function varScopeLoacal () {
        $num1 = 10;
        echo "The local variable value is $num1";
      }
      // Call the function
      varScopeLoacal();
      print "<br><br>";
    // Accessing the one assigned outside the function
    echo "The global variable value is $num1";
    ?>
    <br>
    <h4>Global Variable</h4>
    <!-- // To access the global variable, use the keyword GLOBAL just before the variable name, in the function you want to declare it, so that you can modify it. -->
    <?php
    $num2 = 14;
      function globalVar () {
        GLOBAL $num2;
        $num2++;
          echo "The global variable has been incremented from 14 to $num2";
      }
      globalVar();
    ?> 
  <br><br>
  <h2>Constants</h2>
    <?php
    define("MINSIZE", 50);
    
    echo MINSIZE;
    print "<br>";
    echo constant("MINSIZE"); // same thing as the previous line
  ?>
  <br><br>
  <h2>Decision Making</h2>
    <h3>If...Else</h3>
      <?php
            // An if...else statement to test the date and then wish a happy weekend
            $todayDate = date("D"); //date is an inbuilt function that must have a variable D parameter to hold the day to be assigned.
              if ($todayDate == "Sat")
                echo "It's Saturday, enjoy your weekend!!! 🤩";
              else
                echo "Enjoy your weekday! 😊";
          ?> 
          <br> <br>
        <h3>ElseIf</h3>
          <?php
          //Output the day today
            $today = date("D");
              if ($today == "Mon")
                echo "Enjoy your Monday! ❤️";
              elseif ($today == "Tue")  
                echo "Happy Tuesday!! 💪";
              elseif ($today == "Wed")
                echo "It's Wednesday, jibambeee!!! 🍵";
              elseif ($today == "Thu")  
                echo "Throwback Thursday is here!!!! 😀";
              elseif ($today == "Fri")  
                echo "It's Furahiiii_Daaayyy!!!!! 🥰😎😍";
              elseif ($today == "Sat")
                echo "Leo ndio ile siku 😉😁🤡";
              elseif ($today == "Sun")
                echo "Siku ya God manze 🤗";
              else
                echo "Kwani leo ni lini??? 😫";

          ?>
          <h3>Switch</h3>
            <?php
              // $todayDate = date("D");
                switch ($todayDate) {
                  case "Mon":
                    echo "Enjoy your Monday! ❤️";
                  break;
                  case "Tue":
                    echo "Happy Tuesday!! 💪";
                  break;
                  case "Wed":
                    echo "It's Wednesday, jibambeee!!! 🍵";
                  break;
                  case "Thu":
                    echo "Throwback Thursday is here!!!! 😀";
                  break;
                  case "Fri":
                    echo "It's Furahiiii_Daaayyy!!!!! 🥰😎😍";
                  break;
                  case "Sat":
                    echo "Leo ndio ile siku 😉😁🤡";
                  break;
                  case "Sun":
                    echo "Siku ya God manze 🤗";
                  break;
                  default:
                  echo "Kwani leo ni lini??? 😫";
                }
            ?>
        
        
        
        <br><br>
  <h2>Loops</h2>
    <h3>For Loop</h3>
      <?php
        $num5 = 0;
        $num6 = 0;
          for ($i = 0; $i < 5; $i++) {
            //Increment the values of num5 and num6, such that, 
            // num5 = 0, then 0 + 10 = 10
            // num5 = 10, then 10 + 10 = 20
            $num5 += 10;
            $num6 += 5;
          }
          echo "The values after the loop are num5 = $num5 and num6 = $num6";
        echo "<br><br>";
        // Another for loop
        $num7 = 0;
        $num8 = 50;
          for ($i = 0; $i <= 10; $i++) {
            $num7 ++;
            $num8 --;
          }
          echo "Num7 stopped at $num7 and num8 stopped at $num8";  
      ?>  
    <h3>While Loop</h3>    
      <?php
        $num9 = 0;
        $num10 = 50;
          while ($i < 10) {
            $num9 ++;
            $num10 --;
          }
          echo "The while loop stopped at num9 = $num9 and num10 = $num10";
          echo "<br><br>";
      ?>
    <h3>Do while Loop</h3>  
      <?php
        $num11 = 0;
          do {
            $num11 ++;
          }
          while ($num11 < 10 ); 
            echo "Loop stops at num11 = $num11";    
      ?>
    <h3>For Each Loop</h3>
      <?php
        $arrLoop = array("Denzel", "Murathi", "Gitonga");
        // The elements will be assigned to the variable $arrElements below
          foreach ($arrLoop as $arrElements) {
            // To print the elements on separate lines
            echo "The array contains $arrElements <br>";
          }
      ?>
      <h4>Break Statement</h4>
        <?php
          $num12 = 0; 
            while ($num12 < 5) {
              $num12 ++;
                if($num12 == 3) break; //stops the loop
            }
            echo "The loop was supposed to go on until 5, but stopped at $num12";
        ?>
      <h4>Continue Statement</h4>
        <!-- To skip a particular value met in the loop -->
        <?php
          $arrCont = array("Denzel", "Murathi", "Gitonga");
            foreach ($arrCont as $cont) {
              if ($cont == "Murathi") continue;
              echo "The array contains $cont <br>";
            }
        ?>
  <h2>Arrays</h2>
    <h3>Numeric Array</h3>
    <!-- These are arrays who indexes are accessed in number form -->
      <?php
      // First way of creating an array
        function firstArrayCreation () {
        $arrNumeric = array("Denzel", "Catherine", "Gitonga", "Ishaa", 5);
          foreach ($arrNumeric as $arrValues) {
            echo "The first array contains $arrValues <br>";
          }
          echo "<br>";
        // The second way of creating an array  
        function secondArryaCreation () {
          $arrNumeric [0] = "Denzel";
          $arrNumeric [1] = "Catherine";
          $arrNumeric [2] = "Bethel";
          $arrNumeric [3] = "Ishaa";
          $arrNumeric [4] = 5;
            foreach ($arrNumeric as $arrValues) {
              echo "The second array contains: $arrValues <br>";
            }
        }
        echo "<br>";
      }
      firstArrayCreation();
      secondArryaCreation();
      ?>
      <br>
    <h3>Associative Array</h3>
    <!-- These are arrays which contains values that corelate, eg salaries of employees -->
      <?php
        function firstArr () {
          $assArr = array ("Denzel" => 50000000, "Catherine" => 1000000, "Ishaa" => 45000000);
            // foreach ($assArr as $assArrValues) {
            //   echo "The salaries are $assArrValues"; //This will only print out the values "5000000", not the keys "Denzel"
            // }
            echo "The salary of Denzel is " . $assArr['Denzel'] . "<br>";
            echo "Catherine's salary is " . $assArr['Catherine'] . "<br>";
            echo "Ishaa's salary is " . $assArr['Ishaa'] . "<br>";
        }
        function secondArr () {
          $assArr['Denzel'] = "High";
          $assArr['Ishaa'] = "Second high";
          $assArr['Catherine'] = "Average";
            echo "The salary of Denzel is " . $assArr['Denzel'] . "<br>";
            echo "Ishaa's salary is " . $assArr['Ishaa'] . "<br>";
            echo "Catherine's salary is " . $assArr['Catherine'] . "<br>";
        }
        firstArr();
        echo "<br>";
        secondArr();
      ?>
    <h3>Multidimensional array</h3>
    <!-- An array can contain multiple numeric and/or associative arrays within it -->
      <?php
        function multiArr () {
          $marks = array ("Denzel" => array("Physics" => 80, "Chemistry" => 95, "Mathematics" => 85),
                          "Catherine" => array("Physics" => 85, "Chemistry" => 90, "Mathematics" => 90),
                          "Bethel" => array("Physics" => 75, "Chemistry" => 73, "Mathematics" => 85)
          
          );
            echo "Denzel's marks are for Physics are " . $marks['Denzel']['Physics'] . "<br>";
            echo "Bethel's marks for Chemistry are " . $marks['Bethel']['Chemistry'] . "<br>";
            echo "Catherine's marks for Mathematics are " . $marks['Catherine']['Mathematics'];
        }
        multiArr();
      ?>

</body>
</html>
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
        
    
    

</body>
</html>
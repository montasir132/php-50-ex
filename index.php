<!doctype html>
<html lang="en">
  <head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="php-string-function">
    <meta name="description" content="PHP provides a variety of string functions to manipulate and analyze strings. Here are some commonly used PHP string functions along with brief descriptions">
    <meta name="keywords" content="php-string-function,echo,print,chunk_split,explode,md5,sha1,str_increment,str_word_count,str_repeat,str_ireplace,str_shuffle,str_split,strip-tags,stripos,strlen,substr_count,substr_replace,trim,wordwrap,utf8_decode,utf8_encode">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="author" content="Montasir Alam">
    <title>php-50ex</title>
    <!--favicon link-->
    <link rel="icon" type="image/png" href="images/php-logo.png">
    <!--css links-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div><h1>1. Hello World</h1>
      <?php
        echo "Hello, World!";
      ?>
      </div>
      <div><h1>2. Variables</h1>
      <?php
        $name = "Montasir";
        $age = 17;
        echo "Name: $name, Age: $age";
      ?>
      </div>
      <div>
        <h1>3. Data Types</h1>
        <?php
            $intVar = 10;
            $floatVar = 10.5;
            $stringVar = "Hello";
            $boolVar = true;
        ?>
      </div>
      <div>
        <h1>4. Arrays</h1>
        <?php 
        $array = array("apple", "banana", "cherry"); 
        print_r($array); 
        ?>
      </div>
      <div>
        <h1>5. Associative Arrays</h1>
        <?php 
        $assocArray = array("name" => "John", "age" => 25); 
        echo $assocArray["name"]; 
        ?>
      </div>
      <div>
        <h1>6. Loops - for</h1>
        <?php 
          for ($i = 0; $i < 5; $i++) 
          { echo $i; } 
        ?>
      </div>
      <div>
        <h1>7. Loops - while</h1>
        <?php 
          $i = 0; while ($i < 5) 
          { echo $i; $i++; } 
        ?>
      </div>
      <div>
        <h1>8. Functions</h1>
        <?php 
        function greet($name) 
        { return "Hello, $name!"; } 
        echo greet("John"); 
        ?>
      </div>
      <div>
        <h1>9. Global Variables</h1>
        <?php 
        $globalVar = "I am global"; 
        function myFunction() { 
          global $globalVar; 
          echo $globalVar; 
        }
        myFunction(); 
        ?>
      </div>
    <div class="1"><h1>10. echo print</h1>
    <?php
        function textMessage(){   
          echo"Hello, World!";
          print"Hello, World!";
        }
        textMessage()
    ?>
    </div>
    <div> <h1>11. chunk_split</h1>
      <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo chunk_split($data,5,"...");
      ?>
    </div>
    <div><h1>12. explode</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          print_r(explode(" ", $data));
      ?>
    </div>
    <div><h1>13. md5</h1>
    <?php 
          $pass = "Hello World!";
          echo $pass."</br>";
          echo md5($pass) ;
      ?>
    </div>
    <div><h1>14. sha1</h1>
    <?php 
          $pass = "Hello World!";
          echo $pass."</br>";
          echo sha1($pass) ;
      ?>
    </div>
    <div><h1>15. printf</h1>
    <?php 
          $pass = "Hello World!";
          echo $pass."</br>";
          printf($pass) ;
      ?>
    </div>
    <div><h1>16. str_increment</h1>
    <?php 
          $pass = "montasir";
          echo $pass."</br>";
          echo str_increment($pass) ;
      ?>
    </div>
    <div><h1>17. str_word_count</h1>
    <?php 
          $data = "loram ipsam hello i am a doctor";
          echo $data."</br>";
          echo (str_word_count($data)) ;
          print_r (str_word_count($data,1)) ;
      ?>
    </div>
    <div><h1>18. str_repeat</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo str_repeat($data , 7) ;
      ?>
    </div>
    <div><h1>19. str_ireplace</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo str_ireplace( "world","loram ipsam" , $data );
      ?>
    </div>
    <div><h1>20. str_shuffle</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo str_shuffle($data );
      ?>
    </div>
    <div><h1>21. str_split</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          print_r (str_split($data ));
      ?>
    </div>
    <div><h1>22. strip-tags</h1>
    <?php 
          $data = '<H4>Hello World!</H4>';
          echo $data."</br>";
          echo strip_tags($data);
      ?>
    </div>
    <div> <h1>23. stripos</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo stripos($data, "World");
      ?>
    </div>
    <div> <h1>24. strlen</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo strlen($data);
      ?>
    </div>
    <div> <h1>25. substr_count</h1>
    <?php 
          $data = "Hello World loram ipsam hello i am a doctor!";
          echo $data."</br>";
          echo substr_count($data, "l");
      ?>
    </div>
    <div> <h1>26. substr_replace</h1>
    <?php 
          $data = "Hello World loram ipsam hello i am a doctor !";
          echo $data."</br>";
          echo substr_replace($data, "doctor" ,  -2, );
      ?>
    </div>
    <div> <h1>27. trim</h1>
    <?php 
          $data = "Hello World loram ipsam hello i am a doctor !";
          echo $data."</br>";
          $trimmed = trim($data, 'HdWr');
          var_dump($trimmed);
          ?>
    </div>
    <div> <h1>28. wordwrap</h1>
    <?php 
          $data = "Hello World loram ipsam hello i am a doctor !";
          echo $data."</br>";
          $newtext = wordwrap($data, 10, "<br />\n");
          echo $newtext;
    ?>
    </div>
    <div>
      <h1>29. strpos</h1>
      <?php
      $data = "Hello, World!";
      echo $data."</br>";
      echo strpos($data, "World"); // Outputs: 7
      ?>
    </div>
    <div>
      <h1>30. substr</h1>
      <?php 
      $data = "Hello, World!";
      echo $data."</br>";
      echo substr($data, 7, 5); // Outputs: World
      ?>
    </div>
    <div>
      <h1>31. strtoupper</h1>
      <?php 
      $str = "Hello, World!";
      echo $str."</br>";
      echo strtoupper($str); // Outputs: HELLO, WORLD!      
      ?>
    </div>
    <div>
      <h1>32. strtolower</h1>
      <?php 
      $str = "Hello, World!";
      echo $str."</br>";
      echo strtolower($str); // Outputs: HELLO, WORLD!      
      ?>
    </div>
    <div>
      <h1>33. strrev</h1>
      <?php 
      $str = "Hello, World!";
      echo $str."</br>";
      echo strrev($str); // Outputs: !dlroW ,olleH   
      ?>
    </div>
    <div>
      <h1>34. Loops - foreach</h1>
      <?php
      $array = array("apple", "banana", "cherry");
      foreach ($array as $fruit) {
      echo $fruit;
      }
      ?>
    </div>
    <div>
      <h1>35. strchr: Alias of strstr()</h1>
      <?php 
      $str = "Hello, World!";
      echo $str."</br>";
      echo strchr($str, "World"); // Outputs: World!
      ?>
    </div>
    <div>
      <h1>36. number_format()</h1><h4>Formats a number with grouped thousands.</h4>
      <?php 
      $num =  123456.6453;
      echo $num."</br>";
      echo number_format($num); // Outputs: 123,457 
      ?>
    </div>
    <div>
      <h1>37. str_pad()</h1><h4>Pads a string to a certain length with another string</h4>
      <?php 
      $str = "Hello";
      echo $str."</br>";
      echo str_pad($str, 10, "-"); // Outputs: Hello-----
      ?>
    </div>
    <div>
      <h1>38. strcmp()</h1><h4>Compares two strings (case-sensitive)</h4>
      <?php 
      $str1 = "Hello"; 
      $str2 = "hello"; 
      echo strcmp($str1, $str2); // Outputs: a negative number
      ?>
    </div>
    <div>
      <h1>39. ord()</h1><h4>Returns the ASCII value of a character()</h4>
      <?php 
      $char = 'A'; 
      echo ord($char); // Outputs: 65
      ?>
    </div>
    <div>
      <h1>40. strcasecmp()</h1><h4>Compares two strings (case-insensitive).</h4>
      <?php 
      $str1 = "Hello"; 
      $str2 = "hello"; 
      echo strcasecmp($str1, $str2); // Outputs: 0
      ?>
    </div>
    <div>
      <h1>41. Basic Arithmetic Operations(x=10)(y=6)(X+Y)=?</h1>
      <?php 
      $x = 10;
      $y = 6; 
       echo $x + $y; // Outputs: 16
      ?>
    </div>
    <div>
      <h1>42. Comparison Operators </h1>
      <?php
      $x = 100;
      $y = "100";
      var_dump($x == $y); // Outputs: bool(true)
      var_dump($x === $y); // Outputs: bool(false)
      ?>
    </div>
    <div>
      <h1>43. String Join (Implode)</h1>
      <?php
      $arr = array("Hello", "World", "PHP"); 
      echo implode(" ", $arr); // Outputs: Hello World PHP
      ?>
    </div>
    <div>
      <h1>44. String Trimming</h1>
      <?php
      $str = " Hello World! "; 
      echo $str;
      echo trim($str); // Outputs: Hello World!
      ?>
    </div>
    <div>
      <h1>45. Null Coalescing Operator</h1>
      <?php
      $name = $_GET['name'] ?? 'Guest'; 
      echo $name; // Outputs: Guest if 'name' is not set
      ?>
    </div>
    <div>
      <h1>46. Static Keyword</h1>
      <?php 
      function myTest()
       { static $x = 0; 
        echo $x; 
        $x++; 
      } 
      myTest(); // Outputs: 0 
      myTest(); // Outputs: 1
      ?>
    </div>
    <div>
      <h1>47. Date Function</h1>
      <?php  
      echo "Today is " . date("Y/m/d") . "<br>";
      ?>
    </div>
    <div>
      <h1>48. While Loop</h1>
      <?php
      $x = 1; 
      while($x <= 5) 
      { echo "The number is: $x <br>"; 
        $x++; }
      ?>
    </div>
    <div>
      <h1>49. Comments</h1>
      <?php
      // This is a single-line comment 
      # This is another single-line comment 
      /* This is a multi-line comment */
      ?>
    </div>
    <div>
      <h1>50. ucfirst()</h1>
      <h4>Converts the first character of a string to uppercase</h4>
      <?php 
      $str = "hello, World!";
      echo ucfirst($str); // Outputs: Hello, World!      
      ?>
    </div>
    </div>
    <!--js links-->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
 
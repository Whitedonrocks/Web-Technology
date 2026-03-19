<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- Create an HTML page that uses PHP to print "Hello, World!" inside a tag. The page should hav a proper HTML structure and tags -->
     <?php
        echo "<h1>Hello, World!</h1>";
        echo "<br>";


    // <!-- Declare five  variables of different types : a sring (name), an integer (age), a float (gpa), a boolean (isEnrolled) and null (graducated). Print each with a label using echo-->
   
        $name = "Alice"; // String
        $age = 30; // Integer
        $gpa = 3.8; // Float
        $isEnrolled = true; // Boolean
        $graduated = null; // Null

        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "GPA: " . $gpa . "<br>";
        echo "Is Enrolled: " . ($isEnrolled ? "Yes" : "No") . "<br>";
        echo "Graduated: " . ($graduated === null ? "Not Graduated" : "Graduated") . "<br>";


    // <!-- Declare $firstName ="Ada" and $lastName= "Lovelace" Concatenate them with a space in between to make a full name. Then append the sting "--Programmer" to the result and print it. -->
  
        $firstName = "Ada";
        $lastName = "Lovelace";
        $fullName = $firstName . " " . $lastName; // Concatenation
        $fullName .= " --Programmer"; // Append
        echo $fullName."<br>";


    // <!-- Rewrite the previous problem using double quotes string interpolation instead of the . operator -->
  
        $firstName = "Ada";
        $lastName = "Lovelace";
        $fullName = "$firstName $lastName"; // String interpolation
        $fullName .= " --Programmer"; // Append
        echo $fullName."<br>";

    // <!-- Given $csv="Alice,85,Maths;Bob,90,Science;Carol,78,English",split by semicolon to get rows then split each row by comma to get fileds Print each student's name and score -->
 
        $csv = "Alice,85,Maths;Bob,90,Science;Carol,78,English";
        $rows = explode(";", $csv); // Split by semicolon
        foreach ($rows as $row) {
            $fields = explode(",", $row); // Split by comma
            $name = $fields[0];
            $score = $fields[1];
            echo "Name: $name, Score: $score<br>";
        }


    // <!-- Start with $queue = ["Task1", "Task2", "Task3"]. Add "Task4" to the end of the array and add "Task0" to the beginning,remove the last item and remove the first item.Print the final array -->
 
        $queue = ["Task1", "Task2", "Task3"];
        array_push($queue, "Task4"); // Add to end
        array_unshift($queue, "Task0"); // Add to beginning
        array_pop($queue); // Remove last item
        array_shift($queue); // Remove first item
        foreach ($queue as $task) {
            echo $task . "<br>";
        }

    //  <!-- Write a recursive function factorial($n) that returns the factorial of a non-negative integer.It should handel the base case (0!=1) and call itself for the recursive case.Test ift for n=0.5 and 10.  -->

        function factorial($n) {
            if ($n < 0) {
                return "Error: Input must be a non-negative integer.";
            } elseif ($n == 0||$n == 1) {
                return 1; // Base case
            } else {
                return $n * factorial($n - 1); // Recursive case
            }
        }

        // Test the function
        echo "Factorial of 0: " . factorial(0) . "<br>";
        echo "Factorial of 10: " . factorial(10) . "<br>";
    ?>
</body>
</html>
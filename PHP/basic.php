<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>
    <h1>Welcome to PHP!</h1>
    <?php echo "Hello, World!"; 
        echo "<br>";?>
    <?php
        // Declare a variable
        $subject= "Web Technology";
        // Define Constants
        define("PI", 3.14);
        const PI=3.14;
        // Print
        print "Hello, PHP!";
        echo "<br>";
        echo $subject;
        echo "<br>";
        echo PI;
        // Data Types
        $age = 25; // Integer
        $name = "John"; // String
        $pi = 3.14; // Float
        $isStudent = true; // Boolean
        $surname= 'Nepal'; // String
        $empyloyee = null; // Null

        $fruits = ["Apple", "Banana", "Cherry"]; // Array

        // Class and Object
        class Car { // Class
            public $make;
            public $model;
            public function __construct($make, $model) {
                $this->make = $make;
                $this->model = $model;
            }
        }
        $myCar = new Car("Toyota", "Corolla"); // Object

        // Control Structures
        $file=fopen("file.txt", "w"); // File Handling

        // String Concatenation
        $greeting = "Hello, " . $name . "!"; // Concatenation

        // String Interpolation
        $greeting2 = "Hello, $name!"; // Interpolation

        // String Helper Function
        $length = strlen($name); // String Length
        $upper = strtoupper($name); // String to Uppercase
        $lower = strtolower($name); // String to Lowercase
        $replaced = str_replace("John", "Jane", $name); // String Replace
        $contains = str_contains($name, "oh") ? "Contains 'oh'" : "Does not contain 'oh'"; // String Contains
        $substring = substr($name, 0, 2); // Substring
        $ends_with = str_ends_with($name, "hn") ? "Ends with 'hn'" : "Does not end with 'hn'"; // String Ends With
        $starts_with = str_starts_with($name, "Jo") ? "Starts with 'Jo'" : "Does not start with 'Jo'"; // String Starts With
        $explode = explode(" ", $name); // String Explode
        $implode = implode(" ", $fruits); // String Implode

        // Array
        $fruits = ["Apple", "Banana", "Cherry"]; // Array
        $sesion = array("spring", "summer", "autumn", "winter"); // Array

        $fruits[] = "Date"; // Add to Array
        array_push($fruits, "Elderberry"); // Add to Array
        array_pop($fruits); // Remove Last Element
        array_shift($fruits); // Remove First Element
        array_unshift($fruits, "Fig"); // Add to Beginning of Array
        $count = count($fruits); // Count Elements in Array
        $sorted = sort($fruits); // Sort Array
        $reversed = array_reverse($fruits); // Reverse Array
        $slice = array_slice($fruits, 1, 2); // Slice Array
        $merge = array_merge($fruits, $sesion); // Merge Arrays
        $unique = array_unique($merge); // Unique Elements in Array
        $keys = array_keys($merge); // Get Array Keys
        $values = array_values($merge); // Get Array Values
        $in_array = in_array("Banana", $fruits) ? "Banana is in the array" : "Banana is not in the array"; // Check if Value Exists
        $array_to_string = implode(", ", $fruits); // Convert Array to String
        $string_to_array = explode(", ", $array_to_string); // Convert String to Array

        // Associative Array (Key value array) (Disctionary) (Hash Maps)

        $capitals = array(
            "Nepal" => "Kathmandu",
            "India" => "New Delhi",
            "USA" => "Washington, D.C."
        );

        echo "Capital of Nepal: " . $capitals["Nepal"]; // Accessing Associative Array
        echo "<br>";
        $capitals["China"] = "Beijing"; // Adding to Associative Array
        unset($capitals["USA"]); // Removing from Associative Array

        // Looping 
        for($i=0;$i<5;$i++){
            echo "For Loop: " . $i . "<br>";
        }
        foreach($fruits as $fruit){
            echo "Foreach Loop: " . $fruit . "<br>";
        }
    
        // Array Functions
        $numbers = [1, 2, 3, 4, 5];
        $squared = array_map(function($n) { return $n * $n; }, $numbers); // Map Function
        $filtered = array_filter($numbers, function($n) { return $n % 2 == 0; }); // Filter Function
        $reduced = array_reduce($numbers, function($carry, $n) { return $carry + $n; }, 0); // Reduce Function
        $capital_keys = array_keys($capitals); // Get Keys of Associative Array
        $capital_values = array_values($capitals); // Get Values of Associative Array
        $capital_count = count($capitals); // Count Elements in Associative Array
        $capital_exists = array_key_exists("India", $capitals) ? "India exists in the array" : "India does not exist in the array"; // Check if Key Exists
        $merged_capitals = array_merge($capitals, array("Japan" => "Tokyo")); // Merge Associative Arrays
        
        $capital_column = array_column($capitals); // Get Column of Associative Array
        $flipped_capitals = array_flip($capitals); // Flip Keys and Values of Associative Array
        $nepal_exists = array_key_exists("Nepal", $capitals); // Check if Key Exists in Associative Array

        array_map(function($capital) { 
            echo "Capital: " . $capital . "<br>"; }, $capitals); // Map Function on Associative Array

        array_filter($capitals, function($capital) { 
            return $capital == "Kathmandu"; }, ARRAY_FILTER_USE_BOTH); // Filter Function on Associative Array
        

        // Funcation
        function printhello(){
            echo "Hello from function!";
        }
        printhello(); // Call Function

        function add($a, $b){
            return $a + $b;
        }
        $sum = add(5, 10); // Call Function with Arguments
        echo "Sum: " . $sum;

        // Arrow Function
        $multiply = fn($a, $b) => $a * $b; //
        $product = $multiply(5, 10); // Call Arrow Function
        echo "Product: " . $product;
        




    ?>



</body>
</html>
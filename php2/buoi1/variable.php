<?php 
    // $name = "a";
    // $$name = "b";
    // echo $a;


    // const RADIUS = 10;
    // define('CONSTANT_NAME', value);


    // Basic Types (Các Kiểu Cơ Bản)
        // int: Số nguyên (ví dụ: 1, 2, -5)
        // float: Số thực (ví dụ: 1.5, 3.14)
        // bool: Boolean (true hoặc false)
        // string: Chuỗi ký tự (ví dụ: "hello", "world")
        // array: Mảng (ví dụ: [1, 2, 3], ["key" => "value"])
        // object: Đối tượng
        // null: Giá trị null, biểu thị không có giá trị

    // Nullable Types (Các Kiểu Cho Phép Null)
        // function setAge(?int $age) {
        //     if (is_null($age)) {
        //         echo "Age is null";
        //     } else {
        //         echo "Age is " . $age;
        //     }
        // }
        // setAge(null);    

    // Union Types (Các Kiểu Kết Hợp)
        // function processValue(int|string|null $value) {
        //     if (is_null($value)) {
        //         echo "The value is null";
        //     } elseif (is_int($value)) {
        //         echo "The value is an integer: " . $value;
        //     } elseif (is_string($value)) {
        //         echo "The value is a string: " . $value;
        //     }
        // }

        // processValue(123);     // Outputs: The value is an integer: 123
        // processValue("hello"); // Outputs: The value is a string: hello
        // processValue(null);    // Outputs: The value is null
    
    // Mảng tuần tử
        // $array = array(1, 2, 3, 4, 5);
    // Mảng kết hợp
        // $assocArray = array(
        //     "first" => 1,
        //     "second" => 2,
        //     "third" => 3
        // );


    // Anonymous function (Hàm không có tên)
        // $greet = function($name) {
        //     return "Hello, $name";
        // };
        // echo $greet("World"); 
    
    // Arrow function
    // $squared = fn($n) => $n * $n;
    // echo $squared(5); // Outputs: 25

    // Closure
        // $message = "World";
        // $sayHello = function($name) use ($message) {
        //     return "Hello, $name $message!";
        // };
        // echo $sayHello("John"); // Output: Hello, John World!

    // Generator
    // function getRange ($max = 10) {
    //     for ($i = 1; $i < $max; $i++) {
    //         yield $i;
    //     }
    // }
    
    // foreach (getRange(PHP_INT_MAX) as $range) {
    //     echo "Dataset {$range} <br>";
    // }

?>
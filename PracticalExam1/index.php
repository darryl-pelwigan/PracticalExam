<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical Exam 1</title>
</head>
<body>
  <?php 
    // Create a PHP Function WHILE loop that will sum all the even number from 0-1
    function sumAllEvenNumbers($number) {
      $result = 0;
      while($number != 0) {
        if ($number % 2 == 0) {
          $result += $number;
        }
        $number--;
      }
      
      return $result;
    }

    // Create a PHP Function using DO WHILE that will display all odd numbers from 0-10.
    function displayOddNumbers($number) {
      do {
        if($number % 2 == 1) {
          print_r($number. " ");
        }
        $number--;
      } while ($number != 0);
      
    }

    // Create a PHP function using FOR loop that will display 10 numbers in fibonacii sequence.
    function displayFibonacciSequence($number) {
      $num1 = 0;
      $num2 = 1;
      $endNumber = 3;
      for ($i=0; $i <= $number ; $i++) { 
        if($i == 0 || $i == 1) {
          print($i. " ");
        }
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        if($endNumber <= 10) {
          print($num3. " ");
        }
        $endNumber++;
      }
    }

    echo sumAllEvenNumbers(10)."<br>";
    echo displayOddNumbers(10)."<br>";
    echo displayFibonacciSequence(10)."<br>";

    $str = ['Marvin', 'Marco', 'Marvin', 'Marco', 'Marvin', 'Christian'];
    echo '<pre>';
    print_r(displayMostNumberOccurence($str));
    echo '</pre>';

    // Display the value that have the most number occurence; in case of tie arrange it in alphabetical order;
    // Solved this with the help of interview. I search the array_count_values function.
    function displayMostNumberOccurence($array) {
      $countStrValues = array_count_values($array); 
      $result = [];
      foreach($countStrValues as $key=>$value) {
        array_push($result, $key);
      }

      return $result;
    }

    // Sort the array in ascending order; if the values is an odd number: round it up to neaest tens
    // Solved this with the help of interview. I search the floor and ceil function.
    $sortNumberArray = [9863, 7127, 2020, 80, 131, 55, 100];
    echo '<pre>';
    print_r(sortArray($sortNumberArray));
    echo '</pre>';

    function sortArray($array) {
      $result = [];
      foreach($array as $value) {
        if($value % 2 == 1) {
          $lastDigit = $value % 10;
          $number = $value;
          if($lastDigit < 5) {
            $number = floor($value / 10) * 10;
          } else {
            $number = ceil($value / 10) * 10;
          }
          array_push($result, $number);
        } else {
          array_push($result, $value);
        }
      }
      sort($result);
      return $result;
    }

    // Display the item that is not repetitive
    // Solved this with the help of interview. I search the array_count_values function.
    $item = ['red', 'blue', 'black', 'red', 'blue', 'red', 'gold'];
    echo '<pre>';
    print_r(diplayItemNotRepetitive($item));
    echo '</pre>';

    function diplayItemNotRepetitive($array){
      $result = [];
      $checkValues = array_count_values($array); 

      foreach ($checkValues as $key => $value) {
        if($value === 1) {
          array_push($result, $key);
        }
      }
      return $result;
    }

    //SQL
    // A. GET all data of highest paid employee(Without using LIMIT)
    $queryA = 'SELECT employees.name, employees.date_hired, departments.department, salary.salary FROM employees LEFT JOIN departments ON departments.id = employees.department_id LEFT JOIN salary ON salary.id = employees.salary_id WHERE salary.salary = (Select Max(salary) FROM salary)';

    // B. Get all Employees that are hired from 2017-2018
    $queryB = 'SELECT employees.name, YEAR(employees.date_hired) as year, departments.department, salary.salary FROM employees LEFT JOIN departments ON departments.id = employees.department_id LEFT JOIN salary ON salary.id = employees.salary_id WHERE year >= "2017" AND year <= "2018" ';

    // C. Get all employees that belongs to IT Department AND Hired 2018 onwards;
    $queryC = 'SELECT employees.name, YEAR(employees.date_hired) as year, departments.department, salary.salary FROM employees LEFT JOIN departments ON departments.id = employees.department_id LEFT JOIN salary ON salary.id = employees.salary_id WHERE departments.department = "IT" and year >= "2018"';

  ?>

</body>
<script>
  let stringWord = 'TheQuickBrownFoxJumpsOverTheLazyDog.';
  console.log(fixSentence(stringWord));
  fixSentence(stringWord);
  
  // Solved this with the help of interview. I search the charAt function.
  function fixSentence(word) {
    let result = '';

    for (let index = 0; index < word.length; index++) {
      if (word.charAt(index).match(/[A-Z]/)) {
        if (index === 0) {
          result += word.charAt(index);
        } else {
          result += ' ' + word.charAt(index);
        }
      } else {
        result += word.charAt(index);
      }
    }

    return result;
  }
</script>
</html>



<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
		if(isset($_POST['submit'])) 
        {
			// Step 1: Get the function and variable values from the form
			$inputFunction = $_POST['function'];
			// $variable = $_POST['variable'];

    
            function solveDifferentialEquation() {
                // Define the Laplace transform variable
                $s = 's';
              
                // Define the Laplace transform of the solution X(s)
                $Xs = "(1 + $s)/(($s + 1)*($s + 2))";
              
                // Perform partial fraction decomposition
                $A = 1/($s + 1);
                $B = -1/($s + 2);
                $C = 1;
              
                // Compute the inverse Laplace transform of X(s)
                $x = "x(t) = 𝐿⁻¹{" . $A . " - " . $B . " + " . $C . "}";
                $x .= "\n      = " . (exp(-1 * t) - exp(-2 * t) + 1);
              
                // Output the solution
                // echo $h;
                // Example usage
              inverseLaplaceTransform($x);
              }
              function inverseLaplaceTransform() {
                // Define the Laplace transform variable
                $s = 's';
              
                // Define the Laplace transform of the solution X(s)
                $Xs = "(1 + $s)/(($s + 1)*($s + 2))";
              
                // Perform partial fraction decomposition
                $A = 1/($s + 1);
                $B = -1/($s + 2);
                $C = 1;
              
                // Compute the inverse Laplace transform of X(s)
                $x = "x(t) = 𝐿⁻¹{" . $A . " - " . $B . " + " . $C . "}";
                $x .= "\n      = " . (exp(-1 * t) - exp(-2 * t) + 1);
              
                // Output the solution
                echo $x;
              }
              
              
              // Example usage
              solveDifferentialEquation($inputFunction);
              
//     function laplaceTransform($inputFunction) {
//   // Use the built-in eval() function to evaluate the input function
//   $input = '$output = ' . $inputFunction . ';';
//   eval($input);

//   // Initialize the Laplace variable and the output string
//   $s = 's';
//   $outputString = '';

//   // Compute the Laplace transform of the input function
//   $laplace = '';
//   $i = 0;
//   while ($i < strlen($inputFunction)) {
//     $char = $inputFunction[$i];
//     if (is_numeric($char) || $char == 't' || $char == '.') {
//       $j = $i;
//       while ($j < strlen($inputFunction) && (is_numeric($inputFunction[$j]) || $inputFunction[$j] == '.')) {
//         $j += 1;
//       }
//       $term = substr($inputFunction, $i, $j - $i);
//       if ($j < strlen($inputFunction) && $inputFunction[$j] == 'e' && $j + 1 < strlen($inputFunction) && $inputFunction[$j+1] == '^') {
//         $k = $j + 2;
//         while ($k < strlen($inputFunction) && (is_numeric($inputFunction[$k]) || $inputFunction[$k] == '.')) {
//           $k += 1;
//         }
//         $exp = substr($inputFunction, $j + 2, $k - $j - 2);
//         $term = $term . 'exp(-' . $exp . $s . ')';
//         $j = $k;
//       }
//       $laplace .= $term;
//       $i = $j;
//     } else if ($char == '*' || $char == '/') {
//       $laplace .= $char;
//       $i += 1;
//     } else if ($char == 'e') {
//       $laplace .= 'exp';
//       $i += 1;
//     } else if ($char == '^') {
//       $laplace .= '**';
//       $i += 1;
//     } else if ($char == '{') {
//       $j = $i;
//       $depth = 1;
//       while ($depth > 0 && $j < strlen($inputFunction)) {
//         $j += 1;
//         if ($inputFunction[$j] == '{') {
//           $depth += 1;
//         } else if ($inputFunction[$j] == '}') {
//           $depth -= 1;
//         }
//       }
//       $piecewise = substr($inputFunction, $i, $j - $i + 1);
//       $laplace .= $piecewise . '(' . $s . ')';
//       $i = $j + 1;
//     } else {
//       $laplace .= $char . '(' . $s . ')';
//       $i += 1;
//     }
//   }
//   $outputString .= '\mathcal{L}\{' . $inputFunction . '\} = ' . '\mathcal{L}\{' . $laplace . '\}';

//   // Return the output string
// //   return $outputString;
//   require_once 'view\function\laplace.view.php';
//   echo 'hi';
// }
}
}
// Example usage
// $inputFunction = '(t^2 + 2*sin(3*t))*exp(-2*t)';
// $outputString = laplaceTransform($inputFunction);
// echo laplaceTransform($inputFunction);



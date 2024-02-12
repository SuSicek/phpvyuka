<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
</head>
<body>
    <h2>Calculator Result</h2>
    <?php
    if (isset($_POST['submit'])) {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        
        if (empty($num1) || empty($num2)) {
            echo "Please fill all fields!";
        } else {
            
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 == 0) {
                        echo "Cannot divide by zero!";
                        break;
                    } else {
                        $result = $num1 / $num2;
                        break;
                    }
                default:
                    echo "Invalid operator!";
                    break;
            }
            
            echo "Result: $num1 $operator $num2 = $result";
        }
    }
    ?>
</body>
</html>

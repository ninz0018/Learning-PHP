<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Learning</title>
</head>
<body>
    <main>
       <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="num1">CALCULATOR</label><br>
                <input type="number" placeholder="Enter Number" name="numb1" id="numb1">
                <select name="operator" id="operator">
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
                <input type="number" name="numb2" placeholder="Enter Number" id="numb2"><br><br>
                <button class="rounded btn btn-primary">CALCULATE</button>
            </form>

            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = filter_input(INPUT_POST,"numb1", FILTER_SANITIZE_NUMBER_FLOAT);
                    $num2 = filter_input(INPUT_POST,"numb2",FILTER_SANITIZE_NUMBER_FLOAT);
                    $oper = htmlspecialchars($_POST["operator"]);

                    $error = false;

                    if(empty($num1) or empty($num2)) {
                        echo "<p>Fill the blank!!</p>";
                        $error = true;
                    }

                    if (!is_numeric($num1) or !is_numeric($num2) ){
                        echo "<p>Input Number only!! </p>";
                        $error = true;
                    }

                    if(!$error){
                        $value = 0;
                        switch ($oper) {
                            case 'add':
                                # code...
                                $value = $num1 + $num2;
                                break;
                            case 'subtract':
                                # code...
                                $value = $num1 - $num2;
                                break;
                            case 'multiply':
                                # code...
                                $value = $num1 * $num2;
                                break;
                            case 'divide':
                                # code...
                                $value = $num1 / $num2;
                                break;
                            default:
                                # code...
                                break;
                        }

                        echo "<p class=`calc`> Results:" . $value . "</p>";
                    }
                }
            ?>
       </div>
    </main>
</body>
</html>
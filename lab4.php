<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['add'])){
            

                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                

            }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question no 4</title>
</head>
<body>
    <div class="mn">
        <form action="">
            <div class="inp">
                <label for="num1">Number 1:</label>
                <input type="number" name="num1" id="num1">
            </div>
            <div class="inp">
                <label for="num2">Number 2:</label>
                <input type="number" name="num2" id="num2">
            </div>
            <input type="submit" value="add" name="add">
        </form>
    </div>
</body>
</html>
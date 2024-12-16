<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $radius = $_POST['num'];
        if(isset($_POST['find']) && !empty($_POST['num']) && trim($_POST['num'])){
            $area = pi() * pow($radius, 2);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="inp">
            <label for="num">Radius: </label>
            <input type="number" name="num" id="num" value="<?php echo isset($radius)?$radius:''; ?>">
        </div>
        <input type="submit" value="Find the Area" name="find"><br>
        <span><?php  echo $area; ?></span>
    </form>
    
</body>
</html>
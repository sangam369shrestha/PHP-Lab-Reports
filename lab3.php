<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['convert']) && !empty($_POST['time']) && trim($_POST['time'])){
            $minutes = $_POST['time'];
            
            $seconds = $minutes * 60; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question no 3</title>
</head>
<body>
    <div class="mn">
        <form action="" method="post">
            <label for="time">Time in Minutes: </label>
            <input type="number" name="time" id="time" value="<?php echo isset($minutes)?$minutes:''; ?>">

            <input type="submit" value="Convert to Seconds" name="convert">
        </form>
        <span><?php echo $seconds;  ?></span>
    </div>
</body>
</html>
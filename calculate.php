//wap to create calculator using switch case
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="post" action="calculate.php">
        first no <input type="number" name="first no" value= <?php echo($fname) ?> ><br><br>
        Secound no <input type="number" name="secound no" value=<?php echo($lname)?><br><br>
        result <input type="number" name="result" value='<?php echo($result)?>'><br><br>
        <button type="submit" name="operator" value='+'>add</button>
        <button type="submit" name="operator" value='-'>subtract</button>
        <button type="submit" name="operator" value='*'>multiply</button>
        <button type="submit" name="operator" value='/'>divide</button>
    </center>
</form>
</body>
</html>
<?php
$fname=$_POST['first no'];
$lname=$_POST['secound no'];
$operator=$_POST['operator'];
$result=;
switch ($variable){
    case '+':
$result = $fname +$lname
        break;
    case '-':
        $result = $fname-$lname
        break;
   case '/':
    $result = $fname/$lname
    break;
    case '*':
        $result = $fname*$lname
        break;
}
?>
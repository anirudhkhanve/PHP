<?php
$servername = "localhost:3307";
$username = "root";
$password = "anirudh@1234";
$dbname="first";
$conn = mysqli_connect($servername,$username,$password,$dbname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, td, th, tr {
    border : 1px solid;
}
</style>

<body>
    <center>
    <table>
        <th>
        <td>E-mail</td>
        <td>phone</td>
        <td>password</td>
        <td>operation</td>
        </th>
        <?php 
$sql='SELECT * FROM first.train';
// $sql = "SELECT * FROM 'train'";
$run = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($run)) {
        ?>
        <tr>
        <td></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><a href='delete.php?rn=$row[s_no]'>delete</td>
      </tr>
      <?php } 
?>
    </table>
</center>
</body>
</html>
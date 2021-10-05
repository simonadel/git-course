<?php


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'database_s');
$sel="SELECT * FROM cl";
$rul=mysqli_query($con,$sel);
while ($rel=mysqli_fetch_assoc($rul)) {

?>
<tr>
<td><?php echo $rel["id"]?></td>
<td><?php echo $rel["name"]?></td>
<td><?php echo $rel["passsword"]?></td>
<td><?php echo $rel["gmail"]?></td>
</tr>
<br>
<?php
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> inscrit</title>
    <meta charset="utf-8">
</head>

<body>

<?php
//include
include "config.php";
//appel fonction
$base =connect();
$req="SELECT * from users";
$result =$base->query($req);
?>
<table>
<thead>
    <tr>
        <th>email</th> <th>password</th>
    </tr>
</thead>
<tbody>
<?php
while($user = $result->fetchObject()){
?>
<tr>
    <td><?php echo $user->email ?></td>
    <td><?php echo $user->password ?></td>
</tr>
   
<?php   
}
?>
</tbody>
</table>
</body>
</html>

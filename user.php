<?php 
 include "connect.php" ;
 
 
$q1 = "SELECT * FROM learning";
  $r1 = mysqli_query($connect,$q1) ;

var_dump($connect); ?>
<?php var_dump($db); ?>
 <table with="800" color="black" border="1" cellpadding="5">
 <tr><th>User id</th><th>username</th><th>email</th><th>full name</th></tr>
 <?php while( $row = mysqli_fetch_array($r1)){ ?>
	 
	 

 <tr>
 <td><?php echo $row['user_id'];?></td>
 <td><?php echo $row['user_name'];?> </td>
 <td><?php echo $row['email_id']; ?></td>
 <td><?php echo $row['full_name']; ?></td>
 </tr>
 
 <?php } ?>
 
 
 
 
 </table>








<form action="">

<br><br><br>
<label>User Name:</label> <input type="text" name="user_name" ><br>
<label>Email: </label> <input type="emai" name="user_email" > <br>
<label>Full name: </label> <input type="text" name="user_fullname" > <br>






</form>


<?php
  $conn = mysqli_connect('localhost','root','','website');
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn , $sql);
    $bank = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- <link rel="stylesheet" href="stylelogin.css"> -->
     <title>Details of the User</title>
   </head>
   <body>
     <?php include('view_user.php');?>
     <div class="container center">
       <?php if($bank): ?>
         <h4 style="color:white">Name:-  <?php echo htmlspecialchars($bank['name']);?></h4>
         <p style="color:white">Email-Id:- <?php echo htmlspecialchars($bank['email']);?></p>
         <p style="color:white">Current Balance:- <?php echo htmlspecialchars($bank['balance']);?></p>
       <?php else: ?>
         <h5>No such account exists</h5>
       <?php endif;?>
     </div>
   </body>
 </html>

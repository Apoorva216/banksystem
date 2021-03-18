<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
        background-color: red;
        color:white;
      }
      button:hover{
        background-color:white;
        color: black;
      }
      body{
      background-image: url('back1.png');
      background-repeat: no-repeat;
            background-size: 100% 100%;
      background-attachment: fixed;
      }
      .navbar{
              height: 80px;
              width: 100%;
              background: rgba(0,0,0,0.4);
      }

      .logo{
              width: 80px;
              height: 40px;
              padding: 40px 40px;
      }

      .navbar ul{
              float:right;
              margin-right: 20px;
      }

      .navbar ul li{
              list-style: none;
              margin: 0 14px;
              display: inline-block;
              line-height: 80px;
      }

      .navbar ul li a{
              text-decoration: none;
              color: white;
              font-size: 20px;
              padding: 6px 13px;
              transition: .4s;
              font-family: 'Roboto', sans-serif;
      }

      .navbar ul li a.active,
      .navbar ul li a:hover{
              background: red;
              border-radius: 2px;
      }



    </style>
</head>

<body>
  <nav class="navbar">
          <img class= "logo" src="bank.png">
          <ul>
                  <li><a   href="index1.html">Home</a></li> <!--# is used as this is the home itself and we don't want to redirect the home button to any other page as we are already on the home page-->
                  <li><a href="transactionhistory.php">Transactions</a></li>
                  <li><a  class= "active" href="moneytransfer.php">Transfer Money</a></li>

                  <li><a  href="view_user.php">View User</a></li>
  </nav>

<?php
 $conn = mysqli_connect('localhost','root','','website');
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selectuser.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td>
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style>
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
                  <li><a class= "active" href="transactionhistory.php">Transactions</a></li>
                  <li><a href="moneytransfer.php">Transfer Money</a></li>

                  <li><a   href="view_user.php">View User</a></li>
  </nav>

	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql = "SELECT * FROM transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

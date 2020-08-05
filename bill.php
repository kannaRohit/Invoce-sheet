<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Bills</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  <center> <form   action="search.php" method="post" class="form-inline"><input type="text" name="id" placeholder="search" class="form-control">
  <input type="submit" value="search" name="search" class="btn btn-success">
  <a href="booking.html" class="btn btn-warning">Home</a>
   <div class="container"></div>
   <?php
    $con=mysqli_connect("localhost","root","N@veen","itprofound");
    ?>
    <table  class="table table-hover">
       <thead>
          <tr>
          <th>Id</th>
           <th>Name</th>
           <th>Email</th>
           <th>Sourceplace</th>
           <th> Destination</th>
           <th>No_of_days</th>
           <th>Type_of_travels</th>
           <th>Date</th>
           <th>View</th>
           </tr>
        </thead>
        <tbody>
            <?php
            $sel="select * from booking";
            $rs=$con->query($sel);
            while($row=$rs -> fetch_assoc())
            {
               ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['sourceplace']; ?></td>
                <td><?php echo $row['destination']; ?></td>
                <td><?php echo $row['no_of_days']; ?></td>
                <td><?php echo $row['type_of_travels']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><a href="print.php?id=<?php echo $row['id']; ?>" target="_blank" class="btn btn-info">view</a></td>
                </tr>
               <?php
            }
            ?>
        </tbody>
        
    </table>
    
</body>
</html>
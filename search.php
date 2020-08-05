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
  <center> <form   action="search.php" method="POST"  class="form-inline">
  <input type="text" name="id" placeholder="Enter Your ID" class="form-control" >
  <input type="submit" value="search" name="search" class="btn btn-success" ><br><br>
    <?php
    $con=mysqli_connect("localhost","root","N@veen","itprofound");
     if(isset($_POST['search']))
     {
         $id =$_POST['id'];
         
         $query="select * from booking where id='$id'";
         
         $query_run= mysqli_query($con,$query);
         
         while($row=mysqli_fetch_array($query_run))
         {
             ?>
             
             <table class="table table-striped" >
                <tr>
                    <th>Id</th>
                    <td><?php echo $row['id']; ?></td>
                  </tr>
                 <tr>
                    <th>Name</th>
                    <td><?php echo $row['name']; ?></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><?php echo $row['email']; ?></td>
                  </tr>
                  <tr>
                    <th>Sourceplace</th>
                    <td><?php echo $row['sourceplace']; ?></td>
                  </tr>
                  <tr>
                    <th>Destination</th>
                    <td><?php echo $row['destination']; ?></td>
                  </tr>
                  <tr>
                    <th>No_of_days</th>
                    <td><?php echo $row['no_of_days']; ?></td>
                  </tr>
                  <tr>
                    <th>Type_of_travels</th>
                    <td><?php echo $row['type_of_travels']; ?></td>
                  </tr>
                  <tr>
                    <th>Date</th>
                    <td><strong><?php echo $row['date']; ?></strong></td>
                  </tr>
             
            </table> 
               <center><input type="submit" value="print" class="btn btn-info"  onclick="print()">
                
            
             <?php
         }  
     }
      ?>
 
                
                
                
  </form></center>
    </body>
</html>





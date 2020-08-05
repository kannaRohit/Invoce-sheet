
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <div class="row">
  <div class="col-md-6">
   <h5>Bill No:<?php echo mt_rand(1000000,9999999); ?></h5>
   </div>
   <div class="col-md-6">
      Date:<?php echo date("d-F, Y",time());?>
      </div>
   </div>
    <h1>Payment Recipt for Booking</h1>
         <?php
          $con=mysqli_connect("localhost","root","N@veen","itprofound"); 

         $id = isset($_GET['id']) ? $_GET['id'] : '';
         
          $sel="select * from booking where id='$id'";
          $rs=$con->query($sel);
          while($row=$rs-> fetch_assoc())
          {
              ?>
   
                 
              <table class="table table-striped">
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
            <center><input type="submit" value="print" class="btn btn-info" onclick="window.print()">
             <a href="booking.html" class="btn btn-warning" type="hidden">Back</a>
            </center>
            
       <?php
      
         
  }

    ?>      
    
  
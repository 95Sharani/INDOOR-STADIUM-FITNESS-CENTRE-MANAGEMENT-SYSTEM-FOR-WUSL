
<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM time_table";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Course Schedule</title>
    <link rel="icon" href="../img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/3.3.6.bootstrap.min.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">
     <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="../js/2.2.0.jquery.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>

<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../admin.php'"></i>
  
</div>
       <!--::header part start::-->
   

    <!-- shedule part here -->
    <section class="shedule_part single_page_shedule section_padding overflow-hidden">
    <div>
    <h1 class="header">Time Shedule</h1>
    </div> 
    <br>   
        <div class="container p-lg-0">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="shedule_content">
                        
                        <table class="table table-bordered" id="editable_table" width="100%" cellspacing="100%">
                            <thead>
                                <tr>
                                <th >Time</th>
                                <th >Monday</th>
                                <th >Tuesday</th>
                                <th >Wednesday</th>
                                <th >Thursday</th>
                                <th >Friday</th>
                                <th >Saturday</th>
                               
                              
                                </tr>
                            </thead>
                            <tbody>
                                <?php
           if(mysqli_num_rows($result )>0)
    {
      while ($row=mysqli_fetch_assoc($result )) 
      {
      
       ?>
             
                <tr>
                  <td><?php echo $row['time'];  ?>  </td>
    
      <td><?php echo $row['monday']; ?>  </td>
      <td><?php echo $row['tuesday'];      ?>  </td>
       <td><?php echo $row['wednesday'];      ?>  </td>
      <td><?php echo $row['thursday'];      ?>  </td>
       <td><?php echo $row['friday'];      ?>  </td>
        <td><?php echo $row['saturday'];      ?>  </td>
                  
               
                </tr>
              <?php
            }
}
          ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shedule part end -->

    

    <!-- jquery plugins here-->
    <!-- jquery -->

</body>

</html>

<script>
  $(document).ready(function(){
    $('#editable_table').Tabledit({
      url:'shedule_action.php',
      columns:{
        identifier:[0,"time"],
        editable:[[1, 'monday'], [2, 'tuesday'],[3, 'wednesday'], [4,'thursday'],[5, 'friday'], [6,'saturday']]
      }
    });
  });
</script>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Single cause | Charity / Non-profit responsive Bootstrap HTML5 template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <?php include'menu.php' ?> <!-- /. main-header -->



  <div class="page-heading text-center">

    <div class="container zoomIn animated">
      
      <h1 class="page-title">CAUSE TITLE <span class="title-under"></span></h1>
      <p class="page-description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
      </p>
      
    </div>

  </div>

  <div class="main-container">

    <?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM storage ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>  



      
                        
<!------ Include the above in your HEAD tag ---------->


      <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">Blood Storage</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Blood Group</th>
       <th>Bag</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["blood"].'</td>
       <td>'.$row["bag"].'</td>
              </tr>
      
      ';
     }
     ?>
     </tbody>
    </table>
  
   </div>  
  </div>   
  </body>   
<script>  
( function($) {
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'storage.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'blood'], [2, 'bag']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
}); } ) ( jQuery );
 </script>
  </div>
  <body> 

    </div>

    

    


  </div> <!-- /.main-container  -->


  <?php include'footer.php'?>

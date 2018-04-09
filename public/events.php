                        <?php

$dbc=mysqli_connect("localhost","root","","admin");

if(isset($_POST['hmenu_btn']))
{   $name=mysqli_real_escape_string($dbc,$_POST['name']);
    $phone=mysqli_real_escape_string($dbc,$_POST['phone']);
    $bgroup=mysqli_real_escape_string($dbc,$_POST['bgroup']);
    $location=mysqli_real_escape_string($dbc,$_POST['location']);
	
  
   
            $sql="INSERT INTO doner(name,phone,bgroup,location) VALUES('$name','$phone','$bgroup','$location')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/doner");
die();
  
}
if(isset($_POST['menu_btn']))
{   $name=mysqli_real_escape_string($dbc,$_POST['name']);
    $phone=mysqli_real_escape_string($dbc,$_POST['phone']);
    $bgroup=mysqli_real_escape_string($dbc,$_POST['bgroup']);
    $location=mysqli_real_escape_string($dbc,$_POST['location']);
  
  
   
            $sql="INSERT INTO needer(name,phone,bgroup,location) VALUES('$name','$phone','$bgroup','$location')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/needer");
die();
  
}

?>

    
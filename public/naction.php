                      <?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["name"]);
$phone = mysqli_real_escape_string($connect, $input["phone"]);
$bgroup = mysqli_real_escape_string($connect, $input["bgroup"]);
$loctaion = mysqli_real_escape_string($connect, $input["loctaion"]);
$time = mysqli_real_escape_string($connect, $input["time"]);
if($input["action"] === 'edit')
{
 $query = "
 UPDATE needer
 SET name = '".$name."', 
 phone = '".$phone."' , bgroup= '".$bgroup."',
 location= '".$location."', time= '".$time."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM needer
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

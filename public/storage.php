                      <?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["blood"]);
$phone = mysqli_real_escape_string($connect, $input["bag"]);
if($input["action"] === 'edit')
{
 $query = "
 UPDATE storage
 SET blood = '".$name."', 
 bag = '".$phone."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM storage
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

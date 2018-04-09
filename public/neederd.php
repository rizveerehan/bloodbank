<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
    <h3 align="center">View List</h3><br />  
    <table  id="customers" class="table table-bordered table-striped"style=" margin-left:10%;width:80%;"> 
     <thead>
      <tr>
       <th>ID</th>
       <th>NAME</th>
       <th>PHONE</th>
       <th>BGROUP</th>
       <th>LOCATION</th>
	   <th>TIME</th>
      </tr>
     </thead>
     <tbody>
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
echo'<a style="color:white;">'.$viewid=$_GET['viewid'].'</a>';
$query = "SELECT * FROM needer WHERE id='$viewid'";
$result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
            <td>'.$row["id"].'</td>
       <td>'.$row["name"].'</td>
       <td>'.$row["phone"].'</td>
       <td>'.$row["bgroup"].'</td>
       <td>'.$row["location"].'</td>
	     <td>'.$row["time"].'</td>
	   	   	        </tr>
			
      ';
}

?>	

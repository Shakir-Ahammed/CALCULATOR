<?php

include("dbcon.php");
$db=$conn;

function fetch_data(){
 global $db;
  $query="SELECT * from cul ";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
 echo '<table border="1">
        <tr>
            <th>store</th>
            <th>result</th>
            
        </tr>';

 if(count($fetchData)>0){
    
      foreach($fetchData as $data){ 

  echo "<tr>
          
          <td>".$data['store']."</td>
          <td>".$data['result']."</td>
        
   </tr>";

     }
}else{
     
}
  echo "</table>";
}

?>
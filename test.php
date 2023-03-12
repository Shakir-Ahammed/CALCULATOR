<?php  

include 'dbcon.php';


$z= $_POST['data1'];
$s= $_POST['data2'];



//echo json_encode([$z,$s]);

$sql="INSERT INTO `cul` (`store`, `result`) VALUES('$z',$s)";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('succsesful')</script>";

}
else {
  echo "<script> alert('data store faild')</script>";
  }

  
?>
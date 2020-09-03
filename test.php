
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../src/jQuery/jquery.js"></script>
    <script src="../src/popper1.15.0/popper.min.js"></script>
    <script src="../src/bootstrap4/js/bootstrap.js"></script>
    <script src="../src/fontawesome5/fontawesome.js"></script>
    <link rel="stylesheet" href="../src/bootstrap4/css/bootstrap.css">
    <title>WU Streetlight Control System</title>
    <style>
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #4CAF50;
  color: green;
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}

</style>
</head>

<body>

    <div class="record_content" id="content">
        <table class="table table-bordered table-striped">
            <tr>
                <th>หมายเลขตู้ควบคุม</th>
                <th>สถานที่</th>
                <th>สถานะสวิตซ์</th>
                <th>สถานะรีเลย์</th>
                <th>อัพเดทล่าสุด</th>
                <th> </th>
            </tr>
        
   


    <?php

//$objConnect = mysqli_connect("b3innovative.com","ccashget","p111111","pdbm") or die("Error Connect to Database");
$objConnect = mysqli_connect("localhost","root","ccash2019","wu_scl") or die("Error Connect to Database");
mysqli_set_charset($objConnect, "utf8");
$sql = "SELECT boxID, deviceID ,groupID,placename,latitude,longitude FROM boxs ";
$result = mysqli_query($objConnect,$sql);
if($result){
    while($rs = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td >".$rs['boxID']."</td>";
        echo "<td >".$rs['placename']."</td>";
        echo "<td >ปิด</td>";
        echo "<td >ปิด</td>";
        echo "<td >".date("H:i:s")."</td>";     
        echo "<td ><button class='btn success'>Press</button></td>";
       
        
        echo "</tr>";  
    }   
   echo "</table>";
   echo "</div>";
}
      
       
        

      
    

mysqli_close($objConnect);
?>
    

</body>
</html>
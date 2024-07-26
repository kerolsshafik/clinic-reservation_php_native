<?php
$host="localhost";
$user="root";
$pass="12345678";
$name="clinicdb";

    
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title> Medical clinic </title>
   <link rel="icon" href="medical_clinic1.PNG" type="image/png">  
    
 </head>
   <body>
   <center><h1><p><strong>Clients Data</strong></p></h1></center>
    <hr style="border-top: 6px solid #ddd;">   
     <?php

  $con= new PDO('mysql:host=localhost;dbname=clinicdb', "root", "12345678");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM heart";
  //first pass just gets the column names
  print "<table border=1 style=\"position:absolute;top:150px;left:1150px;\">  <caption>Heart Clinic</caption>";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print "<tr>";
  foreach ($row as $field => $value){
   print "<th>$field</th>";
  } 
  print "</tr>";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print "<tr>";
   foreach ($row as $name=>$value){
   print "<td>$value</td>";
   }
   print "</tr>";
  }
  print "</table>";
  
  
 ?>


<?php

  $con= new PDO('mysql:host=localhost;dbname=clinicdb', "root", "12345678");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM dental";
  //first pass just gets the column names
  print "<center><table border=1 > <caption>Dental Clinic</caption>";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print "<tr>";
  foreach ($row as $field => $value){
   print "<th>$field</th>";
  } 
  print " </tr>";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print "<tr>";
   foreach ($row as $name=>$value){
   print "<td>$value</td>";
   }
   print "</tr>";
  }
  print "</table> </center>";
  
  
 ?>

<?php

$con= new PDO('mysql:host=localhost;dbname=clinicdb', "root", "12345678");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = "SELECT * FROM eye";
//first pass just gets the column names
print "<table border=1 style=\"position:absolute;top:150px;left:35px;\"> <caption>Eye Clinic</caption>";
$result = $con->query($query);
//return only the first row (we only need field names)
$row = $result->fetch(PDO::FETCH_ASSOC);
print "<tr>";
foreach ($row as $field => $value){
 print "<th>$field</th>";
} 
print "</tr>";
//second query gets the data
$data = $con->query($query);
$data->setFetchMode(PDO::FETCH_ASSOC);
foreach($data as $row){
 print "<tr>";
 foreach ($row as $name=>$value){
 print "<td>$value</td>";
 }
 print "</tr>";
}
print "</table> ";


?>
    </table>
        <a href="project11.php">
        <button type="button" style="position: absolute;height:30px;width:100px;top:30px;left: 30px";>Back</button>
         </a>
    </body>
</html>
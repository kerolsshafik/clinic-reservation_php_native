
<?php

if($_POST['sub']){
    
    
    $fn=$_POST['name'];
$id=$_POST['id'];
$phone=$_POST['phone'];
if($fn=="kerlos"&& $id=="123"&& $phone=="123"){
   
    header("Location: admin.php");

}
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title> Medical clinic </title>
   <link rel="icon" href="medical_clinic1.PNG" type="image/png">  
    <link rel="stylesheet" href="Loogo.css">
     <style>
         body{margin: 0; padding: 0; height: 100%;width: 100%;}
         #clinic{position:absolute;top: 140px;left:657px;}
         #square
         {
            height:380px;width:330px;background-color: #fff;z-index:0;
            position: absolute;top: 190px;left: 600px;opacity:80%;
            box-shadow:0px 0px 15px 15px  #fff; 
         }
     </style>
     
     <script type="text/javascript">
      
     </script>
    
 </head>
   <body style="background-color:aliceblue;">
      <form method="post">
    <div class="x2"></div>
     <!--<img src="n.png" width="750" height="750" style="opacity:0.5;z-index:1;"> -->
        <div class="x1">
            
          <div id="square"></div>  
            
            
            <div id="clinic"><img src="medical_clinic.png" width="215" height="215" style="z-index:1;"></div>   
             <table>
                            
                <tr>
                <td>
 <div id="m1"><input name="name" type="text" placeholder="  Name" style="height:30px;width:300px;background:none;border-radius:3px"/></div> 
             </td>     
            </tr>
            <tr>
            <td>
 <div id="m2"><input name="phone" type="text" placeholder="  Phone number" style="height:30px;width:300px;background: none;border-radius:3px"/></div>     
          </td>     
         </tr>
               
         <tr>
          <td>
 <div id="m3"><input name="id" type="text" placeholder="  National ID" style="height:30px;width:300px;background: none;border-radius:3px"/></div> 
          </td>     
         </tr>
               
         <tr>
          <td>
              
          <input name="sub" value="Next" type="submit"class="m4" style="height:50px;width:305px;"></input>
            
          </td>     
         </tr>
          </table>
            </div>
        </form>
    </body>
</html>
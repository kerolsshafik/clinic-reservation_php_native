
<?php
$host="localhost";
$user="root";
$pass="12345678";
$name="clinicdb";
$connection=mysqli_connect($host,$user,$pass,$name);


function check($phone,$id,$name){
    if(strlen($phone)==11&&strlen($id)==14&&strlen($name)>5){
        return true;
    }
    else{
        return false;
    }
}
function write($connection){
    
        $fn=$_POST['Name'];
        $id=$_POST['id'];
        $phone=$_POST['phone'];
        $day=$_POST['day'];
        $num;
        if(check($phone,$id,$fn)==true){
        $sql="SELECT * FROM eye";
        $result=mysqli_query($connection,$sql);
        $num=mysqli_num_rows($result);
        $num++;     
        $query="INSERT INTO `eye` (`day`, `id`, `name`, `phone`,`num`) VALUES ('$day', '$id', '$fn','$phone','$num')";
        mysqli_query($connection,$query);
        $result=mysqli_query($connection,$sql);
        $num2=mysqli_num_rows($result);
        if($num==$num2){
            echo "Saved";
        }
        else{
            echo "Data Not Saved , Please Check Your Inputs";
        }
        
        }
        else{
            echo "enter valid inputs";
    }
}
function cancel($connection){
    $id=$_POST['id'];  
    $sql = "DELETE FROM eye WHERE id=$id";
    mysqli_query($connection,$query);
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: ";
      }
    
}



if($_POST['sub']){
write($connection);
}
else if($_POST['cancel']){
cancel($connection);
}
?>



<!DOCTYPE html>
<html lang="en">
 <head>
 <script>
     function check1(){
        
        n = document.getElementById("s1").value;
            if(n.length<5){
            document.getElementById("y1").innerHTML ="name must be more than 5 letters";
            document.getElementById("y1").style.color = "red";

            }
            else{
                document.getElementById("y1").innerHTML ="ok";
                document.getElementById("y1").style.color = "green";
            }
     }
     function check2(){
        
        n = document.getElementById("s2").value;
        document.getElementById("y2").innerHTML ="Wrong number";
            if(n.length!=11){
            document.getElementById("y2").innerHTML ="Wrong number";
            document.getElementById("y2").style.color = "red";

            }
            else{
                document.getElementById("y2").innerHTML ="ok";
                document.getElementById("y2").style.color = "green";
            }
     }

     function check3(){
        
        n = document.getElementById("s3").value;
        document.getElementById("y3").innerHTML ="Wrong number";
            if(n.length!=14){
            document.getElementById("y3").innerHTML ="Wrong number";
            document.getElementById("y3").style.color = "red";

            }
            else{
                document.getElementById("y3").innerHTML ="ok";
                document.getElementById("y3").style.color = "green";
            }
     }

    </script>
  <meta charset="UTF-8">
  <title> Medical clinic </title>
   <link rel="icon" href="medical_clinic1.PNG" type="image/png">  
   
<style>
    .nn{position: absolute;top:300px;left:100px;}
    
</style>
 </head>
    <body style="background-image:url(clinic.jpeg);background-repeat:no-repeat;background-size:100%;">
        
    <form method="post">
        
<p style="font-size:30px"><b>Eye Clinic<br>Reserve your appointment <br>DR: Ramez Tawfik</b></p>  
        
<img src="medical_clinic.png" style="position:absolute;height:300px;width:300px;top:-40px;left:600px;">
        
<img src="Doctorhh.png" style="position: absolute;height: 150px;width: 150px;top: 140px;left:160px;">     
   <div class="nn">
        <table>                    
                <tr>
                <td>
 <div><input onkeyup="check1();" id="s1" name="Name" type="text" placeholder="  Name" style="height:20px;width:250px;border-radius:3px"/></div> 
             </td>     
            </tr>
            <tr>
            <td>
 <div><input onkeyup="check2();" id="s2" name="phone" type="text" placeholder="  Mobile number" style="height:20px;width:250px;border-radius:3px"/></div>     
          </td>     
         </tr>
               
         <tr>
          <td>
 <div><input onkeyup="check3();" id="s3" name="id" type="text" placeholder="  National ID" style="height:20px;width:250px;border-radius:3px"/></div> 
          </td>     
         </tr>
           
          </table> 
             
        <table>
        <tr> <td><b>Day</b></td></tr>
         <tr><td><select id="day" name="day" Choose a Day="Choose the Date to Disclose" style="width: 206px; height: 20px">
            <option  value="sat">Sat</option>
            <option  value="sun">Sun</option>
            <option  value="mon">Mon</option>
            <option  value="tue">Tue</option>
            <option  value="wed">Wed</option>
            <option  value="thu">Thu</option>
        </select><br></td></tr>        
        </table>
        <table>
       <tr> 
          <td>
          <input value="submit" name="sub" type="submit" class="m4" style="height:35px;width:125px;">
          </td>     
           <td>          
          <input value="cancel" name="cancel" type="submit" class="m4" style="height:35px;width:125px;">          
          </td>       
         </tr>  
        </table>    
        </div>
         <a href="project10.html"> 
      <button  style="width:100px;height:30px;position: absolute;top:660px;left:20px; ">Back</button>
      </a>
        
<p style="position: absolute ;top:280px;left: 380px;font-size: 18px" id="y1" name="y1"></p>
<p style="position: absolute ;top:305px;left: 380px;font-size: 18px" id="y2" name="y2"></p>
<p style="position: absolute ;top:335px;left: 380px;font-size: 18px" id="y3" name="y3"></p> 
        
</form>
    </body>
</html>


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
        $sql="SELECT * FROM dental";
        $result=mysqli_query($connection,$sql);
        $num=mysqli_num_rows($result);
        $num++;     
        $query="INSERT INTO `dental` (`day`, `id`, `name`, `phone`,`num`) VALUES ('$day', '$id', '$fn','$phone','$num')";
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
    $sql = "DELETE FROM dental WHERE id=$id";
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
        
        n = document.getElementById("name").value;
            if(n.length<5){
            document.getElementById("m1").innerHTML ="name must be more than 5 letters";
            document.getElementById("m1").style.color = "red";

            }
            else{
                document.getElementById("m1").innerHTML ="ok";
                document.getElementById("m1").style.color = "green";
            }
     }
     function check2(){
        
        n = document.getElementById("phone").value;
        document.getElementById("m2").innerHTML ="Wrong number";
            if(n.length!=11){
            document.getElementById("m2").innerHTML ="Wrong number";
            document.getElementById("m2").style.color = "red";

            }
            else{
                document.getElementById("m2").innerHTML ="ok";
                document.getElementById("m2").style.color = "green";
            }
     }

     function check3(){
        
        n = document.getElementById("id").value;
        document.getElementById("m3").innerHTML ="Wrong number";
            if(n.length!=14){
            document.getElementById("m3").innerHTML ="Wrong number";
            document.getElementById("m3").style.color = "red";

            }
            else{
                document.getElementById("m3").innerHTML ="ok";
                document.getElementById("m3").style.color = "green";
            }
     }

    </script>
    <meta charset="utf-8">
      <title> Medical clinic </title>
        <link rel="icon" href="medical_clinic1.PNG" type="image/png">  
        
<style>
    
div{  
position: absolute;
    top: 100px;
    left: 440px;
    font-size: 30px;
    font-weight: bold;
}
 divdr{  
position: absolute;
     top: 130px;
     left: 440px;
     font-size: 30px;
     font-weight: bold;
}

h1{
position: absolute;
    top: 145px;
    left: 440px;
    font-size:30px; 
}

body{
    background-image: url("d1.jpg");     
    background-repeat: no-repeat, repeat;
    background-size: 1536px 724px;
}

img{
position: absolute;
    top: 80px;
    left: 300px;
    width: 130px;
    height: 130px;
}

input:hover{ 
    border-color: blueviolet;
    box-shadow: 0 0 30px blueviolet;
    border-radius: 7px;
}
    
.button {
  background-color: white; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  transition-duration: 0.4s;
  cursor: pointer;   
}
select:hover{ 
    border-color: blueviolet;
    box-shadow: 0 0 30px blueviolet;
    border-radius: 7px;
}        

    
    
divf{  
position: absolute;
    top: 230px;
    left: 300px;
    font-size: 25px;   
    font-weight: bold;
}

divfi{
   position: absolute;
    top: 238px;
    left: 380px;
}
  
    
divl{  
position: absolute;
    top: 260px;
    left: 300px;
    font-size: 25px;
    font-weight: bold;
}
divli{
position: absolute;
    top: 266px;
    left: 430px;
}

    
divp{  
position: absolute;
    top: 270px;
    left: 300px;
    font-size: 25px;
    font-weight: bold;
}
divpi{
position: absolute;
    top: 275px;
    left: 380px;
}

    
diva{  
position: absolute;
    top: 325px;
    left: 535px;
    font-size: 25px;
    font-weight: bold;
}
divai{
position: absolute;
    top: 330px;
    left: 590px; 
}

    
divid{ 
position: absolute;
    top: 315px;
    left: 336px;
    font-size: 25px;
    font-weight: bold;
}
dividi{
position:absolute;
    top: 318px;
    left: 380px;
}

    
divtd{
position: absolute;
    top: 360px;
    left: 320px;
    font-size: 25px;
    font-weight: bold;
}
divtind{
position: absolute;
    top: 355px;
    left: 885px;
}        
divtid{
position: absolute;
    top: 365px;
    left: 380px;
}
divte{
position: absolute;
    top: 420px;
    left: 435px;
    font-size: 20px;
    font-weight: bold;
}
divtine{
position: absolute;
    top: 425px;
    left: 585px;
}        
divtie{
position: absolute;
    top: 425px;
    left: 605px;
}    

    
divn{  
position:absolute;
    top: 445px;
    left: 520px;
    font-size: 25px;
    font-weight: bold;
}   
divni{  
position: absolute;
    top: 455px;
    left: 590px;
}
textarea.wt-resize:hover{
    resize: none;
    border-color: blueviolet;
    box-shadow: 0 0 30px blueviolet;
    border-radius: 7px;
}

    
divbc{
position: absolute;
    top: 410px;
    left: 380px;    
    font-size: 25px;
    font-weight: bold;
}  
.buttonBC{
  background-color: white; 
  color: black; 
  border: 3px solid grey;
}
.buttonBC:hover {
  background-color: limegreen;
  color: white;
  box-shadow: 0 0 30px blueviolet;
  border-radius: 7px;
}

    
divcr{
position: absolute;
    top: 450px;
    left: 380px;
    font-size: 25px;
    font-weight: bold;
}
.buttonCR{
  background-color: white; 
  color: black; 
  border: 3px solid grey;
}
.buttonCR:hover{
  background-color: red;
  color: white;
  box-shadow: 0 0 30px blueviolet;
  border-radius: 7px;
}   

    

.buttonS{
  background-color: white; 
  color: black; 
  border: 3px solid grey;
}
.buttonS:hover{
  background-color: blueviolet;
  color: white;
  box-shadow: 0 0 30px blueviolet;
  border-radius: 7px;
}

    
divbb{
position: absolute;
    top: 490px;
    left: 380px;
    font-size: 25px;
    font-weight: bold;
}
.buttonBB{
  background-color: white; 
  color: black; 
  border: 3px solid grey;
}

.buttonBB:hover {
  background-color: blueviolet;
  color: white;
  box-shadow: 0 0 30px blueviolet;
  border-radius: 7px;
}
    
        </style>
    </head>
<body>
    <form method="post" >
<div>    
        <label>Dental Clinic</label>
            </div>
        
    <h1>Reserve your appointment</h1> 
        
<divdr>
        <label>DR:Karim Ashraf</label>
            </divdr>    
            
<divf>
        <label>Name:</label>
            </divf>
<divfi>
     <input type="text" onkeyup="check1();" name="Name" placeholder="Write First Name" id="name">
</divfi>

               
    
               
<divp>
        <label>Phone:</label>
            </divp>
<divpi>
<input name="phone" type="text" id="phone" placeholder="(###)###-####"  onkeyup="check2();">
       </divpi>
    
    
    
        
<divid>        
        <label>ID:</label>
            </divid>
<dividi>
     <input name="id" type="text" id="id" placeholder="National ID" onkeyup="check3();">
        </dividi>
    
<p style="position: absolute ;top:215px;left: 550px;font-size: 22px" id="m1" name="m1"></p>
<p style="position: absolute ;top:250px;left: 550px;font-size: 22px" id="m2" name="m2"></p>
<p style="position: absolute ;top:295px;left: 550px;font-size: 22px" id="m3" name="m3"></p>
<p style="position: absolute ;top:340px;left: 550px;font-size: 22px" id="m4" name="m4"></p>           

    
     <divbb> 
     <a href="project10.html"> 
    <button class="button buttonBB" style="width:165px;height:25px;">Back</button>
    </a>
     </divbb>
                
        <divtd>
        <label>Day:</label>
    </divtd>
    <divtid>
        <select id="day" name="day" Choose a Day="Choose the Date to Disclose" style="width: 165px; height: 20px">
            <option  value="sat">Sat</option>
            <option  value="sun">Sun</option>
            <option  value="mon">Mon</option>
            <option  value="tue">Tue</option>
            <option  value="wed">Wed</option>
            <option  value="thu">Thu</option>
        </select><br>
    </divtid>
    
<divbc>       
    <input  name="sub" type="submit" class="button buttonBC" value="Reservation" style="width:165px;height:25px;" >
</divbc>

<divcr>
    <input value="Cancellation" name="cancel" type="submit" class="button buttonCR" style="width:165px;height:25px;">
           </divcr>        
    
        
 <img src="Docterd.jpg"alt="Personal Photo to Dentist">
</form>
    </body> 
</html>
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
    
        $fn=$_POST['FirstName'];
        $id=$_POST['id'];
        $phone=$_POST['phone'];
        $day=$_POST['day'];
        $num;
        if(check($phone,$id,$fn)==true){
        $sql="SELECT * FROM heart";
        $result=mysqli_query($connection,$sql);
        $num=mysqli_num_rows($result);
        $num++;     
        $query="INSERT INTO `heart` (`day`, `id`, `name`, `phone`,`num`) VALUES ('$day', '$id', '$fn','$phone','$num')";
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
    $sql = "DELETE FROM heart WHERE id=$id";
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
        div {
            position: absolute;
            top: 150px;
            left: 140px;
            font-size: 30px;
            font-weight: bold;
        }

        divdr {
            position: absolute;
            top: 190px;
            left: 105px;
            font-size: 30px;
            font-weight: bold;
        }

        h1 {
            position: absolute;
            top: 200px;
            left: 40px;
            font-size: 30px;
            color: darkblue;
        }

        body {
            background-image: url("H.jpg");
            background-repeat: no-repeat, repeat;
            background-size: 1536px 724px;
        }

        img {
            position: absolute;
            top: 10px;
            left: 152px;
            width: 130px;
            height: 130px;
        }

        input:hover {
            border-color: cyan;
            box-shadow: 0 0 15px cyan;
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

        select:hover {
            border-color: cyan;
            box-shadow: 0 0 15px cyan;
            border-radius: 7px;
        }



        divf {
            position: absolute;
            top: 260px;
            left: 100px;
            font-size: 25px;
            font-weight: bold;
        }

        divfi {
            position: absolute;
            top: 267px;
            left: 176px;


        }

        divl {
            position: absolute;
            top: 290px;
            left: 48px;
            font-size: 25px;
            font-weight: bold;
        }

        divli {
            position: absolute;
            top: 295px;
            left: 176px;
        }

        divp {
            position: absolute;
            top: 320px;
            left: 98px;
            font-size: 25px;
            font-weight: bold;
        }

        divpi {
            position: absolute;
            top: 324px;
            left: 176px;
        }

        diva {
            position: absolute;
            top: 343px;
            left: 123px;
            font-size: 25px;
            font-weight: bold;
        }


        divai {
            position: absolute;
            top: 350px;
            left: 176px;
        }

        divid {
            position: absolute;
            top: 370px;
            left: 137px;
            font-size: 25px;
            font-weight: bold;
        }

        dividi {
            position: absolute;
            top: 376px;
            left: 176px;
        }

        divtd {
            position: absolute;
            top: 425px;
            left: 122px;
            font-size: 24px;
            font-weight: bold;
        }

        divtind {
            position: absolute;
            top: 403px;
            left: 155px;
        }

        divtid {
            position: absolute;
            top: 430px;
            left: 175px;
        }

        divte {
            position: absolute;
            top: 465px;
            left: 5px;
            font-size: 20px;
            font-weight: bold;
        }

        divtine {
            position: absolute;
            top: 470px;
            left: 155px;
        }

        divtie {
            position: absolute;
            top: 470px;
            left: 175px;
        }


        divn {
            position: absolute;
            top: 490px;
            left: 105px;
            font-size: 25px;
            font-weight: bold;
        }

        divni {
            position: absolute;
            top: 495px;
            left: 175px;
        }

        textarea.wt-resize:hover {
            resize: none;
            border-color: cyan;
            box-shadow: 0 0 15px cyan;
            border-radius: 7px;
        }


        .buttonBC {
            background-color: white;
            color: black;
            border: 3px solid grey;
        }

        .buttonBC:hover {
            background-color: springgreen;
            color: white;
            box-shadow: 0 0 30px cyan;
            border-radius: 7px;
        }

        divcr {
            position: absolute;
            top: 510px;
            left: 176px;
            font-size: 25px;
            font-weight: bold;
        }

        .buttonCR {
            background-color: white;
            color: black;
            border: 3px solid grey;
        }

        .buttonCR:hover {
            background-color: red;
            color: white;
            box-shadow: 0 0 30px cyan;
            border-radius: 7px;
        }

        divbs {
            position: absolute;
            top: 470px;
            left: 176px;
            font-size: 25px;
            font-weight: bold;
        }

        .buttonS {
            background-color: white;
            color: black;
            border: 3px solid grey;
        }

        .buttonS:hover {
            background-color: cyan;
            color: white;
            box-shadow: 0 0 30px cyan;
            border-radius: 7px;
        }

        divbb {
            position: absolute;
            top: 550px;
            left: 176px;
            font-size: 25px;
            font-weight: bold;
        }

        .buttonBB {
            background-color: white;
            color: black;
            border: 3px solid grey;
        }

        .buttonBB:hover {
            background-color: cyan;
            color: white;
            box-shadow: 0 0 30px cyan;
            border-radius: 7px;
        }
    </style>
</head>

<body>
<script>

</script>
<form  method="post">
    <div>
        <label>Heart Clinic</label>
    </div>

    <h1>Reserve your appointment</h1>

    <divdr>
        <label>DR:Karim Ashraf</label>
    </divdr>

    <divf>
        <label>Name:</label>  
    </divf>
    
    
<p style="color:red;position: absolute ;top:245px;left: 350px;font-size: 22px" id="m1" name="m1"></p>
<p style="color:red;position: absolute ;top:300px;left: 350px;font-size: 22px" id="m2" name="m2"></p>
<p style="color:red;position: absolute ;top:355px;left: 350px;font-size: 22px" id="m3" name="m3"></p>
<p style="color:red;position: absolute ;top:410px;left: 350px;font-size: 22px" id="m4" name="m4"></p>
    
    
    <divfi>
        <input onkeyup="check1();" id="name" type="text" Name="FirstName" placeholder="Write First Name">
    </divfi>
    <divp>
        <label>Phone:</label>
    </divp>
    <divpi>
        <input onkeyup="check2();" id="phone" name="phone" type="text" placeholder="(###)###-####" >
    </divpi>

    <divid>
        <label>ID:</label>
    </divid>
    <dividi>
        <input onkeyup="check3();" name="id" type="text" id="id" placeholder="(###)###-####" >
    </dividi>


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
    <divcr>
<input name="cancel" value="Cancellation" type="submit" class="button buttonCR" style="width:165px;height:25px;">
        </divcr>
    <divbs>
    <input value="Reservation" name="sub" type="submit" class="button buttonS" style="width:165px;height:25px; ">
    </divbs>


    <divbb>
        <a href="project10.html">
            <button name ="back" class="button buttonBB" style="width:165px;height:25px;">Back</button>
        </a>
    </divbb>
     

    <img src="Doctorh.jpg" alt="Personal Photo to Cardiologist">
    </form>
</body>

</html>
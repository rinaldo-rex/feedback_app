//Author : Bindu Tank , IBM Intern , VIT Chennai
<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<meta charset="UTF-8">
<link rel="stylesheet" href="stylesheet.css">
</head>
<body bgcolor='#AFEEEE'> 

<table  width='100%' height='20%' bgcolor='2F4F4F' >
<tr>
<td><font color='white'>IBM <b> Bluemix
<br><font color='white'><h1><b>EcoD India</h1></font></td>

<td><img src="IBM_Bluemix.jpg" align='right' width='30%' height='20%'></td></tr>
</table>

<table  width='100%' height='2%' bgcolor='#696969' >
<tr>
<td></td>
</tr>
</table>
<table  width='100%' height='2%' bgcolor='#A9A9A9' >
<tr>
<td></td>
</tr>
</table>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $comErr = $serviceErr = $topicErr = "";
$name = $tweet = $com = $servic = $topic = $text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["tweet"])) 
{
     $nameErr = "Name is required";
   } 
else{
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	 {
       $nameErr = "Only letters and white space allowed"; 
     }
}  
   
   if (empty($_POST["tweet"])) {
     $emailErr = "Email ID  required";
   } else {
     $tweet = test_input($_POST["tweet"]);
     // check if e-mail address is well-formed
     if (!filter_var($tweet, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid tweet ID"; 
     }
   }
     
  
   if (empty($_POST["com"])) {
     $comErr = "Field is required";
   } else {
     $com = test_input($_POST["com"]);
   }
   
   if (empty($_POST["sw"])) {
     $swErr = "Field is required";
   } else {
     $sw = test_input($_POST["sw"]);
   }
   
   if (empty($_POST["service"])) {
     $serviceErr = "Field is required";
   } else {
     $service = test_input($_POST["service"]);
   }
   
   if (empty($_POST["topic"])) {
     $topicErr = "Field is required";
   } else {
     $topic = test_input($_POST["topic"]);
   }
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<p><span class="error"></span></p>
<form method="post" action="../couchdb.php"> 
<table width='100%' height='100%'>
<tr>
<td colspan='2' rowspan='48' width="25%" height='100%' bgcolor='2F4F4F' align='center'><font color='white'><b>IBM Bluemix <br> <br>The Digital Innovation Platfrom</font></b></td> 
<td rowspan='48' width="10%"  height='100%'></td> 
<td  height='100%'> 
	
	<table>
	
	<tr>
	<td>Name: </td>
	
	<td> <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error"> <?php echo $nameErr;?></span>
	</td>
	</tr>

	<tr>
<td>
</td>
</tr>
   <tr>
   <td>Company: </td> 
   <td><input type="com" name="com" value="<?php echo $tweet;?>">
   <span class="error"><?php echo $comErr;?></span>
   </td>
   </tr>
<tr>
<td>
</td>
</tr>
	<tr>
   <td>Email ID: </td> 
   <td><input type="text" name="tweet" value="<?php echo $tweet;?>">
   <span class="error"><?php echo $emailErr;?></span>
   </td>
   </tr>
	<tr>
<td>
</td>
</tr>
	</table>
</td>

<tr>
<td>
</td>
</tr>
   
   <tr>
<td>
</td>
</tr>
 
	<tr>
	<td>
	
   </td>
   </tr>
	<tr> 
   <td> 
					
   </td>
   </tr>
   
   <tr>
<td>
</td>
</tr>
   
	<tr>  
   <td>
  <p>
      How do you rate the overall session:
      <span class="starRating">
        <input id="rating5" type="radio" name="rating" value="5">
        <label for="rating5">5</label>
        <input id="rating4" type="radio" name="rating" value="4">
        <label for="rating4">4</label>
        <input id="rating3" type="radio" name="rating" value="3" >
        <label for="rating3">3</label>
        <input id="rating2" type="radio" name="rating" value="2">
        <label for="rating2">2</label>
        <input id="rating1" type="radio" name="rating" value="1">
        <label for="rating1">1</label>
      </span>
    </p>
   </td>
   </tr>


   
   <tr>
<td>
</td>
</tr>
	
  <tr> 
   <td>
  
   </td>
   </tr>
   
 
 <tr>
<td>
</td>
</tr>
 
	<tr>
	<td>
	
   </td>
   </tr>
   

<tr>
<td>
 <label><b>Name top 3 priority Bluemix services which you consisder using it near future: </b><br>
<br></label>
     <textarea name="service"  rows='5' cols='50' value="<?php echo $text;  ?>" >
     </textarea>
	 <span class="error"><?php echo $serviceErr;?></span>
</td>
</tr>

   
   
	<tr>
	<td>
	
   </td>
   </tr>
   
   
	<tr>
   <td>
   <label><b>What other Bluemix services you would like to be discussed in specific : </b><br>
<br></label>
     <textarea name="topic"  rows='5' cols='50' value="<?php echo $text;  ?>" >
     </textarea>
	 <span class="error"><?php echo $topicErr;?></span>
	</td>	
	</tr>
   
	<tr>
	<td>
	
   </td>
   </tr>
   
  
  <tr>
<td>
</td>
</tr>
  
	<tr>
   <td>
	
   </td>
   </tr>

	
	<tr>
<td>
</td>
</tr>
	
   <tr>
   <td>
   <label><b>Additional Comments:  </b> <br></label>
     <textarea name="text"  rows='5' cols='50' value="<?php echo $text;  ?>" >
     </textarea>
	</td>	
	</tr>

<tr>
<td>
</td>
</tr>
	
	<tr>
	<td>
	
   </td>
   </tr>
   
   
	<tr>
	<td>
	
   </td>
   </tr>
   
	<tr> 
   <td>
   <input type="submit" name="submit" value="Submit"> 
   </td>
   </tr>
   
<tr>
<td>
</td>
</tr>

<tr>
<td>
</td>
</tr>

<tr>
<td>
</td>
</tr>

<tr>
<td>
</td>
</tr>
<tr>
<td>
</td>
</tr>

<tr>
<td>
</td>
</tr>


<tr>
<td>
</td>
</tr>

<tr>
<td>
</td>
</tr>

<tr>
<td>
</td>
</tr>

<tr>
<td>
</td>
</tr>



</table>



<table  width='100%' height='20%'>
<tr></tr>
</table>





<table  width='100%' height='20%' bgcolor='2F4F4F' >
<tr>
<td><font color='white'>IBM <b> Bluemix EcoD India</h1></font></td>
<tr>
</table>

</body>
</html>

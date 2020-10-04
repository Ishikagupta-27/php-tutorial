<?php 
extract($_POST);
if(isset($save))
		{
	switch($save)
	{
		case 'Addition':$res=$fn+$sn;
		break;
		
		case 'Subtraction':$res=$fn-$sn;
		break;
		
		case 'Multiplication':$res=$fn*$sn;
		break;

		case 'Division':$res=$fn/$sn;
		break;
		
	}
	}
	

?>

<html>
<head>
	<title>My first PHP File</title>
	
	<style type="text/css">
	  h1{
	  	text-align: center;
	  	margin-left: -150px;
	  }
	  form table{
	  	margin: auto;
	  }
	  form table td{
	  	font-size: 26px;

	  }
	  input[type=number]{
	  	margin-left: 50px;
	  	height: 50px;
	  	width: 250px; 
	  	margin-bottom: 30px;
	  }
	  input[type=number], select{
	  	box-shadow: 0px 5px 5px 0px;
	  }
	  input[type=submit]{
	  	height: 50px;
	  	width: 170px;
	  	font-size: 20px;
	  	border-radius: 0.8rem;
	  	cursor: pointer;
	  }
	  
	</style>
</head>
<body>
   <h1>Calculator</h1>
   <form name="calculation" method="post" action="#">
     <table>
			<tr><td>First Number:</td>
					<td><input type="number" name="fn" value="<?php  echo @$fn;?>" placeholder="Enter first number"/> 
			</td></tr>
			<tr><td>Second Number:</td>
					<td><input type="number" name="sn" value="<?php  echo @$sn;?>" placeholder="Enter second number"/> 
			</td></tr>
			<tr> <td colspan="2">
				<br>Select Your Choice: <br><br>
				
				<input type="submit" name="save" value="Addition" style="background-color:rgb(225,238,244);"/>
				<input type="submit" name="save" value="Subtraction" style="background-color:rgb(255,157,157);"/>
				<input type="submit" name="save" value="Multiplication" style="background-color:rgb(255,255,145);"/>
				<input type="submit" name="save" value="Division" style="background-color:rgb(232,177,252);"/>
			    
			 </td> 
		    </tr>
			<tr>
				<td>Your Result</td>
				<td><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/>
				</td>
			</tr> 
	 </table>
   </form>
</body>
</html>
<?php

$con=mysqli_connect("localhost","root","","library_management");

if(isset($_POST['submit']))
{

//$bsid=$_POST['issue_id'];
$mem_id=$_POST['emp_id'];

$mem_name=$_POST['user'];
$b_name=$_POST['bname'];
$b_id=$_POST['bid'];
$due_date=$_POST['due_date'];
$last_rem_date=$_POST['last_reminded'];


		

$sql="insert into book_issue_table(emp_id,user,bname,bid,due_date,last_reminded) values('$mem_id','$mem_name','$b_name','$b_id','$due_date','$last_rem_date')";

$res=mysqli_query($con,$sql);
	
	if($res)
	{
		echo "successfully";
	}
	else
	{
		echo "error";
	}

	
$sql1="update book_details set copies=copies-1 where bid=$b_id";
$ures=mysqli_query($con,$sql1);




}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<div class="container">
				<h1> book issue entry</h1>
				<form action="book_issue_table.php" method="POST">
				<div class="form-group">
					
				<div class="form-group">
					<label>member_id</label>
					<div class="col">
      				<input type="text"  name="emp_id" id="emp_id" required autofocus="off" ><br><bt>
    				</div></div>

    				<div class="form-group">
					<label>member name</label>
					<div class="col">
      				<input type="text"  name="user" id="user" required autofocus="off" ><br><bt>
    				</div></div>


    				<div class="form-group">
					<label>book name</label>
					<div class="col">
      				<input type="text"  name="bname" required autofocus="off" ><br><bt>
    				</div></div>

    				<div class="form-group">
					<label>book id</label>
					<div class="col">
      				<input type="text"  name="bid" required autofocus="off" ><br><bt>
    				</div></div>

    				<div class="form-group">
					<label>due_date</label>
					<div class="col">
      				<input type="date"  name="due_date" required  ><br><bt>
    				</div></div>

    				<div class="form-group">
					<label>Remain date</label>
					<div class="col">
      				<input type="date"  name="last_reminded" required  ><br><bt>
    				</div></div>

    				<input type="submit" name="submit" id="bissue_add">
    			</form>
				</div>



		</div>



</body>
</html>
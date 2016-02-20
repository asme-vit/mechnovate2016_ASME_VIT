<?php
session_start();
ob_start();
?>
<?php
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<?php

$event=$_POST["comp"];
if($event == 1)
{
	$cost = 100;
}
else if($event == 2)
{
	$cost = 500;
}
else if($event == 3)
{
	$cost = 400;
}
else if($event == 4)
{
	$cost = 1000;
}
else if($event == 5)
{
	$cost = 600;
}
else if($event == 6)
{
	$cost = 800;
}
else if($event == 7)
{
	$cost = 1000;
}
else if($event == 8)
{
	$cost = 600;
}
else if($event == 9)
{
	$cost = 500;
}
else if($event == 10)
{
	$cost = 900;
}
?>
<?php

		include("connection.php");
				$email=$_SESSION["email"];
				$amount=$cost;
					
					$sql="Select * from signup_mech where email='$email'";
                    $res=mysqli_query($con,$sql);
                    $row1=mysqli_fetch_row($res);
                    $name = $row1[0];

					$sql = "Select max(reference_number) from pre_payment_mech";
					$res = mysqli_query($con,$sql);
					$row = mysqli_fetch_row($res);
					$refno = $row[0] + 1;

                        $sql="INSERT INTO pre_payment_mech values('$email','$name','$refno','$amount','$event')";
                        $res=mysqli_query($con,$sql);
					
                            //Payment gateway redirection
                            $tran= "ASME".$refno;
                            //echo $tran;
							//echo $name;
							echo '<form id="payment" method="POST" action="https://academics.vit.ac.in/online_application2/onlinepayment/Online_pay_request1.asp">';
                            echo'<input type="hidden" name="id_trans" value="'.$tran.'">
                            <input type="hidden" name="id_name" value="'.$name.'">
                            <input type="hidden" name="id_event" value="13">
                            <input type="hidden" name="amt_event" value="'.$amount.'">
                            <input type="hidden" name="id_merchant" value="1012">
                            <input type="hidden" name="id_password" value="(me9erli61620@)">';
                            echo '</form>'; 

			
?>
<html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
         $("#payment").submit();
    });
</script>
</html>
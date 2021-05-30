<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $ret="select EmailId from tblusers where EmailId=:email";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="Insert Into tblusers(FullName,MobileNumber,EmailId,Password)Values(:fname,:mobno,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('You have signup  Scuccessfully');</script>";
}
else
{

echo "<script>alert('Something went wrong.Please try again');</script>";
}
}
 else
{

echo "<script>alert('Email-id already exist. Please try again');</script>";
}
}
?>
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 

</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Google</a></li>
													
												</ul>
											</div>
											<div class="login-right">
									<div class="login-right">
												<form id="signup" name="signup" action="" method="post" onsubmit="return checkpass();">
													<h3>Create your account </h3>
													<input type="text" required='true' name="fname" placeholder=" Full Name">
													<input type="text" name="mobno" required="true" maxlength="10" pattern="[0-9]+" placeholder="Mobile Number">
													<input type="text" required='true' name="email" placeholder="Email">	
													<input type="password" name="password" required="true" id="password" placeholder="Password">
													<input type="password" name="repeatpassword" required="true" id="repeatpassword" placeholder="Repeat Password">	
													<input type="submit" value="create an account" id="" name="submit">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
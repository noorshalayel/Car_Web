<?php

include "menu.php";
if(isset($_POST['signin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where username='$username' and password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res && $res->num_rows>0){
        $_SESSION['User_Login']=$username;
        header("location:indexLogin.php");
        echo "Correct!";
    }else{
        $_SESSION['login_faild'] ="username or password is incorrect";
        echo "Error!";

    }

}


if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "insert into user set username='$username' , phone_number = '$phone_number' ,email = '$email',  password = '$password'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['user'] = "user is  added";
        header("location:indexLogin.php");

    } else {

        $_SESSION['user'] = "user is not added";
//        header("location:manage-admin.php");

    }
}

?>
<!DOCTYPE html>
<html lang="zxx">

	<!-- //short-->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>C</span>ontact
					<span>U</span>s
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="contact-row">
				<div class="col-md-6 contact-text1">
					<h4>Contact Our
						<span>AL Noor Rental</span>
					</h4>
					<p>Aliquam erat volutpat. Duis vulputate tempus laoreet.Aliquam erat volutpat. Duis vulputate tempus laoreet.Aliquam erat
						volutpat. Duis vulputate tempus laoreet.
					</p>
				</div>
				<div class="col-md-6 contact-w3lsright">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26370863.006641828!2d-113.70834778640587!3d36.212776709411365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1511345829734"
					    allowfullscreen></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="contact-lsleft">
		<div class="container">
			<div class="address-grid">
				<h4>Contact Details</h4>
				<ul class="w3_address">
					<li>
						<span class="fa fa-globe" aria-hidden="true"></span>1235 Ipswich, Foxhall Road, USA
					</li>
					<li>
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
						<a href="mailto:info@example.com">mail@example.com</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span>+001 234 5678
					</li>
				</ul>
			</div>
			<div class="contact-grid agileits">
				<h4>Get In Touch</h4>
				<form action="#" method="post">
					<div class="">
						<input type="text" name="Name" placeholder="Name" required="">
					</div>
					<div class="">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="">
						<input type="text" name="Phone Number" placeholder="Phone Number" required="">
					</div>
					<div class="">
						<textarea name="Message" placeholder="Message..." required=""></textarea>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<!-- //contact -->



</body>

</html>
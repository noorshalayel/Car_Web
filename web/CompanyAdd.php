<?php
include "../config/connection.php";

include "../web/menu.php";

?>

<?php
if (isset($_POST['submit'])) {
    $company_name = $_POST['company_name'];
    $company_number = $_POST['company_number'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $description = $_POST['description'];

    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $name = $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];
        $ext = explode(".", $name);
        $ext = end($ext);
        $image ="image/company/" . $company_name . "." . $ext;
        move_uploaded_file($temp, $image);
    } else {
        $image = "../image/logo.png";
    }

    if (!mysqli_connect_error()) {
        $sql = "insert into company set name = '$company_name' , number = '$company_number' , contact = '$contact' ,email ='$email', address = '$address' ,age = '$age' ,logo ='$image', description ='$description'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['company'] = "<div class='success'>Company added</div>";
//            header("location:");
        }
    } else {
        $_SESSION['company'] = "<div class='error'>Company not added</div>";

    }
}
?>
<head>
    <title>PlayBook <?php echo $page_title ; ?></title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Mastering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //custom-theme -->
</head>

<style>


    /**
     * Panels
     */
    /* General styles */
    .panel {
        box-shadow: none;
        margin-left: 240px;
        margin-top: 30px;
    }

    .panel-heading {
        border-bottom: 0;
    }

    .panel-title {
        font-size: 17px;
    }

    .panel-title > small {
        font-size: .75em;
        color: #999999;
    }

    .panel-body *:first-child {
        margin-top: 0;
    }

    .panel-footer {
        border-top: 0;
    }

    .panel-default > .panel-heading {
        color: #333333;
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.07);
    }

    form label {
        color: #999999;
        font-weight: 400;
    }

    .form-horizontal .form-group {
        margin-left: -15px;
        margin-right: -15px;
    }

    @media (min-width: 768px) {
        .form-horizontal .control-label {
            text-align: right;
            margin-bottom: 0;
            padding-top: 7px;
        }
    }

    .profile__contact-info-icon {
        float: left;
        font-size: 18px;
        color: #999999;
    }

    .profile__contact-info-body {
        overflow: hidden;
        padding-left: 20px;
        color: #999999;
    }

    .profile-avatar {
        min-height: 168px;
        min-width: 191px;
        width: 200px;
        position: relative;
        margin: 0px auto;
        margin-top: 196px;
        border: 4px solid #f3f3f3;
    }
   .panel-body{
        padding-right: 100px;
    }
   h3 {
       margin-left: 180px;
       text-align: center;
       margin-top: 20px;
   }
   .img{
       padding:20px
   }


</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
        <div class="col-xs-12 col-sm-9">
                <h3 class="tittle" >
                    <span>C</span>ompany
                    <span>F</span>orm
                </h3>
            <form class="form-horizontal" action=" " method="post" enctype="multipart/form-data">

                <div class="panel panel-default">

                    <div class="panel-body">


                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" placeholder="Company Name" name="company_name" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input id="text" placeholder="Company Code" name="company_number" type="text" value="" class="addinput" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" placeholder="Age Company" name="age" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="email" placeholder="Your E-mail" name="email" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" placeholder="Phone Number" name="contact" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" placeholder="Address" name="address" required="" class="addinput">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" placeholder="Description" name="description" required="" class="addinput">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10" class="img">
                                <input type="file" name="image" style=" margin: auto;">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input type="submit" name="submit" value="Submit" class="inp">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
    </div>
</div>


<?php

include "footer.php";

?>

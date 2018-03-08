<?php
require_once ('marsvalilib.php');
$v=new Validationlibrary();
$error ="";
$name ="";
$email ="";
$password ="";
$phone = "";
$dob ="";
$provinces = ["Newfoundland &amp Labrador","Prince Edward Island","Nova Scotia","New Brunswick","Quebec","Ontario","Manitoba","Saskatchewan","Alberta","British Columbia"];
function display_options($provinces){
    $str="";
    foreach ($provinces as $p){
        $str.="<option value='$p'>$p</option>";
    }
    return $str;
}
$gender = ["Male", "Female"];

function display_gender($gender){
    $str="";
    foreach ($gender as $g){
        $str.=$g."<input type='radio' id='genders' name='f_Gender' value='$g'/>";
    }
    return $str;
}

$links = ["Home","About us","Login","Search","Faq"];

function display_navigation($links){
    $str="";
    foreach($links as $n){
        $str.="<li><a href='#'>$n</a></li>";
    }
    return $str;
}

if(isset($_POST['f_Submit'])){
    $email = $_POST['f_Email'];
    $phone = $_POST['f_Phone'];
    $name = $_POST['f_Name'];
    $dob = $_POST['f_Dob'];
    $password = $_POST['f_Password'];
    if(!$v->isString($name)){
        $error.="only characters";
    }elseif (!$v->checklength($name,10)) {
        $error .= "not more than 10 character";
    }else{

    }
    


}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form</title>
    <script src="form-validation.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<header>
    <?php
    include "header.php";
    ?>
</header>
<main>
    <h1>Register Here</h1>
    <?= $error; ?>
    <form action="registration-form.php" method="post" id="register" name="myForm">
        <?php
        include  "body.php";
        ?>
    </form>
</main>
<footer>
    <?php
    include "footer.php";
    ?>
</footer>
</body>
</html>


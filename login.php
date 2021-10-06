<?php 
error_reporting(0);
//define variables 
$emailErr=$passErr="";
if(isset($_POST['sub'])){
     $email=input_field($_POST['emailid']);
     $pass=input_field($_POST['pass']);
     
     //email validation
     if(empty($email))
     {
         $emailErr="Email is required";
     }
     else {
         if(!preg_match("/^[a-z,0-9,@.]+$/",$email)){
            $emailErr="Please put Valid email";
         }
     }
      //password
      if(empty($pass))
      {
          $passErr="Password is required";
      }
      else {
          if(!preg_match("/^[a-zA-Z,0-9,@.#$]{3,20}+$/",$pass)){
             $passErr="Should contain 6 letter";
          }
      }
     
     if($emailErr==""  && $passErr==""){
         $status="<br>LOGIN SUCCESSFUL!!!";
     }
}
  function input_field($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
  }
?>


<!doctype html>
<html lang="en">
  <head> 
    <?php include("head.php"); ?>
    <title>Login Page</title>
    <style>
      body{
        background-image: url("bglogin.jpg");
        background-size: cover;
        background-repeat: no-repeat;
      }
      .sec {
            color: white;
            padding-top: 20px;
            padding-left: 20px;
            margin-top: 120px;
            margin-bottom: 20px;
            margin-left: 200px;
            height: 300px;
            width: 700px;
            background: black;
        }
      .error{
        color: red;
      }
      .success{
        color: green;
        margin-top: 40px;
        align-items: center;
        font-weight: bold;
      }
      #submit{
        font-weight: bold;
        background-color: green;
      }
      #clear{
        margin-left: 10px;
        font-weight: bold;
        background-color: orange;
      }
      table {
            margin-left: 100px;
            margin-top: 30px;
        }
    </style>
  </head>
  <body>
    <?php include("nav.php");?>
    <section class="container">
    <section class="sec">
        <?php if(isset($status))?>
          <h2>Contact Us</h2>
          <table>
        <form method="post">
            <tr><td><span class="error"> * Are required fields </span></td></tr>
         
         <tr><td>Email ID :</td>
         <td> <input type="text" name="emailid"/><span class="error">*<?php echo $emailErr;?> </span></td></tr>
         <tr><td>Password : </td>
         <td><input type="text" name="pass"/><span class="error">*<?php echo $passErr;?> </span></td></tr>
         
         <tr><td><input type="submit" id="submit" value="Submit" name="sub"/><input id="clear" type="reset" value="Clear" name="clr"></td></tr>
         <span class="success"><?php echo $status;?></span>
        </form>
        </table>
        </section>
    </section>
    <?php include("footer.php") ?>
    <?php include("foot.php");?>
  </body>
</html>
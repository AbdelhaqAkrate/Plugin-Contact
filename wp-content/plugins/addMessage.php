<?php

global $wpdb;
if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $tablename = $wpdb->prefix."plugin";

  if($email != '' && $subject != '' && $message != ''){
     $data = $wpdb->get_results("SELECT * FROM ".$tablename." WHERE email='".$email."' ");
     if(count($data) == 0){
       $insert = "INSERT INTO ".$tablename."(email,subject,message) values('".$email."','".$subject."','".$message."') ";
       $wpdb->query($insert);
       echo "Sent sucessfully.";
     }
   }
}

?>
<h1>Add New Message</h1>
<form method='post' action=''>
  <table>
    <tr>
      <td>Email</td>
      <td><input type='email' name='email'></td>
    </tr>
    <tr>
     <td>Subject</td>
     <td><input type='text' name='subject'></td>
    </tr>
    <tr>
     <td>Message</td>
     <td><input type='text' name='message'></td>
    </tr>
    <tr>
     <td>&nbsp;</td>
     <td><input type='submit' name='submit' value='Send'></td>
    </tr>
 </table>
</form>
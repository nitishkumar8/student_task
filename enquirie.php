<?php 
include('header.php'); ?>

<div class="container">
  <h2>Enquiries Form</h2> 
      <hr class="mt-2 mb-5">
<div class="row"> 
  <form role="form" action="" method="post" >
    <div class="col-lg-6">
      
      <div class="form-group">
        <label for="InputName">Your First Name</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputFname" id="InputFname" placeholder="Enter First Name" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputName">Your Last Name</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputLname" id="InputLname" placeholder="Enter Last Name" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputEmail">Your Email</label>
        <div class="input-group">
          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputMessage">Message</label>
        <div class="input-group">
          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
    
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
 
</div>

</div>
<?php 

if(isset($_POST['submit']))
{
   date_default_timezone_set("Asia/Calcutta");
   date_default_timezone_get();
   $reg_date = date('Y-m-d H:i:s', time());

   $firstname = mysqli_real_escape_string($conn, $_POST['InputFname']);
   $lastname = mysqli_real_escape_string($conn, $_POST['InputLname']);
   $InputEmail = mysqli_real_escape_string($conn, $_POST['InputEmail']);
   $comment    = mysqli_real_escape_string($conn, $_POST['InputMessage']);  

    $enquirie = "insert into enquiries(first_name,last_name,email,comment,datetime)values('$firstname','$lastname','$InputEmail','$comment','$reg_date')";
    $exe_query = mysqli_query($conn,$enquirie);
    $last_id = mysqli_insert_id($conn);

     if($last_id>0)
     {
            echo "<script>alert('Successfully Insert Data')
            window.location='student_list.php';</script>";
     }else
     {   
      echo "<script>alert('NO Insert Data,please try again')</script>";
     }
   
}


?>


<?php include('footer.php'); ?>
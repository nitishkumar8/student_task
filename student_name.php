<style>
 th {
    background-color: #36304a; ;
    color: white;
}
  tbody tr {
    font-size: 14px;
  }

</style>
<?php 

    include('header.php');

   $studentId = $_GET['list'];
   $Student_list = "SELECT * FROM `enquiries` where `student_Id`='$studentId'";
   $exe_query    = mysqli_query($conn,$Student_list);
   $student=mysqli_fetch_assoc($exe_query);
   
  ?>
<div class="container">
    <h2><?php echo $student['first_name']  ."  ".$student['last_name']; ?> </h2> 
    <hr class="mt-2 mb-5">
             
  <table class="table table-striped">
    <thead >
      <tr>

        
        <th>Register Id</th>        
        <th>First Name</th>        
        <th>Last Name</th>
        <th>Email</th>
        <th>Comment</th>
        <th>Reg Date</th>
      </tr>
    </thead>
    <tbody>      
        <tr>     
         <td> <?php echo $student['student_Id']   ?>   </td>        
         <td> <?php echo $student['first_name']   ?>   </td>        
         <td> <?php echo $student['last_name']    ?>   </td>        
         <td> <?php echo $student['email']        ?>   </td>        
         <td> <?php echo $student['comment']      ?>   </td>         
          <td><?php echo $student['datetime'];    ?>   </td>
        </tr>   
   
     
    </tbody>
  </table>
 </div>
<?php include('footer.php'); ?>
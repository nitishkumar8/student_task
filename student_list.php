<style>
 th {
    background-color: #36304a; ;
    color: white;
}
  tbody tr {
    font-size: 14px;
  }

</style>
<?php include('header.php'); ?>
<div class="container">
    <h2>Student Lists</h2> 
    <hr class="mt-2 mb-5">
             
  <table class="table table-striped">
    <thead >
      <tr>

        
        <th>Student Name</th>        
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
  <?php 
   $Student_list = "SELECT * FROM `enquiries` order by `student_Id` desc";
   $exe_query    = mysqli_query($conn,$Student_list);
   while($student=mysqli_fetch_assoc($exe_query)) 
   {
  ?>
       
        <tr>     
         <td> <a href="student_name.php?list=<?php echo $student['student_Id']; ?>" ><?php echo $student['first_name']  ."  ".$student['last_name']; ?> </a></td>        
          <td><?php echo $student['email'];   ?>  </td>
        </tr>
    
    <?php } ?>
     
    </tbody>
  </table>
 </div>
<?php include('footer.php'); ?>
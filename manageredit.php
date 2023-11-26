<?php
include('config.php');
include('menu.php');

$id= $_GET['id'];
$qry= "SELECT * FROM manager where id ='$id'";
$result = mysqli_query($conn,$qry);
$row= mysqli_fetch_assoc($result)
?>
<div class="container-fluid">
<div class="row">
          <h1> Edit User</form></h1> 
         <div class="col-12" style="border: solid;">
        
            <form method="post" action="managerupdate.php">
            <div class="form-grope">
                
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
              </div>
              <div class="form-grope">
                <h3><lable class="form-lable"> User Name</lable></h3>
                <input type="text" class="form-control" name="userName" value="<?php echo $row['userName'] ?>">
              </div>
              <div class="form-grope">
                <h3><lable class="form-lable"> Email</lable></h3>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
              </div>
              <div class="form-grope">
                <h3><lable class="form-lable"> CNIC</lable></h3>
                <input type="text" class="form-control" name="cnic" value="<?php echo $row['cnic'] ?>">
               </div>
               <div class="form-grope">
                <h3><lable class="form-lable"> City</lable></h3>
                <input type="text" class="form-control" name="city" value="<?php echo $row['city'] ?>">
               </div>
               <div class="form-grope">
                <h3><lable class="form-lable"> PhoneNumber</lable></h3>
                <input type="text" class="form-control" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>">
               </div>
              <div class="form-grope">
                <h3><lable class="form-lable"> SALARY</lable></h3>
                <input type="text" class="form-control" name="salary" value="<?php echo $row['salary'] ?>">
              </div>
              <div>
                <button type="submit" class="btn btn-primary" name="sub"> Update</button>
              </div>



            </form>
        
         </div>
         </div>

            

    </body>
</html>
<?php
include('config.php');
include('menu.php');

$id= $_GET['id'];
$qry= "SELECT * FROM employee where id ='$id'";
$result = mysqli_query($conn,$qry);
$row= mysqli_fetch_assoc($result)
?>
<div class="container-fluid">
          <div class="row">
            
         <div class="col-12" style="border: solid;">
         <h1> Edit User</form></h1>
            <form method="post" action="update.php">
            <div class="form-grope">
                
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
              </div>
              <div class="form-grope">
                <lable class="form-lable"> user name</lable>
                <input type="text" class="form-control" name="username" value="<?php echo $row['userName'] ?>">
              </div>
              <div class="form-grope">
                <lable class="form-lable"> email</lable>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
              </div>
              <div class="form-grope">
                <lable class="form-lable"> cnic</lable>
                <input type="text" class="form-control" name="cnic" value="<?php echo $row['cnic'] ?>">
               </div>
               <div class="form-grope">
                <lable class="form-lable"> city</lable>
                <input type="text" class="form-control" name="city" value="<?php echo $row['city'] ?>">
               </div>
               <div class="form-grope">
                <lable class="form-lable"> phoneNumber</lable>
                <input type="text" class="form-control" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>">
               </div>
              <div class="form-grope">
                <lable class="form-lable"> password</lable>
                <input type="text" class="form-control" name="pass" value="<?php echo $row['password'] ?>">
              </div>
              <div>
                <button type="submit" class="btn btn-primary" name="sub"> Update</button>
              </div>



            </form>
        
         </div>
         </div>

            

    </body>
</html>
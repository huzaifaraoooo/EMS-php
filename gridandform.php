<?php
include('menu.php');
?>
        <div class="container-fluid">
          <div class="row">
         <div class="col-13" style="border: solid;">
         <h1> Login form Of Employee Management System </form></h1>
            <form method="post" action="login.php">
              <div>
                <label class="form-label"> user name</label>
                <input type="text" class="form-control" name="username">
              </div>
              <div>
                <lable class="form-lable"> email</lable>
                <input type="email" class="form-control" name="email">
              </div>
              <div>
                <lable class="form-lable"> cnic</lable>
                <input type="cnic" class="form-control" name="cnic">
              </div>
              <div>
                <lable class="form-lable"> city</lable>
                <input type="city" class="form-control" name="city">
              </div>
              <div>
                <lable class="form-lable"> phoneNumber</lable>
                <input type="phoneNumber" class="form-control" name="phoneNumber">
              </div>
              <div>
                <lable class="form-lable"> password</lable>
                <input type="text" class="form-control" name="pass">
              </div>
              <div>
                <button type="submit" class="btn btn-primary" name="sub"> Save</button>
              </div>



            </form>
        
         </div>
         </div>

            

    </body>
</html>
<?php
if(isset($_POST['sub']))
{
    $user=$_POST['username'];
    $password=$_POST['pass'];    

    echo $user ;
    echo $password ;
}
?>
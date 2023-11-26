<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
          <div class="row">
         <div class="col-12" >
         <h1> Manager Management System </form></h1>
            <form method="post" action="managerinsert.php">
              <div>
                <label class="form-label"> User Name</label>
                <input type="text" class="form-control" name="userName">
              </div>
              <div>
                <lable class="form-lable"> Email</lable>
                <input type="email" class="form-control" name="email">
              </div>
              <div>
                <lable class="form-lable"> CNIC</lable>
                <input type="cnic" class="form-control" name="cnic">
              </div>
              <div>
                <lable class="form-lable"> City</lable>
                <input type="city" class="form-control" name="city">
              </div>
              <div>
                <lable class="form-lable"> PhoneNumber</lable>
                <input type="phoneNumber" class="form-control" name="phoneNumber">
              </div>
              <div>
                <lable class="form-lable"> SALARY</lable>
                <input type="salary" class="form-control" name="salary">
              </div>
              <div>
                <button type="submit" class="btn btn-primary" name="sub"> Save</button>
              </div>



            </form>
        
         </div>
         </div>

</body>
</html>
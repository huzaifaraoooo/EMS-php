<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Management Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Add custom styles here if needed */
    /* For example: */
    /* .card { margin: 10px; } */
  </style>
</head>
<body>
  <?php include('menu.php');?>
  <section>
<div class="bg-">
  <div class="container mt-4">
    <!-- Header -->
    <div class="row mb-4">
      <div class="col-md-12 text-center">
        <h1>Employee Management System Dashboard</h1>
        <p>Manage Employees, Managers, B.O.D & Workers</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Employee Information</h5>
            <img src="image/im1.jpg" class="card-img-top" alt="">
            <!-- Add employee-related information or links here -->
            <p class="card-text">An employee is an individual who works for an employer in return for compensation, while an employer is a person or company that hires an employee to perform tasks.</p>
            <a href="view.php" class="btn btn-primary">Add Employee Data</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Manager Information</h5>
            <img src="image/im2.jpg" class="card-img-top" alt="">
            <!-- Add manager-related information or links here -->
            <p class="card-text">A person who has control or direction of an institution, business, etc., or of a part, division, or phase of it.Person who manages: the manager of our track team.s</p>
            <a href="managerview.php" class="btn btn-primary">Add Manager Data</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Worker Information</h5>
            <img src="image/im6.jpg" class="card-img-top" height="110" alt="">
            <!-- Add worker-related information or links here -->
            <p class="card-text">A skilled worker is any worker who has special skill, training, knowledge which they can then apply to their work</p>
            <a href="workerview.php" class="btn btn-primary">Add Worker Data</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">B.O.D</h5>
            <!-- Add body-related information or links here -->
            <img src="image/im4.jpg" class="card-img-top" height="110" alt="">
            <p class="card-text">A board of directors (BofD) is the governing body of a company, whose members are elected by shareholders to set strategy, oversee management.</p>
            <a href="bodview.php" class="btn btn-primary">Add B.O.D Data</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  
  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


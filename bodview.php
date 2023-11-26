<?php
include('config.php');
include('menu.php'); 
?>

    <div class="container">
        <h1> B.O.D list</h1>
        <a href="bod.php"  class="btn btn-primary ">Add D.O.B </a>
        <table class="table table-striped">
        <tr>
        <td> id</td>
        <td> user name</td>
        <td> Email</td>     
        <td> CNIC</td>
        <td> CITY</td>
        <td> phoneNumbre</td>
        <td> SALARY</td>
        <td> Action</td>
        <?php
        $qry= "SELECT * FROM bod";   
        $result = mysqli_query($conn,$qry);
        if(mysqli_num_rows($result)>0)
        {
            while($row= mysqli_fetch_assoc($result))
            {
               echo"<tr>"; 
               echo "<td>". $row['id']."</td>";
               echo "<td>". $row['userName']."</td>";
               echo "<td>". $row['email']."</td>";
               echo "<td>". $row['cnic']."</td>";
               echo "<td>". $row['city']."</td>";
               echo "<td>". $row['phoneNumber']."</td>";
               echo "<td>". $row['salary']."</td>";
               echo "<td> <a href='boddelete.php?id=".$row['id']."' class='btn btn-danger'> delete</a>";
               echo " <a href='bodedit.php?id=".$row['id']."' class='btn btn-success'> Edit</a</td>";

               echo"</tr>"; 
            }
        }
        else{
            echo "record not found";
        }
        mysqli_close($conn);
        ?>

        </table>

    </div>


    </body>
 </html>
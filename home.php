<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'login';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM userdata";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
    <!--Script to Search bar-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    });
    });
    </script>
    <!--Script to Search bar End-->
    <!--External CSS Link-->
    <link rel="stylesheet" href="home.css">
    <!--fondawsome CDN Link-->
    <script src="https://kit.fontawesome.com/1a3b5235e0.js" crossorigin="anonymous"></script>

</head>
  <body> 

       
        <div class="container pt-3">
        <button class="btn btn-primary"> <a href="index.php"></a><i class="fa-solid fa-circle-chevron-left" style="margin:0 6px 0 0;"></i>Back</button>
        </div>


        <!--Search Bar-->
        <div class="container">
        <div class="d-md-flex justify-content-md-end">
        <input type="text" id="myInput" class="form-control" name="username" id="username" placeholder="Search...." style="width:300px; justify-content-end">
        </div>
        </div>

        <h3>Login Dashboard <i class="fa-sharp fa-solid fa-truck"style="margin:0 6px 0 0;"></i></h3>


        <div class="container pt-2">
            <table class="table table-success table-hover">
                <thead>
                    <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Password</th>
                    </tr>
                  </thead>

                  <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
                ?>
                  <!--Table link to Search bar-->
                  <tbody id="myTable">
                  <tr>
                    <td><?php echo $rows['username'];?></td>
                    <td><?php echo $rows['password'];?></td>
                    <?php 
                     }
                     ?>
                     </tr>
                  </tbody>
              </table>
          </div>

          <!--Print area buttons-->
              <div class="container">
              <div class="gap-2 d-md-flex justify-content-md-end">
                <button onClick="window.print()" class="btn btn-primary justify-content-end" alt="Print"> <i class="fa-sharp fa-solid fa-print"></i></button> 
                <button class="btn btn-danger justify-content-end"><i class="fa-sharp fa-solid fa-file-pdf"></i></button>
                <button class="btn btn-success justify-content-end"><i class="fa-solid fa-file-excel"></i></button>
              </div>
              </div>
        
 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
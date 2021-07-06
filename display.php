<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Database Display</title>
    <link rel="stylesheet" type="text/css" href="stylesPHP.css" />
  </head>
  <body>
    <div class="wrapper">
        <table>
          <tr>
            <th>Address</th>
            <th>Name of Hospital</th>
            <th>Phone Number</th>
          </tr>
          <?php
            $conn = mysqli_connect('sql208.epizy.com', 'epiz_28468903', 'wAkTt06LbPmNs', 'epiz_28468903_hospital');

            if($conn -> connect_error){
              die("Connection failed:". $conn -> connect_error);
            }

            $sql = "SELECT `address`, `name`, `phone` FROM `Hospital`";
            $result = $conn -> query($sql);

            if($result -> num_rows > 0){
              while($row = $result -> fetch_assoc()){
                echo "<tr><td>". $row["address"] ."</td><td>". $row["name"] ."</td><td>". $row["phone"] ."</td></tr>";
              }

              echo "</table>";
            } else {
              echo "0 results";
            }

            $conn -> close();
          ?>
    </div>
    <a href="index.html"><button class="wrapper-btn">Go Back</button></a>
  </body>
</html>

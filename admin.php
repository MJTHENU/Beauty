<?php
// Database credentials
$servername = "localhost"; // Replace with your server name
$username = "beauty"; // Replace with your database username
$password = "SBbE4u=2j3Z!"; // Replace with your database password
$dbname = "beauty"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the database   clients_booking_details
$sql = "SELECT * FROM clients_booking_details";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/logo.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>GLAM HAVEN | Admin Dashboard</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
    <style>
        body{
            background-image: url("images/bg.png");
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2,h3{
            text-align: center;
        } .nav-bar {
       /*background: black;
     linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.798));*/
      /*background-image:url("images/n1.png");*/
      height: 80px; /* Adjust height as needed */
      width: 100%;
      margin-top: 0;
      display: flex;
      justify-content: space-between; /* Distribute elements evenly */
      align-items: center; /* Align vertically */
      box-sizing: border-box;
      padding: 0 20px; /* Add horizontal padding for content */
  }

  .logo {
      font-size: 35px;
      margin-top: 29px;
      margin-left: 0px;
      
  }

  .ul {
      display: flex;
      font-size: 1rem;
      list-style: none; /* Remove default list styling */
      margin: 0; /* Remove default margin */
      padding: 0; /* Remove default padding */
  }

  .ul li { /* Style individual list items */
      margin-left: 50px;
  }
 .nav-bar .logo,a {
      text-decoration: none;
      color: rgb(0, 0, 0);
      font-weight: bold; /* Add a little boldness for readability */
  
  }
    </style>
</head>
<body>

<div class="container-fluid">
      <div class="nav-bar">
        <a class="logo" href="#"><img src="images/logo.png" width="150px"></a>
        <ul class="ul">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About</a></li>
             <li><a href="index.html">Services</a></li>
            <li><a href="index.html">Contact</a></li>
            <li><a href="login.php">Log Out</a></li>
        </ul>
    </div>
    <!-- <h2>Admin Dashboard</h2> -->
    <h3>Clinets Table</h3><br>
    <table class="container">
        <tr>
          <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>           
            <th>Date</th>
            <th>Time</th>
            <th>Tools</th>
            
        </tr>
        <?php
        // Check if there are any records
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                 <td>" . $row["id"] . "</td>
                        <td>" . $row["firstname"] . "</td>                        
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["mobile"] . "</td>
                        <td>" . $row["booking_date"] . "</td>
                       <td>" . $row["booking_time"] . "</td>
                       <td>                        <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
        ?>
    </table>
    <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="">Subramanian</a>
      </p>
    </div>
  </footer>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

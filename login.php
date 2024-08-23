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

  <title>GLAM HAVEN</title>

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
.form {
  background-color: #fff;
  display: block;
  margin-top: 100px;
  padding: 1rem;
  max-width: 350px;
  border-radius: 0.5rem;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  text-align: center;
  color: #000;
}

.input-container {
  position: relative;
}

.input-container input, .form button {
  outline: none;
  border: 1px solid #e5e7eb;
  margin: 8px 0;
}

.input-container input {
  background-color: #fff;
  padding: 1rem;
  padding-right: 3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 300px;
  border-radius: 0.5rem;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.submit {
  display: block;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  background-color: #4F46E5;
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  width: 100%;
  border-radius: 0.5rem;
  text-transform: uppercase;
}

.signup-link {
  color: #6B7280;
  font-size: 0.875rem;
  line-height: 1.25rem;
  text-align: center;
}
/* .container{background-color: #000;}
.logo{background-color: #fff;} */
.signup-link a {
  text-decoration: underline;
}
  .nav-bar {
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
<body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $uname=$_POST['uname'];
$pass=$_POST['pass'];
if($uname=="admin" && $pass=="admin")
{
    include('admin.php');
    exit();
}
else{
    include('Fail.html');
}
}
?>
 <div class="container-fluid">
      <div class="nav-bar">
        <a class="logo" href="index.html"><img src="images/logo.png" width="150px"></a>
        <ul class="ul">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About</a></li>
             <li><a href="index.html">Services</a></li>
             <li><a href="index.html">Blog</a></li>
            <li><a href="index.html">Contact</a></li>
        </ul>
    </div>
    <form class="container form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       <p class="form-title">Sign in to your account</p>
        <div class="input-container">
          <input type="text" placeholder="User name" name="uname">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" placeholder="password" name="pass">
        </div>
         <button type="submit" class="submit">
        Sign in
      </button>

      <p class="signup-link">
        No account?
        <a href="index.html">Go Back</a>
      </p>
   </form>
	</div>
</body>
</html>
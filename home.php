<?php
ob_start();
session_start();

$db=mysqli_connect("localhost","id2650920_root","123456","id2650920_authentication");

 if(isset($_SESSION['username']))
{
?>
<html>
<head>
  <title>Home</title>
<h1>BELOW LIST OF RESUMES</h1>
</head>
<body>
<div class="header">
   <ul>
  <li>
<a href="s.docx">Sugandhi </a></li>
  <li>
<a href="suba.docx">Suba</a></li>
  <li>
<a href="megna.docx">Megna</a></li>
</ul>
</div>

<a href="logout.php">
  <input type="image" src="logout.png" align="center" alt="Submit" width="60" height="60">
</a>
</body>
</html>
<?php
}
    else if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
?>
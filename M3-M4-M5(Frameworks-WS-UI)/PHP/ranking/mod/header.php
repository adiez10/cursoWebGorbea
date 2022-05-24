<meta charset="utf-8">
<title>Ranking Grupos Musicales</title>
<meta content="Ranking Grupos Musicales" name="description">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<header class="cabecera">
  <h1><a href='index.php'>RANKING de XYZ</a></h1>
  <nav>
    <ul>
      <li><a href="aboutme.php">About me</a></li>
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !==true ){
        echo '<li><a href="login/login.php">LOGIN</a></li>';
      }else{
        echo '<li><a href="login/logout.php">LOGOUT</a></li>';
      }
      ?>
    </ul>
  </nav>
</header>

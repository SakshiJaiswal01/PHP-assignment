<!doctype html>
<html lang="en">

<head>
  <?php include("head.php"); ?>
  <title>Home Page</title>
  <style>
    body {
      background-image: url("BGgif.gif");
    }

    .header {
      text-align: center;
      padding: 10%;
      height: 180px;
      border-radius: 0px opx 2px 2px;
    }

    h1 {
      color: white;
    }

    h3 {
      color: white;
    }

    .b1 {
      height: 40px;
      width: 20%;
      margin-top: 20px;
      background-color: lightskyblue;
      font-weight: bold;
      font-size: 15px;
    }

    .b2 {
      height: 40px;
      width: 10%;
      margin-top: 20px;
      background-color: lightpink;
      font-weight: bold;
      font-size: 15px;
    }
  </style>
</head>

<body>
  <?php include("nav.php"); ?>

  <header class="header">
    <h1>Don't ignore your dreams<br></h1>
    <h3>The 5 regrets point a portrait of post-industrial man,who shrinks<br>
      himself into a shaps that fits his circumstances,then turns<br> dutifully till he stops.</h3>
    <button class="b1">See how it Work</button>
    <button class="b2">Join us</button>
  </header>

  <?php include("footer.php") ?>
  <?php include("foot.php"); ?>
</body>

</html>
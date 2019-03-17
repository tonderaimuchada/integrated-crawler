<?php
echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";

$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";

echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Focused Crawler</title>
  <base href="/">
  <link rel="icon" href="src/images/crawler-icon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href = "src/css/font-awesome.css"> -->
  <link rel="stylesheet" href="src/components/home/home.component.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <form action="crawler.php" method="post">
    <div class="wrap">
      <div class="search">
        <input type="text" id="searchText" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" id="searchButton" class="searchButton" onclick="buttonClicked()">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- <app-root></app-root> -->
</body>

</html>
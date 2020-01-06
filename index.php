<?php 
include "inc/functions.php";

// getting the background color from the function new_bg_color
$bg = new_bg_color($bg_colors);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Auto refresh all 20 seconds: -->
  <meta http-equiv="refresh" content="2">
</head>
<!-- inserting the random background color: -->
<body style="background: <?php echo $bg; ?>">
  <div class="container">
    <div id="quote-box">
      <!-- printQuote function is called to display what is randomly picked out of the quotes array -->
      <?php printQuote($quotes) ?> 
    </div> 
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
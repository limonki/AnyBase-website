<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>{SITE.TITLE}</title>
  <meta name="description" content="{SITE.DESCRIPTION}">
  <meta name="author" content="{SITE.AUTHOR}">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no,,minimum-scale=1.0, maximum-scale=1.0">
  <meta name="theme-color" content="#048bcd">
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/loader.css">
  <link rel="stylesheet" href="css/help.css">
  <link rel="stylesheet" href="css/topnav.css">
</head>
<body>
  <div id="background-image"></div>
  <div class="loader"></div>
  <div id="topbar">
    <div class="elem"><a href="index.php">{MAIN.PAGE}</a></div>
    <div class="elem right"><a href="downloads.php">{DOWNLOAD}</a></div>
  </div>
  <div id="search" class="center-css">
    <h1 class="title">{SEARCH.ENGINE}</h1>
    <form action="return: false;" method="POST">
      <input type="text" class="search" placeholder="{SEARCH.PLACEHOLDER}">
      <input type="submit" class="submit" value="">
    </form>
  </div>
  <div class="search-loader center-css">
    <img src="images/loader5.gif">
  </div>
  <div id="append"></div>
  <script src="js/jquery-latest.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/help.js"></script>
</body>
</html>

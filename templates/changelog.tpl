<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>{SITE.TITLE}</title>
  <meta name="description" content="{SITE.DESCRIPTION}">
  <meta name="author" content="{SITE.AUTHOR}">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no,,minimum-scale=1.0, maximum-scale=1.0">
  <meta name="theme-color" content="#3a0d2d">
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/loader.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/topnav.css">
</head>
<body>
  <div class="loader"></div>
  <div class="topnav-container">
    <div class="header">
      <div class="logo"><img src="images/icon.png"></div>
      <header class="scroll">
        <nav class="vertical-align-middle">
          <span class="nav-item"><a href="index.php">{MENU.1}</a></span>
          <span class="nav-item"><a href="downloads.php">{MENU.2}</a></span>
          <span class="nav-item"><a href="help.php">{MENU.3}</a></span>
          <span class="nav-item"><a href="privacy-policy.php">{MENU.4}</a></span>
          <span class="nav-item"><a href="terms-and-conditions.php">{MENU.5}</a></span>
          <span class="nav-item"><a class="active" href="changelog.php">{MENU.6}</a></span>
          <span class="nav-item"><a href="about.php">{MENU.7}</a></span>
        </nav>
      </header>
    </div>
  </div>
  <div id="cookies">
		<div class="close" id="close"></div>
    <div class="cookies-title">{COOKIES.TITLE}</div>
		<div>{COOKIES.TEXT}</div>
    <div class="center margin-8">
      <button type="submit" class="cookies-button active agree"><i class="fa fa-check"></i> {COOKIES.AGREE}</button>
      <button type="submit" class="cookies-button more-info"><i class="fa fa-lightbulb-o"></i> {COOKIES.MORE.INFO}</button>
    </div>
	</div>
  <div class="main">
    <div class="row">
      <div class="col-18 main-title">
        <h1>{CHANGELOG.TITLE}</h1>
        <div class="text anim">{CHANGELOG.TEXT}</div>
        <div class="start anim col-18">
          {CHANGELOG.VERSIONS}
        </div>
      </div>
    </div>
  </div>
  <footer>
    <header class="anim scroll">
      <nav class="vertical-align-middle">
        <span class="nav-item"><a href="index.php">{MENU.1}</a></span>
        <span class="nav-item"><a href="downloads.php">{MENU.2}</a></span>
        <span class="nav-item"><a href="help.php">{MENU.3}</a></span>
        <span class="nav-item"><a href="privacy-policy.php">{MENU.4}</a></span>
        <span class="nav-item"><a href="terms-and-conditions.php">{MENU.5}</a></span>
        <span class="nav-item"><a href="changelog.php">{MENU.6}</a></span>
        <span class="nav-item"><a href="about.php">{MENU.7}</a></span>
      </nav>
    </header>
    {FOOTER}
  </footer>
  <script src="js/jquery-latest.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/loader.js"></script>
  <script src="js/index.js"></script>
</body>
</html>

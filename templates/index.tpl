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
          <span class="nav-item"><a class="active" href="index.php">{MENU.1}</a></span>
          <span class="nav-item"><a href="downloads.php">{MENU.2}</a></span>
          <span class="nav-item"><a href="help.php">{MENU.3}</a></span>
          <span class="nav-item"><a href="privacy-policy.php">{MENU.4}</a></span>
          <span class="nav-item"><a href="terms-and-conditions.php">{MENU.5}</a></span>
          <span class="nav-item"><a href="changelog.php">{MENU.6}</a></span>
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
  <div class="row">
    <div class="star col-18">
      <div class="elem col-9">
        <div class="title anim">{INDEX.MAIN.TITLE}</div>
        <div class="text anim">{INDEX.MAIN.TITLE.TEXT.1}</div>
        <div class="text anim">{INDEX.MAIN.TITLE.TEXT.2}</div>
        <div class="col-9 anim padding-btn">
          <a href="downloads.php"><button class="btn first">{INDEX.BUTTON.1}</button></a>
        </div>
        <div class="col-9 anim padding-btn">
          <a href="about.php"><button class="btn second">{INDEX.BUTTON.2}</button></a>
        </div>
        <div class="col-18 anim version">{INDEX.CURRENT.VER}{INDEX.CURRENT.VER.NUM}</div>
      </div>
      <div class="elem col-9">
        <img src="images/favicon.png">
      </div>
    </div>
    <div class="some-notes col-18">
      <div class="note anim col-6">
        <div class="col-18 anim"><img src="images/note-1.png"></div>
        <div class="title anim col-18">{INDEX.NOTE.1}</div>
        <div class="text anim col-18">
          {INDEX.NOTE.1.TEXT}
          <a href="help.php?search=install -all"><button class="btn note-btn 1">{INDEX.NOTE.1.BUTTON}</button></a>
        </div>
      </div>
      <div class="note anim col-6">
        <div class="col-18 anim"><img src="images/note-2.png"></div>
        <div class="title anim col-18">{INDEX.NOTE.2}</div>
        <div class="text anim col-18">
          {INDEX.NOTE.2.TEXT}
          <a href="help.php?search=permissions: -all"><button class="btn note-btn 2">{INDEX.NOTE.2.BUTTON}</button></a>
        </div>
      </div>
      <div class="note anim col-6">
        <div class="col-18 anim"><img src="images/note-3.png"></div>
        <div class="title anim col-18">{INDEX.NOTE.3}</div>
        <div class="text anim col-18">
          {INDEX.NOTE.3.TEXT}
          <a href="about.php"><button class="btn note-btn 3">{INDEX.NOTE.3.BUTTON}</button></a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <header class="scroll anim">
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>CABOT CRUISES: <?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css" />

    <!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  </head>

  <body>
    <!-- HEADER STARTS HERE -->

    <header class="clearfix">
      <div class="header-div">
        <div class="header-img">
          <img
            src="images/logo1x.png"
            alt="logo"
            srcset="
              images/logo1x.png 1x,
              images/logo2x.png 2x,
              images/logo3x.png 3x
            "
          />
        </div>

        <div class="phone-number">
          <h1><a href="tel:1-800-123-456">1-800-123-4567</a></h1>
        </div>
      </div>
    </header>

    <!-- NAV STARTS HERE -->
    <div id="navWrapper">
      <nav class="clearfix">
        <div class="nav-div">
          <button id="hamburgerBtn">
            <span class="line top"></span>
            <span class="line middle"></span>
            <span class="line bottom"></span>
          </button>

          <ul id="primaryNav">
            <li class="current-menu-item"><a href="#">Home</a></li>
            <li><a href="#">Cruises</a></li>
            <li class="menu-item-has-children">
              <a href="#">Agents</a>
              <ul>
                <li><a href="#">Agent 1</a></li>
                <li><a href="#">Agent 2</a></li>
              </ul>
            </li>
            <li><a href="#">Book</a></li>
          </ul>
        </div>

        <div class="search-box">
          <input type="search" placeholder="Search.." />
          <div class="search-icon">
            <a href="#">
              <i class="fas fa-search"></i>
            </a>
          </div>
        </div>
      </nav>
    </div>

    <!-- MAIN STARTS HERE -->
    <main class="clearfix">
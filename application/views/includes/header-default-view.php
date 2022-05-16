<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>" />
    <meta name="description" content="<?php echo $meta; ?>">
    
    <title><?php echo $page_title; ?></title>
    <link rel="icon" href="images/FWA.png">
	</head>
<body>
<nav class="navbar navbar-expand-sm bg-info navbar-dark">
      <div class="container">
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#mainNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <div class="navbar-nav">
            <a href="<?php echo base_url('index.php/home'); ?>" class="nav-item nav-link <?php echo strcmp($page, 'Home') == 0 ? 'active': ''; ?>">I Want An Audit!</a>
            <a href="<?php echo base_url('index.php/websites'); ?>" class="nav-item nav-link <?php echo strcmp($page, 'Website') == 0 ? 'active': ''; ?>">I Need A Website!</a>
            <a href="<?php echo base_url('index.php/about'); ?>" class="nav-item nav-link <?php echo strcmp($page, 'About') == 0 ? 'active': ''; ?>">About</a>
          </div>
        </div>
      </div>
    </nav>

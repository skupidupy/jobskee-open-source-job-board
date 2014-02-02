<?php global $categories, $cities; ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php _e(APP_NAME); ?></title>
    <meta name="author" content="<?php _e(APP_AUTHOR); ?>">
    <meta name="description" content="<?php _e(APP_DESC); ?>">
    <!-- Bootstrap -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php _e(ADMIN_ASSETS); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php _e(ADMIN_ASSETS); ?>css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php _e(ADMIN_ASSETS); ?>css/theme.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php _e(ADMIN_ASSETS);; ?>ico/favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <?php if (isset($markdown)): ?>
        <link href="<?php _e(ASSET_URL); ?>bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet">
    <?php endif; ?>
        
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php _e(BASE_URL); ?>"><?php _e(APP_NAME); ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php if (userIsValid()): ?>
               <li><a href="<?php _e(ADMIN_URL); ?>manage">Home</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <?php foreach($categories as $cat): ?>  
                  <li><a href="<?php _e(ADMIN_URL . "categories/{$cat->id}/{$cat->url}"); ?>"><?php _e($cat->name); ?></a></li>
                  <?php endforeach; ?>
                </ul> 
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cities <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <?php foreach($cities as $cit): ?>  
                  <li><a href="<?php _e(ADMIN_URL . "cities/{$cit->id}/{$cit->url}"); ?>"><?php _e($cit->name); ?></a></li>
                  <?php endforeach; ?>
                </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php _e(ADMIN_URL); ?>applications">Job Applications</a></li>
                  <li><a href="<?php _e(ADMIN_URL); ?>manage/categories">Categories</a></li>
                  <li><a href="<?php _e(ADMIN_URL); ?>manage/cities">Cities</a></li>
                  <li><a href="<?php _e(ADMIN_URL); ?>subscribers">Subscribers</a></li>
                  <li><a href="<?php _e(ADMIN_URL); ?>pages">Site Pages</a></li>
                  <li><a href="<?php _e(ADMIN_URL); ?>blocks">Site Blocks</a></li>
                  <li><a href="<?php _e(ADMIN_URL); ?>jobs/upload">Bulk Job Upload</a></li>
                  <li><a href="<?php _e(ADMIN_URL); ?>ban">Ban List</a></li>
                  <li><a href="<?php _e(ADMIN_URL); ?>jobs/expire">Expire Jobs</a></li>
                </ul>
                </li>
                <li><a href="<?php _e(ADMIN_URL .'jobs/new'); ?>">Post a Job</a></li>
                <li><a href="<?php _e(ADMIN_URL .'logout'); ?>">Logout</a></li>
            <?php else: ?>
                <li><a href="<?php _e(ADMIN_URL .'login'); ?>">Login</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase">
     
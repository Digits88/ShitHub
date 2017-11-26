<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico">

    <title>ShitHub - {title}</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/static/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/index.php"><img src="/static/images/logo.png">ShitHub</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link {dashboard_active}" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link {profile_active} " href="#">Profil <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link {upload_active}" href="?s=upload">Upload <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown-review" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Review
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown-review">
          <a class="dropdown-item" href="#">C</a>
          <a class="dropdown-item" href="#">C++</a>
          <a class="dropdown-item" href="#">C#</a>
          <a class="dropdown-item" href="#">PHP</a>
          <a class="dropdown-item" href="#">Java</a>
          <a class="dropdown-item" href="#">JavaScript</a>
          <a class="dropdown-item" href="#">Python</a>
        </div>
      </li>
          
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item">
            {loginor}
            <!-- <a class="nav-link {logged_in}" href="?s=login">Login <span class="sr-only">(current)</span></a> -->
          </li>
        </ul>
      </div>
      
    </nav>

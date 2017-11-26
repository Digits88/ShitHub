<?php

//Load site loader
require_once('model/site_loader.php');

require_once('model/parseTemplate.php');
if($_SESSION['loggedIn'] == 0){
    TemplateParser::push_variable('loginor', '<a class="nav-link" href="?s=login">Login</a>');
}

TemplateParser::push_variable('loginfailed', '');
$sl = new site_loader(array("index", "register", "login", "upload", "review-file","profile","review"), array("Dashboard", "Register", "Login", "Upload", "Review", "Profil", "Review"));
$sl->load_sites();


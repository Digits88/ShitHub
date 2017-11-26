<?php

class site_loader{
    private $sites;
    private $names;
    
    public function __construct($sites, $names){
        $this->sites = $sites;
        $this->names = $names;
    }
    
    public function load_sites(){
        session_start();

	require_once("parseTemplate.php");
        
        $site = $_GET['s'];
	$loginfailed = $_GET['loginfailed'];        
        if($site == null){
            $site = "index";
        }
        
        
        if($_SESSION['loggedIn'] == 1){
            TemplateParser::push_variable('loginor', '<a class="nav-link" href="?s=profile">Profil</a>');
        }
        
        if(in_array($site, $this->sites) && file_exists('templates/'.$site.'.php')){
            TemplateParser::push_variable("title", $this->names[array_search($site, $this->sites)]);
            $parser = new TemplateParser('templates/header.php');
            $parser->parse();
            
	    if($loginfailed){
		TemplateParser::push_variable('loginfailed', '<div class="alert alert-danger">
  <strong>Login failed!</strong> Incorrect username or password.
</div>');
	    }

            $parser = new TemplateParser('templates/'.$site.'.php');
            $parser->parse();
        }else{
            TemplateParser::push_variable("title", "404-Error");
            $parser = new TemplateParser('templates/header.php');
            $parser->parse();
            
            $parser = new TemplateParser('templates/404.php');
            $parser->parse();
        }
        
        require_once('templates/footer.php');
    }
}

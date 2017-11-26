<?php

class site_loader{
    private $sites;
    private $names;
    
    public function __construct($sites, $names){
        $this->sites = $sites;
        $this->names = $names;
    }
    
    public function load_sites(){
        //error_reporting(E_ALL);
        //ini_set("display_errors", 1);
        require_once("parseTemplate.php");
        
        $site = $_GET['s'];
        
        if($site == null){
            $site = "index";
        }
        
        if($site == "index") {
            require "dashboard.php";
            TemplateParser::push_variable("revnext", $rev_next);
            TemplateParser::push_variable("revhot", $rev_hot);
        }
        
        $pl = "<option>".implode("</option><option>", explode("\n", file_get_contents("./model/listofpl.txt")))."</option>";
        TemplateParser::push_variable('pl', $pl);
        
        
        if($_SESSION['loggedIn'] == 1){
            TemplateParser::push_variable('loginor', '<a class="nav-link" href="?s=profile">Profil</a>');
        }
        print('adsf'.$_SESSION['loggedIn']);
        
        if(in_array($site, $this->sites) && file_exists('templates/'.$site.'.php')){
            TemplateParser::push_variable("title", $this->names[array_search($site, $this->sites)]);
            $parser = new TemplateParser('templates/header.php');
            $parser->parse();
            
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
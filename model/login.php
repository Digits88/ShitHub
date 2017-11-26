<?php
$test = new login;
$login.login();
class login{
    
    function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $dbfile = '../shithub_database.db';
        
        $sqlite = new SQLite3($dbfile);
        
        session_start();
        $_SESSION['loggedIn'] = 0;
        $_SESSION['userID'] = null;
        $stmt = $sqlite->prepare("SELECT password,ID FROM User WHERE Name = :id");
        $stmt->bindValue(':id',$username,SQLITE3_TEXT);
        $result = $stmt->execute();
        
        $res = $result->fetchArray(SQLITE3_NUM);
        $stmt->close();
        $sqlite->close();
        if($password == $res[0]){
            $_SESSION['userID'] = $res[1];
            $_SESSION['loggedIn'] = 1;
            
            require_once("parseTemplate.php");
            TemplateParser::push_variable('loginor', '<a class="nav-link" href="?s=profile">Profil</a>');
            TemplateParser::push_variable('loginfailed', '');
	    header('Location: /');
            exit();
        }else{
 	    header('Location: /?s=login&loginfailed=true');       
}
    }
    
    function logout(){
        $_SESSION['userID'] = null;
        $_SESSION['loggedIn'] = 0;
        TemplateParser::push_variable('loginor', '<a class="nav-link" href="?s=login">Login</a>');
    }
}
?>

<?php
class TemplateParser{
    private $filename;
    private $raw;
    private $parsed;
    private static $array = Array();
    function __construct($filename){
        $this->filename = $filename;
    }
    
    private function loadFile(){
        $doc = new DOMDocument();
        $doc->loadHTMLFile($this->filename);
        $this->raw = $doc->saveHTML();
    }
    
    function parse(){
        $this->loadFile();
        $this->parsed = $this->raw;
        
        foreach(self::$array as $key => $value){
            $this->parsed = str_replace('{'.$key.'}', self::$array[$key],$this->parsed);
        }
        
        print($this->parsed);
    }
    
    public static function push_variable($key1, $val1){
        self::$array[$key1] = $val1;
    }
    
    public static function issaved($key1){
        if(isset(self::$array[$key1])){
            return true;
        }
    }
}

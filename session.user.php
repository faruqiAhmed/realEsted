<?php

class Session{
    
    protected static $var = FALSE;
    
    public static function checVar(){
        
            print_r(self::$var);
    }
    
    public static function start(){
        if(self::$var == FALSE){
            session_start();
            self::$var = TRUE;
        }
    }
    
    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }
    
    public static function get($key){
        return $_SESSION[$key];
    }
    
    public static function display(){
        
        if(self::$var == TRUE){
            print_r($_SESSION);
        }
    }
    
    public static function status(){
        if(isset($_SESSION['login'])){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }
    
    public static function destroy(){
        
        if(self::$var == TRUE){
            session_unset();
            session_destroy();
            self::$var = FALSE;
        }
    }
    
    public static function check(){
        
        if(self::get('login') != TRUE){
            session_unset();
            session_destroy();
            self::$var = FALSE;
            header("location: index.php");
        }
    }
}

?>
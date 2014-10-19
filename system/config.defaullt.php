<?php
class odConfig
{
    use Singleton;
    
    public static $debugEnable = true;
    
    public static $salt = '281232AXGQ3';
    
    public static $dbHost = '';
    public static $dbUser = '';
    public static $dbPass = '';
    public static $dbName = '';
    
    public static $smtpHost = ''; 
    public static $smtpPort = ''; 
    public static $smtpFromName = ''; 
    public static $smtpFromAddress = ''; 
    public static $smtpReplyToAddress = ''; 
    public static $smtpSSL = ''; 
    public static $smtpUsername = ''; 
    public static $smtpPassword = '';
    
    public static $mysqlDateTimeFormat = '%b %d %Y %h:%i %p'; 
    public static $mysqlDateFormat = '%b %d %Y'; 
    public static $phpDateTimeFormat = 'F j, Y, g:i a'; 
    public static $phpDateFormat = 'F j, Y';
    
    public static $webPath = ''; 
    public static $filePath = ''; 
}                                      
?>

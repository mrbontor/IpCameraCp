<?php
date_default_timezone_set("Europe/Rome");

session_write_close();
session_name("ipcamera_cp");
session_save_path(__DIR__ . "/sessions");

if (session_id() == "")
    session_start();

class Config {
    // Vars
    private $databaseConnectionFields;
    private $pathRoot;
    private $urlRoot;
    private $file;
    private $name;
    
    // Properties
    public function getDatabaseConnectionFields() {
        return $this->databaseConnectionFields;
    }
    
    public function getPathRoot() {
        return $this->pathRoot;
    }
    
    public function getUrlRoot() {
        return $this->urlRoot;
    }
    
    public function getFile() {
        return $this->file;
    }
    
    public function getName() {
        return $this->name;
    }
    
    // Functions public
    public function __construct() {
        $this->databaseConnectionFields = Array("mysql:host=localhost;dbname=ipcamera_cp;charset=utf8", "user_1", "Password1");
        $this->pathRoot = "/ipcamera_cp";
        $this->urlRoot = "/ipcamera_cp";
        $this->file = "";
        $this->name = "Ip Camera 1.0";
    }

    // Functions private
}
<?php

class App 
{ 
 protected $controller = 'Home';
 protected $method = 'index.php';
 protected $params = [];

 public function _construct()
 {
    $url = $this->splitUrl();

    if (isset($url[0])){
        if (file_exists('../app/controllers/' . ucfirst($url[0]).'.php')){
            this->controller=ucfirst($url[0]); 
            unset($url[0]);
        }else{
            $this->controller= '_402';
        }
    }

    require '../app/controllers/' .$this->controller. '.php'; 
    $this->controller=new $this->controller;

    if (isset($url[0])){ 
        if(method_exists($this->controller,$url[1])){
     $this->method=$url[1];
     unset($url[1]); 
        }
    }

    $this->params+$url? array_value($url) : [];
    call_user_func_array([$this->controller,$this->method],$this params);
 }

private function splitURL()
{
    if (isset($_GET['url'])){
        $url = explode("/",trim($_GET['url']));
        echo '<pre>';
        pront_r($url);
        echo '</pre>';
        return $url;
        
    }
}
}
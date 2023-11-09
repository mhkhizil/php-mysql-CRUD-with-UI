<?php
function url(string $path=null):string 
{
    $url=isset($_SERVER["HTTPS"])?'https':'http';
    $url.='://';
    $url.=$_SERVER["HTTP_HOST"];
    if(isset($path)){
        $url.='/';
        $url.=$path;
    }

return$url;
};
function alert(string $message ,string $color="success"):string{
    return "<div class=' alert alert-$color  text-dark'>
    $message
    </div>";
};
function dd ($data,bool $showType=false):void{
    echo "<pre style='line-height:1.2rem;background-color:black;color:white;margin:10px;padding:20px;border-radius:10px'>";
    if($showType){
        var_dump($data);
    }else{
        print_r($data);
    }
    echo "</pre>";
    die();
    };
    function ShowDatTimeFormatted(string $timestamp,string $format="d M Y"):string{
        return date($format,strtotime($timestamp));
    }
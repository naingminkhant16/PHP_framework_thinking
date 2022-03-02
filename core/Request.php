<?php
class Request
{
    public static function uri()
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        return parse_url(end($uri), PHP_URL_PATH);
        // $uri = explode('?',);
        // return $uri[0];                                            
        // return  end($uri);
    }
}

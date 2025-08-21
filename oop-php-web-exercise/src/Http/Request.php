<?php
namespace App\Http;

class Request
{
    public array $get;
    public array $post;
    public array $server;
    public array $cookies;
    public array $files;
    public array $session;

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;  
        $this->server = $_SERVER;
        $this->cookies = $_COOKIE;
        $this->files = $_FILES;
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $this->session = &$_SESSION;
    }

    public function method(): string
    {
        return strtoupper($this->server['REQUEST_METHOD'] ?? 'GET');
    }

    /*
    That method is a helper
    in your Request class that fetches a value from form data 
    (either POST or GET), with an optional default if it’s not found.
    */
    public function input(string $key, $default = null)
    {
        return $this->post[$key] ?? $this->get[$key] ?? $default;
    }
}

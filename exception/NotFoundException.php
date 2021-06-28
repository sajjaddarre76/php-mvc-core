<?php


namespace sajjaddarre76\phpmvc\exception;


class NotFoundException extends \Exception
{
    protected $message = "Page Not found";
    protected $code = 404;
}
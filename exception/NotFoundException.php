<?php


namespace app\core\exception;


class NotFoundException extends \Exception
{
    protected $message = "Page Not found";
    protected $code = 404;
}
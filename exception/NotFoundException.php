<?php


namespace App\Core\Exception;


class NotFoundException extends \Exception
{
    protected $message = 'Page Not Found';
    protected $code = 404;
}
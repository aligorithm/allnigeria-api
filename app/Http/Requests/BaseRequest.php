<?php
namespace App\Http\Requests;
use Illuminate\Http\Request;
class BaseRequest extends Request
{
    public function expectsJson()
    {
        return true;
    }
    public function wantsJson()
    {
        return true;
    }
}
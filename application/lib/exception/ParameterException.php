<?php
/**
 * Created by 微信小程序.
 * Author: LLM
 * Date: 2018/4/1
 * Time: 11:36
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $error_code = 10002;
}
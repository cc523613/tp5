<?php
/**
 * Created by 微信小程序.
 * Author: LLM
 * Date: 2018/3/31
 * Time: 22:00
 */

namespace app\lib\exception;


use think\Exception;
use Throwable;

class BaseException extends Exception
{
    // Http 错误码
    public $code = 400;

    // 错误信息
    public $msg = '参数错误';

    // 自定义错误码
    public $error_code = 10000;

    public function __construct($params = [])
    {
        if (!is_array($params)) {
            return ;
        }

        if (array_key_exists('code', $params)) {
            $this->code = $params['code'];
        }

        if (array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }

        if (array_key_exists('error_code', $params)) {
            $this->error_code = $params['error_code'];
        }
    }

}
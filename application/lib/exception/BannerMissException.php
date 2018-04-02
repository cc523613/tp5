<?php
/**
 * Created by 微信小程序.
 * Author: LLM
 * Date: 2018/3/31
 * Time: 22:08
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的banner不存在';
    public $error_code = 40000;
}
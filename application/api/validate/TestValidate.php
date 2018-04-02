<?php
/**
 * Created by 微信小程序.
 * Author: LLM
 * Date: 2018/3/31
 * Time: 11:12
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];

}
<?php
/**
 * Created by 微信小程序.
 * Author: LLM
 * Date: 2018/3/31
 * Time: 11:45
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];

    /**
     * @param $value
     * @param string $ruel
     * @param string $date
     * @param string $field
     * @return bool
     */
    protected function isPositiveInteger($value, $ruel = '', $date = '', $field = '')
    {
        return is_numeric($value) && is_int($value + 0) && ($value + 0) > 0 ? true : $field.'必须是正整数！';
    }

}
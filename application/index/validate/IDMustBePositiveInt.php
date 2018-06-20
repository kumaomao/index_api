<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/20 0020
 * Time: 下午 2:57
 */

namespace app\index\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];
}
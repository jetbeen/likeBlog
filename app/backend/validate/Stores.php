<?php
namespace app\backend\validate;

use think\Validate;

class Stores extends Validate
{
    protected $rule = [
        'name'  =>  'require|max:225',
    ];
	protected $message  =   [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过225个字符',
    ];

}
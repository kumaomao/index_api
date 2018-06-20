<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/20 0020
 * Time: 下午 2:42
 */

namespace app\index\model;


class Image extends  BaseModel
{
    protected $hidden = ['id','from','delete_time','update_time'];

    /**
     * @param $value
     * @param $data
     * @return mixed
     */
    public function getUrlAttr($value,$data){
        return $this->prefixImgUrl($value, $data);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: 10832
 * Date: 2018/6/19
 * Time: 20:52
 */

namespace app\index\model;


class BannerItem extends BaseModel
{
    protected $hidden = ['id','img_id','banner_id','delete_time','update_time'];

    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }


}
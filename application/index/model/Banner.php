<?php
/**
 * Created by PhpStorm.
 * User: 10832
 * Date: 2018/6/19
 * Time: 20:51
 */

namespace app\index\model;


class Banner extends BaseModel
{
    /**
     * banner与bannerItem为一对多
     * @return \think\model\relation\HasMany
     */
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }

    /**
     * 根据ID获取Banner
     * @param $id
     * @return array|false|\PDOStatement|string|\think\Model
     */
    public static function getBannerById($id){
        $banner = self::with('items,items.img')
                    ->find($id);
        return $banner;
    }


}
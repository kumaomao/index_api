<?php
namespace app\index\model;
class Navtop extends BaseModel{
    
    protected $hidden = ['show','sort','time'];
    
    /**
     * 读取导航栏菜单
     */
     public static function getNavtop(){
        $navtop = self::where('show',1)->order('sort desc')->select();
        return $navtop;
     }

}
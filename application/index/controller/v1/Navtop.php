<?php
namespace app\index\controller\v1;
use app\index\controller\BaseController;
use app\index\Model\Navtop as NavtopModel;
use app\lib\exception\MissException;

class Navtop extends BaseController{
    
    /**
     * 获取菜单
     */
     public static function getNavtop(){
        $navtop = NavtopModel::getNavtop();
        if(!$navtop){
            throw new MissException([
                'msg' => '导航栏菜单不存在',
                'errorCode' => 40000
            ]);
        }
        return json($navtop);
     }
}
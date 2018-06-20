<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/20 0020
 * Time: 下午 2:54
 */

namespace app\index\controller\v1;
use app\index\model\Banner as BannerModel;

use app\index\controller\BaseController;
use app\index\validate\IDMustBePositiveInt;
use app\lib\exception\MissException;

class Banner extends BaseController
{

    public function getBanner(){
        (new IDMustBePositiveInt())->goCheck();
        $id = input('id');
        $banner = BannerModel::getBannerById($id);
        if(!$banner){
            throw new MissException([
                'msg' => 'banner不存在',
                'errorCode' => 40000
            ]);
        }
        return $banner;
    }
}
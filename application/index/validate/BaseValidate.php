<?php
namespace app\index\validate;
use think\Validate;
use think\Request;
class BaseValidate extends Validate{
    
    /**
     * 验证函数
     */
     public function goCheck(){
        
        //必须设置contetn-type:application/json
        $request = Request::instance();
        $params = $request->param();
        //$params['token'] = $request->header('token');

        if (!$this->check($params)) {
            $exception = new ParameterException(
                [
                    // $this->error有一个问题，并不是一定返回数组，需要判断
                    'msg' => is_array($this->error) ? implode(
                        ';', $this->error) : $this->error,
                ]);
            throw $exception;
        }
        return true;
     }
    
    /**
     * 判断是否为整数
     */
    protected function isPositiveInteger($value,$rule='',$data='',$field=''){
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        return $field . '必须是正整数';
    }
}
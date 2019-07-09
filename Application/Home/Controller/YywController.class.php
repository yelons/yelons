<?php
/**
 * @desc Created by PhpStorm.
 * @author : yyw
 * @since: 2019/7/08 0008 18:00:04
 */
namespace Home\Controller;
use  Think\Controller;
use Think\Exception;
class YywController extends Controller{
    public function index(){
        try{
            $code = I('code','0','intval');
            switch ($code){
                case 1 :
                    $msg = '11111111111';
                    break ;
                case 2 :
                    $msg = '222222222222';
                    break ;
                default:
                    $msg = '默认失败';
            }
            E($msg);
            $this->ajaxReturn(array('status'=>'1','msg'=>'哈哈哈'),'JSON');
        }catch (Exception $e){
            var_dump($e->getMessage());
        }
    }
}
<?php
namespace app\admin\controller;

use app\admin\controller\Root;
use app\admin\model\Staff as _Staff;
use app\admin\model\Auth as _Auth;

class P  extends Root
{
    public function _initialize()
    {
        header("Content-type: text/html; charset=utf-8");
    }

    // 员工登陆
    public function login ()
    {
        if ($_POST) {
            $res =  _Staff::login($_POST['account'], $_POST['pwd']);
            return  $res['status'] ? $this->redirect('role/wlist') :  $this->error($res['msg']);
        }
        $this->view->engine->layout(false);
        return $this->fetch();
    }

    public function out ()
    {
        session(null);
        return $this->redirect('P/login');
    }

    public function init () {

    }

    public function  upload ()
    {

        $src = '';
        if ($_POST) {

            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('image');
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

            if($info){
                $src =  $info->getSaveName();
            }
        }
        $this->assign('src', $src);
        $this->view->engine->layout(false);
        return $this->fetch();
    }


}

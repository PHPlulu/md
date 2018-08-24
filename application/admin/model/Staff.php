<?php
namespace app\admin\model;

use think\Cache;
use think\Session;
class Staff extends Root {

    protected $table = 'staff';
    static $_status = _STATUS;
    static public function login ($account, $pwd) {
        if (!$data = self::where('account', $account)->find()) {
            return ['status' => false, 'msg' => '用户不存在!'];
        }

        if ($data['pwd'] != encrypt($pwd, $data['salt'])) {
            return ['status' => false, 'msg' => '密码错误!'];
        }

        if (!$data['status']) {
            return ['status' => false, 'msg' => '该用户已被禁用!无法登录!'];
        }

       Session::set('adminid',$data['id']);
        return ['status' => true, 'msg' => '登录成功!'];
    }
    

    static public function wlist () {
        return self::select();
    }
    static public function wlistf () {
        return self::column('*', 'id');
    }
    static public function edit ($id, $info) {
        // wcc($info);
        if (isset($info['pwd']) && $info['pwd']) {
            $salt = salt();
            $data['show_pwd'] = $info['pwd'];
            $data['pwd']  = encrypt($info['pwd'], $salt);
            $data['salt'] = $salt;
        }
        if($info['account']){
            $data['account']=$info['account'];
        }
        if($info['nickname']){
            $data['nickname']=$info['nickname'];
        }
        if($info['idcard']){
            $data['idcard']=$info['idcard'];
        }
        if($info['role_id']){
            $data['role_id']=$info['role_id'];
        }
        if (self::where('id', $id)->update($data) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }

    static public function del ($id) {

        if (self::where('id', $id)->delete() !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }

    static public function set_status ($id, $val) {

        if (self::where('id', $id)->update(['status' => $val]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }

    static public function add ($info) {

        $salt = salt();
        $info['show_pwd'] = $info['pwd'];
        $info['pwd']  = encrypt($info['pwd'], $salt);
        $info['salt'] = $salt;
        if (self::insert($info) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }


    static public function id2tit() {
        return self::column('*', 'id');
    }

}

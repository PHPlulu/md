<?php
namespace app\index\model;

use app\index\model\Root;

class CemArea extends Root {

    protected $table = 'cem_area';


    static public function wlist ($map = []) {
        return self::where($map)->order('cem_id', 'asc')->column('id, cem_id, title ', 'id');
    }

    static public function del ($id) {

        if (self::where('id', $id)->delete() !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }

    static public function edit ($id, $info) {
        if (self::where('id', $id)->update($info) !== false) {
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
        if ($info['type'] == 'one' && empty($info['title'])) {
            return ['status' => false, 'msg' => '请填写编号'];
        }
        /*if ($info['type'] == 'many' && (empty($info['many_start']) ||  empty($info['many_num']))) {
            return ['status' => false, 'msg' => '请填写开始编号和数量'];
        }*/
        if ($info['type'] == 'one') {
            $arr=self::field('title')->where(['title'=>$info['title'].'区','cem_id' => $info['cem_id']])->find();
            if($arr){
                return ['status' => false, 'msg' => '墓区名称重复'];
            }else{
                if(self::insert(['title' => $info['title'].'区', 'cem_id' => $info['cem_id']]) !== false){
                    return RE_SUCCESS;
                }
            }
        }
        if ($info['type'] == 'many') {
            if(preg_match("/^\d*$/",$info['many_start'])){
                for ($i = (int)$info['many_start']; $i <= (int)$info['many_num']; $i++) {
                    $arr=self::field('title')->where(['title'=>$i . '区','cem_id' => $info['cem_id']])->find();
                    if($arr){
                        return ['status' => false, 'msg' => '墓区名称重复'];
                    }
                }
                $data_list = [];
                for ($i = (int)$info['many_start']; $i <= (int)$info['many_num']; $i++) {
                    $data_list[] = ['title' => $i . '区', 'cem_id' => $info['cem_id']];
                }
                if (count($data_list) && self::insertAll($data_list) !== false) {
                    return RE_SUCCESS;
                }
            }else if(preg_match("/^[A-Za-z]+$/",$info['many_start'])){
                $TTL=str_split($info['many_start']);
                foreach ($TTL as $key => $value) {
                    $arr=self::field('title')->where(['title'=>$value . '区','cem_id' => $info['cem_id']])->find();
                    if($arr){
                        return ['status' => false, 'msg' => '墓区名称重复'];
                    }
                }
                $data_list = [];
                foreach ($TTL as $key => $value) {
                    $data_list[] = ['title' => $value . '区', 'cem_id' => $info['cem_id']];
                }
                if (count($data_list) && self::insertAll($data_list) !== false) {
                    return RE_SUCCESS;
                }
            }else{
                return ['status' => false, 'msg' => '墓区名称只能填写数字或英文字母'];
            }
        }
        return RE_ERROR;
    }

}

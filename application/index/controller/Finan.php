<?php
namespace app\index\controller;

use app\index\controller\Root;
use app\index\model\Auth as _Auth;
use app\index\model\Gset as _Gset;
use app\index\model\Glist as _Glist;
use app\index\model\Role as _Role;
use app\index\model\Staff as _Staff;
use app\index\model\Tpl as _Tpl;
use app\index\model\System as _System;
use app\index\model\Systemt as _Systemt;
use app\index\model\Systemc as _Systemc;
use app\index\model\Deposit as _Deposit;
use app\index\model\CemInfo as _Info;
use app\index\model\Cem as _Cem;
use app\index\model\Dead as _Dead;
use think\Request;
use think\Db;
class Finan  extends Root {
	//墓位预订收费确认
    public function muwei () {
        $this->assign('cem_list', _Cem::wlist());
        return $this->fetch();
    }
    public function finan_set_muwei(){
        $e = _Info::finan_set_muwei($_POST);
        if ($e['status']) {
            return '2';
        }
        return '3';
    }
    public function muwei_sell_all(){
        return _Info::muwei_sell_all($_POST);
    }
    public function finan_set_muweis(){
        $e = _Info::finan_set_muweis($_POST);
        if ($e['status']) {
            return '2';
        }
        return '3';
    }
    //墓位预订退订确认
    public function finan_set_muweit(){
        $e = _Info::finan_set_muweit($_POST);
        if ($e['status']) {
            return '2';
        }
        return '3';
    }
    //墓位预订退订确认
    public function muweit () {
        $this->assign('cem_list', _Cem::wlist());
        return $this->fetch();
    }
    function muweit_sell_all(){
         return _Info::muweit_sell_all($_POST);
    }
    //墓位定购收费确认
    public function muweis () {
        $this->assign('cem_list', _Cem::wlist());
        return $this->fetch();
    }
    public function muweis_sell_all(){
       return _Info::muweis_sell_all($_POST); 
    }
    //墓位定购退购确认
    public function muweist () {
        $this->assign('row_staff', _Staff::wlistf());
        $this->assign('cem_list', _Cem::wlist());
        $this->assign('sysyst', _Tpl::wlists());
        $request = Request::instance();
        $cem_id = $request->only(['cem_id']);
        $cem_area_id = $request->only(['cem_area_id']);
        $cem_row_id = $request->only(['cem_row_id']);
        $map = ['a.status'=>44,'a.sta'=>4];
        if ($cem_id['cem_id']) {
            $map['a.cem_id'] = $cem_id['cem_id'];
        }
        if ($cem_area_id['cem_area_id']) {
            $map['a.cem_area_id'] = $cem_area_id['cem_area_id'];
        }
        if ($cem_row_id['cem_row_id']) {
            $map['a.cem_row_id'] = $cem_row_id['cem_row_id'];
        }
        $this->assign('list', _Info::wlistt($map));
        return $this->fetch();
    }
    function muweist_sell_all(){
        return _Info::muweist_sell_all($_POST); 
    }
    //碑文杂费收费确认
    public function muweiz () {
        $this->assign('list', _Info::wlist_zf());
        $this->assign('wlist', _Info::wlist());
        return $this->fetch();
    }
    public function finan_set_muweiz(){
        $e = _Info::finan_set_muweiz($_POST);
        if ($e['status']) {
            return '2';
        }
        return '3';
    }
    //寄存位收费确认
    public function syslist () {
        $this->assign('sys_list', _System::wlist());
        return $this->fetch();
    }
    function syslist_sell_all(){
        return _Info::syslist_sell_all($_POST); 
    }
    //寄存位收费确认
    public function finan_set_syslist () {
        $e = _Deposit::finan_set_syslist($_POST);
        if ($e['status']) {
            return '2';
        }
        return '3';
    }
    //物品销售
    public function glist () {
    	$this->assign('glist', _Glist::wlist());
        $this->assign('row_staff', _Staff::wlistf());   
        return $this->fetch();
    }
    //物品销售确认 
    public function finan_set_glist () {
        $e = _Glist::set($_POST);
        if ($e['status']) {
            return '2';
        }
        return '3';
    }

    //骨灰盒销售
    public function hlist () {
    	$this->assign('hlist', _Gset::wlist_hlist());
        $this->assign('sysyst', _Tpl::wlists());
        $this->assign('row_staff', _Staff::wlistf());
        return $this->fetch();
    }
    //骨灰盒销售确认 
    public function finan_set_hlist () {
        $e = _Gset::finan_set_hlist($_POST);
        if ($e['status']) {
            return '2';
        }
        return '3';
    }
     public function hlist_edit () {
        $e = _Systemc::edit($_POST['id'], $_POST);
        if ($e['status']) {
            return $this->success($e['msg']);
        }
        return $this->error($e['msg']);
    }
    public function hlist_add () {
        $e = _Systemc::add($_POST);
        if ($e['status']) {
            return $this->success($e['msg']);
        }
        return $this->error($e['msg']);
    }
    public function hlist_del ($id) {
        return _Systemc::del($id);
    }
    public function select_print_fa(){
        $e = _Info::select_print_fa($_POST);
        return $e;
    }
    public function show_print_zfjsddy_ones($id){
        db('bw_zf')->where('id' ,$id)->setInc('dset');
    }
    public function select_print_fa_sta(){
        $arr=Db::table('cem_info')->field('pnum')->where(['id'=>$_POST['id']])->find();
        if($arr['pnum']){
            return '2';
        }else{
            return '1';
        }
    }
    public function aa($id){
        $bwzf2=db('bw_zf')->where(['id' => $id])->value('dset');
        if($bwzf2){
           return $bwzf2;
        }else{
            return 0;
        }
    }
    public function cem_info_dy_set(){
        $arr=Db::table('cem_info')->field('settime,pnum')->where(['id'=>$_POST['id']])->find();
        $new['pnum']=$arr['pnum']+1;
        if($arr['pnum']){
            $new['pfnumtwo']=$_POST['muweifapiaohao'];
            if($_POST['settime'] == '2'){
                $new['ptimetwo']=time();
            }else{
                $new['ptimetwo']=$arr['settime'];
            }
            $new['pmoneytwo']=$_POST['muweifapiaohaomoney'];
            $new['fa_time_one']=time();
        }else{
            $new['pfnumone']=$_POST['muweifapiaohao'];
            if($_POST['settime'] == '2'){
                $new['ptimeone']=time();
            }else{
                $new['ptimeone']=$arr['settime'];
            }
            $new['pmoneyone']=$_POST['muweifapiaohaomoney'];
            $new['fa_time_two']=time();
        }
        if(false !== Db::table('cem_info')->where('id', $_POST['id'])->update($new)){
            return 'ok';
        }else{
            return 'no';
        }
    }
    public function set_print(){
        $bwnum=Db::table('cem_pnum')->field('id,num')->find();//7881
        $new_bwnum['num']=$bwnum['num']+1;
        $new_bwnum['time']=time();
        if(false !== Db::table('cem_pnum')->where('id', $bwnum['id'])->update($new_bwnum)){
            return 'ok';
        }else{
            return 'no';
        }
    }
}

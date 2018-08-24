<?php
namespace app\index\controller;

use app\index\controller\Root;
use app\index\model\Tpl as _Tpl;
use app\index\model\ComeChannel as _Channel;
use app\index\model\Contacts as _Contacts;
use app\index\model\Dead as _Dead;
use app\index\model\Staff as _Staff;
use app\index\model\Visit as _Visit;
use app\index\model\Cem as _Cem;
use app\index\model\CemInfo as _Info;
use think\Db;
use think\Request;

class Tomb extends Root
{

    public function _initialize()
    {
        parent::_initialize();
        $this->assign('t1', _Channel::t1());
        $this->assign('t2', _Channel::t2());
        $this->assign('t3', _Channel::t3());
        $this->assign('cem_list', _Cem::wlist());
        $Tpl = new _Tpl(2);
        $this->assign('cem_style', $Tpl->tlist(2));
        $this->assign('cem_material', $Tpl->tlist(3));
        $this->assign('relationship', $Tpl->tlist(4));
        $this->assign('cem_status', $Tpl->tlist(9));
        $this->assign('come_num', $Tpl->tlist(13));
        $this->assign('come_fun', $Tpl->tlist(5));
        $this->assign('no_transaction_ps', $Tpl->tlist(6));
        $this->assign('staff', _Staff::id2tit());
    }

    public function www_list($wh = '')
    {
        $map = [];
        if ($wh) {

            $map['name'] = ['like', '%' . $wh . '%'];
            $map['email'] = ['like', '%' . $wh . '%'];
            $map['address'] = ['like', '%' . $wh . '%'];
            $map['workplace'] = ['like', '%' . $wh . '%'];
            // $map['_logic'] = 'or';
            $this->assign('list', _Contacts::wlist($map));
        } else {
            $this->assign('list', _Contacts::plist($map));
        }
        $this->assign('wh', $wh);
        $this->assign('count', _Contacts::cnt($map));


    }

    public function sale($wh = '')
    {
        $this->www_list($wh);
        return $this->fetch();
    }

    public function sale_info($id = '')
    {
        $data = _Info::get($id);
        if ($data['contacts_id']) {
            $contacts = Contacts::get($data['contacts_id']);
        }

        $this->assign('contacts', $contacts ?? []);
        $this->assign('dead', _Dead::where('cem_info_id', $id)->select());
        $this->assign('data', $data);
        $this->assign('pay_status', _Info::pay_status());
        $this->view->engine->layout(false);
        return $this->fetch();
    }
    //授权折扣
    public function reserve_zksq()
    {
        $data = _Info::reserve_zksq($_POST);
        return $data;
    }
    //授权折扣
    public function reserve_zksqs()
    {
        $data = _Info::reserve_zksqs($_POST);
        return $data;
    }
    public function reserve_setacc()
    {
        $arr = Db::table('staff')->field('id,status,salt,role_id')->where(['account' => $_POST['uacc']])->find();
        if ($arr['id']) {
            if ($arr['status'] == '1') {
                if ($arr['pwd'] != encrypt($_POST['upass'], $arr['salt'])) {
                    $role = Db::table('role')->field('id,title,discount')->where(['id' => $arr['role_id']])->find();
                    if ($role['discount'] != '1') {
                        $info['msg'] = 'ok';
                        $info['acc'] = $_POST['uacc'];
                        $info['title'] = $role['title'];
                        $info['s_staff_id'] = $arr['id'];
                        $info['flg'] = $role['discount'];
                        return $info;
                    } else {
                        $info['msg'] = 'no';
                        $info['acc'] = $_POST['uacc'];
                        $info['title'] = $role['title'];
                        $info['flg'] = 1;
                        return $info;
                    }
                } else {
                    $info['msg'] = 'nopass';
                    return $info;
                }
            } else {
                $info['msg'] = 'nosta';
                return $info;
            }
        } else {
            $info['msg'] = 'noacc';
            return $info;
        }
    }
    public function reserve_setaccs()
    {
        $arr = Db::table('staff')->field('id,status,salt,role_id')->where(['account' => $_POST['uacc']])->find();
        if ($arr['id']) {
            if ($arr['status'] == '1') {
                if ($arr['pwd'] != encrypt($_POST['upass'], $arr['salt'])) {
                    $role = Db::table('role')->field('id,title,discount')->where(['id' => $arr['role_id']])->find();
                    if ($role['discount'] != '1') {
                        $info['msg'] = 'ok';
                        $info['acc'] = $_POST['uacc'];
                        $info['title'] = $role['title'];
                        $info['s_staff_id'] = $arr['id'];
                        $info['flg'] = $role['discount'];
                        return $info;
                    } else {
                        $info['msg'] = 'no';
                        $info['acc'] = $_POST['uacc'];
                        $info['title'] = $role['title'];
                        $info['flg'] = 1;
                        return $info;
                    }
                } else {
                    $info['msg'] = 'nopass';
                    return $info;
                }
            } else {
                $info['msg'] = 'nosta';
                return $info;
            }
        } else {
            $info['msg'] = 'noacc';
            return $info;
        }
    }
    //预订墓位
    public function reserve()
    {
        $data = _Info::reserve($_POST);
        return $data;
    }
    public function reserve_add()
    {//预订墓位
        // 判断重复
        $user = Db::table('contacts')->field('id')->where(['name' => $_POST['contacts_name'], 'tel' => $_POST['contacts_tel']])->find();
        //print_r($user);exit;
        if ($user) {
            Db::startTrans();
            try {
                Db::table('contacts')->where(['name' => $_POST['contacts_name'], 'sex' => $_POST['contacts_sex'], 'postcode' => $_POST['contacts_postcode'], 'idcard' => $_POST['contacts_idcard'], 'tel' => $_POST['contacts_tel'], 'phone' => $_POST['contacts_phone'], 'weixin' => $_POST['contacts_weixin'], 'address' => $_POST['contacts_address'], 'workplace' => $_POST['contacts_workplace']]);
                $data['status'] = 39;
                $data['reserve_date'] = strtotime($_POST['reserve_date']);
                $data['remind_date'] = strtotime($_POST['remind_date']);
                $data['reserve_money'] = $_POST['reserve_money'];
                $data['unpaid_money'] = $_POST['unpaid_money'];
                $data['money'] = $_POST['money'];
                $data['salesman'] = $_POST['salesman'];
                $data['update_by'] = session('id');
                $data['create_time'] = $_POST['create_time'];
                $data['contacts_id'] = $user['id'];
                $data['beizhu'] = $_POST['beizhu'];
                $data['mwnum'] = $_POST['seid'];
                $data['price_m'] = $_POST['price_m'];
                $data['money_m'] = $_POST['money_m'];
                $data['lnum'] = date('YmdHis', time());
                //$data['hnum']='TQ'.date('YmdHis',time());
                if ($_POST['s_sta'] == '2' && $_POST['s_staff_id'] != '') {
                    $data['s_staff_id'] = $_POST['s_staff_id'];
                    $data['s_sta'] = 2;
                    $data['s_lv'] = $_POST['s_lv'];
                    $data['s_time'] = time();
                }
                $ss = Db::table('cem_info')->where(['id' => $_POST['seid']])->update($data);
               /* $dead['cem_info_id'] = $_POST['seid'];
                $dead['relationship'] = $_POST['dead_relationship'];
                $dead['dead_name'] = $_POST['dead_name'];
                Db::table('dead')->insert($dead);*/
                // 提交事务
                Db::commit();
                return 'ok';
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return 'no';
            }
        } else {
            Db::startTrans();
            try {
                Db::table('contacts')->insert(['name' => $_POST['contacts_name'], 'sex' => $_POST['contacts_sex'], 'postcode' => $_POST['contacts_postcode'], 'idcard' => $_POST['contacts_idcard'], 'tel' => $_POST['contacts_tel'], 'phone' => $_POST['contacts_phone'], 'weixin' => $_POST['contacts_weixin'], 'address' => $_POST['contacts_address'], 'workplace' => $_POST['contacts_workplace']]);
                $LastInsID = Db::table('contacts')->getLastInsID();
                Db::table('visit_log')->insert(['contacts_id' => $LastInsID, 'transaction_status' => 1, 'transaction_suc_date' => time(), 'come_date' => time(), 'receiver' => $_POST['salesman']]);
                $data['status'] = 39;
                $data['reserve_date'] = strtotime($_POST['reserve_date']);
                $data['remind_date'] = strtotime($_POST['remind_date']);
                $data['reserve_money'] = $_POST['reserve_money'];
                $data['unpaid_money'] = $_POST['unpaid_money'];
                $data['money'] = $_POST['money'];
                $data['salesman'] = $_POST['salesman'];
                $data['update_by'] = session('id');
                $data['create_time'] = $_POST['create_time'];
                $data['beizhu'] = $_POST['beizhu'];
                $data['mwnum'] = $_POST['seid'];
                $data['price_m'] = $_POST['price_m'];
                $data['money_m'] = $_POST['money_m'];
                $data['lnum'] = date('YmdHis', time());
                //$data['hnum']='TQ'.date('YmdHis',time());
                $data['contacts_id'] = $LastInsID;
                if ($_POST['s_sta'] == '2' && $_POST['s_staff_id'] != '') {
                    $data['s_staff_id'] = $_POST['s_staff_id'];
                    $data['s_sta'] = 2;
                    $data['s_lv'] = $_POST['s_lv'];
                    $data['s_time'] = time();
                }
                _Info::where('id', $_POST['seid'])->update($data);
                /*$dead['cem_info_id'] = $_POST['seid'];
                $dead['dead_name'] = $_POST['dead_name'];
                $dead['relationship'] = $_POST['dead_relationship'];
                _Dead::insert($dead);*/
                // 提交事务
                Db::commit();
                return 'ok';
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return 'no';
            }
        }
    }
    public function reserve_open()
    {
        Db::table('cem_info')->where(['id' => $_POST['id']])->update(['open' => 3]);
        return 'ok';
    }
    public function reserve_zjgm_jie_che()
    {
        $sta = Db::table('cem_info')->field('pay_status')->where(['id' => $_POST['id']])->find();
        if ($sta['pay_status'] == 2) {
            return 'ok';
        } else {
            return 'no';
        }
    }
    public function reserve_dg_adds()
    {//结清尾款
         // 判断重复
        $user = Db::table('contacts')->field('id')->where(['name' => $_POST['contacts_name'], 'tel' => $_POST['contacts_tel']])->find();

        if ($user) {
            Db::startTrans();
            try {
                $sss = Db::table('contacts')->where(['id' => $user['id']])->update(['postcode' => $_POST['contacts_postcode'], 'name' => $_POST['contacts_name'], 'img' => $_POST['usercardimg'], 'sex' => $_POST['contacts_sex'], 'relationship' => $_POST['dead_relationship'], 'postcode' => $_POST['contacts_postcode'], 'idcard' => $_POST['contacts_idcard'], 'tel' => $_POST['contacts_tel'], 'phone' => $_POST['contacts_phone'], 'weixin' => $_POST['contacts_email'], 'address' => $_POST['contacts_address'], 'workplace' => $_POST['contacts_workplace']]);
                $data['status'] = 44;
                $data['settime'] = strtotime($_POST['settime']);
                $data['starttime'] = strtotime($_POST['starttime']);
                $datetime = new \DateTime($_POST['endtime'], new \DateTimeZone('PRC'));
                $data['endtime'] = $datetime->format('U');
                $data['manage_money'] = $_POST['manage_money'];
                $data['manage_year'] = $_POST['manage_year'];
                $data['manage_time'] = time() + 3600 * 8 + 3600 * 24 * 36 * $_POST['manage_year'];//比如5天前的时间
                $data['mwnum'] = $_POST['seid'];
                $today_start = date('Ymd', time()) . "00:00:00";
                $today_end = date('Ymd', time()) . "23:59:59";
                $startday = strtotime($today_start);
                $endday = strtotime($today_end);
                $cem_num = Db::name('cem_num')->field('num')->where('settime >=' . $startday . ' and settime <=' . $endday)->order('settime desc')->limit('1')->find();
                $data_cem_num['settime'] = time();
                $data_cem_num['num'] = $cem_num['num'] + 1;
                Db::name('cem_num')->insert($data_cem_num);
                $data['lnum'] = date('YmdHis', time());
                $data['hnum'] = 'TQ' . date('Ymd', time()) . '-' . $data_cem_num['num'];
                $data['hnum_s'] = date('Ymd', time()) . '-' . $data_cem_num['num'];
                $data['znum'] = 'Cem' . date('YmdHis', time());
                $data['pay_status'] = 0;
                $data['salesman'] = $_POST['salesman'];
                $data['beizhu'] = $_POST['beizhu'];
                $data['pay_sum_money'] = $_POST['yuee'] + $_POST['manage_money'] * $_POST['manage_year'];
                $data['manage_sum_money'] = $_POST['manage_money'] * $_POST['manage_year'];
                $data['update_by'] = session('id');
                $data['create_time'] = $_POST['create_time'];
                $data['contacts_id'] = $user['id'];
                $data['flg'] = 3;
                $ss = Db::table('cem_info')->where(['id' => $_POST['seid']])->update($data);
                /*$dead['cem_info_id'] = $_POST['seid'];
                $dead['relationship'] = $_POST['dead_relationship'];
                $dead['dead_name'] = $_POST['dead_name'];
                Db::table('dead')->where(['cem_info_id'=>$_POST['seid']])->update($dead);*/
                // 提交事务
                Db::commit();
                return 'ok';
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return 'no';
            }
        } else {
            Db::startTrans();
            try {
                Db::table('contacts')->insert(['postcode' => $_POST['contacts_postcode'], 'name' => $_POST['contacts_name'], 'img' => $_POST['usercardimg'], 'sex' => $_POST['contacts_sex'], 'relationship' => $_POST['dead_relationship'], 'postcode' => $_POST['contacts_postcode'], 'idcard' => $_POST['contacts_idcard'], 'tel' => $_POST['contacts_tel'], 'phone' => $_POST['contacts_phone'], 'weixin' => $_POST['contacts_email'], 'address' => $_POST['contacts_address'], 'workplace' => $_POST['contacts_workplace']]);
                $LastInsID = Db::table('contacts')->getLastInsID();
                Db::table('visit_log')->insert(['contacts_id' => $LastInsID, 'transaction_status' => 1, 'transaction_suc_date' => time(), 'come_date' => time(), 'receiver' => $_POST['salesman']]);
                $data['status'] = 44;
                $data['settime'] = strtotime($_POST['settime']);
                $data['starttime'] = strtotime($_POST['starttime']);
                $datetime = new \DateTime($_POST['endtime'], new \DateTimeZone('PRC'));
                $data['endtime'] = $datetime->format('U');
                $data['pay_status'] = 0;
                $data['manage_money'] = $_POST['manage_money'];
                $data['manage_year'] = $_POST['manage_year'];
                $data['manage_time'] = time() + 3600 * 8 + 3600 * 24 * 36 * $_POST['manage_year'];//比如5天前的时间
                $data['mwnum'] = $_POST['seid'];
                $today_start = date('Ymd', time()) . "00:00:00";
                $today_end = date('Ymd', time()) . "23:59:59";
                $startday = strtotime($today_start);
                $endday = strtotime($today_end);
                $cem_num = Db::name('cem_num')->field('num')->where('settime >=' . $startday . ' and settime <=' . $endday)->order('settime desc')->limit('1')->find();
                $data_cem_num['settime'] = time();
                $data_cem_num['num'] = $cem_num['num'] + 1;
                Db::name('cem_num')->insert($data_cem_num);
                $data['lnum'] = date('YmdHis', time());
                $data['hnum'] = 'TQ' . date('Ymd', time()) . '-' . $data_cem_num['num'];
                $data['hnum_s'] = date('Ymd', time()) . '-' . $data_cem_num['num'];
                $data['znum'] = 'Cem' . date('YmdHis', time());
                $data['pay_sum_money'] = $_POST['yuee'] + $_POST['manage_money'] * $_POST['manage_year'];
                $data['manage_sum_money'] = $_POST['manage_money'] * $_POST['manage_year'];
                $data['salesman'] = $_POST['salesman'];
                $data['update_by'] = session('id');
                $data['create_time'] = $_POST['create_time'];
                $data['flg'] = 3;
                $data['contacts_id'] = $LastInsID;
                _Info::where('id', $_POST['seid'])->update($data);
                /*$dead['relationship'] = $_POST['dead_relationship'];
                $dead['dead_name'] = $_POST['dead_name'];
                Db::table('dead')->insert($dead);*/
                // 提交事务
                Db::commit();
                return 'ok';
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return 'no';
            }
        }
    }
    public function reserve_dg_add()
    {//墓位直接定够
         // 判断重复
        $user = Db::table('contacts')->field('id')->where(['name' => $_POST['contacts_name'], 'tel' => $_POST['contacts_tel']])->find();
        if ($user) {
            Db::startTrans();
            try {
                $sss = Db::table('contacts')->where(['id' => $user['id']])->update(['postcode' => $_POST['contacts_postcode'], 'name' => $_POST['contacts_name'], 'img' => $_POST['usercardimg'], 'sex' => $_POST['contacts_sex'], 'relationship' => $_POST['dead_relationship'], 'postcode' => $_POST['contacts_postcode'], 'idcard' => $_POST['contacts_idcard'], 'tel' => $_POST['contacts_tel'], 'phone' => $_POST['contacts_phone'], 'weixin' => $_POST['contacts_email'], 'address' => $_POST['contacts_address'], 'workplace' => $_POST['contacts_workplace']]);
                $data['status'] = 44;
                $data['settime'] = strtotime($_POST['settime']);
                $data['starttime'] = strtotime($_POST['starttime']);
                $datetime = new \DateTime($_POST['endtime'], new \DateTimeZone('PRC'));
                $data['endtime'] = $datetime->format('U');
                $data['manage_time'] = time() + 3600 * 8 + 3600 * 24 * 36 * $_POST['manage_year'];//比如5天前的时间
                $data['money'] = $_POST['mw_price'];
                $data['manage_money'] = $_POST['manage_money'];
                $data['manage_year'] = $_POST['manage_year'];
                $data['pay_status'] = 0;
                $data['mwnum'] = $_POST['seid'];
                $today_start = date('Ymd', time()) . "00:00:00";
                $today_end = date('Ymd', time()) . "23:59:59";
                $startday = strtotime($today_start);
                $endday = strtotime($today_end);
                $cem_num = Db::name('cem_num')->field('num')->where('settime >=' . $startday . ' and settime <=' . $endday)->order('settime desc')->limit('1')->find();
                $data_cem_num['settime'] = time();
                $data_cem_num['num'] = $cem_num['num'] + 1;
                Db::name('cem_num')->insert($data_cem_num);
                $data['lnum'] = date('YmdHis', time());
                $data['hnum'] = 'TQ' . date('Ymd', time()) . '-' . $data_cem_num['num'];
                $data['hnum_s'] = date('Ymd', time()) . '-' . $data_cem_num['num'];
                $data['znum'] = 'Cem' . date('YmdHis', time());
                $data['salesman'] = $_POST['salesman'];
                $data['beizhu'] = $_POST['beizhu'];
                $data['price_m'] = $_POST['price_m'];
                $data['money_m'] = $_POST['money_m'];
                $data['pay_sum_money'] = $_POST['mw_price'] + $_POST['manage_money'] * $_POST['manage_year'];
                $data['manage_sum_money'] = $_POST['manage_money'] * $_POST['manage_year'];
                $data['update_by'] = session('id');
                $data['create_time'] = $_POST['create_time'];
                $data['contacts_id'] = $user['id'];
                $data['flg'] = 2;
                if ($_POST['s_sta'] == '2' && $_POST['s_staff_id'] != '') {
                    $data['s_staff_id'] = $_POST['s_staff_id'];
                    $data['s_sta'] = 2;
                    $data['s_lv'] = $_POST['s_lv'];
                    $data['s_time'] = time();
                }
                $ss = Db::table('cem_info')->where(['id' => $_POST['seid']])->update($data);
               /* $dead['cem_info_id'] = $_POST['seid'];
                $dead['relationship'] = $_POST['dead_relationship'];
                $dead['dead_name'] = $_POST['dead_name'];
                Db::table('dead')->where(['cem_info_id'=>$_POST['seid']])->update($dead);*/
                // 提交事务
                Db::commit();
                return 'ok';
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return 'no';
            }
        } else {
            Db::startTrans();
            try {
                Db::table('contacts')->insert(['postcode' => $_POST['contacts_postcode'], 'name' => $_POST['contacts_name'], 'img' => $_POST['usercardimg'], 'sex' => $_POST['contacts_sex'], 'relationship' => $_POST['dead_relationship'], 'postcode' => $_POST['contacts_postcode'], 'idcard' => $_POST['contacts_idcard'], 'tel' => $_POST['contacts_tel'], 'phone' => $_POST['contacts_phone'], 'weixin' => $_POST['contacts_email'], 'address' => $_POST['contacts_address'], 'workplace' => $_POST['contacts_workplace']]);
                $LastInsID = Db::table('contacts')->getLastInsID();
                Db::table('visit_log')->insert(['contacts_id' => $LastInsID, 'transaction_status' => 1, 'transaction_suc_date' => time(), 'come_date' => time(), 'receiver' => $_POST['salesman']]);
                $data['status'] = 44;
                $data['settime'] = strtotime($_POST['settime']);
                $data['starttime'] = strtotime($_POST['starttime']);
                $datetime = new \DateTime($_POST['endtime'], new \DateTimeZone('PRC'));
                $data['endtime'] = $datetime->format('U');
                $data['money'] = $_POST['mw_price'];
                $data['manage_time'] = time() + 3600 * 8 + 3600 * 24 * 36 * $_POST['manage_year'];//比如5天前的时间
                $data['pay_status'] = 0;
                $data['mwnum'] = $_POST['seid'];
                $today_start = date('Ymd', time()) . "00:00:00";
                $today_end = date('Ymd', time()) . "23:59:59";
                $startday = strtotime($today_start);
                $endday = strtotime($today_end);
                $cem_num = Db::name('cem_num')->field('num')->where('settime >=' . $startday . ' and settime <=' . $endday)->order('settime desc')->limit('1')->find();
                $data_cem_num['settime'] = time();
                $data_cem_num['num'] = $cem_num['num'] + 1;
                Db::name('cem_num')->insert($data_cem_num);
                $data['lnum'] = date('YmdHis', time());
                $data['hnum'] = 'TQ' . date('Ymd', time()) . '-' . $data_cem_num['num'];
                $data['hnum_s'] = date('Ymd', time()) . '-' . $data_cem_num['num'];
                $data['znum'] = 'Cem' . date('YmdHis', time());
                $data['manage_money'] = $_POST['manage_money'];
                $data['manage_year'] = $_POST['manage_year'];
                $data['price_m'] = $_POST['price_m'];
                $data['money_m'] = $_POST['money_m'];
                $data['pay_sum_money'] = $_POST['mw_price'] + $_POST['manage_money'] * $_POST['manage_year'];
                $data['manage_sum_money'] = $_POST['manage_money'] * $_POST['manage_year'];
                $data['salesman'] = $_POST['salesman'];
                $data['update_by'] = session('id');
                $data['create_time'] = $_POST['create_time'];
                $data['contacts_id'] = $LastInsID;
                $data['flg'] = 2;
                if ($_POST['s_sta'] == '2' && $_POST['s_staff_id'] != '') {
                    $data['s_staff_id'] = $_POST['s_staff_id'];
                    $data['s_sta'] = 2;
                    $data['s_lv'] = $_POST['s_lv'];
                    $data['s_time'] = time();
                }
                _Info::where('id', $_POST['seid'])->update($data);
                /*$dead['relationship'] = $_POST['dead_relationship'];
                $dead['dead_name'] = $_POST['dead_name'];
                Db::table('dead')->insert($dead);*/
                // 提交事务
                Db::commit();
                return 'ok';
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return 'no';
            }
        }
    }
    public function set_print()
    {
        $bwnum = Db::table('bw_num')->field('id,num')->find();//7881
        $new_bwnum['num'] = $bwnum['num'] + 1;
        $new_bwnum['time'] = time();
        if (false !== Db::table('bw_num')->where('id', $bwnum['id'])->update($new_bwnum)) {
            return 'ok';
        } else {
            return 'no';
        }
    }
    public function set_cem_yd()
    {
        $bwnum = Db::table('cem_yd')->field('id,num')->find();
        $new_bwnum['num'] = $bwnum['num'] + 1;
        $new_bwnum['time'] = time();
        if (false !== Db::table('cem_yd')->where('id', $bwnum['id'])->update($new_bwnum)) {
            return 'ok';
        } else {
            return 'no';
        }
    }
    public function reserve_ding_add()
    {//墓位预订维护
        $user = Db::table('contacts')->field('id')->where(['name' => $_POST['contacts_name'], 'tel' => $_POST['contacts_tel']])->find();
        if ($user) {
            Db::startTrans();
            try {
                Db::table('contacts')->where(['id' => $user['id']])->update(['name' => $_POST['contacts_name'], 'sex' => $_POST['contacts_sex'], 'postcode' => $_POST['contacts_postcode'], 'idcard' => $_POST['contacts_idcard'], 'tel' => $_POST['contacts_tel'], 'phone' => $_POST['contacts_phone'], 'weixin' => $_POST['contacts_weixin'], 'address' => $_POST['contacts_address'], 'workplace' => $_POST['contacts_workplace']]);
                $data['status'] = 39;
                $data['reserve_date'] = strtotime($_POST['reserve_date']);
                $data['remind_date'] = strtotime($_POST['remind_date']);
                $data['salesman'] = $_POST['salesman'];
                $data['update_by'] = session('id');
                $data['create_time'] = $_POST['create_time'];
                $data['contacts_id'] = $user['id'];
                $data['beizhu'] = $_POST['beizhu'];
                $ss = Db::table('cem_info')->where(['id' => $_POST['seid']])->update($data);
                /*$dead['cem_info_id'] = $_POST['seid'];
                $dead['relationship'] = $_POST['dead_relationship'];
                $dead['dead_name'] = $_POST['dead_name'];
                Db::table('dead')->where(['cem_info_id'=>$_POST['seid']])->update($dead);*/
                // 提交事务
                Db::commit();
                return 'ok';
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return 'no';
            }
        } else {
            Db::startTrans();
            try {
                Db::table('contacts')->insert(['name' => $_POST['contacts_name'], 'sex' => $_POST['contacts_sex'], 'postcode' => $_POST['contacts_postcode'], 'idcard' => $_POST['contacts_idcard'], 'tel' => $_POST['contacts_tel'], 'phone' => $_POST['contacts_phone'], 'weixin' => $_POST['contacts_weixin'], 'address' => $_POST['contacts_address'], 'workplace' => $_POST['contacts_workplace']]);
                $LastInsID = Db::table('contacts')->getLastInsID();
                Db::table('visit_log')->insert(['contacts_id' => $LastInsID, 'transaction_status' => 1, 'transaction_suc_date' => time(), 'receiver' => $_POST['salesman']]);
                $data['status'] = 39;
                $data['reserve_date'] = strtotime($_POST['reserve_date']);
                $data['remind_date'] = strtotime($_POST['remind_date']);
                $data['salesman'] = $_POST['salesman'];
                $data['update_by'] = session('id');
                $data['create_time'] = $_POST['create_time'];
                $data['beizhu'] = $_POST['beizhu'];
                $data['contacts_id'] = $LastInsID;
                _Info::where('id', $_POST['seid'])->update($data);
               /* $dead['cem_info_id'] = $_POST['seid'];
                $dead['dead_name'] = $_POST['dead_name'];
                $dead['relationship'] = $_POST['dead_relationship'];
                _Dead::insert($dead);*/
                // 提交事务
                Db::commit();
                return 'ok';
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return 'no';
            }
        }
    }

    public function set_huanyuan()
    {
        $e = _Info::set_huanyuan($_POST);
        if ($e['status']) {
            return 'ok';
        }
        return 'no';
    }
    public function set_beizhu()
    {//设置备注
        $e = _Info::set_beizhu($_POST);
        if ($e['status']) {
            return 'ok';
        }
        return 'no';
    }
    public function tuiding()
    {//已购墓位 退订
        $e = _Info::tuiding($_POST);
        if ($e['status']) {
            return 'ok';
        }
        return 'no';
    }
    public function reserve_xujiao_set()
    {//续交管理费
        $e = _Info::reserve_xujiao_set($_POST);
        if ($e['status']) {
            return 'ok';
        }
        return 'no';
    }
    public function reserve_bwtc()
    {//碑文设置
        return _Info::reserve_bwtc($_POST);
    }
    public function tomb_setbwcs()
    {//碑文参数设置
        $e = _Info::tomb_setbwcs($_POST);
        if ($e == 'ok') {
            return 'ok';
        } else if ($e == 'no') {
            return 'no';
        } else if ($e == 'msg') {
            return 'msg';
        }
    }
    public function tomb_setbeiwencont()
    {//碑文内容设置
        $e = _Info::tomb_setbeiwencont($_POST);
        if ($e == 'ok') {
            return 'ok';
        } else if ($e == 'no') {
            return 'no';
        } else if ($e == 'flg') {
            return 'flg';
        } else if ($e == 'msg') {
            return 'msg';
        }
    }
    public function tomb_setbeizf()
    {//碑文杂费设置
        return _Info::tomb_setbeizf($_POST);
    }
    public function tomb_setjsd_set()
    {//碑文杂费设置--添加
        $e = _Info::tomb_setjsd_set($_POST);
        if ($e == 'ok') {
            return 'ok';
        } else if ($e == 'no') {
            return 'no';
        } else if ($e == 'msg') {
            return 'msg';
        }
    }
    public function reserve_gzdj()
    {//故者落葬登
        return _Info::reserve_gzdj($_POST);
    }
    public function tomb_setgzdj()
    {//故者落葬登
        $cem_info = Db::table('cem_info')->field('id,cem_id,cem_area_id,cem_row_id,contacts_id,salesman')->where(['id' => $_POST['eid']])->find();
        Db::startTrans();
        try {
            //处理cem_info
            $data1['starttime'] = strtotime($_POST['starttime']);
            $data1['endtime'] = strtotime($_POST['endtime']);
            $data1['status'] = 41;
            $data1['beizhu'] = $_POST['beizhu'];
            Db::table('cem_info')->where(['id' => $_POST['eid']])->update($data1);

            //处理dead
            $deada = Db::table('dead')->field('id,dead_name')->where(['cem_info_id' => $_POST['eid'], 'dead_name' => $_POST['dead_name']])->find();
            $dead['relationship'] = $cem_info['salesman'];
            $dead['cem_info_id'] = $_POST['eid'];
            $dead['dead_name'] = $_POST['dead_name'];
            $dead['sex'] = $_POST['dead_sex'];
            $dead['cem_id'] = $cem_info['cem_id'];
            $dead['cem_area_id'] = $cem_info['dead_cem_area_id'];
            $dead['cem_row_id'] = $cem_info['dead_cem_row_id'];
            $dead['dead_work'] = $_POST['dead_work'];
            $dead['dead_address'] = $_POST['dead_address'];
            if ($_POST['gstime']) {
                $dead['gstime'] = strtotime($_POST['gstime']);
            }
            if ($_POST['nstime']) {
                $dead['nstime'] = $_POST['nstime'];
            }
            if ($_POST['gdtime']) {
                $dead['gdtime'] = strtotime($_POST['gdtime']);
            }
            if ($_POST['ndtime']) {
                $dead['ndtime'] = $_POST['ndtime'];
            }
            if ($_POST['jrtime']) {
                $dead['jrtime'] = strtotime($_POST['jrtime']);
            }
            if ($_POST['gltime']) {
                $dead['gltime'] = strtotime($_POST['gltime']);
            }
            if ($_POST['nltime']) {
                $dead['nltime'] = $_POST['nltime'];
            }
            $dead['cstype'] = $_POST['cstype'];
            $dead['lztype'] = $_POST['lztype'];
            $dead['sstype'] = $_POST['sstype'];
            $dead['salesman'] = $cem_info['salesman'];
            $dead['ins_type'] = 3;
            if ($deada) {
                Db::table('dead')->where(['cem_info_id' => $_POST['eid'], 'dead_name' => $_POST['dead_name']])->update($dead);
            } else {
                $dead['sta'] = 2;
                $dead['ins_type'] = 3;
                Db::table('dead')->insert($dead);
            }

            //处理联系人
            Db::table('contacts')->where(['id' => $cem_info['contacts_id']])->update(['name' => $_POST['cname'], 'img' => $_POST['usercardimg'], 'sex' => $_POST['sex'], 'postcode' => $_POST['postcode'], 'relationship' => $_POST['relationship'], 'idcard' => $_POST['idcard'], 'tel' => $_POST['tel'], 'phone' => $_POST['phone'], 'email' => $_POST['email'], 'address' => $_POST['address'], 'workplace' => $_POST['workplace']]); 
            // 提交事务
            Db::commit();
            return 'ok';
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return 'no';
        }
    }
    public function show_updlz()
    {//刷新故者信息
        return _Info::show_updlz($_POST);
    }
    public function news_update(){
        return _Info::news_update($_POST);
    }
    public function tomb_uicard()
    {//身份证照片
        return _Info::tomb_uicard($_POST);
    }
    public function reserve_setcardimg()
    {//身份证照片
        $data = '';
        // 获取上传文件信息
        if (!empty($_FILES['img']['name'])) {//处理上传的文件
            foreach ($_FILES as $key => $files) {
                if (!empty($_FILES[$key]['name'])) {
                    $data[$key] = $this->uploads($key);
                }
            }
        }
        if ($data) {
            $info['flg'] = $data;
            $info['msg'] = 'ok';
        } else {
            $info['msg'] = 'no';
        }
        return $info;
    }
    public function select_buy_setcardimg()
    {
        if (false !== model('contacts')->where(['id' => $_POST['id']])->update(['img' => $_POST['img']])) {
            return 'ok';
        } else {
            return 'no';
        }
    }
    public function reserve_xjglf()
    {//续交管理费
        return _Info::reserve_xjglf($_POST);
    }
    public function reserve_buyed()
    {//已购墓位 墓位定购信息维护
        return _Info::reserve_buyed($_POST);
    }
    public function reserve_jsdtc()
    {//碑文计算单计算
        return _Info::reserve_jsdtc($_POST);
    }
    public function select_buy_type_yu()
    {//墓位预定--杂费
        return _Info::select_buy_type_yu($_POST);
    }
    public function reserve_zjgm()
    {
        return _Info::reserve_zjgm($_POST);
    }
    public function select_buy_type()
    {
        $data = _Info::select_buy_type($_POST);
        return $data;
    }
    public function select_buy_ding()
    {
        return _Info::select_buy_ding($_POST);
    }
    public function select_buy_ding_buy()
    {
        return _Info::select_buy_ding_buy($_POST);
    }
    public function reserve_zjgm_jie()
    {
        return _Info::reserve_zjgm_jie($_POST);
    }
    public function sale_sling_words($id = '')
    {
        $data = _Info::get($id);
        if ($data['contacts_id']) {
            $contacts = Contacts::get($data['contacts_id']);
        }

        $this->assign('contacts', $contacts ?? []);
        $this->assign('dead', _Dead::where('cem_info_id', $id)->select());
        $this->assign('data', $data);
        $this->assign('pay_status', _Info::pay_status());
        $this->view->engine->layout(false);
        return $this->fetch();
    }

    public function tending($wh = '')
    {
        $this->www_list($wh);
        return $this->fetch();
    }

    //取消墓位预订
    public function ten_setqx()
    {
        $e = _Info::ten_setqx($_POST);
        if ($e['status']) {
            return 'ok';
        }
        return 'no';
    }
    public function tending_tc1($id = '')
    {
        $data = _Info::get($id);
        if ($data['contacts_id']) {
            $contacts = Contacts::get($data['contacts_id']);
        }

        $this->assign('contacts', $contacts ?? []);
        $this->assign('dead', _Dead::where('cem_info_id', $id)->select());
        $this->assign('data', $data);
        $this->assign('pay_status', _Info::pay_status());
        $this->view->engine->layout(false);
        return $this->fetch();
    }

    public function tending_tc2($id = '')
    {
        $data = _Info::get($id);
        if ($data['contacts_id']) {
            $contacts = Contacts::get($data['contacts_id']);
        }

        $this->assign('contacts', $contacts ?? []);
        $this->assign('dead', _Dead::where('cem_info_id', $id)->select());
        $this->assign('data', $data);
        $this->assign('pay_status', _Info::pay_status());
        $this->view->engine->layout(false);
        return $this->fetch();
    }


    public function buyed($wh = '')
    {
        $this->www_list($wh);
        return $this->fetch();
    }

    public function buyed_tc1($id = '')
    {
        $data = _Info::get($id);
        if ($data['contacts_id']) {
            $contacts = Contacts::get($data['contacts_id']);
        }

        $this->assign('contacts', $contacts ?? []);
        $this->assign('dead', _Dead::where('cem_info_id', $id)->select());
        $this->assign('data', $data);
        $this->assign('pay_status', _Info::pay_status());
        $this->view->engine->layout(false);
        return $this->fetch();
    }

    public function buyed_tc2($id = '')
    {
        $data = _Info::get($id);
        if ($data['contacts_id']) {
            $contacts = Contacts::get($data['contacts_id']);
        }

        $this->assign('contacts', $contacts ?? []);
        $this->assign('dead', _Dead::where('cem_info_id', $id)->select());
        $this->assign('data', $data);
        $this->assign('pay_status', _Info::pay_status());
        $this->view->engine->layout(false);
        return $this->fetch();
    }

    public function used($wh = '')
    {
        $this->www_list($wh);
        return $this->fetch();
    }

    public function used_tc1($id = '')
    {
        $data = _Info::get($id);
        if ($data['contacts_id']) {
            $contacts = Contacts::get($data['contacts_id']);
        }

        $this->assign('contacts', $contacts ?? []);
        $this->assign('dead', _Dead::where('cem_info_id', $id)->select());
        $this->assign('data', $data);
        $this->assign('pay_status', _Info::pay_status());
        $this->view->engine->layout(false);
        return $this->fetch();
    }

    public function used_tc2($id = '')
    {
        $data = _Info::get($id);
        if ($data['contacts_id']) {
            $contacts = Contacts::get($data['contacts_id']);
        }

        $this->assign('contacts', $contacts ?? []);
        $this->assign('dead', _Dead::where('cem_info_id', $id)->select());
        $this->assign('data', $data);
        $this->assign('pay_status', _Info::pay_status());
        $this->view->engine->layout(false);
        return $this->fetch();
    }


    public function visit_push()
    {
        if ($_POST) {
            $e = _Visit::add($_POST);
            if ($e['status']) {
                return $this->success($e['msg']);
            }
            return $this->error($e['msg']);
        }

        return $this->fetch();
    }

    public function visit_log($wh = '')
    {
        $map = [];
        if ($wh) {

            $map['b.name'] = ['like', '%' . $wh . '%'];
            $map['b.email'] = ['like', '%' . $wh . '%'];
            $map['b.address'] = ['like', '%' . $wh . '%'];
            $map['b.workplace'] = ['like', '%' . $wh . '%'];
            // $map['_logic'] = 'or';
            $this->assign('list', _Visit::wlist($map));
        } else {
            $this->assign('list', _Visit::plist($map));
        }
        $this->assign('count', _Visit::cnt($map));
        $this->assign('wh', $wh);
        return $this->fetch();
    }
    public function t1()
    {
        return $this->fetch();
    }

    public function t2()
    {
        error_reporting(0);
        return $this->fetch();
    }

    public function t3()
    {
        error_reporting(0);
        return $this->fetch();
    }

    public function tlist($pid = 0, $ppid = 0)
    {
        $map = ['ppid' => 0];
        $pid && $map['pid'] = $pid;
        $ppid && $map['ppid'] = $ppid;
        return _Channel::wlist($map);
    }

    public function edit()
    {
        $e = _Channel::edit($_POST['id'], $_POST);
        if ($e['status']) {
            return $this->success($e['msg']);
        }
        return $this->error($e['msg']);
    }

    public function add()
    {
        // wcc($_POST);
        $e = _Channel::add($_POST);
        if ($e['status']) {
            return $this->success($e['msg']);
        }
        return $this->error($e['msg']);
    }

    public function del($id)
    {
        return _Channel::del($id);
    }

    public function set_status($id, $val)
    {
        return _Channel::set_status($id, $val);
    }
    //预定过期提醒
    public function sysyd()
    {
        $this->assign('row_staff', _Staff::wlistf());
        $time = time();
        $this->assign('ltime', $time);
        $request = Request::instance();
        $gtime = $request->only(['gtime']);
        $today = $request->only(['today']);
        $map = [];
        $map = ['a.pay_status' => 2, 'a.status' => 39, 'a.sta' => 3];
         //本周
        $time = time();
        $w_day = date("w", $time);
        if ($w_day == '1') {
            $cflag = '+0';
            $lflag = '-1';
        } else {
            $cflag = '-1';
            $lflag = '-2';
        }
        $weekstar = strtotime(date('Y-m-d', strtotime("$cflag week Monday", $time))); //本周一零点的时间戳
        $weekend = strtotime(date('Y-m-d', strtotime("$cflag week Monday", $time))) + 604799;//本周末零点的时间戳
        //本月
        $begmonth = mktime(0, 0, 0, date('m'), 1, date('Y'));
        $endmonth = mktime(23, 59, 59, date('m'), date('t'), date('Y'));

        $now = time();
        // if ($gtime['gtime'] && $today['today']) {
        //     $t = time() + 3600 * 8;//这里和标准时间相差8小时需要补足
        //     $tget = $t + 3600 * 24 * $today['today'];//比如5天前的时间
        //     if ($gtime['gtime'] == 2) {//一周内过期
        //         //$map="endtime >= ".$tget." and endtime<=".$weekend."";
        //         //$map['a.remind_date']=['egt',$tget];
        //         //$map['a.remind_date']=['elt',$weekend];
        //         $map = "a.pay_status=2 and a.status = 39 and a.sta = 3 and a.remind_date >= " . $tget . " and a.remind_date<=" . $weekend . "";
        //     } else if ($gtime['gtime'] == 3) {//一个月内过期
        //         //$map="endtime >=".$tget." and endtime<=".$endmonth."";
        //         //$map['a.remind_date']=['egt',$tget];
        //         //$map['a.remind_date']=['elt',$endmonth];
        //         $map = "a.pay_status=2 and a.status = 39 and a.sta = 3 and a.remind_date >= " . $tget . " and a.remind_date<=" . $endmonth . "";
        //     } else if ($gtime['gtime'] == 5) {//已过期
        //         $map = "a.pay_status=2 and a.status = 39 and a.sta = 3 and a.remind_date < " . $now;
        //     }
        //     $this->assign('gtime', $gtime['gtime']);
        //     $this->assign('today', $today['today']);
        //     $count = count(_Info::wlists($map));
        //     $this->assign('count', $count);
        // }
        if ($today['today']) {
            $t = time() + 3600 * 8;//这里和标准时间相差8小时需要补足
            $tget = $t + 3600 * 24 * $today['today'];//比如5天前的时间
            $map = "a.pay_status=2 and a.status = 39 and a.sta = 3 and a.remind_date >= " . $now . " and a.remind_date<=" . $tget . "";
            $this->assign('gtime', $gtime['gtime']);
            $this->assign('today', $today['today']);
            $count = count(_Info::wlists($map));
            $this->assign('count', $count);
        } else if ($gtime['gtime'] && empty($today['today'])) {
            if ($gtime['gtime'] == 2) {//一周内过期
                $map = "a.pay_status=2 and a.status = 39 and a.sta = 3 and a.remind_date >= " . $weekstar . " and a.remind_date<=" . $weekend . "";
            } else if ($gtime['gtime'] == 3) {//一个月内过期
                $map = "a.pay_status=2 and a.status = 39 and a.sta = 3 and a.remind_date >= " . $begmonth . " and a.remind_date<=" . $endmonth . "";
            } else if ($gtime['gtime'] == 5) {//已过期
                //$map['a.remind_date']=['lt',$now];
                $map = "a.pay_status=2 and a.status = 39 and a.sta = 3 and a.remind_date < " . $now;
            }
            $this->assign('gtime', $gtime['gtime']);
            $this->assign('today', $today['today']);
            $count = count(_Info::wlists($map));
            $this->assign('count', $count);
        }

        $this->assign('list', _Info::wlists($map));
        // print_r(_Info::getLastSql());
        return $this->fetch();
    }
    //管理费过期提醒
    public function glprice()
    {
        $this->assign('row_staff', _Staff::wlistf());
        $this->assign('sysyst', _Tpl::wlists());
        $time = time();
        $this->assign('ltime', $time);
        $request = Request::instance();
        $gtime = $request->only(['gtime']);
        $today = $request->only(['today']);
        $map = [];
        $map = ['a.pay_status' => 1, 'a.status' => 44, 'a.sta' => 3];
         //本周
        $time = time();
        $w_day = date("w", $time);
        if ($w_day == '1') {
            $cflag = '+0';
            $lflag = '-1';
        } else {
            $cflag = '-1';
            $lflag = '-2';
        }
        $weekstar = strtotime(date('Y-m-d', strtotime("$cflag week Monday", $time))); //本周一零点的时间戳
        $weekend = strtotime(date('Y-m-d', strtotime("$cflag week Monday", $time))) + 604799;//本周末零点的时间戳
        //本月
        $begmonth = mktime(0, 0, 0, date('m'), 1, date('Y'));
        $endmonth = mktime(23, 59, 59, date('m'), date('t'), date('Y'));
        //三个月之内
        $now = time();
        $time = strtotime('-2 month', $now);
        $beginThismonth = mktime(0, 0, 0, date('m', $now), 1, date('Y', $now));
       $yue=date(' m', $now)+3;
        if ($yue>12){
            $nian=date('Y', $now)+1;
            $yue=$yue-12;
        }else{
            $nian=date('Y', $now);
        }
        $endThismonth = mktime(0, 0, 0, $yue, date('t', $now), $nian);
        if ($today['today']) {
            $t = time();//这里和标准时间相差8小时需要补足
            $tget = $t + (3600 * 24 * $today['today']);//比如5天前的时间
            $map = "a.pay_status=1 and a.status = 44 and a.sta = 3 and a.manage_time >= $t and a.manage_time<=$tget";
            $this->assign('gtime', $gtime['gtime']);
            $this->assign('today', $today['today']);
            $count = count(_Info::wlists($map));
            $this->assign('count', $count);
        } else if ($gtime['gtime'] && empty($today['today'])) {
            if ($gtime['gtime'] == 2) {//一周内过期
                $map = "a.pay_status=1 and a.status = 44 and a.sta = 3 and a.manage_time >= " . $weekstar ." and a.manage_time<=" . $weekend . "";
            } else if ($gtime['gtime'] == 3) {//一个月内过期
                $map = "a.pay_status=1 and a.status = 44 and a.sta = 3 and a.manage_time >= " . $begmonth ." and a.manage_time<=" . $endmonth . "";
            } else if ($gtime['gtime'] == 4) {//一个季度内过期
                $map = "a.pay_status=1 and a.status = 44 and a.sta = 3 and a.manage_time >= " . $beginThismonth ." and a.manage_time<=" . $endThismonth . "";
            } else if ($gtime['gtime'] == 5) {//已过期
                //$map['a.remind_date']=['lt',$now];
                $map = "a.pay_status=1 and a.status = 44 and a.sta = 3 and a.manage_time <=".$now;
            }
            $this->assign('gtime', $gtime['gtime']);
            $this->assign('today', $today['today']);
            $count = count(_Info::wlists($map));
            $this->assign('count', $count);
        }
//        var_dump($map);
//               exit();
        $this->assign('list', _Info::wlists($map));
        //print_r(_Info::getLastSql());
        return $this->fetch();
    }
    //已落葬墓位管理
    public function zang($wh = '')
    {
        $this->www_list($wh);
        return $this->fetch();
    }
    //故者落葬情况管理
    public function zlist()
    {
        return $this->fetch();
    }
    //故者落葬信息
    public function select_lz_list()
    {
        return _Info::select_lz_list($_POST);
    }
    //故者落葬信息  全部信息
    public function select_lz_list_all()
    {
        return _Info::select_lz_list_all();
    }
    //故者落葬确认
    public function toset()
    {
        $count = Db::table('dead')->where(['type' => 3])->count();
        $this->assign('count', $count);
        return $this->fetch();
    }
    public function tomb_toset_html()
    {
        return _Info::tomb_toset_html($_POST);
    }
    public function tomb_toset_htmls()
    {
        return _Info::tomb_toset_htmls($_POST);
    }
    public function tomb_toset_setuser()
    {
        if (Db::table('dead')->where('id', $_POST['id'])->update(['type' => 2, 'gltime' => time()]) !== false) {
            return 'ok';
        }
        return 'no';
    }
    //墓位锁定
    public function select_buy_suoding()
    {
        if (Db::table('cem_info')->where('id', $_POST['id'])->update(['suo' => 2, 'suo_staff_id' => session('id'), 'suo_time' => time()]) !== false) {
            Db::table('cem_info')->where(['id' => $_POST['id']])->update(['open' => 3]);
            return 'ok';
        }
        return 'no';
    }
    //故者落葬确认
    public function select_toset_list()
    {
        if (input('cem_id')){
            $map['cem_id']=input('cem_id');
        }
        if (input('cem_area_id')){
            $map['cem_area_id']=input('cem_area_id');
        }
        if (input('cem_row_id')){
            $map['cem_row_id']=input('cem_row_id');
        }
      //  $map['type']=3;
//        if (input('time')){
//            $map['gltime']=input('time');
//        }
        return _Info::select_toset_list($map,input('time'));

    }
    //故者落葬确认
    public function select_toset_list_all()
    {
        return _Info::select_toset_list_all();
    }
    //安葬日提醒
    public function azset()
    {
        return $this->fetch();
    }
    //安葬日提醒--信息
    public function select_azset_list()
    {
        return _Info::select_azset_list($_POST);
    }
    //安葬日提醒--信息
    public function select_azset_list_all()
    {
        return _Info::select_azset_list_all($_POST);
    }
    //祭祀日管理
    public function jtoady()
    {
        return $this->fetch();
    }
    //祭祀日管理--信息
    public function select_jtoday_list()
    {
        $list = _Info::select_jtoday_list($_POST);
        return $list;
    }
    //打印
    public function select_print()
    {
        $list = _Info::select_print($_POST);
        return $list;
    }
}

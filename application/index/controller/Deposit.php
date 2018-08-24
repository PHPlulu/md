<?php
namespace app\index\controller;

use app\index\model\Auth as _Auth;
use app\index\model\Deposit as _Deposit;
use app\index\model\System as _System;
use app\index\model\Systemt as _Systemt;
use app\index\model\Systemc as _Systemc;
use app\index\model\Systems as _Systems;
use app\index\model\Syslx as _Syslx;
use app\index\model\Sysjcw as _Sysjcw;
use app\index\model\Role as _Role;
use app\index\model\Staff as _Staff;
use app\index\model\Tpl as _Tpl;
use think\Request;

class Deposit extends Root
{

    public function dep_sell()
    {
        $this->assign('sys_list', _System::wlist());
        $this->assign('sys_list_s', _Systemt::wlist());
        $this->assign('sysjcc', _Systemc::wlist());
        $this->assign('sysys', _Systems::wlist());
        $this->assign('sysls', _Syslx::wlist());
        $this->assign('sysjcw', _Sysjcw::wlist());
        return $this->fetch();
    }
    public function dep_sell_all()
    {
        return _Sysjcw::dep_sell_all($_POST);
    }
    public function dep_wh_all()
    {
        return _Deposit::dep_wh_all($_POST);
    }
    public function deposit_set_sell($id)
    {
        return _Sysjcw::deposit_set_sell($id);
    }
    public function deposit_set_sell_l($id)
    {
        return _Sysjcw::deposit_set_sell_y($id);
    }
    public function deposit_set_wh_sell($id)
    {
        return _Deposit::deposit_set_wh_sell($id);
    }
    public function deposit_set_wh_sell_l($id)
    {
        return _Deposit::deposit_set_wh_sell_l($id);
    }
    public function dep_wh()
    {
        $this->assign('sys_list', _System::wlist());
        $this->assign('sys_list_s', _Systemt::wlist());
        $this->assign('sysjcc', _Systemc::wlist());
        $this->assign('sysys', _Systems::wlist());
        $this->assign('sysls', _Syslx::wlist());
        $this->assign('sysjcw', _Sysjcw::wlisty());
        $this->assign('deplist', _Deposit::wlisty());
        return $this->fetch();
    }
    public function dep_wh_del()
    {
        return _Deposit::dep_wh_del($_POST);
    }
    public function dep_tx()
    {
        $this->assign('row_staff', _Staff::wlistf());
        $this->assign('sysyst', _Tpl::wlists());
        $time = time();
        $this->assign('ltime', $time);
        $request = Request::instance();
        $gtime = $request->only(['gtime']);
        $today = $request->only(['today']);
        $map = [];
        $map = ['syszt' => 2];
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
        $beginThismonth = mktime(0, 0, 0, date('m', $time), 1, date('Y', $time));
        $endThismonth = mktime(0, 0, 0, date('m', $now), date('t', $now), date('Y', $now));
        // if ($gtime['gtime'] && $today['today']) {
        //     $t = time() + 3600 * 8;//这里和标准时间相差8小时需要补足
        //     $tget = $t + 3600 * 24 * $today['today'];//比如5天前的时间
        //     if ($gtime['gtime'] == 2) {//一周内过期
        //         $map = "syszt=2 and endtime >= " . $tget . " and endtime<=" . $weekend . "";
        //     } else if ($gtime['gtime'] == 3) {//一个月内过期
        //         $map = "syszt=2 and endtime >=" . $tget . " and endtime<=" . $endmonth . "";
        //     } else if ($gtime['gtime'] == 4) {//一个季度内过期
        //         $map = "syszt=2 and endtime >=" . $tget . " and endtime<=" . $endThismonth . "";
        //     } else if ($gtime['gtime'] == 5) {//已过期
        //         $map = "syszt=2 and endtime < " . $now;
        //     }
        //     $count = count(_Deposit::wlist($map));
        //     $this->assign('count', $count);
        // }
        if ($today['today']) {
            $t = time() + 3600 * 8;//这里和标准时间相差8小时需要补足
            $tget = $t + 3600 * 24 * $today['today'];//比如5天前的时间
            $map = "syszt=2 and endtime >=" . $now . " and endtime<=" . $tget . "";
            $count = count(_Deposit::wlist($map));
            $this->assign('count', $count);
        } else if ($gtime['gtime'] && empty($today['today'])) {
            if ($gtime['gtime'] == 2) {//一周内过期
                $map = "syszt=2 and endtime >= " . $weekstar . " and endtime<=" . $weekend . "";
            } else if ($gtime['gtime'] == 3) {//一个月内过期
                $map = "syszt=2 and endtime >= " . $begmonth . " and endtime<=" . $endmonth . "";
            } else if ($gtime['gtime'] == 4) {//一个季度内过期
                $map = "syszt=2 and endtime >= " . $beginThismonth . " and endtime<=" . $endThismonth . "";
            } else if ($gtime['gtime'] == 5) {//已过期
                $map = "syszt=2 and endtime < " . $now;
            }
            $count = count(_Deposit::wlist($map));
            $this->assign('count', $count);
        }
        $this->assign('gtime', $gtime['gtime']);
        $this->assign('today', $today['today']);
        $this->assign('list', _Deposit::wlist($map));
        return $this->fetch();
    }
    /*
    public function edit ($id, $title, $sn = '', $discount, $auth) {
        $e = _Role::edit($id, $title, $sn, $discount, $auth);
        if ($e['status']) {
            return $this->success($e['msg']);
        }
        return $this->error($e['msg']);
    }*/

    public function dep_sell_add()
    {
        $e = _Deposit::dep_sell_set($_POST);
        if ($e['status']) {
            return $this->success($e['msg']);
        }
        return $this->error($e['msg']);
    }
    public function dep_sell_wh_set()
    {
        $e = _Deposit::dep_sell_wh_set($_POST);
        if ($e['status']) {
            return $this->success($e['msg']);
        }
        return $this->error($e['msg']);
    }
}

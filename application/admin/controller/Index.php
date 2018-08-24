<?php
namespace app\admin\controller;

use app\admin\controller\Root;

class Index  extends Root {

    public function index () {
        //test
        return $this->fetch();
    }

    public function okz () {
        return $this->fetch();
    }

}

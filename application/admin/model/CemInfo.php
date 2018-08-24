<?php
namespace app\index\model;

use app\index\model\Root;
use app\index\model\Tpl as _Tpl;
use app\index\model\Contacts as _Contacts;
class CemInfo extends Root {

    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';
    // protected $autoWriteTimestamp = 'datetime';

    protected $table = 'cem_info';

    static public function wlist ($map = []) {
        return self::where($map)->order('cem_id', 'asc')->column('*', 'id');
    } 
    static public function wlistitle () {
        return self::field('long_title')->column('*', 'contacts_id');
    }  
    static public function wlist_zf () {
        return self::table('bw_zf')->order('id', 'desc')->column('*', 'id');
    } 
    static public function wlists ($map = []) {
        return self::alias('a')->join('contacts b','a.contacts_id = b.id','LEFT')->where($map)->column('*', 'id');
    }   
    static public function wlistt ($map = []) {
        return self::field('a.id,a.long_title,a.pay_status,a.sta,a.status,a.price,a.money,a.settime,a.starttime,a.endtime,a.mwnum,a.lnum,a.hnum,a.pay_sum_money,a.manage_money,a.manage_year,a.manage_sum_money,a.reserve_money,a.unpaid_money,a.pay_status,a.reserve_date,a.reserve_date,a.remind_date,a.update_by,a.beizhu,a.salesman,b.name,b.sex,b.idcard,b.tel,b.phone,b.postcode,b.address,b.workplace,b.email,b.relationship,d.dead_name')->alias('a')->join('contacts b','a.contacts_id = b.id')->join('dead d','a.id = d.cem_info_id')->where($map)->select();
    }
    //打印
    static public function select_print($arra){
        //type   墓位预订 == 2 ，
        $map=[];
        $html='';
        $map=['a.id'=>$arra['id']];
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id','LEFT')->where($map)->find();
        $cem_model=_Tpl::tlist(8);//墓位类型
        $cem_mat=_Tpl::tlist(3);//墓位材料
        if($arra['type'] == '2'){//墓位预订
            $html.='<div  id="ele1">';
                $html.='<div class="whtana">';
                    $html.='<div style="text-align:center;padding-top:20px;">黑龙江省天泉生态陵园有限责任公司</div><br>';
                    $html.='<div style="text-align:center;font-family:"微软雅黑";font-weight: 700;font-size: 16px;">定墓单</div><br>';
                    $html.='<div style="float:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编号:</div>';
                    $html.='<div style="float:right;">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                $html.='</div><br>';
                $html.='<table class="table table-bordered" style="width:700px;margin:0px auto;">';
                 $html.=' <tbody>';
                    $html.='<tr>';
                      $html.='<td style="width:100px;">定户姓名</td>';
                      $html.='<td style="width:200px;"></td>';
                      $html.='<td style="width:100px;">住址电话</td>';
                      $html.='<td style="width:200px;"></td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td style="width:100px;">逝者姓名</td>';
                      $html.='<td style="width:200px;"></td>';
                      $html.='<td style="width:100px;">定户与逝者关系</td>';
                      $html.='<td style="width:200px;"></td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td style="width:100px;">墓型编号</td>';
                      $html.='<td style="width:200px;"></td>';
                      $html.='<td style="width:100px;">定户与逝者关系</td>';
                      $html.='<td style="width:200px;"></td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td style="width:100px;">单墓/合墓</td>';
                      $html.='<td style="width:200px;"></td>';
                      $html.='<td style="width:100px;">墓总价</td>';
                      $html.='<td style="width:200px;"></td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td style="width:100px;">订金</td>';
                      $html.='<td style="width:200px;"></td>';
                      $html.='<td style="width:100px;">应补金额</td>';
                      $html.='<td style="width:200px;"></td>';
                    $html.='</tr>';
                    $html.='<tr style="text-align:left;">';
                      $html.='<td  colspan="4" >说明：';
                      $html.='<p>1. 款清领取《墓位证》, 凭《墓位证》办理手续 , 在所定墓位举行下葬。</p>';
                      $html.='<p>2. 定户在选定墓位前 , 须认真考虑 , 一经确定不得退换。</p>';
                      $html.='<p>3. 下葬所用的骨灰盒尺寸须在350mm(长) X 250mm(宽) X 220mm(高) 之内 , 坛子最大直径须在350mm之内。</p>';
                      $html.='<p>4. 自行携带的花草树木本陵园不负责管理和维护。</p>';
                      $html.='<p>5. 本订单全部内容经定户审核无误 , 签名生效。</p>';
                      $html.='<p>6. 本订单一式两份 , 定户一份 , 陵园档案室一份。</p><br>';
                      $html.='</td>';
                    $html.='</tr>';
                  $html.='</tbody>';
                $html.='</table>';
            $html.=' </div>';
            $html.='<div style="margin:0 auto;width:100px;padding-top:20px;">';
                $html.='<button type="button" class="contc " style="text-align:center;" onclick="show_print_yd()">打印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '3'){//墓位订购 （正）
            $html.='<div  id="ele2" style="font-family:"微软雅黑";">';
                $html.='<div class="whtana">';
                    $html.='<div style="text-align:center;padding-top:20px;font-family:"微软雅黑";font-weight: 800;font-size: 16px;">经营性公墓</div><br>';
                    $html.='<div style="text-align:center;font-family:"微软雅黑";font-weight: 800;font-size: 16px;">《墓位销售合同》</div><br>';
                    $html.='<div style="font-family:"微软雅黑";font-weight: 800;font-size: 14px;">合同编号No：'.$arr['hnum'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                $html.='</div><br>';
                $html.='<div style="padding-left:20px;">甲方：黑龙江省天泉生态陵园有限责任公司</div><br>';
                $html.='<div style="float:left;padding-left:20px;">已方：'.$arr['name'].'</div>';
                $html.='<div style="float:right;font-weight: 700;font-size: 14px;padding-right:300px;">身份证号码：'.$arr['idcard'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br><br>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;甲、乙本着自愿、诚信原则，依据《中华人民共和国合同法》、《国务院殡葬管理条例》等相关法律之规定，就乙方向</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;甲方购买墓位一事达成如下协议，以兹共同遵守。</div><br>';
                $html.='<div style="padding-left:20px;">第一条 甲方系经下列有权国家行政机关批准成立的公墓经营单位：';
                    $html.='<table style="padding-left:20px;">';
                        $html.='<thead >';
                            $html.='<tr >';
                              $html.='<th style="padding:10px;">审批机关</th>';
                              $html.='<th style="padding:10px;">行政许可证照</th>';
                              $html.='<th style="padding:10px;">批准文号</th>';
                            $html.='</tr>';
                        $html.='</thead>';
                         $html.='<tbody>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;">黑龙江省民政厅</td>';
                               $html.='<td style="padding:10px;">《黑龙江省民政厅批复》<br>《黑龙江省合法公墓》</td>';
                               $html.='<td style="padding:10px;">黑民事函【2005】7号<br>核准日期【2005】1011号</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;">哈市国土资源局</td>';
                               $html.='<td style="padding:10px;">《国有土地使用证》<br>《哈国土资源局文件》</td>';
                               $html.='<td style="padding:10px;">哈国用【2005】第42716号<br>哈国土函字【2005】54号</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;">哈尔滨市发改委</td>';
                               $html.='<td style="padding:10px;">《哈发改委文件》</td>';
                               $html.='<td style="padding:10px;">哈发改社会前【2005】4号</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;">哈尔滨市规划局</td>';
                               $html.='<td style="padding:10px;">《规划用地许可证》</td>';
                               $html.='<td style="padding:10px;">哈规城地字【2005】246号</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;">哈尔滨市工商局</td>';
                               $html.='<td style="padding:10px;">《工商营业执照》</td>';
                               $html.='<td style="padding:10px;">注册号【230100100023413】</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;">哈尔滨市地税局</td>';
                               $html.='<td style="padding:10px;">《税务登记证》</td>';
                               $html.='<td style="padding:10px;">黑地税字【230106775018150】</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;">中国殡葬协会</td>';
                               $html.='<td style="padding:10px;">《会员单位证书》</td>';
                               $html.='<td style="padding:10px;">证书编号【CFA -- 0544】</td>';
                            $html.='</tr>';
                         $html.='</tbody>';
                    $html.='</table>';
                $html.='</div>';
                $html.='<div style="padding-left:20px;">第二条 本合同所称墓位依法定义为：<p style="display: inline-block;font-weight: 700;font-size: 14px;">墓碑等地上建筑物的永久所有权及所占土地的使用权</p></div>';
                $html.='<div style="padding-left:20px;">第三条';
                    $html.='<table style="padding-left:20px;">';
                         $html.='<tbody>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;width:100px;">墓园位置：'.$arr['long_title'].'</td>';
                               $html.='<td style="padding:10px;width:100px;">墓型：'.$cem_model[$arr['model']]['title'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;width:100px;">墓位占地：'.$arr['acreage'].'平方米</td>';
                               $html.='<td style="padding:10px;width:100px;">材质：'.$cem_mat[$arr['material']]['title'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;width:200px;" colspan="2">墓位费：标定价格：<p style="display: inline-block;font-weight: 700;font-size: 14px;width:200px;">¥'.$arr['price'].'</p> <p style="display: inline-block;font-weight: 700;font-size: 14px;">大写：'.$arr['price_m'].'</p><br>';
                               $html.='<div style="padding-left:56px;width:500px;display: inline-block;">成交价格：<p style="display: inline-block;font-weight: 700;font-size: 14px;width:200px;">¥'.$arr['money'].'</p> <p style="display: inline-block;font-weight: 700;font-size: 14px;">大写：'.$arr['money_m'].'</p></div></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                               $html.='<td style="padding:10px;" colspan="2">管理费:标定价格在叁万元及以下墓位，按120元/每年收取管理费;标定价格在叁万元至伍万元墓位，按170元/每年收取<br>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理费;标定价格在伍万元及以上墓位，按220元/每年收取管理费。管理费收取方式：按周期一次性收取，每个<br>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;周期为5至10年。</td>';
                            $html.='</tr>';
                         $html.='</tbody>';
                    $html.='</table>';
                $html.='</div>';
                $html.='<div style="padding-left:20px;">第四条 本合同签订之日，乙方向甲方一次性付清墓位费及相关费用。</div>';
                $html.='<div style="padding-left:20px;">第五条 因墓位的特殊性，甲方承诺：未经乙方许可，甲方不得开启乙方墓穴;乙方未经使用的墓位，自购买之日起十日内</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;可无理由退墓。乙方承诺：不私自转卖、转让墓位，一经使用或自购买之日起十日后乙方不得已任何理由退换。</div>';
                $html.='<div style="padding-left:20px;">第六条 乙方承够的墓位未安葬使用的， 如遇出国、迁居等事宜，乙方可申请更名予第三人，但乙方应向甲方提供书面确</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;认，经甲方核实无误后，办理相关变更手续予变更</div>';
                $html.='<div style="padding-left:20px;">第七条 特别提示：乙方放置的骨灰盒外径尺寸原则上应当在：长350mm X 宽250mm X 高220mm以内，如乙方自备骨灰</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;盒超出尺寸，需在订购墓位时向甲方明确说明，否则因此导致无法使用该墓位，甲方不承担任何责任。</div>';
            $html.=' </div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_dz()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '4'){//墓位订购 （反）
            $html.='<div  id="ele3" style="font-family:"微软雅黑";">';
                $html.='<div style="padding-left:20px;padding-top:50px;">第八条 甲方提供碑文篆刻业务，费用视乙方篆刻要求由乙方自行承担，碑文内容不得违反中华人民共和国相关法律、法规</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;之规则及工序良俗。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第九条 乙方使用墓位时，原则上须持《墓位销售合同》于安葬3日前至甲方处办理有关安葬手续，如确有特殊情况，需及时</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通知甲方，甲方将尽可能的满足乙方要求，安葬完毕后领取《墓位证》。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十条 乙方应按时缴纳管理费，从甲方寄出通知之日起三个月内，如乙方仍然未续缴管理费，墓位由甲方无条件收回;乙方</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;存放的骨灰甲方有权自行处理，且不承担任何责任。</div><br>';
                $html.='<div style="padding-left:20px;font-size:14px;font-weight:800;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;甲方特别解释本条款联系地址之重要性与乙方，即甲方依乙方确定联系地址邮寄书面通知即视为履行了本合同的</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通知义务，如乙方确定地址虚假、错误或乙方变更地址后未书面通知甲方修改本条款的导致邮寄的书面通知被退回</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;亦视为甲方履行了本合同的通知义务。</div>';
                $html.='<div style="padding-left:20px;font-size:16px;font-weight:800;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乙方确定的联系地址为：'.$arr['address'].'。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十一条 乙方应遵守甲方《园区管理办法》，文明祭祀、爱护园内设施，如有损坏，则按实际损失赔偿给甲方。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十二条 墓穴内不得放置金银首饰等贵重物品,如遇盗窃，甲方不承担赔偿责任，乙方不得对所购墓位擅自变动、装修、改</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;建、种植、换碑及设立其他标志等。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十三条 乙方凭本合同和《墓位证》领取存放在本陵园的逝者骨灰。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十四条 乙方要求迁移骨灰时 ，应提前一周书面通知甲方备案登记 ，由此产生的费用由乙方自行承担 。乙方迁移骨灰后，</div>';
                $html.='<div style="padding-left:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;即视为放弃该墓位的使用权，本合同终止，墓位费、管理费等全部费用不予退还。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十五条 本合同在履行过程中发生争议，由双方但是人协商解决，协商不成向本合同履行地人民法院起诉。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十六条 本合同未尽事宜，由双方约定后作为本合同附件，具有同等法律效力。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十七条 本合同一式两份，甲乙双方各执一份。</div>';
                $html.='<div style="padding-left:20px;margin-top:10px;">第十八条 本合同自鉴定之日起生效。</div>';
                $html.='<div style="padding-left:20px;font-size:16px;font-weight:800;margin-top:20px;">特别约定： 甲方自愿采取下列方式给予乙方墓位管理费优惠。</div>';
                $html.='<div style="padding-left:20px;font-size:16px;font-weight:800;"">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乙方交纳的墓位费中包含永久墓位管理费。</div>';
                $html.='<div style="float:left;padding-left:20px;margin-top:10px;">甲&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;方：黑龙江省天泉生态陵园有限责任公司</div>';
                $html.='<div style="float:right;font-weight: 700;font-size: 14px;padding-right:300px;margin-top:10px;">已&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;方：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>';
                $html.='<div style="padding-left:20px;margin-top:20px;">法人代表：孙宏波</div><br>';
                $html.='<div style="float:left;padding-left:20px;">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：0451-55144444</div>';
                $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 392px;">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：'.$arr['tel'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>';
                $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 392px;">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：'.$arr['phone'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>';
                $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 392px;margin-top:10px;">'.date('Y',time()).'年&nbsp;&nbsp;'.date('m',time()).'&nbsp;&nbsp;月 &nbsp;&nbsp;'.date('d',time()).'&nbsp;&nbsp;日</div>';
            $html.=' </div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_df()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '5'){//打印墓位证(正)
            $dead=self::table('dead')->where(['id'=>$arra['dyzuser']])->find();
            $cem=self::field('id,long_title,contacts_id,starttime,salesman,endtime,hnum,znum')->where(['id'=>$arra['id']])->find();
            $contacts=self::table('contacts')->field('name,relationship,address,workplace,tel,phone')->where(['id'=>$cem['contacts_id']])->find();
            $tpl=self::table('tpl')->column('*', 'id');
            $staff=self::table('staff')->column('*', 'id');
            $html.='<div  id="ele5" style="font-family:"微软雅黑";width: 760px;height: 582px;margin: 0 auto;" >';  
                    $html.='<table style="padding-left:20px;">';
                         $html.='<tbody>';
                            $html.='<tr>';
                               $html.='<td style="position: relative;left: 120px;top: 111px;">'.$dead['dead_name'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                if($dead['sex'] =='2'){
                                    $html.='<td style="position: relative;left: 120px;top: 127px;">男</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 120px;top: 127px;">女</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                            if($dead['dead_address']){
                                $html.='<td style="position: relative;left: 120px;top: 143px;">'.$dead['dead_address'].'</td>';
                            }else{
                                $html.='<td style="position: relative;left: 120px;top: 143px;" class="no-print">----</td>';
                            }
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 120px;top: 158px;">'.date('Y-m-d',$dead['gstime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 120px;top: 173px;">'.date('Y-m-d',$dead['gdtime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 120px;top: 188px;">'.date('Y-m-d',$dead['gltime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 120px;top: 203px;">'.$cem['long_title'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                if($cem['hnum']){
                                    $html.='<td style="position: relative;left: 120px;top: 218px;">'.$cem['hnum'].'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 120px;top: 218px;" class="no-print">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($cem['znum']){
                                    $html.='<td style="position: relative;left: 120px;top: 233px;">'.$cem['znum'].'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 120px;top: 233px;" class="no-print">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 510px;top: -43px;">'.$contacts['name'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                if($contacts['relationship']){
                                    $html.='<td style="position: relative;left: 533px;top: -15px;">'.$tpl[$contacts['relationship']]['title'].'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 533px;top: -15px;" class="no-print">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($contacts['workplace']){
                                    $html.='<td style="position: relative;left: 533px;top: 13px;">'.$contacts['workplace'].'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 533px;top: 13px;" class="no-print">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($contacts['address']){
                                    $html.='<td style="position: relative;left: 533px;top: 40px;">'.$contacts['address'].'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 533px;top: 40px;" class="no-print">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($contacts['tel'] || $contacts['phone']){
                                    $html.='<td style="position: relative;left: 533px;top: 69px;">'.$contacts['tel'].','.$contacts['phone'].'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 533px;top: 69px;" class="no-print">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($dead['salesman']){
                                    $html.='<td style="position: relative;left: 533px;top: 98px;">'.$staff[$cem['salesman']]['nickname'].'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 533px;top: 98px;">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 545px;top: 124px;">'.date('Y',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 644px;top: 104px;">'.date('m',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 713px;top: 84px;">'.date('d',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 543px;top: 112px;">'.date('Y-m-d',$cem['starttime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 664px;top: 92px;">'.date('Y-m-d',$cem['endtime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 164px;top: 123px;">'.date('Y',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 235px;top: 103px;">'.date('m',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 295px;top: 83px;">'.date('d',time()).'</td>';
                            $html.='</tr>';
                         $html.='</tbody>';
                    $html.='</table>';
                $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_muz()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '6'){//打印墓位证(反)
            $cem=self::field('id,settime,starttime,salesman,endtime,znum')->where(['id'=>$arra['id']])->find();
            $staff=self::table('staff')->column('*', 'id');
            $html.='<div  id="ele6" style="font-family:"微软雅黑";width: 760px;height: 582px;margin: 0 auto;" >';  
                    $html.='<table style="padding-left:20px;">';
                         $html.='<tbody>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 50px;top: 200px;">'.date('Y-m-d',$cem['settime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 150px;top: 171px;">'.date('Y-m-d',$cem['starttime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 150px;top: 164px;">'.date('Y-m-d',$cem['endtime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 248px;top: 133px;font-size:12px;">永久免收</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 252px;top: 129px;font-size:12px;">管理费</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 303px;top: 106px;">'.$staff[$cem['salesman']]['nickname'].'</td>';
                            $html.='</tr>';
                         $html.='</tbody>';
                    $html.='</table>';
                $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_muf()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '7'){//打印墓位证(订购信息)
            $cem=self::field('id,long_title,contacts_id,salesman,starttime,endtime,hnum,znum')->where(['id'=>$arra['id']])->find();
            $contacts=self::table('contacts')->field('name,relationship,address,workplace,tel,phone')->where(['id'=>$cem['contacts_id']])->find();
            $tpl=self::table('tpl')->column('*', 'id');
            $staff=self::table('staff')->column('*', 'id');
            $html.='<div  id="ele7" style="font-family:"微软雅黑";width: 760px;height: 582px;margin: 0 auto;" >';  
                    $html.='<table style="padding-left:20px;">';
                         $html.='<tbody>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 120px;top: 323px;">'.$cem['long_title'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 120px;top: 337px;">'.$cem['hnum'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 510px;top: 97px;">'.$contacts['name'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 533px;top: 125px;">'.$tpl[$contacts['relationship']]['title'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 533px;top: 152px;">'.$contacts['workplace'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 533px;top: 182px;">'.$contacts['address'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 533px;top: 210px;">'.$contacts['tel'].','.$contacts['phone'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 533px;top: 237px;">'.$staff[$cem['salesman']]['nickname'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 543px;top: 312px;">'.date('Y-m-d',$cem['starttime']).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 664px;top: 291px;">'.date('Y-m-d',$cem['endtime']).'</td>';
                            $html.='</tr>';
                         $html.='</tbody>';
                    $html.='</table>';
                $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_mud()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '8'){//打印墓位证(落葬信息)
            $dead=self::table('dead')->where(['id'=>$arra['dyzuser']])->find();
            $cem=self::field('id,long_title,contacts_id,starttime,endtime,hnum,znum')->where(['id'=>$arra['id']])->find();
            $tpl=self::table('tpl')->column('*', 'id');
            $staff=self::table('staff')->column('*', 'id');
            $html.='<div  id="ele8" style="font-family:"微软雅黑";width: 760px;height: 582px;margin: 0 auto;" >';  
                    $html.='<table style="padding-left:20px;">';
                         $html.='<tbody>';
                            $html.='<tr>';
                               $html.='<td style="position: relative;left: 120px;top: 111px;">'.$dead['dead_name'].'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                if($dead['sex'] =='2'){
                                    $html.='<td style="position: relative;left: 120px;top: 127px;">男</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 120px;top: 127px;">女</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($dead['dead_address']){
                                    $html.='<td style="position: relative;left: 120px;top: 143px;">'.$dead['dead_address'].'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 120px;top: 143px;">----</td>';    
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($dead['gstime']){
                                    $html.='<td style="position: relative;left: 120px;top: 158px;">'.date('Y-m-d',$dead['gstime']).'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 120px;top: 158px;">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($dead['gdtime']){
                                    $html.='<td style="position: relative;left: 120px;top: 173px;">'.date('Y-m-d',$dead['gdtime']).'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 120px;top: 173px;">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                                if($dead['gltime']){
                                    $html.='<td style="position: relative;left: 120px;top: 188px;">'.date('Y-m-d',$dead['gltime']).'</td>';
                                }else{
                                    $html.='<td style="position: relative;left: 120px;top: 188px;">----</td>';
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                            if($cem['znum']){
                                $html.='<td style="position: relative;left: 125px;top: 275px;">'.$cem['znum'].'</td>';
                            }else{
                                $html.='<td style="position: relative;left: 125px;top: 275px;">----</td>';
                            }
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 545px;top: 284px;">'.date('Y',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 644px;top: 263px;">'.date('m',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 713px;top: 242px;">'.date('d',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 164px;top: 323px;">'.date('Y',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 235px;top: 302px;">'.date('m',time()).'</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                                $html.='<td style="position: relative;left: 295px;top: 281px;">'.date('d',time()).'</td>';
                            $html.='</tr>';
                         $html.='</tbody>';
                    $html.='</table>';
                $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_muz()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '9'){//打印故者落葬登记表
            if($arra['typesta'] == '2'){//显示下葬墓位
                $arr=self::table('dead')->field('id,cem_info_id,dead_name')->where(['cem_id'=>$arra['cem_id'],'cem_area_id'=>$arra['cem_area_id'],'cem_row_id'=>$arra['cem_row_id']])->select();
            }else if($arra['typesta'] == '3'){//显示全部已下葬墓位
                $arr=self::table('dead')->field('id,cem_info_id,dead_name')->select();
            }
            $html.='<div  id="ele9" style="font-family:"微软雅黑";">';
                    $html.='<div class="whtana">';
                        $html.='<div style="text-align:center;padding-top:20px;font-family:"微软雅黑";font-weight: 800;font-size: 16px;">故者落幕登记表</div><br>';
                        $html.='<div style="font-family:"微软雅黑";font-weight: 800;font-size: 14px;">打印日期：'.date('Y',time()).'&nbsp;&nbsp;年&nbsp;&nbsp;'.date('m',time()).'&nbsp;&nbsp;月&nbsp;&nbsp;'.date('d',time()).'&nbsp;&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                    $html.='<br>';
                    $html.='<table class="table table-bordered" style="padding-left:20px;margin-top:20px;">';
                        $html.='<thead >';
                            $html.='<tr >';
                              $html.='<th style="padding-top:30px;width:100px;">墓位编号</th>';
                              $html.='<th style="padding-top:30px;width:100px;">联系人姓名</th>';
                              $html.='<th style="padding-top:30px;width: 210px;">墓位全称</th>';
                              $html.='<th style="padding-top:30px;width: 100px;">联系电话</th>';
                              $html.='<th style="padding-top:30px;width: 100px;">联系手机</th>';
                              $html.='<th style="padding-top:30px;width: 100px;">故者姓名</th>';
                              $html.='<th style="padding-top:30px;width: 100px;">备注</th>';
                            $html.='</tr>';
                        $html.='</thead>';
                        $html.='<tbody>';
                            foreach ($arr as $key => $value) {
                                $cem=self::field('id,long_title,contacts_id,beizhu')->where(['id'=>$value['cem_info_id']])->find();
                                $contacts=self::table('contacts')->field('name,tel,phone')->where(['id'=>$cem['contacts_id']])->find();
                                $html.='<tr>';
                                   $html.='<td style="padding:10px;">'.$cem['id'].'</td>';
                                   $html.='<td style="padding:10px;">'.$contacts['name'].'</td>';
                                   $html.='<td style="padding:10px;">'.$cem['long_title'].'</td>';
                                   $html.='<td style="padding:10px;">'.$contacts['tel'].'</td>';
                                   $html.='<td style="padding:10px;">'.$contacts['phone'].'</td>';
                                   $html.='<td style="padding:10px;">'.$value['dead_name'].'</td>';
                                   $html.='<td style="padding:10px;">'.$cem['beizhu'].'</td>';
                                $html.='</tr>';
                            }
                        $html.='</tbody>';
                    $html.='</table>';
                    $html.='</div>';
                $html.='<div style="float:left;padding-left:20px;">操作员：</div>';
                $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 392px;">财务签字：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>';
                 $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_zlist()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '10'){//安葬日提醒
            if($arra['typesta'] == '2'){//显示选定信息
                $arr=self::table('dead')->where('cem_id='.$arra['cem_id'].' and cem_area_id='.$arra['cem_area_id'].' and cem_row_id='.$arra['cem_row_id'].' and gltime='.strtotime($arra['starttime']))->select();
            }else if($arra['typesta'] == '3'){//显示全部安葬日提醒信息
                $arr=self::table('dead')->select();
            }
            $html.='<div  id="ele10" style="font-family:"微软雅黑";">';
                    $html.='<div class="whtana">';
                        $html.='<div style="text-align:center;padding-top:20px;font-family:"微软雅黑";font-weight: 800;font-size: 16px;">墓位清扫通知单</div><br>';
                        $html.='<div style="float:left;padding-left:20px;" class="no-print">第一联 存根，第二联 环卫部门，请打印两次。</div>';
                        $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 280px;">打印日期：'.date('Y',time()).'&nbsp;&nbsp;年&nbsp;&nbsp;'.date('m',time()).'&nbsp;&nbsp;月&nbsp;&nbsp;'.date('d',time()).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>';
                    $html.='<br>';
                    $html.='<table class="table table-bordered" style="padding-left:20px;margin-top:20px;">';
                        $html.='<thead >';
                            $html.='<tr >';
                              $html.='<th style="padding-top:30px;width:150px;">墓位全称</th>';
                              $html.='<th style="padding-top:30px;width:100px;">故者姓名</th>';
                              $html.='<th style="padding-top:30px;width: 80px;">安葬类别</th>';
                              $html.='<th style="padding-top:30px;width: 100px;">安葬日期</th>';
                              $html.='<th style="padding-top:30px;width: 100px;">圆坟日期</th>';
                            $html.='</tr>';
                        $html.='</thead>';
                        $html.='<tbody>';
                            foreach ($arr as $key => $value) {
                                $cem=self::field('long_title,znum,beizhu')->where(['id'=>$value['cem_info_id']])->find();
                                $html.='<tr>';
                                   $html.='<td style="padding:10px;">'.$cem['long_title'].'</td>';
                                   $html.='<td style="padding:10px;">'.$value['dead_name'].'</td>';
                                   if($value['sta'] == '3'){
                                        $html.='<td style="padding:10px;">首次</td>';
                                    }else if($value['sta'] == '2'){
                                        $html.='<td style="padding:10px;">二次</td>';
                                    }
                                   $html.='<td style="padding:10px;">'.date('Y-m-d',$value['gltime']).'</td>';
                                   $t = $value['gltime']+3600*8;//这里和标准时间相差8小时需要补足
                                    $tget = $t+3600*24*2;//比如5天前的时间
                                   $html.='<td style="padding:10px;">'.date('Y-m-d',$tget).'</td>';
                                $html.='</tr>';
                            }
                            $html.='<tr>';
                                $html.='<td style="padding:10px;" colspan="5">备注：</td>';
                            $html.='</tr>';
                        $html.='</tbody>';
                    $html.='</table>';
                    $html.='</div>';
                $html.='<div style="padding-left:20px;">住：请环卫部门及时做好安葬墓位及墓穴的清扫。</div>';
                $html.='<div style="float:left;padding-left:20px;">下单人：</div>';
                $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 392px;">接单人：</div>';
                $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_azset()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '11'){//墓位联系人信息表
            $staff=self::table('staff')->column('*', 'id');
            $tpl=self::table('tpl')->column('*', 'id');
            $map = [];
            if($arra['typesta'] == '2'){//有查询信息
                $map['name']         =  ['like', '%' .$_POST['vl']. '%'];
                $map['email']        =  ['like', '%' .$_POST['vl']. '%'];
                $map['address']      =  ['like', '%' .$_POST['vl']. '%'];
                $map['workplace']    =  ['like', '%' .$_POST['vl']. '%'];
                $arr=_Contacts::wlist($map);
            }else if($arra['typesta'] == '3'){//显示全部
                $arr= _Contacts::plist($map);
            }
            $html.='<div  id="ele11" style="font-family:"微软雅黑";">';
                    $html.='<div class="whtana">';
                        $html.='<div style="text-align:center;padding-top:20px;font-family:"微软雅黑";font-weight: 800;font-size: 16px;">墓位联系人信息表</div><br>';
                        $html.='<div style="font-family:"微软雅黑";font-weight: 800;font-size: 14px;">打印日期：'.date('Y',time()).'&nbsp;&nbsp;年&nbsp;&nbsp;'.date('m',time()).'&nbsp;&nbsp;月&nbsp;&nbsp;'.date('d',time()).'&nbsp;&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                    $html.='<br>';
                    $html.='<table class="table table-bordered" style="padding-left:20px;margin-top:20px;">';
                        $html.='<thead >';
                            $html.='<tr >';
                              $html.='<th style="padding-top:30px;width:50px;">联系人编号</th>';
                              $html.='<th style="padding-top:30px;width:50px;">关联墓位全称</th>';
                              $html.='<th style="padding-top:30px;width:50px;">姓名</th>';
                              $html.='<th style="padding-top:30px;width: 50px;">性别</th>';
                              $html.='<th style="padding-top:30px;width: 50px;">与故者关系</th>';
                              $html.='<th style="padding-top:30px;width: 50px;">身份证</th>';
                              $html.='<th style="padding-top:30px;width: 70px;">电话</th>';
                              $html.='<th style="padding-top:30px;width: 70px;">手机</th>';
                              $html.='<th style="padding-top:30px;width: 80px;">电子邮件</th>';
                              $html.='<th style="padding-top:30px;width: 80px;">住址</th>';
                              $html.='<th style="padding-top:30px;width: 80px;">工作单位</th>';
                              $html.='<th style="padding-top:30px;width: 50px;">操作员</th>';
                              $html.='<th style="padding-top:30px;width: 50px;">状态</th>';
                              $html.='<th style="padding-top:30px;width: 80px;">添加时间</th>';
                              $html.='<th style="padding-top:30px;width: 80px;">邮政编码</th>';
                            $html.='</tr>';
                        $html.='</thead>';
                        $html.='<tbody>';
                            foreach ($arr as $key => $value) {
                                $cem=self::field('long_title')->where(['contacts_id'=>$value['id']])->find();
                                $html.='<tr>';
                                   $html.='<td >'.$value['id'].'</td>';
                                   $html.='<td >'.$cem['long_title'].'</td>';
                                   $html.='<td >'.$value['name'].'</td>';
                                   if($value['sex'] == '2'){
                                        $html.='<td >男</td>';
                                   }else{
                                        $html.='<td >女</td>';
                                   }
                                   $html.='<td style="">'.$tpl[$value['relationship']]['title'].'</td>';
                                   $html.='<td style="word-wrap:break-word;word-break:break-all;">'.$value['idcard'].'</td>';
                                   $html.='<td style="">'.$value['tel'].'</td>';
                                   $html.='<td style="">'.$value['phone'].'</td>';
                                   $html.='<td style="word-wrap:break-word;word-break:break-all;">'.$value['email'].'</td>';
                                   $html.='<td style="word-wrap:break-word;word-break:break-all;">'.$value['address'].'</td>';
                                   $html.='<td style="word-wrap:break-word;word-break:break-all;">'.$value['workplace'].'</td>';
                                   $html.='<td style="">'.$staff[$value['create_by']]['nickname'].'</td>';
                                   $html.='<td style="">正常</td>';
                                   $html.='<td style="word-wrap:break-word;word-break:break-all;">'.$value['create_time'].'</td>';
                                   $html.='<td style="word-wrap:break-word;word-break:break-all;">'.$value['postcode'].'</td>';
                                $html.='</tr>';
                            }
                        $html.='</tbody>';
                    $html.='</table>';
                    $html.='</div>';
                $html.='<div style="float:left;padding-left:20px;">操作员：</div>';
                $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 392px;">财务签字：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><br>';
                $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_wlist()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '12'){//打印传统碑文登记表（正）
            $html.='<div  id="ele12" style="font-family:"微软雅黑";">';
                    $html.='<div class="whtana" style="width: 1017px;padding:0 40px 0 40px;">';
                        $html.='<div style="text-align:center;padding-top:100px;font-size:30px;font-weight: 800;color:#000000;">天泉生态人文纪念公园碑文登记表</div><br>';
                        $html.='<div style="float:left;width:300px;margin-top: -30px;margin-left: 30px;"><img src="/index/images/logo_03.png"></div>';
                        $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 280px;">'.date('Y',time()).'&nbsp;&nbsp;年&nbsp;&nbsp;'.date('m',time()).'&nbsp;&nbsp;月&nbsp;&nbsp;'.date('d',time()).'&nbsp;&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                    $html.='<br>';
                    $html.='<table class="table table-bordered maintba" style="padding-left:20px;margin-top:20px;">';
                        $html.='<tbody>';
                            $cem=self::field('long_title,hnum,contacts_id')->where(['id'=>$arra['id']])->find();
                            $contacts=self::table('contacts')->field('name')->where(['id'=>$cem['contacts_id']])->find();
                            $zanguser=self::table('bw_info')->where(['id'=>$arra['zanguser']])->find();
                            $html.='<tr>';
                              $html.='<td style="width:200px;">墓位全称</td>';
                              $html.='<td style="width:200px;" colspan="4">'.$cem['long_title'].'</td>';
                              $html.='<td style="width:100px;">票据号</td>';
                              $html.='<td style="width:200px;" colspan="4"><input type="text" name="piaoju" id="piaoju" placeholder="请在此手动输入票据号"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:200px;">定户姓名</td>';
                              $html.='<td style="width:200px;" colspan="4">'.$contacts['name'].'</td>';
                              $html.='<td style="width:100px;">合同号</td>';
                              $html.='<td style="width:200px;" colspan="4">'.$cem['hnum'].'</td>';
                            $html.='</tr>';
                            $html.='<tr style="height: 672px;">';
                                $html.='<td colspan="10" class="maintd">';
                                    $html.='<div style="font-size:40px;font-weight:800;text-align:center;">慈</div>';
                                    $html.='<div style="position: relative;left: 380px;top: 1px;float:left;border-radius: 50%;height: 25px;width: 25px;display: inline-block;border: 1px solid #000000;vertical-align: top;"><span style="display: block;color: #000000;padding-top: 2px;height: 20px;line-height: 20px;text-align: center;">瓷</span></div><div style="position: relative;right: 380px;top: 1px;float:right;border-radius: 50%;height: 25px;width: 25px;display: inline-block;border: 1px solid #000000;vertical-align: top;"><span style="display: block;color: #000000;padding-top: 2px;height: 20px;line-height: 20px;text-align: center">像</span></div>';
                                    $html.='<div style="clear:both;"></div>';
                                    $html.='<div style="font-size:40px;font-weight:800;text-align:center;">母&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;父</div>';
                                    if($zanguser['mname']){
                                        $mlen=mb_strlen($zanguser['mname'],'UTF-8');
                                        $mname = self::ch2arr($zanguser['mname']);
                                        if($mlen == '2'){
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 433px;left:419px;">'.$mname[0].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 473px;left:419px;">'.$mname[1].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                        }else if($mlen == '3'){
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 433px;left:419px;">'.$mname[0].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 473px;left:419px;">'.$mname[1].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 513px;left:419px;">'.$mname[2].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                        }else{
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 433px;left:419px;">'.$mname[0].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 473px;left:419px;">'.$mname[1].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 513px;left:419px;">'.$mname[2].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 553px;left:419px;">'.$mname[3].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                                        }
                                    }
                                    $html.='<div style="clear:both;"></div>';
                                    if($zanguser['fname']){
                                        $flen=mb_strlen($zanguser['fname'],'UTF-8');
                                        $fname = self::ch2arr($zanguser['fname']);
                                        if($flen == '2'){
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 433px;right:419px;">'.$fname[0].'</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 473px;right:419px;">'.$fname[1].'</div>';
                                        }else if($flen == '3'){
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 433px;left:419px;">'.$fname[0].'</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 473px;left:419px;">'.$fname[1].'</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 513px;left:419px;">'.$fname[2].'</div>';
                                        }else{
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 433px;right:419px;">'.$fname[0].'</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 473px;right:419px;">'.$fname[1].'</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 513px;left:419px;">'.$fname[2].'</div>';
                                            $html.='<div style="font-size:30px;font-weight:800;position: absolute;top: 553px;left:419px;">'.$fname[3].'</div>';
                                        }
                                    }
                                    $html.='<div style="position: absolute;top: 420px;font-size:18px;font-weight:800;padding-left:20px;">安</div>';
                                    $html.='<div style="position: absolute;top: 440px;font-size:18px;font-weight:800;padding-left:20px;">葬</div>';
                                    $html.='<div style="position: absolute;top: 460px;font-size:18px;font-weight:800;padding-left:20px;">日</div>';
                                    $html.='<div style="position: absolute;top: 480px;font-size:18px;font-weight:800;padding-left:20px;">期</div>';
                                    $number = date('Ymd',$zanguser['zangtime']);
                                    $bit = str_split($number);
                                    $niannum=[];
                                    foreach ($bit as $key => $value) {
                                        $niannum[$key]=self::numberToChinese($value);
                                    }
                                    $html.='<div style="position: absolute;top: 510px;font-size:18px;font-weight:800;padding-left:20px;">'.$niannum[0].'</div>';
                                    $html.='<div style="position: absolute;top: 530px;font-size:18px;font-weight:800;padding-left:20px;">'.$niannum[1].'</div>';
                                    $html.='<div style="position: absolute;top: 550px;font-size:18px;font-weight:800;padding-left:20px;">'.$niannum[2].'</div>';
                                    $html.='<div style="position: absolute;top: 570px;font-size:18px;font-weight:800;padding-left:20px;">'.$niannum[3].'</div>';
                                    $html.='<div style="position: absolute;top: 590px;font-size:18px;font-weight:800;padding-left:20px;">年</div>';
                                    if($niannum[4] == '零'){
                                        $html.='<div style="position: absolute;top: 610px;font-size:18px;font-weight:800;padding-left:20px;">'.$niannum[4].'</div>';
                                    }else{
                                        $html.='<div style="position: absolute;top: 610px;font-size:18px;font-weight:800;padding-left:20px;">十</div>';
                                    }
                                    $html.='<div style="position: absolute;top: 630px;font-size:18px;font-weight:800;padding-left:20px;">'.$niannum[5].'</div>';
                                    $html.='<div style="position: absolute;top: 650px;font-size:18px;font-weight:800;padding-left:20px;">月</div>';
                                    if($niannum[6] == '零'){
                                        $html.='<div style="position: absolute;top: 670px;font-size:18px;font-weight:800;padding-left:20px;">'.$niannum[6].'</div>';
                                    }else{
                                        $html.='<div style="position: absolute;top: 670px;font-size:18px;font-weight:800;padding-left:20px;">十</div>';
                                    }
                                    $html.='<div style="position: absolute;top: 690px;font-size:18px;font-weight:800;padding-left:20px;">'.$niannum[7].'</div>';
                                    $html.='<div style="position: absolute;top: 710px;font-size:18px;font-weight:800;padding-left:20px;">日</div>';
                                    $html.='<div style="position: absolute;top: 422px;font-size:18px;font-weight:800;padding-left:200px;">故&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生</div>';
                                    $html.='<div style="position: absolute;top: 462px;font-size:18px;font-weight:800;padding-left:200px;">于&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;于</div>';
                                    $html.='<div style="position: absolute;top: 580px;font-size:18px;font-weight:800;padding-left:200px;">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年</div>';
                                    $html.='<div style="position: absolute;top: 660px;font-size:18px;font-weight:800;padding-left:200px;">月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;月</div>';
                                    $html.='<div style="position: absolute;top: 740px;font-size:18px;font-weight:800;padding-left:200px;">日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日</div>';
                                    $html.='<div style="float: right;position: absolute;right:280px;top: 422px;font-size:18px;font-weight:800;padding-left:200px;">故&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生</div>';
                                    $html.='<div style="float: right;position: absolute;right:280px;top: 462px;font-size:18px;font-weight:800;padding-left:200px;">于&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;于</div>';
                                    $html.='<div style="float: right;position: absolute;right:280px;top: 580px;font-size:18px;font-weight:800;padding-left:200px;">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年</div>';
                                    $html.='<div style="float: right;position: absolute;right:280px;top: 660px;font-size:18px;font-weight:800;padding-left:200px;">月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;月</div>';
                                    $html.='<div style="float: right;position: absolute;right:280px;top: 740px;font-size:18px;font-weight:800;padding-left:200px;">日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日</div>';
                                    $html.='<div style="float:right;position: absolute;right: 110px;top: 450px;font-size:18px;font-weight:800;padding-left:20px;">原</div>';
                                    $html.='<div style="float:right;position: absolute;right: 79px;top: 475px;font-size:18px;font-weight:800;padding-left:20px;">籍';
                                    $uaddress = self::ch2arr($zanguser['uaddress']);
                                    $length = mb_strlen($zanguser['uaddress'], 'utf-8');
                                    for ($i=0; $i<$length; $i++){
                                        $html.='<div style="text-align:right;font-weight:800;padding-right:32px;margin:20px 0 20px 0;">'.$uaddress[$i].'</div>';
                                    } 
                                    $html.='</div>';
                                    $html.='<div style="font-size:40px;font-weight:800;position: absolute;top: 820px;left: 510px;">之</div>';
                                    $html.='<div style="font-size:40px;font-weight:800;position: absolute;top: 900px;left: 510px;">墓</div>';
                                $html.='</td>';
                            $html.='</tr>';
                             $html.='<div style="clear:both;"></div>';
                            $html.='<tr >';
                              $html.='<td style="width:80px;">刻字方式</td>';
                              if($zanguser['kzys'] == '2'){
                                $html.='<td style="width:200px;"></td>';
                              }else if($zanguser['kzys'] == '3'){
                                $html.='<td style="width:200px;">喷砂刻字</td>';
                              }else{
                                $html.='<td style="width:200px;"></td>';
                              }
                              $html.='<td style="width:80px;">碑文字体</td>';
                              if($zanguser['bwzt'] == '2'){
                                $html.='<td style="width:200px;">隶书</td>';
                              }else if($zanguser['bwzt'] == '3'){
                                $html.='<td style="width:200px;">魏碑</td>';
                              }else if($zanguser['bwzt'] == '4'){
                                $html.='<td style="width:200px;">行楷</td>';
                              }else{
                                $html.='<td style="width:200px;"></td>';
                              }
                               $html.='<td style="width:80px;">瓷像类型</td>';
                                  if($zanguser['cxsl'] == '2'){
                                    if($zanguser['cxxz'] == '2'){
                                        $html.='<td style="width:200px;"> 椭圆</td>';
                                    }else if($zanguser['cxxz'] == '3'){
                                        $html.='<td style="width:200px;"> 方形</td>';
                                    }else{
                                        $html.='<td style="width:200px;"></td>';
                                    }
                                  }else if($zanguser['cxsl'] == '3'){
                                    if($zanguser['cxxz'] == '2'){
                                        $html.='<td style="width:200px;">喷砂刻字 椭圆</td>';
                                    }else if($zanguser['cxxz'] == '3'){
                                        $html.='<td style="width:200px;">喷砂刻字 方形</td>';
                                    }else{
                                        $html.='<td style="width:200px;">喷砂刻字</td>';
                                    }
                                  }else{
                                    if($zanguser['cxxz'] == '2'){
                                        $html.='<td style="width:200px;"> 椭圆</td>';
                                    }else if($zanguser['cxxz'] == '3'){
                                        $html.='<td style="width:200px;"> 方形</td>';
                                    }else{
                                        $html.='<td style="width:200px;"></td>';
                                    }
                                  }
                               $html.='<td style="width:80px;">瓷像规格</td>';
                                if($zanguser['cxcc'] == '4'){
                                    if($zanguser['cxsc'] == '2'){
                                        $html.='<td style="width:200px;">4寸 黑白</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">4寸 彩色</td>';
                                    }else{
                                        $html.='<td style="width:200px;">4寸</td>';
                                    }
                                }else if($zanguser['cxcc'] == '5'){
                                    if($zanguser['cxsc'] == '2'){
                                        $html.='<td style="width:200px;">5寸 黑白</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">5寸 彩色</td>';
                                    }else{
                                        $html.='<td style="width:200px;">5寸</td>';
                                    }
                                }else if($zanguser['cxcc'] == '6'){
                                    if($zanguser['cxsc'] == '2'){
                                        $html.='<td style="width:200px;">6寸 黑白</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">6寸 彩色</td>';
                                    }else{
                                        $html.='<td style="width:200px;">6寸</td>';
                                    }
                                }else{
                                    if($zanguser['cxsc'] == '2'){
                                        $html.='<td style="width:200px;"> 黑白</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;"> 彩色</td>';
                                    }else{
                                        $html.='<td style="width:200px;"></td>';
                                    }
                                }
                               $html.='<td style="width:120px;">金箔/刷金</td>';
                                if($zanguser['tjb'] == '2'){
                                    if($zanguser['shuajin'] == '2'){
                                        $html.='<td style="width:200px;">是/是</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">是/否</td>';
                                    }else{
                                        $html.='<td style="width:200px;">是</td>';
                                    }
                                }else if($zanguser['tjb'] == '3'){
                                    if($zanguser['shuajin'] == '2'){
                                        $html.='<td style="width:200px;">否/是</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">否/否</td>';
                                    }else{
                                        $html.='<td style="width:200px;">否</td>';
                                    }
                                }else{
                                    if($zanguser['shuajin'] == '2'){
                                        $html.='<td style="width:200px;">/是</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">/否</td>';
                                    }else{
                                        $html.='<td style="width:200px;"></td>';
                                    }
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">备注</td>';
                              $html.='<td style="width:200px;" colspan="9">'.$zanguser['bcont'].'</td>';
                            $html.='</tr>';
                            $html.='<tr >';
                              $html.='<td  colspan="10" ><p style="color:#000000;font-size:20px;font-weight:800;text-align:center;">郑重提示</p><br>';
                              $html.='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;尊敬的逝者家属，请您将逝者的姓名、原籍、生、故日期等信息准确核实，如家属签字确认后，因碑文登记内容不准确，造成的后果由家属自行承担。';
                              $html.='</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">家属签字</td>';
                              $html.='<td style="width:200px;" colspan="2"></td>';
                              $html.='<td style="width:100px;">电话</td>';
                              $html.='<td style="width:200px;" colspan="3"></td>';
                              $html.='<td style="width:100px;">接待员</td>';
                              $html.='<td style="width:200px;" colspan="2"></td>';
                            $html.='</tr>';
                        $html.='</tbody>';
                    $html.='</table>';
                    $html.='</div>';
                $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_bw_cz()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '13'){//打印传统碑文登记表（反）
            $zanguser=self::table('bw_info')->where(['id'=>$arra['zanguser']])->find();
            $dead=self::table('dead')->field('id')->where(['cem_info_id'=>$arra['id']])->count();
            $bw_zf=self::table('bw_zf')->where(['dead_id'=>$zanguser['dead_id']])->find();
            $html.='<div  id="ele13">';
                $html.='<div class="whtana" style="width: 1017px;padding:40px 40px 0 40px;">';
                $html.='<table class="table table-bordered" style="margin:0px auto;">';
                 $html.=' <tbody>';
                    $html.='<tr>';
                      $html.='<td colspan="2" style="text-align:center;font-size:30px;font-weight: 800;color:#000000;">背面碑文内容</td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td style="width:600px;text-align:center;font-size:30px;font-weight: 800;">'.$zanguser['beimian'].'</td>';
                      $html.='<td style="width:10px;">从<br>左<br>至<br>右<br>纵<br>向<br>填<br>写</td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td style="width:600px;text-align:center;font-size:30px;font-weight: 800;">'.$zanguser['kouli'].'</td>';
                      $html.='<td style="width:10px;">从<br>左<br>至<br>右<br>纵<br>向<br>填<br>写</td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td colspan="2" style="text-align:center;font-size:30px;font-weight: 800;">叩<br>立</td>';
                    $html.='</tr>';
                    $html.='<tr >';
                      $html.='<td  colspan="2" >';
                      $html.='<table class="table table-bordered" style="margin:0px auto;">';
                         $html.=' <tbody>';
                            $html.='<tr>';
                              $html.='<td colspan="3" style="text-align:center;font-size:20px;font-weight: 800;">杂费项目备注</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:200px;">安葬性质</td>';
                              if(!$dead || $dead<='1'){
                                $html.='<td style="width:200px;">首次</td>';
                              }else if($dead || $dead >'1'){
                                $html.='<td style="width:200px;">二次</td>';
                              }
                              $html.='<td style="width:200px;" >备注</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">瓷像</td>';
                                $html.='<td style="width:200px;">'.$bw_zf['cx_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-bottom: none;"class="no-print"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">封门</td>';
                                $html.='<td style="width:200px;">'.$bw_zf['lb_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-top: none;border-bottom: none;"class="no-print"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">家族台阶</td>';
                              $html.='<td style="width:200px;">'.$bw_zf['tj_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-bottom: none;border-top: none;" class="no-print"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">墓穴装饰</td>';
                                $html.='<td style="width:200px;">'.$bw_zf['zs_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-top: none;border-bottom: none;"class="no-print"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">不干胶碑文</td>';
                              $html.='<td style="width:200px;">'.$bw_zf['bzj_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-top: none;" class="no-print"></td>';
                            $html.='</tr>';
                          $html.='</tbody>';
                        $html.='</table>';
                      $html.='</td>';
                    $html.='</tr>';
                  $html.='</tbody>';
                $html.='</table>';
                $html.='</div>';
            $html.=' </div>';
            $html.='<div style="margin:0 auto;width:100px;padding-top:20px;">';
                $html.='<button type="button" class="contc " style="text-align:center;" onclick="show_print_ctf()">打印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '14'){//打印现代碑文登记表（正）
            $html.='<div  id="ele14" style="font-family:"微软雅黑";">';
                    $html.='<div class="whtana" style="width: 1017px;padding:0 40px 0 40px;">';
                        $html.='<div style="text-align:center;padding-top:100px;font-size:30px;font-weight: 800;color:#000000;">天泉生态人文纪念公园碑文登记表</div><br>';
                        $html.='<div style="float:left;width:300px;margin-top: -30px;margin-left: 30px;"><img src="/index/images/logo_03.png"></div>';
                        $html.='<div style="float:right;font-weight: 700;font-size: 14px;width: 280px;">'.date('Y',time()).'&nbsp;&nbsp;年&nbsp;&nbsp;'.date('m',time()).'&nbsp;&nbsp;月&nbsp;&nbsp;'.date('d',time()).'&nbsp;&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
                    $html.='<br>';
                    $html.='<table class="table table-bordered maintba" style="padding-left:20px;margin-top:20px;">';
                        $html.='<tbody>';
                            $cem=self::field('long_title,hnum,contacts_id')->where(['id'=>$arra['id']])->find();
                            $contacts=self::table('contacts')->field('name')->where(['id'=>$cem['contacts_id']])->find();
                            $zanguser=self::table('bw_info')->where(['id'=>$arra['zanguser']])->find();
                            $html.='<tr>';
                              $html.='<td style="width:200px;">墓位全称</td>';
                              $html.='<td style="width:200px;" colspan="4">'.$cem['long_title'].'</td>';
                              $html.='<td style="width:100px;">票据号</td>';
                              $html.='<td style="width:200px;" colspan="4"><input type="text" name="piaoju" id="piaoju" placeholder="请在此手动输入票据号"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:200px;">定户姓名</td>';
                              $html.='<td style="width:200px;" colspan="4">'.$contacts['name'].'</td>';
                              $html.='<td style="width:100px;">合同号</td>';
                              $html.='<td style="width:200px;" colspan="4">'.$cem['hnum'].'</td>';
                            $html.='</tr>';
                            $html.='<tr style="height: 672px;">';
                                $html.='<td colspan="10" class="maintd">';
                                    $html.='<div style="position: relative;left: 380px;top: 1px;float:left;border-radius: 50%;height: 25px;width: 25px;display: inline-block;border: 1px solid #000000;vertical-align: top;"><span style="display: block;color: #000000;padding-top: 2px;height: 20px;line-height: 20px;text-align: center;">瓷</span></div><div style="position: relative;right: 380px;top: 1px;float:right;border-radius: 50%;height: 25px;width: 25px;display: inline-block;border: 1px solid #000000;vertical-align: top;"><span style="display: block;color: #000000;padding-top: 2px;height: 20px;line-height: 20px;text-align: center">像</span></div>';
                                    $html.='<div style="clear:both;"></div>';
                                    if($zanguser['fname'] && $zanguser['mname']){
                                        $html.='<div style="position: absolute;left:300px;top: 350px;font-size:18px;font-weight:800;">'.$zanguser['uaddress'].'</div>';
                                        $html.='<div style="font-size:40px;font-weight:800;text-align:center;padding-top:60px;">'.$zanguser['fname'].'</div>';
                                        $fsnumber = date('Ymd',$zanguser['fstime']);
                                        $fsbit = str_split($fsnumber);
                                        $fsniannum=[];
                                        foreach ($fsbit as $key => $value) {
                                            $fsniannum[$key]=self::numberToChinese($value);
                                        }
                                        if($fsniannum[4] == '零'){
                                            $fsyue1=''.$fsniannum[4].'';
                                        }else{
                                            $fsyue1='十';
                                        }
                                        $fsyue2=''.$fsniannum[5].'';
                                        $fsyue=$fsyue1.$fsyue2;
                                        if($fsniannum[6] == '零'){
                                            $fsri1=''.$fsniannum[6].'';
                                        }else{
                                            $fsri1='十';
                                        }
                                        $fsri2=''.$fsniannum[7].'';
                                        $fsri=$fsri1.$fsri2;
                                        $fdnumber = date('Ymd',$zanguser['fgtime']);
                                        $fdbit = str_split($fdnumber);
                                        $fdniannum=[];
                                        foreach ($fdbit as $key => $value) {
                                            $fdniannum[$key]=self::numberToChinese($value);
                                        }
                                        if($fdniannum[4] == '零'){
                                            $fdyue1=''.$fdniannum[4].'';
                                        }else{
                                            $fdyue1='十';
                                        }
                                        $fdyue2=''.$fdniannum[5].'';
                                        $fdyue=$fsyue1.$fsyue2;
                                        if($fdniannum[6] == '零'){
                                            $fdri1=''.$fdniannum[6].'';
                                        }else{
                                            $fdri1='十';
                                        }
                                        $fdri2=''.$fdniannum[7].'';
                                        $fdri=$fdri1.$fdri2;
                                        $html.='<div style="text-align:center;font-weight:800;padding:30px 0 100px 0;"> '.$fsniannum[0].''.$fsniannum[1].''.$fsniannum[2].''.$fsniannum[3].' 年 '.$fsyue.' 月 '.$fsri.' 日 ----  '.$fdniannum[0].''.$fdniannum[1].''.$fdniannum[2].''.$fdniannum[3].' 年 '.$fdyue.' 月 '.$fdri.' 日</div>';
                                        
                                        $html.='<div style="font-size:40px;font-weight:800;text-align:center;">'.$zanguser['mname'].'</div>';
                                        $msnumber = date('Ymd',$zanguser['mstime']);
                                        $msbit = str_split($msnumber);
                                        $msniannum=[];
                                        foreach ($fsbit as $key => $value) {
                                            $msniannum[$key]=self::numberToChinese($value);
                                        }
                                        if($msniannum[4] == '零'){
                                            $msyue1=''.$msniannum[4].'';
                                        }else{
                                            $msyue1='十';
                                        }
                                        $msyue2=''.$msniannum[5].'';
                                        $msyue=$msyue1.$msyue2;
                                        if($msniannum[6] == '零'){
                                            $msri1=''.$msniannum[6].'';
                                        }else{
                                            $msri1='十';
                                        }
                                        $msri2=''.$msniannum[7].'';
                                        $msri=$msri1.$msri2;
                                        $mdnumber = date('Ymd',$zanguser['mgtime']);
                                        $mdbit = str_split($mdnumber);
                                        $mdniannum=[];
                                        foreach ($mdbit as $key => $value) {
                                            $mdniannum[$key]=self::numberToChinese($value);
                                        }
                                        if($mdniannum[4] == '零'){
                                            $mdyue1=''.$mdniannum[4].'';
                                        }else{
                                            $mdyue1='十';
                                        }
                                        $mdyue2=''.$mdniannum[5].'';
                                        $mdyue=$msyue1.$msyue2;
                                        if($mdniannum[6] == '零'){
                                            $mdri1=''.$mdniannum[6].'';
                                        }else{
                                            $mdri1='十';
                                        }
                                        $mdri2=''.$mdniannum[7].'';
                                        $mdri=$mdri1.$mdri2;
                                        $html.='<div style="text-align:center;font-weight:800;padding:30px 0 100px 0;"> '.$msniannum[0].''.$msniannum[1].''.$msniannum[2].''.$msniannum[3].' 年 '.$msyue.' 月 '.$msri.' 日 ----  '.$mdniannum[0].''.$mdniannum[1].''.$mdniannum[2].''.$mdniannum[3].' 年 '.$mdyue.' 月 '.$mdri.' 日</div>';
                                    }else{
                                        if($zanguser['fname'] && !$zanguser['mname']){
                                            $html.='<div style="position: absolute;left:300px;top: 350px;font-size:18px;font-weight:800;">'.$zanguser['uaddress'].'</div>';
                                            $html.='<div style="font-size:40px;font-weight:800;text-align:center;padding-top:60px;">'.$zanguser['fname'].'</div>';
                                            $fsnumber = date('Ymd',$zanguser['fstime']);
                                            $fsbit = str_split($fsnumber);
                                            $fsniannum=[];
                                            foreach ($fsbit as $key => $value) {
                                                $fsniannum[$key]=self::numberToChinese($value);
                                            }
                                            if($fsniannum[4] == '零'){
                                                $fsyue1=''.$fsniannum[4].'';
                                            }else{
                                                $fsyue1='十';
                                            }
                                            $fsyue2=''.$fsniannum[5].'';
                                            $fsyue=$fsyue1.$fsyue2;
                                            if($fsniannum[6] == '零'){
                                                $fsri1=''.$fsniannum[6].'';
                                            }else{
                                                $fsri1='十';
                                            }
                                            $fsri2=''.$fsniannum[7].'';
                                            $fsri=$fsri1.$fsri2;
                                            $fdnumber = date('Ymd',$zanguser['fgtime']);
                                            $fdbit = str_split($fdnumber);
                                            $fdniannum=[];
                                            foreach ($fdbit as $key => $value) {
                                                $fdniannum[$key]=self::numberToChinese($value);
                                            }
                                            if($fdniannum[4] == '零'){
                                                $fdyue1=''.$fdniannum[4].'';
                                            }else{
                                                $fdyue1='十';
                                            }
                                            $fdyue2=''.$fdniannum[5].'';
                                            $fdyue=$fsyue1.$fsyue2;
                                            if($fdniannum[6] == '零'){
                                                $fdri1=''.$fdniannum[6].'';
                                            }else{
                                                $fdri1='十';
                                            }
                                            $fdri2=''.$fdniannum[7].'';
                                            $fdri=$fdri1.$fdri2;
                                            $html.='<div style="text-align:center;font-weight:800;padding:30px 0 100px 0;"> '.$fsniannum[0].''.$fsniannum[1].''.$fsniannum[2].''.$fsniannum[3].' 年 '.$fsyue.' 月 '.$fsri.' 日 ----  '.$fdniannum[0].''.$fdniannum[1].''.$fdniannum[2].''.$fdniannum[3].' 年 '.$fdyue.' 月 '.$fdri.' 日</div>';
                                           
                                            $html.='<div style="text-align:center;font-weight:800;padding:30px 0 100px 0;"> 年 月 日 ----  年  月  日</div>';
                                        }else{
                                            $html.='<div style="font-size:40px;font-weight:800;text-align:center;padding-top:60px;"></div>';
                                            $html.='<div style="text-align:center;font-weight:800;padding:30px 0 100px 0;">年  月  日 ----  年  月  日</div>';
                                            $html.='<div style="position: absolute;left:300px;top: 475px;font-size:18px;font-weight:800;">'.$zanguser['uaddress'].'</div>';
                                            $html.='<div style="font-size:40px;font-weight:800;text-align:center;">'.$zanguser['mname'].'</div>';
                                            $msnumber = date('Ymd',$zanguser['mstime']);
                                            $msbit = str_split($msnumber);
                                            $msniannum=[];
                                            foreach ($fsbit as $key => $value) {
                                                $msniannum[$key]=self::numberToChinese($value);
                                            }
                                            if($msniannum[4] == '零'){
                                                $msyue1=''.$msniannum[4].'';
                                            }else{
                                                $msyue1='十';
                                            }
                                            $msyue2=''.$msniannum[5].'';
                                            $msyue=$msyue1.$msyue2;
                                            if($msniannum[6] == '零'){
                                                $msri1=''.$msniannum[6].'';
                                            }else{
                                                $msri1='十';
                                            }
                                            $msri2=''.$msniannum[7].'';
                                            $msri=$msri1.$msri2;
                                            $mdnumber = date('Ymd',$zanguser['mgtime']);
                                            $mdbit = str_split($mdnumber);
                                            $mdniannum=[];
                                            foreach ($mdbit as $key => $value) {
                                                $mdniannum[$key]=self::numberToChinese($value);
                                            }
                                            if($mdniannum[4] == '零'){
                                                $mdyue1=''.$mdniannum[4].'';
                                            }else{
                                                $mdyue1='十';
                                            }
                                            $mdyue2=''.$mdniannum[5].'';
                                            $mdyue=$msyue1.$msyue2;
                                            if($mdniannum[6] == '零'){
                                                $mdri1=''.$mdniannum[6].'';
                                            }else{
                                                $mdri1='十';
                                            }
                                            $mdri2=''.$mdniannum[7].'';
                                            $mdri=$mdri1.$mdri2;
                                            $html.='<div style="text-align:center;font-weight:800;padding:30px 0 100px 0;"> '.$msniannum[0].''.$msniannum[1].''.$msniannum[2].''.$msniannum[3].' 年 '.$msyue.' 月 '.$msri.' 日 ----  '.$mdniannum[0].''.$mdniannum[1].''.$mdniannum[2].''.$mdniannum[3].' 年 '.$mdyue.' 月 '.$mdri.' 日</div>';
                                        }
                                    }
                                    $html.='<div style="clear:both;"></div>';
                                    $number = date('Ymd',$zanguser['zangtime']);
                                    $bit = str_split($number);
                                    $niannum=[];
                                    foreach ($bit as $key => $value) {
                                        $niannum[$key]=self::numberToChinese($value);
                                    }
                                    $nian=''.$niannum[0].''.$niannum[1].''.$niannum[2].''.$niannum[3].'年';
                                    
                                    
                                    
                                    if($niannum[4] == '零'){
                                        $yue1=''.$niannum[4].'';
                                    }else{
                                        $yue1='十';
                                    }
                                    $yue2=''.$niannum[5].'';
                                    $yue=$yue1.$yue2.'月';
                                    if($niannum[6] == '零'){
                                        $ri1=''.$niannum[6].'';
                                    }else{
                                        $ri1='十';
                                    }
                                    $ri2=''.$niannum[7].'';
                                    $ri=$ri1.$ri2.'日';
                                    $html.='<div style="position: absolute;right:246px;top: 770px;font-size:18px;font-weight:800;padding-left:20px;">'.$nian.''.$yue.''.$ri.'</div>';
                                    $html.='</div>';
                                $html.='</td>';
                            $html.='</tr>';
                             $html.='<div style="clear:both;"></div>';
                            $html.='<tr >';
                              $html.='<td style="width:80px;">刻字方式</td>';
                              if($zanguser['kzys'] == '2'){
                                $html.='<td style="width:200px;"></td>';
                              }else if($zanguser['kzys'] == '3'){
                                $html.='<td style="width:200px;">喷砂刻字</td>';
                              }else{
                                $html.='<td style="width:200px;"></td>';
                              }
                              $html.='<td style="width:80px;">碑文字体</td>';
                              if($zanguser['bwzt'] == '2'){
                                $html.='<td style="width:200px;">隶书</td>';
                              }else if($zanguser['bwzt'] == '3'){
                                $html.='<td style="width:200px;">魏碑</td>';
                              }else if($zanguser['bwzt'] == '4'){
                                $html.='<td style="width:200px;">行楷</td>';
                              }else{
                                $html.='<td style="width:200px;"></td>';
                              }
                               $html.='<td style="width:80px;">瓷像类型</td>';
                                  if($zanguser['cxsl'] == '2'){
                                    if($zanguser['cxxz'] == '2'){
                                        $html.='<td style="width:200px;"> 椭圆</td>';
                                    }else if($zanguser['cxxz'] == '3'){
                                        $html.='<td style="width:200px;"> 方形</td>';
                                    }else{
                                        $html.='<td style="width:200px;"></td>';
                                    }
                                  }else if($zanguser['cxsl'] == '3'){
                                    if($zanguser['cxxz'] == '2'){
                                        $html.='<td style="width:200px;">喷砂刻字 椭圆</td>';
                                    }else if($zanguser['cxxz'] == '3'){
                                        $html.='<td style="width:200px;">喷砂刻字 方形</td>';
                                    }else{
                                        $html.='<td style="width:200px;">喷砂刻字</td>';
                                    }
                                  }else{
                                    if($zanguser['cxxz'] == '2'){
                                        $html.='<td style="width:200px;"> 椭圆</td>';
                                    }else if($zanguser['cxxz'] == '3'){
                                        $html.='<td style="width:200px;"> 方形</td>';
                                    }else{
                                        $html.='<td style="width:200px;"></td>';
                                    }
                                  }
                               $html.='<td style="width:80px;">瓷像规格</td>';
                                if($zanguser['cxcc'] == '4'){
                                    if($zanguser['cxsc'] == '2'){
                                        $html.='<td style="width:200px;">4寸 黑白</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">4寸 彩色</td>';
                                    }else{
                                        $html.='<td style="width:200px;">4寸</td>';
                                    }
                                }else if($zanguser['cxcc'] == '5'){
                                    if($zanguser['cxsc'] == '2'){
                                        $html.='<td style="width:200px;">5寸 黑白</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">5寸 彩色</td>';
                                    }else{
                                        $html.='<td style="width:200px;">5寸</td>';
                                    }
                                }else if($zanguser['cxcc'] == '6'){
                                    if($zanguser['cxsc'] == '2'){
                                        $html.='<td style="width:200px;">6寸 黑白</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">6寸 彩色</td>';
                                    }else{
                                        $html.='<td style="width:200px;">6寸</td>';
                                    }
                                }else{
                                    if($zanguser['cxsc'] == '2'){
                                        $html.='<td style="width:200px;"> 黑白</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;"> 彩色</td>';
                                    }else{
                                        $html.='<td style="width:200px;"></td>';
                                    }
                                }
                               $html.='<td style="width:120px;">金箔/刷金</td>';
                                if($zanguser['tjb'] == '2'){
                                    if($zanguser['shuajin'] == '2'){
                                        $html.='<td style="width:200px;">是/是</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">是/否</td>';
                                    }else{
                                        $html.='<td style="width:200px;">是</td>';
                                    }
                                }else if($zanguser['tjb'] == '3'){
                                    if($zanguser['shuajin'] == '2'){
                                        $html.='<td style="width:200px;">否/是</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">否/否</td>';
                                    }else{
                                        $html.='<td style="width:200px;">否</td>';
                                    }
                                }else{
                                    if($zanguser['shuajin'] == '2'){
                                        $html.='<td style="width:200px;">/是</td>';
                                    }else if($zanguser['cxsc'] == '3'){
                                        $html.='<td style="width:200px;">/否</td>';
                                    }else{
                                        $html.='<td style="width:200px;"></td>';
                                    }
                                }
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">备注</td>';
                              $html.='<td style="width:200px;" colspan="9">'.$zanguser['bcont'].'</td>';
                            $html.='</tr>';
                            $html.='<tr >';
                              $html.='<td  colspan="10" ><p style="color:#000000;font-size:20px;font-weight:800;text-align:center;">郑重提示</p><br>';
                              $html.='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;尊敬的逝者家属，请您将逝者的姓名、原籍、生、故日期等信息准确核实，如家属签字确认后，因碑文登记内容不准确，造成的后果由家属自行承担。';
                              $html.='</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">家属签字</td>';
                              $html.='<td style="width:200px;" colspan="2"></td>';
                              $html.='<td style="width:100px;">电话</td>';
                              $html.='<td style="width:200px;" colspan="3"></td>';
                              $html.='<td style="width:100px;">接待员</td>';
                              $html.='<td style="width:200px;" colspan="2"></td>';
                            $html.='</tr>';
                        $html.='</tbody>';
                    $html.='</table>';
                    $html.='</div>';
                $html.='</div>';
            $html.='<div style="margin:0 auto;width:200px;padding:20px;">';
                $html.='<button type="button" class="contc no-print" style="text-align:center;margin-bottom:20px;" onclick="show_print_xd_z()">打 印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '15'){//打印现代碑文登记表（正）
             $zanguser=self::table('bw_info')->where(['id'=>$arra['zanguser']])->find();
            $html.='<div  id="ele15">';
                $html.='<div class="whtana" style="width: 1017px;padding:40px 40px 0 40px;">';
                $html.='<table class="table table-bordered" style="margin:0px auto;">';
                    $html.=' <tbody>';
                        $html.='<tr>';
                          $html.='<td style="text-align:center;font-size:30px;font-weight: 800;color:#000000;">背面碑文内容</td>';
                        $html.='</tr>';
                        $html.='<tr style="height:300px;">';
                          $html.='<td style="text-align:center;font-size:30px;font-weight: 800;padding-top: 10%;">'.$zanguser['beimian'].'</td>';
                        $html.='</tr>';
                      $html.='</tbody>';
                    $html.='</table>';
                  $html.='</td>';
                $html.='</tr>';
              $html.='</tbody>';
            $html.='</table>';
            $html.='</div>';
            $html.=' </div>';
            $html.='<div style="margin:0 auto;width:100px;padding-top:20px;">';
                $html.='<button type="button" class="contc " style="text-align:center;" onclick="show_print_xd_f()">打印</button>';
            $html.=' </div>';
        }else if($arra['type'] == '16'){//杂费收款项目、金额—打印票据
            $cem=self::field('long_title,contacts_id')->where(['id'=>$arra['id']])->find();
            $contacts=self::table('contacts')->field('name')->where(['id'=>$cem['contacts_id']])->find();
            $zanguser=self::table('bw_info')->where(['id'=>$arra['zanguser']])->find();
            $bw_zf=self::table('bw_zf')->where(['dead_id'=>$zanguser['dead_id']])->find();
            $html.='<div  id="ele13">';
                $html.='<div class="whtana" style="width: 1017px;padding:40px 40px 0 40px;">';
                $html.='<table class="table table-bordered" style="margin:0px auto;">';
                 $html.=' <tbody>';
                    $html.='<tr>';
                      $html.='<td colspan="8" style="text-align:center;font-size:30px;font-weight: 800;color:#000000;">杂费计算单 </td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td colspan="8" style="font-size:25px;font-weight: 700;color:#000000;"><p>购墓着名称：'.$contacts['name'].'</p><p>墓位位置：'.$cem['long_title'].'</p><p>'.date('Y',time()).'&nbsp;&nbsp;年&nbsp;&nbsp;'.date('m',time()).'&nbsp;&nbsp;月&nbsp;&nbsp;'.date('d',time()).'&nbsp;&nbsp;日</p></td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td style="width:600px;text-align:center;font-size:30px;font-weight: 800;">'.$zanguser['beimian'].'</td>';
                      $html.='<td style="width:10px;">从<br>左<br>至<br>右<br>纵<br>向<br>填<br>写</td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td style="width:600px;text-align:center;font-size:30px;font-weight: 800;">'.$zanguser['kouli'].'</td>';
                      $html.='<td style="width:10px;">从<br>左<br>至<br>右<br>纵<br>向<br>填<br>写</td>';
                    $html.='</tr>';
                    $html.='<tr>';
                      $html.='<td colspan="2" style="text-align:center;font-size:30px;font-weight: 800;">叩<br>立</td>';
                    $html.='</tr>';
                    $html.='<tr >';
                      $html.='<td  colspan="2" >';
                      $html.='<table class="table table-bordered" style="margin:0px auto;">';
                         $html.=' <tbody>';
                            $html.='<tr>';
                              $html.='<td colspan="3" style="text-align:center;font-size:20px;font-weight: 800;">杂费项目备注</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:200px;">安葬性质</td>';
                              if(!$dead || $dead<='1'){
                                $html.='<td style="width:200px;">首次</td>';
                              }else if($dead || $dead >'1'){
                                $html.='<td style="width:200px;">二次</td>';
                              }
                              $html.='<td style="width:200px;" >备注</td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">瓷像</td>';
                                $html.='<td style="width:200px;">'.$bw_zf['cx_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-bottom: none;"class="no-print"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">封门</td>';
                                $html.='<td style="width:200px;">'.$bw_zf['lb_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-top: none;border-bottom: none;"class="no-print"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">家族台阶</td>';
                              $html.='<td style="width:200px;">'.$bw_zf['tj_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-bottom: none;border-top: none;" class="no-print"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">墓穴装饰</td>';
                                $html.='<td style="width:200px;">'.$bw_zf['zs_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-top: none;border-bottom: none;"class="no-print"></td>';
                            $html.='</tr>';
                            $html.='<tr>';
                              $html.='<td style="width:100px;">不干胶碑文</td>';
                              $html.='<td style="width:200px;">'.$bw_zf['bzj_beizhu'].'</td>';
                              $html.='<td style="width:100px;border-top: none;" class="no-print"></td>';
                            $html.='</tr>';
                          $html.='</tbody>';
                        $html.='</table>';
                      $html.='</td>';
                    $html.='</tr>';
                  $html.='</tbody>';
                $html.='</table>';
                $html.='</div>';
            $html.=' </div>';
            $html.='<div style="margin:0 auto;width:100px;padding-top:20px;">';
                $html.='<button type="button" class="contc " style="text-align:center;" onclick="show_print_ctf()">打印</button>';
            $html.=' </div>';
        }
        return $html;
    }
    //PHP文本处理之中文汉字字符串转换为数组
    static public function ch2arr($str)
    {
        $length = mb_strlen($str, 'utf-8');
        $array = [];
        for ($i=0; $i<$length; $i++)  
            $array[] = mb_substr($str, $i, 1, 'utf-8');    
        return $array;
    }
    //数字转变成阿拉伯大写
    static public function numberToChinese($number)
    {
        $number = intval($number);
        $bit = array("零", "一", "二", "三", "四", "五", "六", "七", "八", "九", "十");
        //各位数
        if ($number <= 10) {
            return $bit[$number];
        }


        //十位数
        if($number < 100){
            $array = str_split($number);
            if($array[0] < 2){
                    return $bit[10].$bit[$array[1]];
            }else{
                if($array[1] == 0){
                    return $bit[$array[0]].$bit[10];
                }else{
                    return $bit[$array[0]].$bit[10].$bit[$array[1]];
                }
            }
        }

        //百位数
        if($number < 1000){
            $array = str_split($number);
            if($array[1] == 0 && $array[2] == 0){
                return $bit[$array[0]]."百";
            }elseif($array[1] == 0 && $array[2] != 0){
                return $bit[$array[0]]."百".$bit[$array[1]].$bit[$array[2]];
            }elseif($array[1] != 0 && $array[2] == 0 ){
                return $bit[$array[0]]."百".$bit[$array[1]].$bit[10];
            }else{
                return $bit[$array[0]]."百".$bit[$array[1]].$bit[10].$bit[$array[2]];
            }

        }
        //千位数
        if($number < 10000){
            $array = str_split($number);
            if($array[1] == 0 && $array[2] == 0 && $array[3] == 0){
                return $bit[$array[0]]."千";
            }elseif($array[1] == 0 && $array[2] != 0 && $array[3] != 0){
                return $bit[$array[0]]."千".$bit[$array[1]].$bit[$array[2]].$bit[10].$bit[$array[3]];
            }elseif($array[1] == 0 && $array[2] == 0 && $array[3] != 0){
                return $bit[$array[0]]."千".$bit[$array[1]].$bit[$array[3]];
            }elseif($array[1] == 0 && $array[2] != 0 && $array[3] == 0){
                return $bit[$array[0]]."千".$bit[$array[1]].$bit[$array[2]].$bit[10];
            }elseif($array[1] != 0 && $array[2] == 0 && $array[3] == 0){
                return $bit[$array[0]]."千".$bit[$array[1]]."百";
            }elseif($array[1] != 0 && $array[2] != 0 && $array[3] == 0){
                return $bit[$array[0]]."千".$bit[$array[1]]."百".$bit[$array[2]].$bit[10];
            }elseif($array[1] != 0 && $array[2] == 0 && $array[3] != 0){
                return $bit[$array[0]]."千".$bit[$array[1]]."百".$bit[$array[2]].$bit[$array[3]];
            }else{
                return $bit[$array[0]]."千".$bit[$array[1]]."百".$bit[$array[2]].$bit[10].$bit[$array[3]];
            }
        }

        return $number;
     }
    ////同期销售情况对比
    static public function select_ycount_list_time($arra){
        $html='';
        $vis1_1=self::table('visit_log')->field('id')->where('come_num=42 and transaction_status=1 and come_date>='.strtotime($arra['starttime1']).' and come_date<='.strtotime($arra['endtime1']))->count();//首次--去年
        $cem1_1=self::table('cem_info')->field('id')->where('status=44 and settime>='.strtotime($arra['starttime1']).' and settime<='.strtotime($arra['endtime1']))->count();//成交分数--去年
        $cem7_1=self::table('cem_info')->field('sum(money)')->where('status=44 and settime>='.strtotime($arra['starttime1']).' and settime<='.strtotime($arra['endtime1']))->select();//成交金额--去年
        $cem7_1_2=self::table('cem_info')->field('sum(price)')->where('status=44 and settime>='.strtotime($arra['starttime1']).' and settime<='.strtotime($arra['endtime1']))->select();//原价格--去年
        $vis1_2=self::table('visit_log')->field('id')->where('come_num=42 and transaction_status=1 and come_date>='.strtotime($arra['starttime2']).' and come_date<='.strtotime($arra['endtime2']))->count();//首次--本年
        $cem1_2=self::table('cem_info')->field('id')->where('status=44 and settime>='.strtotime($arra['starttime2']).' and settime<='.strtotime($arra['endtime2']))->count();//成交分数--本年
        $cem7_2=self::table('cem_info')->field('sum(money)')->where('status=44 and settime>='.strtotime($arra['starttime2']).' and settime<='.strtotime($arra['endtime2']))->select();//成交金额--本年
        $cem7_2_2=self::table('cem_info')->field('sum(price)')->where('status=44 and settime>='.strtotime($arra['starttime2']).' and settime<='.strtotime($arra['endtime2']))->select();//原价格--本年
        
        $html.='<tr class="trtr">';
            $html.='<td>1</td>';
            $html.='<td>应销售金额同期对比</td>';
            if($cem7_1_2[0]['sum(price)']){
                $cem7_1_2[0]['sum(price)']=$cem7_1_2[0]['sum(price)'];
            }else{
                $cem7_1_2[0]['sum(price)']=0;
            }
            if($cem7_2_2[0]['sum(price)']){
                $cem7_2_2[0]['sum(price)']=$cem7_2_2[0]['sum(price)'];
            }else{
                $cem7_2_2[0]['sum(price)']=0;
            }
            $html.='<td>'.$cem7_1_2[0]['sum(price)'].'</td>';
            $html.='<td>'.$cem7_2_2[0]['sum(price)'].'</td>';
            $sum1=$cem7_2_2[0]['sum(price)']-$cem7_1_2[0]['sum(price)'];
            $html.='<td>'.$sum1.'</td>';
            $sumcou1=$cem7_2_2[0]['sum(price)']/$cem7_1_2[0]['sum(price)'];
            $flv1=sprintf("%.4f",$sumcou1)*100;
            $html.='<td>'.$flv1.'</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>2</td>';
            $html.='<td>实际销售金额同期对比</td>';
            if($cem7_1[0]['sum(money)']){
                $cem7_1[0]['sum(money)']=$cem7_1[0]['sum(money)'];
            }else{
                $cem7_1[0]['sum(money)']=0;
            }
            if($cem7_2[0]['sum(money)']){
                $cem7_2[0]['sum(money)']=$cem7_2[0]['sum(money)'];
            }else{
                $cem7_2[0]['sum(money)']=0;
            }
            $html.='<td>'.$cem7_1[0]['sum(money)'].'</td>';
            $html.='<td>'.$cem7_2[0]['sum(money)'].'</td>';
            $sum2=$cem7_2[0]['sum(money)']-$cem7_1[0]['sum(money)'];
            $html.='<td>'.$sum2.'</td>';
            $sumcou2=$cem7_2[0]['sum(money)']/$cem7_1[0]['sum(money)'];
            $flv2=sprintf("%.4f",$sumcou2)*100;
            $html.='<td>'.$flv2.'</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>3</td>';
            $html.='<td>成交率同期对比</td>';
            if($cem1_1 && $vis1_1){
                $sumcou3=$cem1_1/$vis1_1;
            }else{
                $sumcou3=0;
            }
            $flv3=sprintf("%.4f",$sumcou3)*100;
            if($cem1_2&&$vis1_2){
                $sumcou4=$cem1_2/$vis1_2;
            }else{
                $sumcou4=0;
            }
            $flv4=sprintf("%.4f",$sumcou4)*100;
            $html.='<td>'.$sumcou3.'</td>';
            $html.='<td>'.$sumcou4.'</td>';
            $sum3=$sumcou4-$sumcou3;
            $html.='<td>'.$sum3.'</td>';
            $sumcou5=$sumcou4/$sumcou3;
            $flv5=sprintf("%.4f",$sumcou5)*100;
            $html.='<td>'.$flv5.'</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>4</td>';
            $html.='<td>折扣率同期对比</td>';
            $sumcou6=$cem7_1[0]['sum(money)']/$cem7_1_2[0]['sum(price)'];
            $flv6=sprintf("%.4f",$sumcou6)*100;
            $sumcou7=$cem7_2[0]['sum(money)']/$cem7_2_2[0]['sum(price)'];
            $flv7=sprintf("%.4f",$sumcou4)*100;
            $html.='<td>'.$flv6.'</td>';
            $html.='<td>'.$flv7.'</td>';
            $sum5=$flv7-$flv6;
            $html.='<td>'.$sum5.'</td>';
            $sumcou7=$flv7/$flv6;
            $flv8=sprintf("%.4f",$sumcou7)*100;
            $html.='<td>'.$flv8.'</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>5</td>';
            $html.='<td>平均销售价格同期对比</td>';
            if($cem7_1[0]['sum(money)'] && $cem1_1){
                $sumcou9=$cem7_1[0]['sum(money)']/$cem1_1;
            }else {
                $sumcou9=0;
            }
            $flv9=sprintf("%.4f",$sumcou9)*100;
            if($cem7_2[0]['sum(money)'] && $cem1_2){
                $sumcou10=$cem7_2[0]['sum(money)']/$cem1_2;
            }else {
                $sumcou10=0;
            }
            $flv10=sprintf("%.4f",$sumcou10)*100;
            $sumcou11=$flv10-$flv9;
            $sumcou12=$flv10/$flv9;
            $flv11=sprintf("%.4f",$sumcou12)*100;
            $html.='<td>'.$sumcou9.'</td>';
            $html.='<td>'.$flv10.'</td>';
            $html.='<td>'.$sumcou11.'</td>';
            $html.='<td>'.$flv11.'</td>';
        $html.='</tr>';
        return $html;
    }
    //客服代表销售情况表
    static public function select_sellcount_list_time($arra){
        $arr=self::table('staff')->select();
        $html='';
        foreach ($arr as $key => $value) {
            $vis1_1=self::table('visit_log')->field('id')->where('receiver='.$value['id'].' and come_num=42 and transaction_status=1 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->count();//首次--本月
            $cem1_1=self::table('cem_info')->field('id')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->count();//成交分数--本月
            $cem7_1=self::table('cem_info')->field('sum(money)')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->select();//成交金额--本月
            $cem7_2=self::table('cem_info')->field('sum(price)')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->select();//原价格
            $html.='<tr class="trtr">';
              $html.='<td>'.$value['id'].'</td>';
              $html.='<td>'.$value['nickname'].'</td>';
              $html.='<td>'.$vis1_1.'</td>';
              $html.='<td>'.$cem1_1.'</td>';
              $sumcou1=$cem1_1/$vis1_1;
              $flv1=sprintf("%.4f",$sumcou1)*100;
              $html.='<td>'.$flv1.'</td>';
              if($cem7_1[0]['sum(money)']< '30000'){
                $html.='<td>3万以下</td>';
              }else if($cem7_1[0]['sum(money)'] >= '30000' && $cem7_1[0]['sum(money)']< '60000'){
                $html.='<td>6万以下</td>';
              }else if($cem7_1[0]['sum(money)'] >= '60000'){
                $html.='<td>6万以上</td>';
              }
              if($cem7_2[0]['sum(price)']){
                $html.='<td>'.$cem7_2[0]['sum(price)'].'</td>';
              }else{
                $html.='<td>0</td>';
              }
              if($cem7_1[0]['sum(money)']){
                $html.='<td>'.$cem7_1[0]['sum(money)'].'</td>';
              }else{
                $html.='<td>0</td>';
              }
              $sum1=$sum1+$vis1_1;
              $sum2=$sum2+$cem1_1;
              $sum3=$sum3+$flv1;
              $sum4=$sum4+$cem7_1[0]['sum(money)'];
              $sum5=$sum5+$cem7_2[0]['sum(price)'];
            $html.='</tr>';
        }
        $html.='<tr class="trtr">';
        $html.='<td>统计</td>';
        $html.='<td>合计</td>';
        $html.='<td>'.$sum1.'</td>';
        $html.='<td>'.$sum2.'</td>';
        $html.='<td>'.$sum3.'</td>';
        $html.='<td>--</td>';
        $html.='<td>'.$sum5.'</td>';
        $html.='<td>'.$sum4.'</td>';
        $html.='</tr>';
        return $html;
    }
    // //客服代表月销售情况对比
    static public function select_mai_list_time($arra){
        $arr=self::table('staff')->select();
        $html='';
        foreach ($arr as $key => $value) {
            $vis1_1=self::table('visit_log')->field('id')->where('receiver='.$value['id'].' and come_num=42 and transaction_status=1 and come_date>='.strtotime($arra['starttime1']).' and come_date<='.strtotime($arra['endtime1']))->count();//首次--本月
            $cem1_1=self::table('cem_info')->field('id')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime1']).' and settime<='.strtotime($arra['endtime1']))->count();//成交分数--本月
            $cem7_1=self::table('cem_info')->field('sum(money)')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime1']).' and settime<='.strtotime($arra['endtime1']))->select();//成交金额--本月
            $vis1_2=self::table('visit_log')->field('id')->where('receiver='.$value['id'].' and come_num=42 and transaction_status=1 and come_date>='.strtotime($arra['starttime2']).' and come_date<='.strtotime($arra['endtime2']))->count();//首次--本月
            $cem1_2=self::table('cem_info')->field('id')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime2']).' and settime<='.strtotime($arra['endtime2']))->count();//成交分数--本月
            $cem7_2=self::table('cem_info')->field('sum(money)')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime2']).' and settime<='.strtotime($arra['endtime2']))->select();//成交金额--本月
            $html.='<tr class="trtr">';
              $html.='<td>'.$value['id'].'</td>';
              $html.='<td>'.$value['nickname'].'</td>';
              $html.='<td>'.$vis1_1.'</td>';
              $html.='<td>'.$vis1_2.'</td>';
              $vis3=$vis1_1-$vis1_2;
              $html.='<td>'.$vis3.'</td>';
              $html.='<td>'.$cem1_1.'</td>';
              $html.='<td>'.$cem1_2.'</td>';
              $cem3=$cem1_1-$cem1_2;
              $html.='<td>'.$cem3.'</td>';
              if($cem7_1[0]['sum(money)']){
                $html.='<td>'.$cem7_1[0]['sum(money)'].'</td>';
              }else{
                $html.='<td>0</td>';
              }
              if($cem7_2[0]['sum(money)']){
                $html.='<td>'.$cem7_2[0]['sum(money)'].'</td>';
              }else{
                $html.='<td>0</td>';
              }
              $cem7_3=$cem7_1[0]['sum(money)']-$cem7_2[0]['sum(money)'];
              $html.='<td>'.$cem7_3.'</td>';
              $sumcou1=$cem1_1/$vis1_1;
              $flv1=sprintf("%.4f",$sumcou1)*100;
              $html.='<td>'.$flv1.'</td>';
              $sumcou2=$cem1_2/$vis1_2;
              $flv2=sprintf("%.4f",$sumcou2)*100;
              $html.='<td>'.$flv2.'</td>';
              $flv3=$flv1-$flv2;
              $html.='<td>'.$flv3.'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //墓位折扣
    static public function select_zlist_time($arra){
        $html='';
        if($arra['starttime'] !='' && $arra['endtime'] !=''){
            $arr=self::field('long_title,price,money,s_staff_id,s_time,s_lv')->where('cem_id='.$arra['cem_id'].' and s_sta=2 and s_time>='.strtotime($arra['starttime']).' and s_time<='.strtotime($arra['endtime']))->select();
            foreach ($arr as $key => $value) {
                $staff=self::table('staff')->where(['id'=>$value['s_staff_id']])->find();
                $html.='<tr class="trtr">';
                  $html.='<td>'.$staff['id'].'</td>';
                  $html.='<td>'.$staff['nickname'].'</td>';
                  $html.='<td>'.$value['long_title'].'</td>';
                  $html.='<td>'.$value['price'].'</td>';
                  $html.='<td>'.$value['money'].'</td>';
                  $html.='<td>'.$value['s_lv'].'</td>';
                  $html.='<td>'.date("Y-m-d",$value['s_time']).'</td>';
                $html.='</tr>';
            }
        }else if($arra['starttime']!='' && $arra['endtime']==''){
            $arr=self::field('long_title,price,money,s_staff_id,s_time,s_lv')->where('cem_id='.$arra['cem_id'].' and s_sta=2 and s_time>='.strtotime($arra['starttime']))->select();
            foreach ($arr as $key => $value) {
                $staff=self::table('staff')->where(['id'=>$value['s_staff_id']])->find();
                $html.='<tr class="trtr">';
                  $html.='<td>'.$staff['id'].'</td>';
                  $html.='<td>'.$staff['nickname'].'</td>';
                  $html.='<td>'.$value['long_title'].'</td>';
                  $html.='<td>'.$value['price'].'</td>';
                  $html.='<td>'.$value['money'].'</td>';
                  $html.='<td>'.$value['s_lv'].'</td>';
                  $html.='<td>'.date("Y-m-d",$value['s_time']).'</td>';
                $html.='</tr>';
            }
        }else if($arra['starttime']=='' && $arra['endtime']!=''){
            $arr=self::field('long_title,price,money,s_staff_id,s_time,s_lv')->where('cem_id='.$arra['cem_id'].' and s_sta=2 and s_time<='.strtotime($arra['endtime']))->select();
            foreach ($arr as $key => $value) {
                $staff=self::table('staff')->where(['id'=>$value['s_staff_id']])->find();
                $html.='<tr class="trtr">';
                  $html.='<td>'.$staff['id'].'</td>';
                  $html.='<td>'.$staff['nickname'].'</td>';
                  $html.='<td>'.$value['long_title'].'</td>';
                  $html.='<td>'.$value['price'].'</td>';
                  $html.='<td>'.$value['money'].'</td>';
                  $html.='<td>'.$value['s_lv'].'</td>';
                  $html.='<td>'.date("Y-m-d",$value['s_time']).'</td>';
                $html.='</tr>';
            }
        }
        return $html;
    }

    //墓位折扣
    static public function select_zlist($arra){
        $arr=self::field('long_title,price,money,s_staff_id,s_time,s_lv')->where(['cem_id'=>$arra['cem_id'],'s_sta'=>2])->select();
        $html='';
        foreach ($arr as $key => $value) {
            $staff=self::table('staff')->where(['id'=>$value['s_staff_id']])->find();
            $html.='<tr class="trtr">';
              $html.='<td>'.$staff['id'].'</td>';
              $html.='<td>'.$staff['nickname'].'</td>';
              $html.='<td>'.$value['long_title'].'</td>';
              $html.='<td>'.$value['price'].'</td>';
              $html.='<td>'.$value['money'].'</td>';
              $html.='<td>'.$value['s_lv'].'</td>';
              $html.='<td>'.date("Y-m-d",$value['s_time']).'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //客服代表月销售统计
    static public function show_all_dailm($arra){
        $arr=self::table('staff')->select();
        $html='';
        foreach ($arr as $key => $value) {
            $vis1=self::table('visit_log')->field('id')->where('receiver='.$value['id'].' and come_num=42 and transaction_status=1 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->count();//首次
            $cem1=self::table('cem_info')->field('id')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->count();//成交分数
            $cem2=self::table('cem_info')->field('id')->where('salesman='.$value['id'].' and status=39 and reserve_date>='.strtotime($arra['starttime']).' and reserve_date<='.strtotime($arra['endtime']))->count();//预订分数
            $cem7=self::table('cem_info')->field('sum(money)')->where('salesman='.$value['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->select();//成交金额
            $html.='<tr class="trtr">';
              $html.='<td>'.$value['id'].'</td>';
              $html.='<td>'.$value['nickname'].'</td>';
              $html.='<td>'.$vis1.'</td>';
              $html.='<td>'.$cem1.'</td>';
              $html.='<td>'.$cem2.'</td>';
              $sumcou=$cem1/$vis1;
              $flv=sprintf("%.4f",$sumcou)*100;
              $html.='<td>'.$flv.'</td>';
              if($cem7[0]['sum(money)']){
                $html.='<td>'.$cem7[0]['sum(money)'].'</td>';
              }else{
                $html.='<td>0</td>';
              }
            $html.='</tr>';
        }
        return $html;
    }
    //客服代表日销售统计
    static public function show_all_daily($arra){
        $arr=self::table('staff')->select();
        $html='';
        foreach ($arr as $key => $value) {

            $vis1=self::table('visit_log')->field('id')->where(['receiver'=>$value['id'],'transaction_status'=>1,'come_num'=>42,'come_date'=>strtotime($arra['starttime'])])->count();//首次
            $vis2=self::table('visit_log')->field('id')->where(['receiver'=>$value['id'],'transaction_status'=>1,'come_num'=>43,'come_date'=>strtotime($arra['starttime'])])->count();//多次
            $cem1=self::table('cem_info')->field('id')->where(['salesman'=>$value['id'],'status'=>44,'settime'=>strtotime($arra['starttime'])])->count();//成交分数
            $cem2=self::table('cem_info')->field('sum(reserve_money)')->where(['salesman'=>$value['id'],'status'=>39,'reserve_date'=>strtotime($arra['starttime'])])->select();//预订金额
            $cem3=self::table('cem_info')->field('id')->where(['salesman'=>$value['id'],'status'=>44,'flg'=>3,'settime'=>strtotime($arra['starttime'])])->count();//补交全款分数
            $cem4=self::table('cem_info')->field('id')->where(['salesman'=>$value['id'],'status'=>44,'sta'=>2,'reserve_date'=>strtotime($arra['starttime'])])->count();//退牧
            $cem5=self::table('cem_info')->field('id')->where(['salesman'=>$value['id'],'status'=>44,'sta'=>4,'settime'=>strtotime($arra['starttime'])])->count();//补交全款分数
            $cem6=$cem4+$cem5;
            $cem7=self::table('cem_info')->field('sum(money)')->where(['status'=>44,'settime'=>strtotime($arra['starttime'])])->select();//成交金额
            $html.='<tr class="trtr">';
              $html.='<td>'.$value['id'].'</td>';
              $html.='<td>'.$value['nickname'].'</td>';
              $html.='<td>'.$vis1.'</td>';
              $html.='<td>'.$vis2.'</td>';
              $html.='<td>'.$cem1.'</td>';
              if($cem2[0]['sum(reserve_money)']){
                $html.='<td>'.$cem2[0]['sum(reserve_money)'].'</td>';
              }else{
                $html.='<td>0</td>';
              }
              $html.='<td>'.$cem3.'</td>';
              $html.='<td>'.$cem6.'</td>';
              $sumcou=$cem1/$vis1;
              $flv=sprintf("%.4f",$sumcou)*100;
              $html.='<td>'.$flv.'</td>';
              $html.='<td>'.$flv.'</td>';
              if($cem7[0]['sum(money)']){
                $html.='<td>'.$cem7[0]['sum(money)'].'</td>';
              }else{
                $html.='<td>0</td>';
              }
            $html.='</tr>';
        }
        return $html;
    }
    //各年龄段  统计
    static public function show_all_age($arra){
        $arr1=self::table('contacts')->field('id')->where('age <= 30')->select();
        $arr2=self::table('contacts')->field('id')->where('age > 30 and age <= 40')->select();
        $arr3=self::table('contacts')->field('id')->where('age > 40 and age <= 50')->select();
        $arr4=self::table('contacts')->field('id')->where('age > 50 and age <= 60')->select();
        $arr5=self::table('contacts')->field('id')->where('age > 60')->select();
        $idstr1='';
        $idstr2='';
        $idstr3='';
        $idstr4='';
        $idstr5='';
        foreach ($arr1 as $key => $value) {
            if($key == '0'){
                $idstr1.=$value['id'];
            }else{
                $idstr1.=",".$value['id'];
            }
        }
        foreach ($arr2 as $key => $value) {
            if($key == '0'){
                $idstr2.=$value['id'];
            }else{
                $idstr2.=",".$value['id'];
            }
        }
        foreach ($arr3 as $key => $value) {
            if($key == '0'){
                $idstr3.=$value['id'];
            }else{
                $idstr3.=",".$value['id'];
            }
        }
        foreach ($arr4 as $key => $value) {
            if($key == '0'){
                $idstr4.=$value['id'];
            }else{
                $idstr4.=",".$value['id'];
            }
        }
        foreach ($arr5 as $key => $value) {
            if($key == '0'){
                $idstr5.=$value['id'];
            }else{
                $idstr5.=",".$value['id'];
            }
        }
        $cemcount1=self::field('sum(id)')->where('status=44 and contacts_id in ('.$idstr1.')')->select();
        $cemmoney1=self::field('sum(money)')->where('status=44 and contacts_id in ('.$idstr1.')')->select();
        $cemcount2=self::field('sum(id)')->where('status=44 and contacts_id in ('.$idstr2.')')->select();
        $cemmoney2=self::field('sum(money)')->where('status=44 and contacts_id in ('.$idstr2.')')->select();
        $cemcount3=self::field('sum(id)')->where('status=44 and contacts_id in ('.$idstr3.')')->select();
        $cemmoney3=self::field('sum(money)')->where('status=44 and contacts_id in ('.$idstr3.')')->select();
        $cemcount4=self::field('sum(id)')->where('status=44 and contacts_id in ('.$idstr4.')')->select();
        $cemmoney4=self::field('sum(money)')->where('status=44 and contacts_id in ('.$idstr4.')')->select();
        $cemcount5=self::field('sum(id)')->where('status=44 and contacts_id in ('.$idstr5.')')->select();
        $cemmoney5=self::field('sum(money)')->where('status=44 and contacts_id in ('.$idstr5.')')->select();
        $html='';
        $html.='<tr class="trtr">';
          $html.='<td>30岁以下（含30）</td>';
          if($cemcount1[0]['sum(id)']){
            $html.='<td>'.$cemcount1[0]['sum(id)'].'</td>';
          }else{
            $html.='<td>0</td>';
          }
          if($cemmoney1[0]['sum(money)']){
            $html.='<td>'.$cemmoney1[0]['sum(money)'].'</td>';
          }else{
            $html.='<td>0</td>';    
          }
        $html.='</tr>';
        $html.='<tr class="trtr">';
          $html.='<td>30岁到40岁（含40）</td>';
          if($cemcount2[0]['sum(id)']){
            $html.='<td>'.$cemcount2[0]['sum(id)'].'</td>';
          }else{
            $html.='<td>0</td>';
          }
          if($cemmoney2[0]['sum(money)']){
            $html.='<td>'.$cemmoney2[0]['sum(money)'].'</td>';
          }else{
            $html.='<td>0</td>';    
          }
        $html.='</tr>';
        $html.='<tr class="trtr">';
          $html.='<td>40岁到50岁（含50）</td>';
          if($cemcount3[0]['sum(id)']){
            $html.='<td>'.$cemcount3[0]['sum(id)'].'</td>';
          }else{
            $html.='<td>0</td>';
          }
          if($cemmoney3[0]['sum(money)']){
            $html.='<td>'.$cemmoney3[0]['sum(money)'].'</td>';
          }else{
            $html.='<td>0</td>';    
          }
        $html.='</tr>';
        $html.='<tr class="trtr">';
          $html.='<td>50岁到60岁（含60）</td>';
          if($cemcount4[0]['sum(id)']){
            $html.='<td>'.$cemcount4[0]['sum(id)'].'</td>';
          }else{
            $html.='<td>0</td>';
          }
          if($cemmoney4[0]['sum(money)']){
            $html.='<td>'.$cemmoney4[0]['sum(money)'].'</td>';
          }else{
            $html.='<td>0</td>';    
          }
        $html.='</tr>';
        $html.='<tr class="trtr">';
          $html.='<td>60岁以上</td>';
          if($cemcount5[0]['sum(id)']){
            $html.='<td>'.$cemcount5[0]['sum(id)'].'</td>';
          }else{
            $html.='<td>0</td>';
          }
          if($cemmoney5[0]['sum(money)']){
            $html.='<td>'.$cemmoney5[0]['sum(money)'].'</td>';
          }else{
            $html.='<td>0</td>';    
          }
        $html.='</tr>';
        return $html;
    }
    //墓位杂费单据管理--全部信息
    static public function select_show_zf_all(){
        $arr=self::table('bw_zf')->select();
        $html='';
        $staff=self::table('staff')->column('*', 'id');
        foreach ($arr as $key => $v) {
            $cem=self::field('id,long_title,status,endtime,contacts_id')->where(['id'=>$v['cem_info_id']])->find();
            $contacts=self::table('contacts')->field('name')->where(['id'=>$cem['contacts_id']])->find();
            $html.='<tr class="trtr" style="cursor:pointer">';
              $html.='<td>'.$cem['long_title'].'</td>';
              $html.='<td>'.$contacts['name'].'</td>';
              $html.='<td>'.$v['sum'].'</td>';
              $html.='<td>';
              if($v['zk_sum'] != ''){
                $html.='刻字-';
              }
              if($v['cx_sum'] !=''){
                $html.='-瓷像-';
              } 
              if($v['lb_sum'] !=''){
                $html.='-封门立碑-';
              }
              if($v['tj_sum'] !=''){
                $html.='-家族台阶-';
              }
              if($v['zs_sum'] !=''){
                $html.='-墓穴装饰-';
              } 
              if($v['bzj_sum'] !=''){
                $html.='-不干胶-';
              } 
              $html.='</td>';
              $html.='<td>'.$v['dset'].'</td>';
              $html.='<td>'.date('Y-m-d',$v['dtime']).'</td>';
              $html.='<td>'.$staff[$v['staff_id']]['nickname'].'</td> ';
              if($cem['status'] == '38'){
                $html.='<td>空闲</td>';
              }else if($cem['status'] == '39'){
                $html.='<td>已预订</td>';
              }else if($cem['status'] == '41'){
                $html.='<td>已付款</td>';
              }else if($cem['status'] == '44'){
                $html.='<td>已下葬</td>';
              }
              if($cem['endtime'] >= time()){
                $html.='<td>未过期</td>';
              }else{    
                $html.='<td>已过期</td>';
              }
              if($v['sta'] == '2'){
                $html.='<td>已付款</td>';
              }else{
                $html.='<td>未付款</td>';
              }
              $html.='<td>'.$v['id'].'</td>';
              $html.='<td>'.$v['z_beizhu'].'-'.$v['cx_beizhu'].'-'.$v['lb_beizhu'].'-'.$v['tj_beizhu'].'-'.$v['zs_beizhu'].'-'.$v['bzj_beizhu'].'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //墓位杂费单据管理
    static public function select_show_one($arra){
        if($arra['cem_id'] != 0 && $arra['cem_area_id'] != 0 && $arra['cem_row_id'] != 0){
            $arr=self::table('bw_zf')->where(['cem_id'=>$arra['cem_id'],'cem_area_id'=>$arra['cem_area_id'],'cem_row_id'=>$arra['cem_row_id']])->select();
        }else if($arra['cem_id'] != 0 && $arra['cem_area_id'] != 0 && $arra['cem_row_id'] == 0){
            $arr=self::table('bw_zf')->where(['cem_id'=>$arra['cem_id'],'cem_area_id'=>$arra['cem_area_id']])->select();
        }else if($arra['cem_id'] != 0 && $arra['cem_area_id'] == 0 && $arra['cem_row_id'] == 0){
            $arr=self::table('bw_zf')->where(['cem_id'=>$arra['cem_id']])->select();
        }
        $html='';
        $staff=self::table('staff')->column('*', 'id');
        foreach ($arr as $key => $v) {
            $cem=self::field('id,long_title,status,endtime,contacts_id')->where(['id'=>$v['cem_info_id']])->find();
            $contacts=self::table('contacts')->field('name')->where(['id'=>$cem['contacts_id']])->find();
            $html.='<tr class="trtr" style="cursor:pointer">';
              $html.='<td>'.$cem['long_title'].'</td>';
              $html.='<td>'.$contacts['name'].'</td>';
              $html.='<td>'.$v['sum'].'</td>';
              $html.='<td>';
              if($v['zk_sum'] != ''){
                $html.='刻字-';
              }
              if($v['cx_sum'] !=''){
                $html.='-瓷像-';
              } 
              if($v['lb_sum'] !=''){
                $html.='-封门立碑-';
              }
              if($v['tj_sum'] !=''){
                $html.='-家族台阶-';
              }
              if($v['zs_sum'] !=''){
                $html.='-墓穴装饰-';
              } 
              if($v['bzj_sum'] !=''){
                $html.='-不干胶-';
              } 
              $html.='</td>';
              $html.='<td>'.$v['dset'].'</td>';
              $html.='<td>'.date('Y-m-d',$v['dtime']).'</td>';
              $html.='<td>'.$staff[$v['staff_id']]['nickname'].'</td> ';
              if($cem['status'] == '38'){
                $html.='<td>空闲</td>';
              }else if($cem['status'] == '39'){
                $html.='<td>已预订</td>';
              }else if($cem['status'] == '41'){
                $html.='<td>已付款</td>';
              }else if($cem['status'] == '44'){
                $html.='<td>已下葬</td>';
              }
              if($cem['endtime'] >= time()){
                $html.='<td>未过期</td>';
              }else{    
                $html.='<td>已过期</td>';
              }
              if($v['sta'] == '2'){
                $html.='<td>已付款</td>';
              }else{
                $html.='<td>未付款</td>';
              }
              $html.='<td>'.$v['id'].'</td>';
              $html.='<td>'.$v['z_beizhu'].'-'.$v['cx_beizhu'].'-'.$v['lb_beizhu'].'-'.$v['tj_beizhu'].'-'.$v['zs_beizhu'].'-'.$v['bzj_beizhu'].'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //故者落葬信息
    static public function select_lz_list_all($arra){
        $arr=self::table('dead')->select();
        $html='';
        foreach ($arr as $key => $value) {
            $cem=self::field('long_title,znum,beizhu')->where(['id'=>$value['cem_info_id']])->find();
            $html.='<tr class="trtr">';
                $html.='<td>'.$cem['znum'].'</td>';
                $html.='<td>'.$cem['long_title'].'</td>';
                $html.='<td>已下葬</td>';
                $html.='<td>'.$value['dead_name'].'</td>';
                if($value['sex'] == '2'){
                    $html.='<td>男</td>';
                }else if($value['sex'] == '3'){
                    $html.='<td>女</td>';
                }
                $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                if($value['type'] == '2'){
                    $html.='<td>已落葬</td>';
                }else{
                    $html.='<td>未落葬</td>';
                }
                $html.='<td>'.$cem['beizhu'].'</td>  ';              
            $html.='</tr>';
        }
        return $html;
    }
    //故者落葬信息
    static public function select_lz_list($arra){
        $arr=self::table('dead')->where(['cem_id'=>$arra['cem_id'],'cem_area_id'=>$arra['cem_area_id'],'cem_row_id'=>$arra['cem_row_id']])->select();
        $html='';
        foreach ($arr as $key => $value) {
            $cem=self::field('long_title,znum,beizhu')->where(['id'=>$value['cem_info_id']])->find();
            $html.='<tr class="trtr">';
                $html.='<td>'.$cem['znum'].'</td>';
                $html.='<td>'.$cem['long_title'].'</td>';
                $html.='<td>已下葬</td>';
                $html.='<td>'.$value['dead_name'].'</td>';
                if($value['sex'] == '2'){
                    $html.='<td>男</td>';
                }else if($value['sex'] == '3'){
                    $html.='<td>女</td>';
                }
                $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                if($value['type'] == '2'){
                    $html.='<td>已落葬</td>';
                }else{
                    $html.='<td>未落葬</td>';
                }
                $html.='<td>'.$cem['beizhu'].'</td>  ';              
            $html.='</tr>';
        }
        return $html;
    }
     //安葬日期提醒
    static public function select_azset_list_all($arra){
        $arr=self::table('dead')->select();
        $html='';
        foreach ($arr as $key => $value) {
            $cem=self::field('long_title,znum,beizhu')->where(['id'=>$value['cem_info_id']])->find();
            $html.='<tr class="trtr">';
                $html.='<td>'.$cem['long_title'].'</td>';
                $html.='<td>'.$value['dead_name'].'</td>';
                if($value['sta'] == '3'){
                    $html.='<td>首次</td>';
                }else if($value['sta'] == '2'){
                    $html.='<td>二次</td>';
                }
                $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                $t = $value['gltime']+3600*8;//这里和标准时间相差8小时需要补足
                $tget = $t+3600*24*2;//比如5天前的时间
                $html.='<td>'.date('Y-m-d',$tget).'</td>';              
            $html.='</tr>';
        }
        return $html;
    }
    //安葬日期提醒
    static public function select_azset_list($arra){
        $arr=self::table('dead')->where('cem_id='.$arra['cem_id'].' and cem_area_id='.$arra['cem_area_id'].' and cem_row_id='.$arra['cem_row_id'].' and gltime='.strtotime($arra['starttime']))->select();
        $html='';
        foreach ($arr as $key => $value) {
            $cem=self::field('long_title,znum,beizhu')->where(['id'=>$value['cem_info_id']])->find();
            $html.='<tr class="trtr">';
                $html.='<td>'.$cem['long_title'].'</td>';
                $html.='<td>'.$value['dead_name'].'</td>';
                if($value['sta'] == '3'){
                    $html.='<td>首次</td>';
                }else if($value['sta'] == '2'){
                    $html.='<td>二次</td>';
                }
                $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                $t = $value['gltime']+3600*8;//这里和标准时间相差8小时需要补足
                $tget = $t+3600*24*2;//比如5天前的时间
                $html.='<td>'.date('Y-m-d',$tget).'</td>';                
            $html.='</tr>';
        }
        return $html;
    }
    //故者落葬信息--全部确认信息
    static public function select_toset_list_all($arra,$type){
        $arr=self::table('dead')->where($arra)->select();
        $count=self::table('dead')->where($arra)->count();
        $tpl = self::table('tpl')->where(['type'=>4])->field('id,title')->column('*', 'id');
        $staff = self::table('staff')->field('id,nickname')->column('*', 'id');
        $html='';
        $t = time()+3600*8;//这里和标准时间相差8小时需要补足
        $tget = $t+3600*24*$_POST['today'];//比如5天前的时间
        foreach ($arr as $key => $value) {
            $cem=self::field('long_title,contacts_id,beizhu')->where(['id'=>$value['cem_info_id']])->find();
            $contacts=self::table('contacts')->where(['id'=>$cem['contacts_id']])->find();
            $html.='<tr class="trtr" row_id="'.$count.'">';
                if($type =='2'){//公历

                    $html.='<td>一会整</td>';
                }else if($type =='3'){//农历
                    $html.='<td>一会整</td>';
                }
                $html.='<td>'.date('Y-m-d',time()).'</td>';
                $html.='<td>'.$cem['long_title'].'</td>';
                $html.='<td>'.$value['dead_name'].'</td>';
                if($value['sex'] == '2'){
                    $html.='<td>男</td>';
                }else if($value['sex'] == '3'){ 
                    $html.='<td>女</td>';
                }
                if($type =='2'){
                    $html.='<td>'.date('Y-m-d',$value['gdtime']).'</td>';
                    $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                }else if($type =='3'){
                    $html.='<td>'.date('Y-m-d',$value['jrtime']).'</td>';
                    $html.='<td>'.$value['ndtime'].'</td>';
                }
                $html.='<td>'.$contacts['name'].'</td>  ';   
                if($contacts['sex'] == '2'){
                    $html.='<td>男</td>';
                }else if($contacts['sex'] == '3'){
                    $html.='<td>女</td>';
                }         
                $html.='<td>'.$tpl[$contacts['relationship']]['title'].'</td>  '; 
                $html.='<td>'.$contacts['postcode'].'</td>  '; 
                $html.='<td>'.$contacts['address'].'</td>  '; 
                $html.='<td>'.$contacts['tel'].'</td>  '; 
                $html.='<td>'.$contacts['phone'].'</td>  '; 
                $html.='<td>'.$staff[$value['salesman']]['nickname'].'</td>  ';
                if($value['lztype'] == '2'){
                    $html.='<td>只显示公历</td>  ';
                }else if($value['lztype'] == '3'){
                    $html.='<td>只显示农历</td>  ';
                }else if($value['lztype'] == '4'){
                    $html.='<td>都显示</td>  ';
                }else if($value['lztype'] == '5'){
                    $html.='<td>都不显示</td>  ';
                }
                $html.='<td>'.$cem['beizhu'].'</td>  ';
            $html.='</tr>';
        }
        return $html;
    }
    //故者落葬信息--确认
    static public function select_toset_list($arra){
        $arr=self::table('dead')->where(['cem_id'=>$arra['cem_id'],'cem_area_id'=>$arra['cem_area_id'],'cem_row_id'=>$arra['cem_row_id'],'type'=>3])->select();
        $html='';
        foreach ($arr as $key => $value) {
            $cem=self::field('long_title,znum,beizhu')->where(['id'=>$value['cem_info_id']])->find();
            $html.='<tr class="trtr" onclick="set('.$value['id'].')" style="cursor:pointer">';
                $html.='<td>'.$cem['znum'].'</td>';
                $html.='<td>'.$cem['long_title'].'</td>';
                $html.='<td>已下葬</td>';
                $html.='<td>'.$value['dead_name'].'</td>';
                if($value['sex'] == '2'){
                    $html.='<td>男</td>';
                }else if($value['sex'] == '3'){
                    $html.='<td>女</td>';
                }
                $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                if($value['type'] == '2'){
                    $html.='<td>已落葬</td>';
                }else{
                    $html.='<td>未落葬</td>';
                }
                $html.='<td>'.$cem['beizhu'].'</td>  ';              
            $html.='</tr>';
        }
        return $html;
    }
    //故者落幕信息确认
    static public function tomb_toset_html($info){
        $arr=self::table('dead')->field('id,dead_name,gltime,cem_info_id')->where(['id'=>$info['id']])->find();
        $cem=self::field('long_title')->where(['id'=>$arr['cem_info_id']])->find();
        $html='';
        $html.='<div class="whtan" style="display:block;width: 471px;height: 348px;    margin-left: -235px;margin-top: -173px;">';
            $html.='<div class="whtane">';
               $html.=' <div class="whtaneri" style="width: 446px;">';
                    $html.='<form>';
                       $html.='<fieldset>';
                           $html.=' <legend>信息确认</legend>';
                           $html.='<div class="whtanyw">';
                                $html.='<p>【墓位全称】：</p>';
                               $html.=' <div>'.$cem['long_title'].'</div>';
                            $html.='</div>';
                            $html.='<div class="whtanyw">';
                                $html.='<p>【故者姓名】：</p>';
                               $html.='<div>'.$arr['dead_name'].'</div>';
                            $html.='</div>';
                            $html.='<div class="whtanyw">';
                               $html.=' <p>【原落葬日期】：</p>';
                                $html.='<div>'.date('Y-m-d',$arr['gltime']).'</div>';/*staff*/
                            $html.='</div>';
                            $html.='<div class="whtanyw">';
                               $html.=' <p>【实际落葬日期】：</p>';
                                $html.='<div id="sjtime">'.date('Y-m-d',time()).'</div>';/*staff*/
                            $html.='</div>';
                            $html.='<div class="whtanbc">';
                                $html.=' <button class="whtanbca" type="button" onclick="setuser('.$arr['id'].')" style="margin-left: 106px;">确定</button>';
                                $html.='  <button class="whtanbcb" type="button" onclick="closeuser()">取消</button>';
                            $html.='</div>';
                        $html.='</fieldset>';
                   $html.=' </form>';
               $html.=' </div>';
           $html.=' </div>';
            $html.='<div class="whtancz">';
               $html.=' <form>';
                    $html.='<fieldset>';
                       $html.=' <legend>操作提示</legend>';
                       $html.='<div>请确认以上信息无误，单击【确定】保存信息，单击【取消】关闭弹窗</div>';
                   $html.='</fieldset>';
                $html.='</form>';
            $html.='</div>';
        $html.='</div>';
        return $html;
    }
    //故者落幕登记
    static public function reserve_gzdj($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->where(['a.id'=>$info['id']])->find();
        $tpl = self::table('tpl')->where(['type'=>4])->field('id,title')->select();
        $user = self::table('staff')->field('id,nickname')->select();
        $html='';
        $html.='<div class="gztan" style="display:block;">';
             $html.='<div class="gztana">';
                 $html.='<form>';
                     $html.='<fieldset>';
                         $html.='<legend>故者落葬信息</legend>';
                         $html.='<div class="gztanb">';
                             $html.='<div class="gztanba">';
                                 $html.='<p>墓位全称：</p>';
                                 $html.='<input type="text" value="'.$arr['long_title'].'" disabled/>';
                             $html.='</div>';
                             $html.='<div class="gztanbb">';
                                 $html.='<p>证书编号：</p>';
                                 $html.='<input type="text" value="'.$arr['znum'].'" disabled style="width: 148px;"/>';
                                 $html.='<input type="hidden" id="usercardimg"/>';
                                 $html.='<i>*</i>';
                             $html.='</div>';
                             $html.='<div class="gztanbc" style="margin-left: 12px;">';
                                 $html.='<p>定购日期：</p>';
                                 $html.='<input type="text" class="Wdate" value="'.date('Y-m-d',$arr['settime']).'" disabled />';
                             $html.='</div>';
                         $html.='</div>';
                         $html.='<div class="gztanc">';
                            $html.=' <div class="gztanca">';
                                 $html.='<p>故者姓名：</p>';
                                 $html.='<input type="text" name="dead_name" id="dead_name"/>';
                                 $html.='<i>*</i>';
                            $html.=' </div>';
                            $html.=' <div class="gztancb">';
                                 $html.='<p>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</p>';
                                 $html.='<select name="dead_sex" id="dead_sex">';
                                     $html.='<option value="2">男</option>';
                                     $html.='<option value="3">女</option>';
                                 $html.='</select>';
                                 $html.='<i>*</i>';
                             $html.='</div>';
                             $html.='<div class="gztancc">';
                                $html.=' <p>使用开始：</p>';
                                $html.='<input class="Wdate" value="'.date('Y-m-d',$arr['starttime']).'" name="starttime" id="starttime" type="text" onClick="WdatePicker()">';
                             $html.='</div>';
                         $html.='</div>';
                         $html.='<div class="gztand">';
                             $html.='<div class="gztanda">';
                                 $html.='<p>工作单位：</p>';
                                 $html.='<input type="text" name="dead_work" id="dead_work"/>';
                             $html.='</div>';
                             $html.='<div class="gztandb">';
                                $html.=' <p>原&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;籍：</p>';
                                 $html.='<input type="text" name="dead_address" id="dead_address"/>';
                             $html.='</div>';
                             $html.='<div class="gztandc">';
                                 $html.='<p>使用结束：</p>';
                                 $html.='<input class="Wdate" value="'.date('Y-m-d',$arr['endtime']).'" name="endtime" id="endtime" type="text" onClick="WdatePicker()">';
                             $html.='</div>';
                         $html.='</div>';
                         $html.='<div class="gztane">';
                             $html.='<div class="gztanea">';
                                 $html.='<p>出生日期：</p>';
                                 $html.='<input class="Wdate" name="gstime" id="gstime" type="text" onClick="WdatePicker()">';
                                $html.=' <b>（公历）</b>';
                             $html.='</div>';
                             $html.='<div class="gztaneb">';
                                $html.=' <p>逝世日期：</p>';
                                $html.=' <input class="Wdate" name="gdtime" id="gdtime" type="text" onClick="WdatePicker()">';
                                $html.=' <b>（公历）</b>';
                             $html.='</div>';
                             $html.='<div class="gztanec">';
                                 $html.='<p>落葬日期：</p>';
                                 $html.='<input class="Wdate" name="gltime" id="gltime" type="text" onClick="WdatePicker()">';
                                $html.=' <b>（公历）</b>';
                             $html.='</div>';
                         $html.='</div>';
                         $html.='<div class="gztanf">';
                             $html.='<div class="gztanfa">';
                                 $html.='<p>出生日期：</p>';
                                 $html.='<input  name="nstime" id="nstime" type="text">';
                                 $html.='<b>（农历）</b>';
                             $html.='</div>';
                             $html.='<div class="gztanfb">';
                                $html.=' <p>逝世日期：</p>';
                                $html.=' <input  name="ndtime" id="ndtime" type="text">';
                                $html.=' <b>（农历）</b>';
                             $html.='</div>';
                             $html.='<div class="gztanfc">';
                                 $html.='<p>落葬日期：</p>';
                                 $html.='<input name="nltime" id="nltime" type="text">';
                                 $html.='<b>（农历）</b>';
                             $html.='</div>';
                         $html.='</div>';
                         $html.='<div class="gztang">';
                             $html.='<div class="gztanga">';
                                 $html.='<select name="cstype" id="cstype">';
                                   $html.='  <option value="2">只显示公历</option>';
                                   $html.='  <option value="3">只显示农历</option>';
                                   $html.='  <option value="4">都显示</option>';
                                   $html.='  <option value="5">都不显示</option>';
                                 $html.='</select>';
                             $html.='</div>';
                             $html.='<div class="gztangb">';
                                $html.=' <input class="Wdate" name="jrtime" id="jrtime" type="text" onClick="WdatePicker()">';
                                 $html.='<p>（农历数字，用于祭祀日提醒）</p>';
                             $html.='</div>';
                             $html.='<div class="gztangc">';
                                 $html.='<select id="sstype">';
                                    $html.='  <option value="2">只显示公历</option>';
                                    $html.='  <option value="3">只显示农历</option>';
                                    $html.='  <option value="4">都显示</option>';
                                    $html.='  <option value="5">都不显示</option>';
                                 $html.='</select>';
                             $html.='</div>';
                         $html.='</div>';
                         $html.='<div class="gztanh">';
                            $html.=' <div class="gztanha">';
                                 $html.='<select id="lztype">';
                                    $html.='  <option value="2">只显示公历</option>';
                                    $html.='  <option value="3">只显示农历</option>';
                                    $html.='  <option value="4">都显示</option>';
                                    $html.='  <option value="5">都不显示</option>';
                                $html.=' </select>';
                            $html.=' </div>';
                        $html.=' </div>';
                    $html.=' </fieldset>';
                 $html.='</form>';
             $html.='</div>';
             $html.='<div class="gztanj" style="margin-top:20px;">';
                $html.=' <div class="gztanjle">';
                    $html.=' <div class="gztanja">';
                        $html.=' <form>';
                            $html.=' <fieldset>';
                                $html.=' <legend>联系人信息</legend>';
                                $html.=' <div class="gztanjc">';
                                     $html.='<div class="gztanjca">';
                                     $html.='<p>联系人姓名：</p>';
                                        $html.=' <input type="text" value="'.$arr['name'].'" id="cname"/>';
                                         $html.='<i>*</i>';
                                     $html.='</div>';
                                     $html.='<div class="gztanjcb">';
                                         $html.='<p>故者关系：</p>'; 
                                        $html.='<select name="relationship" id="relationship">';/*'relationship*/
                                        foreach ($tpl as $key => $value) {
                                            if($value['id'] == $arr['relationship']){
                                                $html.=' <option value="'.$value['id'].'" selected>'.$value['title'].'</option>';
                                            }else{
                                                $html.=' <option value="'.$value['id'].'">'.$value['title'].'</option>';    
                                            }
                                        }
                                        $html.='</select>';
                                         $html.='<i>*</i>';
                                     $html.='</div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjd">';
                                    $html.=' <div class="gztanjda">';
                                        $html.=' <p>身份证号：</p>';
                                        $html.=' <input type="text" value="'.$arr['idcard'].'" id="idcard"/>';
                                        $html.=' <i>*</i>';
                                     $html.='</div>';
                                     $html.='<div class="gztanjdb">';
                                         $html.='<p>性别：</p>';
                                         $html.='<select name="sex" id="sex">';
                                            if($arr['sex'] == 2){
                                                $html.='<option value="2" selected>男</option>';
                                                $html.='<option value="3">女</option>';
                                            }else{
                                               $html.='<option value="2">男</option>';
                                                $html.='<option value="3" selected>女</option>'; 
                                            }
                                         $html.='</select>';
                                         $html.='<i>*</i>';
                                    $html.=' </div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanje">';
                                    $html.=' <div class="gztanjea">';
                                         $html.='<p>联系电话：</p>';
                                        $html.=' <input type="text" name="tel" id="tel" value="'.$arr['tel'].'"/>';
                                        $html.=' <i>*</i>';
                                     $html.='</div>';
                                     $html.='<div class="gztanjeb">';
                                         $html.='<p>手机：</p>';
                                        $html.=' <input type="text" name="phone" id="phone" value="'.$arr['phone'].'"/>';
                                        $html.=' <i></i>';
                                     $html.='</div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjf">';
                                     $html.='<div class="gztanjfa">';
                                         $html.='<p>电子邮件：</p>';
                                         $html.='<input type="text" name="email" id="email" value="'.$arr['email'].'"/>';
                                         $html.='<i></i>';
                                     $html.='</div>';
                                     $html.='<div class="gztanjfb">';
                                        $html.=' <p>邮政编码：</p>';
                                         $html.='<input type="text" name="postcode" id="postcode" value="'.$arr['postcode'].'"/>';
                                         $html.='<i>*</i>';
                                    $html.=' </div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjg">';
                                    $html.=' <div class="gztanjga">';
                                         $html.='<p>工作单位：</p>';
                                         $html.='<input type="text" name="workplace" id="workplace" value="'.$arr['workplace'].'"/>';
                                    $html.=' </div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjh">';
                                     $html.='<div class="gztanjha">';
                                         $html.='<p>家庭住址：</p>';
                                         $html.='<input type="text" name="address" id="address" value="'.$arr['address'].'"/>';
                                     $html.='</div>';
                                $html.=' </div>';
                             $html.='</fieldset>';
                         $html.='</form>';
                    $html.=' </div>';
                     $html.='<div class="gztanjb">';
                        $html.=' <form>';
                            $html.=' <fieldset>';
                               $html.='  <legend>操作提示</legend>';
                               $html.=' <div style="color:red;">请先上传身份证照片 ，后保存信息。</div>';
                             $html.='</fieldset>';
                        $html.=' </form>';
                    $html.=' </div>';
                 $html.='</div>';
                 $html.='<div class="gztanjri">';
                     $html.='<form>';
                         $html.='<fieldset>';
                            $html.=' <legend>故者落葬操作信息</legend>';
                             $html.='<div class="gztanjria">';
                                  $html.='<p>业务员：</p>';
                                   $html.=' <select disabled>';/*staff*/
                                        foreach ($user as $key => $value) {
                                            if($value['id'] == $arr['salesman']){
                                                $html.=' <option value="'.$value['id'].'" selected>'.$value['nickname'].'</option>';
                                            }
                                        }
                                    $html.=' </select>';
                                 $html.=' <i>*</i>';
                            $html.=' </div>';
                             $html.='<div class="gztanjrib">';
                                 $html.=' <p>操作员：</p>';
                                 $html.=' <input type="text" value="'.session('nickname').'" disabled/>';
                                 $html.=' <i>*</i>';
                             $html.='</div>';
                            $html.=' <div class="gztanjric">';
                                  $html.=' <p>备注：</p>';
                                  $html.=' <textarea name="beizhu" id="beizhu">'.$arr['beizhu'].'</textarea>';
                             $html.='</div>';
                             $html.='<div class="gztanjrid">';
                                $html.=' <div class="gztanjrida" onclick="setgzdj('.$info['id'].')">保存</div>';
                                $html.=' <div class="gztanjridb" onclick="laclogzdj()">取消</div>';
                            $html.=' </div>';
                            $html.=' <div class="gztanjrie" onclick="uicard()">上传身份证扫描件</div>';
                            $html.=' <div class="gztanjrif">打印墓位档案表</div>';
                         $html.='</fieldset>';
                     $html.='</form>';
                 $html.='</div>';
             $html.='</div>';
        return $html;
    }
    //修改业务员
    static public function user_set($info){
        $arr=self::field('id,long_title')->where(['id'=>$info['id']])->find();
        $user=self::table('staff')->field('nickname')->where(['id'=>$info['uid']])->find();
        $staff=self::table('staff')->field('id,nickname')->select();
        $html='';
        $html.='<div class="whtan" style="display:block;width: 258px;height: 229px;">';
            $html.='<div class="whtane">';
               $html.=' <div class="whtaneri">';
                    $html.='<form>';
                       $html.='<fieldset>';
                           $html.=' <legend>业务员信息</legend>';
                           $html.='<div class="whtanyw">';
                                $html.='<p>墓位全称：</p>';
                               $html.=' <input type="text" value="'.$arr['long_title'].'" disabled/>';
                            $html.='</div>';
                            $html.='<div class="whtanyw">';
                                $html.='<p>原业务员：</p>';
                               $html.=' <input type="text" value="'.$user['nickname'].'" disabled/>';
                            $html.='</div>';
                            $html.='<div class="whtanyw">';
                               $html.=' <p>修改业务员：</p>';
                                $html.=' <select name="salesman" id="salesman">';/*staff*/
                                    foreach ($staff as $key => $value) {
                                        $html.=' <option value="'.$value['id'].'">'.$value['nickname'].'</option>';
                                    }
                                $html.=' </select>';
                            $html.='</div>';
                            $html.='<div class="whtanbc">';
                                $html.=' <button class="whtanbca" type="button" onclick="subuser('.$info['id'].')">保存</button>';
                                $html.='  <button class="whtanbcb" type="button" onclick="closeuser()">取消</button>';
                            $html.='</div>';
                        $html.='</fieldset>';
                   $html.=' </form>';
               $html.=' </div>';
           $html.=' </div>';
            $html.='<div class="whtancz">';
               $html.=' <form>';
                    $html.='<fieldset>';
                       $html.=' <legend>操作提示</legend>';
                   $html.='</fieldset>';
                $html.='</form>';
            $html.='</div>';
        $html.='</div>';
        return $html;
    }
    //身份证照片
    static public function tomb_uicard(){
        $htm='';
        $html.='<form enctype="multipart/form-data" id="information">';
        $html.='<div class="gztank" style="display:block;width: 585px;margin-left: -293px;">';
            $html.='<div class="gztanka">';
                 $html.='<div class="gztankle">';
                         $html.='<fieldset>';
                             $html.='<legend>选择身份证图片</legend>';
                             $html.='<div class="gztankimg">';
                             $html.='<div id="dd1" style=" width:200px;height:200px;"><img class="row_img"  style=" width:200px;height:200px;"/></div>';
                             $html.='</div>';
                         $html.='</fieldset>';
                 $html.='</div>';
                 $html.='<div class="gztankri" >';
                    $html.='<div class="gztankria" style="width: 145px;"><input class="uploading" type="file" name="img" id="doc1" multiple="multiple"  style="width:148px;" onchange="setImagePreviews1()" accept="image/*" /> 
                     </div>';
                     $html.='<div class="gztankrib" onclick="setcardimg()">保存图片</div>';
                 $html.='</div>';
            $html.='</div>';
        $html.='</div>';
        $html.='</form>';
        return $html;
    }
    //墓位定购信息维护
    static public function reserve_buyed($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->where(['a.id'=>$info['id']])->find();
        $dead=self::table('dead')->where(['cem_info_id'=>$info['id']])->select();
        $count=self::table('dead')->where(['cem_info_id'=>$info['id']])->count();
        $user = self::table('staff')->field('id,nickname')->column('*', 'id');
        $cem_status=_Tpl::tlist(9);//墓位状态
        $cem_mat=_Tpl::tlist(3);//墓位材料
        $cem_sty=_Tpl::tlist(2);//墓位样式 
        $html='';
        $html.='<div class="tanc" style="display:block">';
            $html.='<div class="tanf">';
                $html.='<form>';
                    $html.='<fieldset>';
                        $html.='<legend>墓位信息</legend>';
                        $html.='<div class="tanfsa">';
                            $html.='<p>您选择的是：'.$arr['long_title'].'|墓位样式：'.$cem_sty[$arr['style']]['title'].'</p>';
                            $html.='<div class="tanfsb">';
                                $html.='<div>墓位长：'.$arr['width'].'米</div>';
                                $html.='<div>墓位宽：'.$arr['length'].'米</div>';
                                $html.='<div>墓位面积：'.$arr['acreage'].'平方米</div>';
                                $html.='<div>墓位材质：'.$cem_mat[$arr['material']]['title'].'</div>';
                                $html.='<div>墓位状态：'.$cem_status[$arr['status']]['title'].'</div>';
                            $html.='</div>';
                        $html.='</div>';
                    $html.='</fieldset>';
                $html.='</form>';
            $html.='</div>';
            $html.='<div class="tang">';
                $html.='<form>';
                    $html.='<fieldset>';
                        $html.='<legend>墓位定购信息</legend>';
                        $html.='<div class="tanga">';
                           $html.=' <div class="tangb">';
                                $html.='<div>墓位费：'.$arr['money'].'元</div>';
                                $html.='<div>应付（已付）管理费总额：'.$arr['manage_sum_money'].'元</div>';
                                $html.='<div>应付（已付）款总额：'.$arr['pay_sum_money'].'元</div>';
                                $html.='<div>是否已交费：已付款</div>';
                                $html.='<div>使用开始日期：'.date('Y-m-d',$arr['starttime']).'</div>';
                            $html.='</div>';
                            $html.='<div class="tangc">';
                                $html.='<div>联系人：'.$arr['name'].'</div>';
                                $html.='<div>身份证：'.$arr['idcard'].'</div>';
                                $html.='<div>联系电话：'.$arr['tel'].'</div>';
                                $html.='<div>购墓日期：'.date('Y-m-d',$arr['settime']).'</div>';
                                $html.='<div>使用结束日期：'.date('Y-m-d',$arr['endtime']).'</div>';
                            $html.='</div>';
                            $html.='<div class="tangd">';
                                $html.='<div class="tanfgda">';
                                    $html.='<p>备注：</p>';
                                    $html.='<div onclick="subbeizhu()" style="cursor:pointer">保存备注</div>';
                                $html.='</div>';
                                $html.='<textarea id="beizhu">'.$arr['beizhu'].'</textarea>';
                            $html.='</div>';
                        $html.='</div>';
                    $html.='</fieldset>';
                $html.='</form>';
           $html.=' </div>';
            $html.='<div class="tanh">';
                $html.='<div class="tanha">';
                   $html.=' <p>当前墓位已下葬故者：<font id="zongshusum">'.$count.'</font>条记录</p>';
                    $html.='<div onclick="updlz('.$info['id'].')">刷新故者信息</div>';
                    $html.='<div onclick="gzdj()">故者落葬登记</div>';
                    $html.='<div onclick="xjglf()">续交管理费</div>';
                    if($info['type'] =='1'){
                        $html.='<div onclick="tuiding()">墓位退订</div>';
                    }else if($info['type'] =='2'){
                        $html.='<div style="color:#C6C6C6;">墓位退订</div>';
                    }
                    $html.='<div onclick="huanyuan()">墓位还原</div>';
                $html.='</div>';
                $html.='<div class="tanhb" style="height: 166px;">';
                    $html.='<table class="table table-bordered">';
                      $html.='<thead>';
                        $html.='<tr>';
                         $html.=' <th style="min-width: 175px;">墓位证编号</th>';
                          $html.='<th>墓位全称</th>';
                          $html.=' <th>故者姓名</th>';
                          $html.=' <th>故者性别</th>';
                          $html.=' <th>出生日期（公历）</th>';
                          $html.='<th>出生日期（农历）</th>';
                          $html.='<th>原籍</th>';
                          $html.='<th>工作单位</th>';
                          $html.='<th>逝世日期（公历）</th>';
                          $html.='<th>逝世日期（农历）</th>';
                          $html.='<th>下葬日期（公历）</th>';
                          $html.='<th>下葬日期（公历）</th>';
                          $html.='<th>操作员姓名</th>';
                          $html.='<th>出生日期显示</th>';
                          $html.='<th>逝世日期显示</th>';
                          $html.='<th>下葬日期显示</th>';
                          $html.='<th>备注</th>';
                          $html.='<th>逝世日期（农历数字）</th>';
                          $html.='<th>落葬状态</th>';
                        $html.='</tr>';
                      $html.='</thead>';
                      $html.='<tbody class="lzxxarr">';
                      foreach ($dead as $key => $value) {
                        $html.='<tr class="row_lzxxarr">';
                          $html.='<td><input type="radio" name="dyzuser" value="'.$value['id'].'" />'.$arr['znum'].'</td>';
                          $html.='<td>'.$arr['long_title'].'</td>';
                          $html.='<td>'.$value['dead_name'].'</td>';
                          if($value['sex'] =='2'){
                            $html.='<td>男</td>';
                          }else{
                            $html.='<td>女</td>';
                          }
                          $html.='<td>'.date('Y-m-d',$value['gstime']).'</td>';
                          $html.='<td>'.date('Y-m-d',$value['nstime']).'</td>';
                          $html.='<td>'.$value['dead_address'].'</td>';
                          $html.='<td>'.$value['dead_work'].'</td>';
                          $html.='<td>'.date('Y-m-d',$value['gdtime']).'</td>';
                          $html.='<td>'.date('Y-m-d',$value['ndtime']).'</td>'; 
                          $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                          $html.='<td>'.date('Y-m-d',$value['nltime']).'</td>';
                          $html.='<td>'.$user[$arr['salesman']]['nickname'].'</td>';
                          if($value['cstype'] == '2'){
                            $html.='<td>只显示公历</td>';
                          }else if($value['cstype'] == '3'){
                            $html.='<td>只显示农历</td>';
                          }else if($value['cstype'] == '4'){
                            $html.='<td>都显示</td>';
                          }else if($value['cstype'] == '5'){
                            $html.='<td>都不显示</td>';
                          }
                          if($value['lztype'] == '2'){
                            $html.='<td>只显示公历</td>';
                          }else if($value['lztype'] == '3'){
                            $html.='<td>只显示农历</td>';
                          }else if($value['lztype'] == '4'){
                            $html.='<td>都显示</td>';
                          }else if($value['lztype'] == '5'){
                            $html.='<td>都不显示</td>';
                          }
                          if($value['lztype'] == '2'){
                            $html.='<td>只显示公历</td>';
                          }else if($value['lztype'] == '3'){
                            $html.='<td>只显示农历</td>';
                          }else if($value['lztype'] == '4'){
                            $html.='<td>都显示</td>';
                          }else if($value['lztype'] == '5'){
                            $html.='<td>都不显示</td>';
                          }
                          $html.='<td>'.$arr['beizhu'].'</td>';
                          $html.='<td>'.date('Y-m-d',$value['jrtime']).'</td>';
                          $html.='<td>已下葬</td>';
                        $html.='</tr>';
                      }
                      $html.='</tbody>';
                    $html.='</table>';
                $html.='</div>';
            $html.='</div>';
            $html.='<div class="tank">';
                $html.='<button type="button" class="contc"  onclick="printdz()">打印购墓合同（正）</button>';
                $html.='<button type="button" class="contc"  onclick="printdf()" style="width:190px;">打印购墓合同(反)</button>';
                $html.='<button type="button" class="contc"  onclick="bwtc()">墓位碑文设置</button>';
                $html.='<button type="button" class="contc"  onclick="printmuz()">打印墓位证（正）</button>';
                $html.='<button type="button" class="contc"  onclick="printmuf()" style="width:176px;">打印墓位证（反）</button>';
                /*$html.='<button type="button" class="contc"  onclick="printmud()" style="width:190px;">打印墓位证(定购信息)</button>';
                $html.='<button type="button" class="contc"  onclick="printmul()" style="width:190px;">打印墓位证(落葬信息)</button>';
                $html.='<button type="button" class="contc"  onclick="bwtc()">墓位证计数</button>';*/
                $html.='<button type="button" class="contc"  onclick="bwtc()">保存购墓合同图片</button>';
                $html.='<button type="button" class="contc"  onclick="closedgxx()">关闭本窗体</button>';
            $html.='</div>';
        $html.='</div>';

        return $html;
    }
    //刷新故者落葬信息
    static public function show_updlz($info){
        $arr=self::where(['id'=>$info['id']])->find();
        $dead=self::table('dead')->where(['cem_info_id'=>$info['id']])->select();
        $count=self::table('dead')->where(['cem_info_id'=>$info['id']])->count();
        $user = self::table('staff')->field('id,nickname')->column('*', 'id');
        foreach ($dead as $key => $value) {
          $html.='<tr class="row_lzxxarr">';
          $html.='<td>'.$arr['znum'].'</td>';
          $html.='<td>'.$arr['long_title'].'</td>';
          $html.='<td>'.$value['dead_name'].'</td>';
          $html.='<input type="hidden" id="sumnumber" value="'.$count.'">';
          if($value['sex'] =='2'){
            $html.='<td>男</td>';
          }else{
            $html.='<td>女</td>';
          }
          $html.='<td>'.date('Y-m-d',$value['gstime']).'</td>';
          $html.='<td>'.date('Y-m-d',$value['nstime']).'</td>';
          $html.='<td>'.$value['dead_address'].'</td>';
          $html.='<td>'.$value['dead_work'].'</td>';
          $html.='<td>'.date('Y-m-d',$value['gdtime']).'</td>';
          $html.='<td>'.date('Y-m-d',$value['ndtime']).'</td>'; 
          $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
          $html.='<td>'.date('Y-m-d',$value['nltime']).'</td>';
          $html.='<td>'.$user[$arr['salesman']]['nickname'].'</td>';
          if($value['cstype'] == '2'){
            $html.='<td>只显示公历</td>';
          }else if($value['cstype'] == '3'){
            $html.='<td>只显示农历</td>';
          }else if($value['cstype'] == '4'){
            $html.='<td>都显示</td>';
          }else if($value['cstype'] == '5'){
            $html.='<td>都不显示</td>';
          }
          if($value['lztype'] == '2'){
            $html.='<td>只显示公历</td>';
          }else if($value['lztype'] == '3'){
            $html.='<td>只显示农历</td>';
          }else if($value['lztype'] == '4'){
            $html.='<td>都显示</td>';
          }else if($value['lztype'] == '5'){
            $html.='<td>都不显示</td>';
          }
          if($value['lztype'] == '2'){
            $html.='<td>只显示公历</td>';
          }else if($value['lztype'] == '3'){
            $html.='<td>只显示农历</td>';
          }else if($value['lztype'] == '4'){
            $html.='<td>都显示</td>';
          }else if($value['lztype'] == '5'){
            $html.='<td>都不显示</td>';
          }
          $html.='<td>'.$arr['beizhu'].'</td>';
          $html.='<td>'.date('Y-m-d',$value['jrtime']).'</td>';
          $html.='<td>已下葬</td>';
        $html.='</tr>';
      }
      return $html;
    }
    //碑文内容设置-保存
    static public function tomb_setbeiwencont($info){
        $arr=self::field('status')->where(['id'=>$info['eid']])->find();
        if($arr['status'] == '41'){
            $id=self::table('bw_info')->field('id')->where(['cem_info_id'=>$info['eid']])->find();
            if($id){
                if($info['mname'] != ''){
                    $data['mname']=$info['mname'];
                }
                if($info['fname'] != ''){
                    $data['fname']=$info['fname'];
                }
                if($info['uaddress'] != ''){
                    $data['uaddress']=$info['uaddress'];
                }
                if($info['beimian'] != ''){
                    $data['beimian']=$info['beimian'];
                }
                if($info['kouli'] != ''){
                    $data['kouli']=$info['kouli'];
                }
                if($info['bcont'] != ''){
                    $data['bcont']=$info['bcont'];
                }
                if($info['zangtime'] != ''){
                    $data['zangtime']=strtotime($info['zangtime']);
                }
                if($info['mstime'] != ''){
                    $data['mstime']=strtotime($info['mstime']);
                }
                if($info['mgtime'] != ''){
                    $data['mgtime']=strtotime($info['mgtime']);
                }
                if($info['fstime'] != ''){
                    $data['fstime']=strtotime($info['fstime']);
                }
                if($info['fgtime'] != ''){
                    $data['fgtime']=strtotime($info['fgtime']);
                }
                $data['dead_id']=$info['zanguser'];
                if (self::table('bw_info')->where('id', $id['id'])->update($data) !== false) {
                    return 'ok';
                }
                return 'no';
            }else{
                return 'flg';
            }
        }else{
            return 'msg';
        }    
        
    }
    //碑文参数设置-保存
    static public function tomb_setbwcs($info){
        $arr=self::field('status,cem_id')->where(['id'=>$info['eid']])->find();
        if($arr['status'] == '41'){
            $id=self::table('bw_info')->field('id')->where(['cem_info_id'=>$info['eid']])->find();
            $info['cem_info_id']=$info['eid'];
            $info['cem_id']=$arr['cem_id'];
            if($id){
                if (self::table('bw_info')->where('id', $id['id'])->update($info) !== false) {
                    return 'ok';
                }
                return 'no';
            }else{
                if (self::table('bw_info')->insert($info) !== false) {
                    return 'ok';
                }
                return 'no';
            }
        }else{
            return 'msg';
        }
        
    }

    //碑文杂费设置
    static public function tomb_setbeizf($info){
        $arr=self::where(['id'=>$info['id']])->find();
        $bw=self::table('bw_zf')->where(['cem_info_id'=>$info['id']])->select();
        $cem_status=_Tpl::tlist(9);//墓位状态
        $cem_mat=_Tpl::tlist(3);//墓位材料
        $cem_sty=_Tpl::tlist(2);//墓位样式 
        $dead=self::table('dead')->where(['cem_info_id'=>$info['id']])->select();
        $user = self::table('staff')->field('id,nickname')->column('*', 'id');
        $html='';
        $html.='<div class="jsdtan" style="display:block;">';
                $html.='<div class="jsdtana">';
                    $html.='<form>';
                        $html.='<fieldset>';
                            $html.='<legend>墓位信息</legend>';
                            $html.='<div class="tanfsa">';
                                $html.='<p>您选择的是：'.$arr['long_title'].'|墓位样式：'.$cem_sty[$arr['style']]['title'].'</p>';
                                $html.='<div class="tanfsb">';
                                    $html.='<div>墓位长：'.$arr['width'].'米</div>';
                                    $html.='<div>墓位宽：'.$arr['length'].'米</div>';
                                    $html.='<div>墓位面积：'.$arr['acreage'].'平方米</div>';
                                    $html.='<div>墓位材质：'.$cem_mat[$arr['material']]['title'].'</div>';
                                    $html.='<div>墓位状态：'.$cem_status[$arr['status']]['title'].'</div>';
                                $html.='</div>';
                            $html.='</div>';
                        $html.='</fieldset>';
                    $html.='</form>';
                $html.='</div>';
                $html.='<div class="jsdtantable">';
                $html.='<table class="table table-bordered">';
                          $html.=' <thead>';
                            $html.=' <tr>';
                            $html.='  <th style="min-width: 175px;">墓位证编号</th>';
                             $html.='  <th>墓位全称</th>';
                              $html.=' <th>故者姓名</th>';
                              $html.=' <th>故者性别</th>';
                              $html.=' <th>出生日期（公历）</th>';
                               $html.='<th>出生日期（农历）</th>';
                              $html.=' <th>原籍</th>';
                              $html.=' <th>工作单位</th>';
                              $html.=' <th>逝世日期（公历）</th>';
                              $html.=' <th>逝世日期（农历）</th>';
                              $html.=' <th>下葬日期（公历）</th>';
                              $html.=' <th>下葬日期（公历）</th>';
                              $html.=' <th>操作员姓名</th>';
                              $html.=' <th>出生日期显示</th>';
                              $html.=' <th>逝世日期显示</th>';
                              $html.=' <th>下葬日期显示</th>';
                              $html.=' <th>备注</th>';
                              $html.=' <th>逝世日期（农历数字）</th>';
                              $html.=' <th>落葬状态</th>';
                             $html.='</tr>';
                           $html.='</thead>';
                           $html.='<tbody>';
                            foreach ($dead as $key => $value) {
                                $html.='<tr class="row_lzxxarr">';
                                  $html.='<td><input type="radio" name="dyzuser" value="'.$value['id'].'" />'.$arr['znum'].'</td>';
                                  $html.='<td>'.$arr['long_title'].'</td>';
                                  $html.='<td>'.$value['dead_name'].'</td>';
                                  if($value['sex'] =='2'){
                                    $html.='<td>男</td>';
                                  }else{
                                    $html.='<td>女</td>';
                                  }
                                  $html.='<td>'.date('Y-m-d',$value['gstime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['nstime']).'</td>';
                                  $html.='<td>'.$value['dead_address'].'</td>';
                                  $html.='<td>'.$value['dead_work'].'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['gdtime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['ndtime']).'</td>'; 
                                  $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['nltime']).'</td>';
                                  $html.='<td>'.$user[$arr['salesman']]['nickname'].'</td>';
                                  if($value['cstype'] == '2'){
                                    $html.='<td>只显示公历</td>';
                                  }else if($value['cstype'] == '3'){
                                    $html.='<td>只显示农历</td>';
                                  }else if($value['cstype'] == '4'){
                                    $html.='<td>都显示</td>';
                                  }else if($value['cstype'] == '5'){
                                    $html.='<td>都不显示</td>';
                                  }
                                  if($value['lztype'] == '2'){
                                    $html.='<td>只显示公历</td>';
                                  }else if($value['lztype'] == '3'){
                                    $html.='<td>只显示农历</td>';
                                  }else if($value['lztype'] == '4'){
                                    $html.='<td>都显示</td>';
                                  }else if($value['lztype'] == '5'){
                                    $html.='<td>都不显示</td>';
                                  }
                                  if($value['lztype'] == '2'){
                                    $html.='<td>只显示公历</td>';
                                  }else if($value['lztype'] == '3'){
                                    $html.='<td>只显示农历</td>';
                                  }else if($value['lztype'] == '4'){
                                    $html.='<td>都显示</td>';
                                  }else if($value['lztype'] == '5'){
                                    $html.='<td>都不显示</td>';
                                  }
                                  $html.='<td>'.$arr['beizhu'].'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['jrtime']).'</td>';
                                  $html.='<td>已下葬</td>';
                                $html.='</tr>';
                              }
                          $html.=' </tbody>';
                         $html.='</table>';
                $html.='</div>';
                $html.='<div class="jsdtanf">';
                   $html.=' <div class="jsdtanfle">';
                        $html.='<form>';
                            $html.='<fieldset>';
                                $html.='<legend>碑文费用计算单</legend>';
                                $html.='<div class="jsdtans">';
                                    $html.='<div class="jsdsa">';
                                        $html.='<p>收费项目</p>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsb">';
                                        $html.='<p>数量</p>';
                                        $html.='<div class="jsdsbc">';
                                            $html.='<div class="jsdsba">';
                                                $html.='<p>特大字</p>';
                                                $html.='<input type="text" name="z_t" id="z_t">';
                                            $html.='</div>';
                                            $html.='<div class="jsdsba">';
                                                $html.='<p>大字</p>';
                                                $html.='<input type="text" name="z_d" id="z_d">';
                                            $html.='</div>';
                                            $html.='<div class="jsdsba">';
                                                $html.='<p>中字</p>';
                                                $html.='<input type="text" name="z_z" id="z_z">';
                                            $html.='</div>';
                                            $html.='<div class="jsdsba">';
                                                $html.='<p>小字</p>';
                                                $html.='<input type="text" name="z_x" id="z_x">';
                                            $html.='</div>';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsc">';
                                        $html.='<p>单价</p>';
                                        $html.='<div class="jsdsca">';
                                            $html.='<div class="jsdscb">';
                                                $html.='<p>刻字单价（元/字）</p>';
                                                $html.='<input type="text" name="z_t_k" id="z_t_k" onblur="ztk()">';
                                                $html.='<input type="text" name="z_d_k" id="z_d_k"  onblur="zdk()">';
                                                $html.=' <input type="text" name="z_z_k" id="z_z_k"  onblur="zzk()">';
                                                $html.='<input type="text" name="z_x_k" id="z_x_k"  onblur="zxk()">';
                                            $html.='</div>';
                                            $html.='<div class="jsdscd">';
                                                $html.='<p>贴金箔单价（元/字）</p>';
                                                $html.='<input type="text" name="z_t_b" id="z_t_b" onblur="ztb()">';
                                                $html.='<input type="text" name="z_d_b" id="z_d_b" onblur="zdb()">';
                                                $html.='<input type="text" name="z_z_b" id="z_z_b" onblur="zzb()">';
                                                $html.='<input type="text" name="z_x_b" id="z_x_b" onblur="zxb()">';
                                            $html.='</div>';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsd">';
                                        $html.='<p>金额</p>';
                                       $html.=' <div class="jsdsca">';
                                            $html.='<div class="jsdscb">';
                                                $html.='<p>刻字金额</p>';
                                                $html.='<input type="text" name="z_t_k_p" id="z_t_k_p">';
                                                $html.='<input type="text" name="z_d_k_p" id="z_d_k_p">';
                                               $html.=' <input type="text" name="z_z_k_p" id="z_z_k_p">';
                                               $html.=' <input type="text" name="z_x_k_p" id="z_x_k_p">';
                                            $html.='</div>';
                                            $html.='<div class="jsdscd">';
                                               $html.=' <p>贴金箔金额</p>';
                                                $html.='<input type="text" name="z_t_b_p" id="z_t_b_p">';
                                                $html.='<input type="text" name="z_d_b_p" id="z_d_b_p">';
                                                $html.='<input type="text" name="z_z_b_p" id="z_z_b_p">';
                                                $html.='<input type="text" name="z_x_b_p" id="z_x_b_p">';
                                            $html.='</div>';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="jsdse">';
                                        $html.='<p>备注</p>';
                                        $html.='<textarea name="z_beizhu" id="z_beizhu"></textarea>  ';                             
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdxj">';
                                    $html.='<p>小计</p>';
                                    $html.='<input type="text" name="zk_sum" id="zk_sum">';
                                    $html.='<input type="text" name="zb_sum" id="zb_sum">'; 
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                    $html.='<div class="jsdsan">';
                                        $html.='<input type="checkbox" name="cx" value="2"><label>瓷像</label>';
                                    $html.='</div>';
                                   $html.=' <div class="jsdsbn">';
                                        $html.='<div class="jsdsbnle">';
                                         $html.='   <p>单人</p>';
                                         $html.='   <p>双人</p>';
                                        $html.='</div>';
                                        $html.='<div class="jsdsbnri">';
                                          $html.='  <input type="radio" checked name="cx_type" style="width: 34px;" value="2"><input type="text" name="cx_num" id="cx_num" style="width: 34px;">';
                                          $html.='  <input type="radio" style="margin-left: -34px;width: 34px;" name="cx_type" value="3">';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                        $html.='<input type="text"  name="cx_price" id="cx_price" onblur="cxprice()">';
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                        $html.='<input type="text" name="cx_sum" id="cx_sum">';                                       
                                   $html.=' </div>';
                                    $html.='<div class="jsdsen">';
                                        $html.='<textarea name="cx_beizhu" id="cx_beizhu"></textarea> ';                  
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                   $html.=' <div class="jsdsan">';
                                        $html.='<input type="checkbox" name="lb" value="2"><label>封门立碑</label>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsbn">';
                                       $html.=' <div class="jsdsbnle">';
                                            $html.='<p>首次</p>';
                                            $html.='<p>二次</p>';
                                        $html.='</div>';
                                        $html.='<div class="jsdsbnri">';
                                            $html.='<input type="radio" name="lb_type" checked value="2">';
                                            $html.='<input type="radio" name="lb_type" value="3">';
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                        $html.='<input type="text" name="lb_price" id="lb_price" onblur="lbprice()"> ';                                  
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                        $html.='<input type="text" name="lb_sum" id="lb_sum">';                                       
                                    $html.='</div>';
                                    $html.='<div class="jsdsen">';
                                       $html.=' <textarea name="lb_beizhu" id="lb_beizhu"></textarea>  ';                 
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                    $html.='<div class="jsdsan">';
                                        $html.='<input type="checkbox" name="tj" id="tj" value="2"><label>家族台阶</label>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsbn">';
                                       $html.=' <div class="jsdsbnle">';
                                        $html.='</div>';
                                       $html.=' <div class="jsdsbnri">';
                                          $html.='  <input type="text" name="tj_num" id="tj_num" style="width: 68px;">  '; 
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                        $html.='<input type="text" name="tj_price" id="tj_price" onblur="tjprice()"> ';                                                                          
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                       $html.=' <input type="text" name="tj_sum" id="tj_sum"> ';                                                                      
                                    $html.='</div>';
                                    $html.='<div class="jsdsen">';
                                        $html.='<textarea class="jztjtext" name="tj_beizhu" id="tj_beizhu"></textarea>   ';               
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                    $html.='<div class="jsdsan">';
                                       $html.=' <input type="checkbox" name="zs" id="zs" value="2"><label>墓穴装饰</label>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsbn">';
                                        $html.='<div class="jsdsbnle">';
                                            $html.='<p>花岗岩</p>';
                                            $html.='<p>黑理石</p>';
                                       $html.=' </div>';
                                        $html.='<div class="jsdsbnri">';
                                           $html.=' <input type="radio" name="zs_type" id="zs_type" value="2" checked>';
                                            $html.='<input type="radio" name="zs_type" id="zs_type" value="3">';
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                       $html.=' <input type="text" name="zs_price" id="zs_price" onblur="zsprice()"> ';                                  
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                        $html.='<input type="text" name="zs_sum" id="zs_sum"> ';                                      
                                    $html.='</div>';
                                    $html.='<div class="jsdsen">';
                                        $html.='<textarea name="zs_beizhu" id="zs_beizhu"></textarea>   ';                
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                    $html.='<div class="jsdsan">';
                                        $html.='<input type="checkbox" name="bzj" id="bzj" value="2"><label>不干胶</label>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsbn">';
                                       $html.=' <div class="jsdsbnle">';
                                            $html.='<p>单人</p>';
                                           $html.=' <p>双人</p>';
                                        $html.='</div>';
                                        $html.='<div class="jsdsbnri">';
                                           $html.=' <input type="radio" name="bzj_type" value="2" checked>';
                                            $html.='<input type="radio" name="bzj_type" value="3">';
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                        $html.='<input type="text" name="bzj_price" id="bzj_price" onblur="bzjprice()"> ';                                  
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                        $html.='<input type="text" name="bzj_sum" id="bzj_sum">';
                                    $html.='</div>';
                                    $html.='<div class="jsdsen">';
                                        $html.='<textarea name="bzj_beizhu" id="bzj_beizhu"></textarea>  ';                 
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="hjtan">';
                                    $html.='<div class="hjtana">合计金额</div>';
                                    $html.='<div class="hjtanb">';
                                        $html.='<p>小写：</p>';
                                       $html.=' <input type="text" name="sum" id="sum" onfoucs="sumMoney()">';
                                    $html.='</div>';
                                    $html.='<div class="hjtanb">';
                                        $html.='<p>人民币大写：</p>';
                                        $html.='<input type="text" name="dsum" id="dsum">';
                                    $html.='</div>';
                               $html.=' </div>';
                            $html.='</fieldset>';
                        $html.='</form>';
                    $html.='</div>';
                    $html.='<div class="jsdtanfri">';
                        $html.='<div class="jsdanfria" style="cursor:pointer" onclick="setjsd('.$info['id'].')">保存碑文费用计算单</div>';
                        $html.='<div class="jsdanfria" style="cursor:pointer" onclick="pring_zfdj()">打印碑文费用计算单</div>';
                    $html.='</div>';
                $html.='</div>';
           $html.='</div>';
        return $html;
    }
    //碑文参数设置
    static public function reserve_bwtc($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->where(['a.id'=>$info['id']])->find();
        $bw=self::table('bw_info')->where(['cem_info_id'=>$info['id']])->find();
        $cem_status=_Tpl::tlist(9);//墓位状态
        $cem_mat=_Tpl::tlist(3);//墓位材料
        $cem_sty=_Tpl::tlist(2);//墓位样式 
        $dead=self::table('dead')->where(['cem_info_id'=>$info['id']])->select();
        $count=self::table('dead')->where(['cem_info_id'=>$info['id']])->count();
        $user = self::table('staff')->field('id,nickname')->column('*', 'id');
        $html='';
        $html.='<div class="bwtan" style="display:block;width: 817px;min-height: 550px;margin-left: -402px;margin-top: -268px;">';
             $html.='<div class="bwtanul">';
                 $html.='<ul>';
                     $html.='<li class="bwon" id="liset1"><a href="#" onclick="tab1()">碑文参数设置</a></li>';
                     $html.='<li id="liset2"><a href="#" onclick="tab2()">碑文内容设置</a></li>';
                 $html.='</ul>';
             $html.='</div>';
             $html.='<div class="bwtancon">';
                 $html.='<div class="inner" id="tab1">';
                    $html.=' <div class="bwtana">';
                        $html.=' <form>';
                            $html.='<fieldset>';
                                $html.='<legend>墓位信息</legend>';
                                $html.='<div class="tanfsa">';
                                    $html.='<p>您选择的是：'.$arr['long_title'].'|墓位样式：'.$cem_sty[$arr['style']]['title'].'</p>';
                                    $html.='<div class="tanfsb">';
                                        $html.='<div>墓位长：'.$arr['width'].'米</div>';
                                        $html.='<div>墓位宽：'.$arr['length'].'米</div>';
                                        $html.='<div>墓位面积：'.$arr['acreage'].'平方米</div>';
                                        $html.='<div>墓位材质：'.$cem_mat[$arr['material']]['title'].'</div>';
                                        $html.='<div>墓位状态：'.$cem_status[$arr['status']]['title'].'</div>';
                                    $html.='</div>';
                                $html.='</div>';
                            $html.='</fieldset>';
                         $html.='</form>';
                     $html.='</div>';
                     $html.='<div class="bwtand">';
                         $html.='<form>';
                             $html.='<fieldset>';
                                 $html.='<legend>碑文分项参数设置</legend>';
                                 $html.='<div class="bwtane">';
                                     $html.='<div class="bwtanea">';
                                         $html.='<div class="bwtanf">';
                                             $html.='<p>刻字样式：</p>';
                                             $html.='<select name="kzys" id="kzys">';
                                             if($bw['kzys'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='    <option value="2"></option>';
                                                $html.='    <option value="3">喷砂刻字</option>';
                                             }else if($bw['kzys'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='    <option value="2" selected></option>';
                                                $html.='    <option value="3">喷砂刻字</option>';
                                             }else if($bw['kzys'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='    <option value="2"></option>';
                                                $html.='    <option value="3" selected>喷砂刻字</option>';
                                             }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='    <option value="2"></option>';
                                                $html.='    <option value="3">喷砂刻字</option>';
                                             }
                                             $html.='</select>';
                                        $html.='</div>';
                                         $html.='<div class="bwtanf">';
                                             $html.='<p>碑文字体：</p>';
                                             $html.='<select name="bwzt" id="bwzt">';
                                                if($bw['bwzt'] == '0'){
                                                    $html.='<option value="0" selected>请选择</option>';
                                                    $html.='<option value="2">隶书</option>';
                                                    $html.='<option value="3">魏碑</option>';
                                                    $html.='<option value="4">行楷</option>';
                                                }else if($bw['bwzt'] == '2'){
                                                    $html.='<option value="0">请选择</option>';
                                                    $html.='<option value="2" selected>隶书</option>';
                                                    $html.='<option value="3">魏碑</option>';
                                                    $html.='<option value="4">行楷</option>';
                                                }else if($bw['bwzt'] == '3'){
                                                    $html.='<option value="0">请选择</option>';
                                                    $html.='<option value="2">隶书</option>';
                                                    $html.='<option value="3" selected>魏碑</option>';
                                                    $html.='<option value="4">行楷</option>';
                                                }else if($bw['bwzt'] == '4'){
                                                    $html.='<option value="0">请选择</option>';
                                                    $html.='<option value="2">隶书</option>';
                                                    $html.='<option value="3">魏碑</option>';
                                                    $html.='<option value="4" selected>行楷</option>';
                                                }else{
                                                    $html.='<option value="0" selected>请选择</option>';
                                                    $html.='<option value="2">隶书</option>';
                                                    $html.='<option value="3">魏碑</option>';
                                                    $html.='<option value="4">行楷</option>';
                                                }
                                             $html.='</select>';
                                        $html.=' </div>';
                                         $html.='<div class="bwtanf">';
                                             $html.='<p>简体繁体：</p>';
                                             $html.='<select name="ziti" id="ziti">';
                                             if($bw['ziti'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.=' <option value="2">简体</option>';
                                                $html.=' <option value="3">繁体</option>';
                                             }else if($bw['ziti'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.=' <option value="2" selected>简体</option>';
                                                $html.=' <option value="3">繁体</option>';
                                             }else if($bw['ziti'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.=' <option value="2">简体</option>';
                                                $html.=' <option value="3" selected>繁体</option>';
                                             }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.=' <option value="2">简体</option>';
                                                $html.=' <option value="3">繁体</option>';
                                             }
                                             $html.='</select>';
                                         $html.='</div>';
                                     $html.='</div>';
                                     $html.='<div class="bwtanea">';
                                         $html.='<div class="bwtanf">';
                                            $html.=' <p>刷金：</p>';
                                             $html.='<select name="shuajin" id="shuajin">';
                                             if($bw['shuajin'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='  <option value="2">是</option>';
                                                $html.='  <option value="3">否</option>';
                                             }else if($bw['shuajin'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='  <option value="2" selected>是</option>';
                                                $html.='  <option value="3">否</option>';
                                             }else if($bw['shuajin'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='  <option value="2">是</option>';
                                                $html.='  <option value="3" selected>否</option>';
                                             }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='  <option value="2">是</option>';
                                                $html.='  <option value="3">否</option>';
                                             }
                                            $html.=' </select>';
                                        $html.=' </div>';
                                        $html.=' <div class="bwtanf">';
                                             $html.='<p>贴金箔：</p>';
                                             $html.='<select name="tjb" id="tjb">';
                                             if($bw['tjb'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='  <option value="2">是</option>';
                                                $html.='  <option value="3">否</option>';
                                             }else if($bw['tjb'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='  <option value="2" selected>是</option>';
                                                $html.='  <option value="3">否</option>';
                                             }else if($bw['tjb'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='  <option value="2">是</option>';
                                                $html.='  <option value="3" selected>否</option>';
                                             }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='  <option value="2">是</option>';
                                                $html.='  <option value="3">否</option>';
                                             }
                                             $html.='</select>';
                                         $html.='</div>';
                                     $html.='</div>';
                                     $html.='<div class="bwtanea">';
                                         $html.='<div class="bwtanf">';
                                             $html.='<p>瓷像数量：</p>';
                                             $html.='<select name="cxsl" id="cxsl">';
                                             if($bw['cxsl'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='  <option value="2">单人</option>';
                                                $html.='  <option value="3">双人</option>';
                                             }else if($bw['cxsl'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='  <option value="2" selected>单人</option>';
                                                $html.='  <option value="3">双人</option>';
                                             }else if($bw['cxsl'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='  <option value="2">单人</option>';
                                                $html.='  <option value="3" selected>双人</option>';    
                                             }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='  <option value="2">单人</option>';
                                                $html.='  <option value="3">双人</option>';
                                             }
                                             $html.='</select>';
                                        $html.='</div>';
                                         $html.='<div class="bwtanf">';
                                             $html.='<p>瓷像颜色：</p>';
                                             $html.='<select name="cxsc" id="cxsc">';
                                             if($bw['cxsc'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.=' <option value="2">黑白</option>';
                                                $html.=' <option value="3">彩色</option>';
                                             }else if($bw['cxsc'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.=' <option value="2" selected>黑白</option>';
                                                $html.=' <option value="3">彩色</option>';
                                             }else if($bw['cxsc'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.=' <option value="2">黑白</option>';
                                                $html.=' <option value="3" selected>彩色</option>';
                                             }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.=' <option value="2">黑白</option>';
                                                $html.=' <option value="3">彩色</option>';
                                             }
                                            $html.=' </select>';
                                         $html.='</div>';
                                         $html.='<div class="bwtanf">';
                                             $html.='<p>瓷像尺寸：</p>';
                                             $html.='<select name="cxcc" id="cxcc">';
                                             if($bw['cxcc'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='<option value="4">4</option>';
                                                $html.='<option value="5">5</option>';
                                                $html.='<option value="6">6</option>';
                                             }else if($bw['cxcc'] == '4'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='<option value="4" selected>4</option>';
                                                $html.='<option value="5">5</option>';
                                                $html.='<option value="6">6</option>';
                                             }else if($bw['cxcc'] == '5'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='<option value="4">4</option>';
                                                $html.='<option value="5" selected>5</option>';
                                                $html.='<option value="6">6</option>';   
                                             }else if($bw['cxcc'] == '6'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='<option value="4">4</option>';
                                                $html.='<option value="5">5</option>';
                                                $html.='<option value="6" selected>6</option>';
                                             }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='<option value="4">4</option>';
                                                $html.='<option value="5">5</option>';
                                                $html.='<option value="6">6</option>';
                                             }
                                             $html.='</select>';
                                         $html.='</div>';
                                         $html.='<div class="bwtanf">';
                                             $html.='<p>瓷像形状：</p>';
                                            $html.=' <select name="cxxz" id="cxxz">';
                                            if($bw['cxxz'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.=' <option value="2">椭圆</option>';
                                                $html.=' <option value="3">方形</option>';
                                            }else if($bw['cxxz'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.=' <option value="2" selected>椭圆</option>';
                                                $html.=' <option value="3">方形</option>';
                                            }else if($bw['cxxz'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.=' <option value="2">椭圆</option>';
                                                $html.=' <option value="3" selected>方形</option>';
                                            }else{
                                                 $html.='    <option value="0" selected>请选择</option>';
                                                $html.=' <option value="2">椭圆</option>';
                                                $html.=' <option value="3">方形</option>';
                                            }
                                            $html.=' </select>';
                                         $html.='</div>';
                                    $html.=' </div>';
                                    $html.=' <div class="bwtanea">';
                                       $html.='  <div class="bwtanf">';
                                           $html.='  <p>影雕数量：</p>';
                                            $html.='<select name="dysl" id="dysl">';
                                            if($bw['dysl'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='  <option value="2">单人</option>';
                                                $html.='  <option value="3">双人</option>';
                                            }else if($bw['dysl'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='  <option value="2" selected>单人</option>';
                                                $html.='  <option value="3">双人</option>';
                                            }else if($bw['dysl'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.='  <option value="2">单人</option>';
                                                $html.='  <option value="3" selected>双人</option>';
                                            }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.='  <option value="2">单人</option>';
                                                $html.='  <option value="3">双人</option>';
                                            }   
                                             $html.='</select>';
                                        $html.=' </div>';
                                         $html.='<div class="bwtanf">';
                                             $html.='<p>影雕形状：</p>';
                                             $html.='<select name="dyxz" id="dyxz">';
                                             if($bw['dyxz'] == '0'){
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.=' <option value="2">椭圆</option>';
                                                $html.=' <option value="3">方形</option>';
                                             }else if($bw['dyxz'] == '2'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.=' <option value="2" selected>椭圆</option>';
                                                $html.=' <option value="3">方形</option>';
                                             }else if($bw['dyxz'] == '3'){
                                                $html.='    <option value="0">请选择</option>';
                                                $html.=' <option value="2">椭圆</option>';
                                                $html.=' <option value="3" selected>方形</option>';
                                             }else{
                                                $html.='    <option value="0" selected>请选择</option>';
                                                $html.=' <option value="2">椭圆</option>';
                                                $html.=' <option value="3">方形</option>';
                                             }
                                            $html.=' </select>';
                                         $html.='</div>';
                                     $html.='</div>';
                                 $html.='</div>';
                             $html.='</fieldset>';
                         $html.='</form>';
                    $html.='</div>';
                     $html.='<div class="bwtanbtn">';
                        $html.=' <div style="margin-left: 80px;cursor:pointer;" onclick="setbwcs('.$info['id'].')">设置碑文参数</div>';
                        $html.=' <div style="cursor:pointer;" onclick="closebeiwencs()">取消本次设置</div>';
                     $html.='</div>';
               $html.=' </div>';

                 $html.='<div class="inner" id="tab2">';
                     $html.='<div class="bwtana">';
                         $html.='<form>';
                            $html.='<fieldset>';
                                $html.='<legend>墓位信息</legend>';
                                $html.='<div class="tanfsa">';
                                    $html.='<p>您选择的是：'.$arr['long_title'].'|墓位样式：'.$cem_sty[$arr['style']]['title'].'</p>';
                                    $html.='<div class="tanfsb">';
                                        $html.='<div>墓位长：'.$arr['width'].'米</div>';
                                        $html.='<div>墓位宽：'.$arr['length'].'米</div>';
                                        $html.='<div>墓位面积：'.$arr['acreage'].'平方米</div>';
                                        $html.='<div>墓位材质：'.$cem_mat[$arr['material']]['title'].'</div>';
                                        $html.='<div>墓位状态：'.$cem_status[$arr['status']]['title'].'</div>';
                                    $html.='</div>';
                                $html.='</div>';
                            $html.='</fieldset>';
                        $html.=' </form>';
                     $html.='</div>';
                    $html.=' <div class="bwtantable" style="height: 180px;">';
                         $html.='<table class="table table-bordered">';
                          $html.=' <thead>';
                            $html.=' <tr>';
                            $html.='  <th style="min-width: 175px;">墓位证编号</th>';
                             $html.='  <th>墓位全称</th>';
                              $html.=' <th>故者姓名</th>';
                              $html.=' <th>故者性别</th>';
                              $html.=' <th>出生日期（公历）</th>';
                               $html.='<th>出生日期（农历）</th>';
                              $html.=' <th>原籍</th>';
                              $html.=' <th>工作单位</th>';
                              $html.=' <th>逝世日期（公历）</th>';
                              $html.=' <th>逝世日期（农历）</th>';
                              $html.=' <th>下葬日期（公历）</th>';
                              $html.=' <th>下葬日期（公历）</th>';
                              $html.=' <th>操作员姓名</th>';
                              $html.=' <th>出生日期显示</th>';
                              $html.=' <th>逝世日期显示</th>';
                              $html.=' <th>下葬日期显示</th>';
                              $html.=' <th>备注</th>';
                              $html.=' <th>逝世日期（农历数字）</th>';
                              $html.=' <th>落葬状态</th>';
                             $html.='</tr>';
                           $html.='</thead>';
                           $html.='<tbody>';
                            foreach ($dead as $key => $value) {
                                $html.='<tr class="row_lzxxarr">';
                                  $html.='<td><input type="radio" name="dyzuser" value="'.$value['id'].'" />'.$arr['znum'].'</td>';
                                  $html.='<td>'.$arr['long_title'].'</td>';
                                  $html.='<td>'.$value['dead_name'].'</td>';
                                  if($value['sex'] =='2'){
                                    $html.='<td>男</td>';
                                  }else{
                                    $html.='<td>女</td>';
                                  }
                                  $html.='<td>'.date('Y-m-d',$value['gstime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['nstime']).'</td>';
                                  $html.='<td>'.$value['dead_address'].'</td>';
                                  $html.='<td>'.$value['dead_work'].'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['gdtime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['ndtime']).'</td>'; 
                                  $html.='<td>'.date('Y-m-d',$value['gltime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['nltime']).'</td>';
                                  $html.='<td>'.$user[$arr['salesman']]['nickname'].'</td>';
                                  if($value['cstype'] == '2'){
                                    $html.='<td>只显示公历</td>';
                                  }else if($value['cstype'] == '3'){
                                    $html.='<td>只显示农历</td>';
                                  }else if($value['cstype'] == '4'){
                                    $html.='<td>都显示</td>';
                                  }else if($value['cstype'] == '5'){
                                    $html.='<td>都不显示</td>';
                                  }
                                  if($value['lztype'] == '2'){
                                    $html.='<td>只显示公历</td>';
                                  }else if($value['lztype'] == '3'){
                                    $html.='<td>只显示农历</td>';
                                  }else if($value['lztype'] == '4'){
                                    $html.='<td>都显示</td>';
                                  }else if($value['lztype'] == '5'){
                                    $html.='<td>都不显示</td>';
                                  }
                                  if($value['lztype'] == '2'){
                                    $html.='<td>只显示公历</td>';
                                  }else if($value['lztype'] == '3'){
                                    $html.='<td>只显示农历</td>';
                                  }else if($value['lztype'] == '4'){
                                    $html.='<td>都显示</td>';
                                  }else if($value['lztype'] == '5'){
                                    $html.='<td>都不显示</td>';
                                  }
                                  $html.='<td>'.$arr['beizhu'].'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['jrtime']).'</td>';
                                  $html.='<td>已下葬</td>';
                                $html.='</tr>';
                              }
                          $html.=' </tbody>';
                         $html.='</table>';
                     $html.='</div>';
                     $bw_info=self::table('bw_info')->where(['cem_info_id'=>$info['id']])->select();
                     $html.=' <div class="bwtantable" style="height: 180px;">';
                         $html.='<table class="table table-bordered">';
                          $html.=' <thead>';
                            $html.=' <tr>';
                              $html.='  <th >选择</th>';
                              $html.='  <th >母姓名</th>';
                              $html.='  <th>父姓名</th>';
                              $html.=' <th>籍贯</th>';
                              $html.=' <th>落葬日期</th>';
                              $html.=' <th>母生于</th>';
                               $html.='<th>母故于</th>';
                              $html.=' <th>父生于</th>';
                              $html.=' <th>父故于</th>';
                              $html.=' <th>碑文内容</th>';
                              $html.=' <th>叩立</th>';
                              $html.=' <th>碑文备注</th>';
                             $html.='</tr>';
                           $html.='</thead>';
                           $html.='<tbody>';
                            foreach ($bw_info as $key => $value) {
                                $html.='<tr class="row_lzxxarr">';
                                $html.='<td><input type="radio" name="zanguser" value="'.$value['id'].'" /></td>';
                                  $html.='<td>'.$value['mname'].'</td>';
                                  $html.='<td>'.$value['fname'].'</td>';
                                  $html.='<td>'.$value['uaddress'].'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['zangtime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['mstime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['mgtime']).'</td>';
                                  $html.='<td>'.date('Y-m-d',$value['fstime']).'</td>'; 
                                  $html.='<td>'.date('Y-m-d',$value['fgtime']).'</td>';
                                  $html.='<td>'.$value['beimian'].'</td>';
                                  $html.='<td>'.$value['kouli'].'</td>';
                                  $html.='<td>'.$value['bcont'].'</td>';
                                $html.='</tr>';
                              }
                          $html.=' </tbody>';
                         $html.='</table>';
                     $html.='</div>';
                     $html.='<div class="bwtannr">';
                         $html.='<form>';
                            $html.=' <fieldset>';
                                $html.=' <legend>碑文内容设置</legend>';
                                $html.=' <div class="bwnra">';
                                     $html.='<div class="bwnraa">';
                                         $html.='<div class="bwnrab">';
                                            $html.=' <p>母姓名：</p>';
                                             $html.='<input type="text" name="mname" id="mname"/>';
                                        $html.=' </div>';
                                         $html.='<div class="bwnrac">';
                                            $html.=' <p>父姓名：</p>';
                                            $html.=' <input type="text" name="fname" id="fname"/>';
                                         $html.='</div>';
                                     $html.='</div>';
                                     $html.='<div class="bwnrad">';
                                        $html.=' <p>原籍：</p>';
                                        $html.=' <input type="text" name="uaddress" id="uaddress"/>';
                                     $html.='</div>';
                                   
                                     $html.='<div class="bwnraf">';
                                         $html.='<p>安葬日期：</p>';
                                         $html.='<input class="Wdate" name="zangtime" id="zangtime" type="text" onClick="WdatePicker()" style="width: 146px;">';
                                     $html.='</div>';
                                     $html.='<div class="bwnrag">';
                                        $html.=' <p>背面碑文内容：</p>';
                                        $html.=' <textarea name="beimian" id="beimian"></textarea>';
                                    $html.=' </div>';
                                $html.=' </div>';
                                 $html.='<div class="bwnrb">';
                                     $html.='<div class="bwnrbb">';
                                        $html.='<p>母生于：</p>';
                                        $html.=' <input class="Wdate" name="mstime" id="mstime"  type="text" onClick="WdatePicker()" style="width: 146px;">';
                                     $html.='</div>';
                                    $html.=' <div class="bwnrbb">';
                                         $html.='<p>母故于：</p>';
                                        $html.=' <input class="Wdate" name="mgtime" id="mgtime"  type="text" onClick="WdatePicker()" style="width: 146px;">';
                                     $html.='</div>';
                                     $html.='<div class="bwnrbb">';
                                         $html.='<p>父生于：</p>';
                                         $html.='<input class="Wdate" name="fstime" id="fstime"  type="text" onClick="WdatePicker()" style="width: 146px;">';
                                     $html.='</div>';
                                     $html.='<div class="bwnrbb">';
                                         $html.='<p>父故于：</p>';
                                         $html.='<input class="Wdate" name="fgtime" id="fgtime"  type="text" onClick="WdatePicker()" style="width: 146px;">';
                                     $html.='</div>';
                                     $html.='<div class="bwnrbc">';
                                        $html.='<div class="bwnrbcle">';
                                          $html.=' <p>叩立：</p>';
                                          $html.=' <textarea name="kouli" id="kouli"></textarea>';
                                        $html.='</div>';
                                        $html.='<div class="bwnrbcri">';
                                          $html.=' <p>备注：</p>';
                                          $html.=' <textarea name="bcont" id="bcont"></textarea>';
                                        $html.='</div>';
                                     $html.='</div>';
                                 $html.='</div>';
                                 $html.='<div class="bwnrc">';
                                     $html.='<div class="bwnrca" style="display: inline-flex;margin-left: 155px;">';
                                        $html.=' <div style="margin-right: 10px;cursor:pointer" onclick="print_bw_cz()">打印传统碑文登记表（正）</div>';
                                        $html.=' <div style="cursor:pointer;" onclick="print_bw_cf()">打印传统碑文登记表（反）</div>';  
                                     $html.='</div>';
                                    $html.=' <div class="bwnrca" style="display: inline-flex;margin-left: 155px;">';
                                         $html.='<div style="margin-right: 10px;cursor:pointer" onclick="print_bw_xz()">打印现代碑文登记表（正）</div>';
                                         $html.='<div style="cursor:pointer;" onclick="print_bw_xf()">打印现代碑文登记表（反）</div>';
                                     $html.='</div>';
                                     $html.='<div class="bwnrca" style="display: inline-flex;margin-left: 155px;">';
                                         $html.='<div style="margin-right: 10px;cursor:pointer;" onclick="beiwencont('.$info['id'].')">保存碑文内容</div>';
                                        $html.=' <div onclick="setbeizf('.$info['id'].')" style="cursor:pointer;">填写碑文杂费单</div>';
                                    $html.=' </div>';
                                 $html.='</div>';
                             $html.='</fieldset>';
                        $html.=' </form>';
                     $html.='</div>';
                 $html.='</div>';
             $html.='</div>';
        $html.=' </div>';
        return $html;
    }
    ////碑文计算单计算
    static public function reserve_jsdtc($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->where(['a.id'=>$info['id']])->find();
        $cem_status=_Tpl::tlist(9);//墓位状态
        $cem_mat=_Tpl::tlist(3);//墓位材料
        $cem_sty=_Tpl::tlist(2);//墓位样式 
        $html='';
        $html.='<div class="jsdtan" style="display:block;">';
                $html.='<div class="jsdtana">';
                    $html.='<form>';
                        $html.='<fieldset>';
                            $html.='<legend>墓位信息</legend>';
                            $html.='<div class="tanfsa">';
                                $html.='<p>您选择的是：'.$arr['long_title'].'|墓位样式：'.$cem_sty[$arr['style']]['title'].'</p>';
                                $html.='<div class="tanfsb">';
                                    $html.='<div>墓位长：'.$arr['width'].'米</div>';
                                    $html.='<div>墓位宽：'.$arr['length'].'米</div>';
                                    $html.='<div>墓位面积：'.$arr['acreage'].'平方米</div>';
                                    $html.='<div>墓位材质：'.$cem_mat[$arr['material']]['title'].'</div>';
                                    $html.='<div>墓位状态：'.$cem_status[$arr['status']]['title'].'</div>';
                                $html.='</div>';
                            $html.='</div>';
                        $html.='</fieldset>';
                    $html.='</form>';
                $html.='</div>';
                $html.='<div class="jsdtantable">';
                $html.='<table class="table table-bordered">';
                      $html.='<thead>';
                        $html.='<tr>';
                          $html.='<th>碑文计算单编号</th>';
                          $html.='<th>是否已付款</th>';
                          $html.='<th>刻字金额</th>';
                          $html.='<th>贴金箔金额</th>';
                          $html.='<th>瓷像数量</th>';
                          $html.='<th>瓷像费用</th>';
                          $html.='<th>封门立碑</th>';
                          $html.='<th>封门立碑费用</th>';
                          $html.='<th>家族台阶数</th>';
                          $html.='<th>家族台阶费用</th>';
                          $html.='<th>装饰材料费用</th>';
                          $html.='<th>不干胶费用</th>';
                          $html.='<th>费用总计</th>';
                          $html.='<th>杂费设置日期</th>';
                          $html.='<th>备注</th>';
                        $html.='</tr>';
                      $html.='</thead>';
                      $html.='<tbody>';
                        $html.='<tr>';
                          $html.='<td>2</td>';
                          $html.='<td>已付款</td>';
                          $html.='<td>367</td>';
                          $html.='<td>0</td>';
                          $html.='<td>单人</td>';
                          $html.='<td>0</td>';
                          $html.='<td>首次</td>';
                          $html.='<td>50</td>';
                          $html.='<td>0</td>';
                          $html.='<td>0</td>';
                          $html.='<td></td>';
                          $html.='<td></td>';
                          $html.='<td>417</td>';
                          $html.='<td>2010-01-21...</td>';
                          $html.='<td></td>';
                        $html.='</tr>';
                      $html.='</tbody>';
                    $html.='</table>';
                $html.='</div>';
                $html.='<div class="jsdtanf">';
                   $html.=' <div class="jsdtanfle">';
                        $html.='<form>';
                            $html.='<fieldset>';
                                $html.='<legend>碑文费用计算单</legend>';
                                $html.='<div class="jsdtans">';
                                    $html.='<div class="jsdsa">';
                                        $html.='<p>收费项目</p>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsb">';
                                        $html.='<p>数量</p>';
                                        $html.='<div class="jsdsbc">';
                                            $html.='<div class="jsdsba">';
                                                $html.='<p>特大字</p>';
                                                $html.='<input type="text" value="0">';
                                            $html.='</div>';
                                            $html.='<div class="jsdsba">';
                                                $html.='<p>大字</p>';
                                                $html.='<input type="text" value="0">';
                                            $html.='</div>';
                                            $html.='<div class="jsdsba">';
                                                $html.='<p>中字</p>';
                                                $html.='<input type="text" value="0">';
                                            $html.='</div>';
                                            $html.='<div class="jsdsba">';
                                                $html.='<p>小字</p>';
                                                $html.='<input type="text" value="0">';
                                            $html.='</div>';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsc">';
                                        $html.='<p>单价</p>';
                                        $html.='<div class="jsdsca">';
                                            $html.='<div class="jsdscb">';
                                                $html.='<p>刻字单价（元/字）</p>';
                                                $html.='<input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                               $html.=' <input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                            $html.='</div>';
                                            $html.='<div class="jsdscd">';
                                                $html.='<p>贴金箔单价（元/字）</p>';
                                                $html.='<input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                            $html.='</div>';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsd">';
                                        $html.='<p>金额</p>';
                                       $html.=' <div class="jsdsca">';
                                            $html.='<div class="jsdscb">';
                                                $html.='<p>刻字金额</p>';
                                                $html.='<input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                               $html.=' <input type="text" value="0">';
                                               $html.=' <input type="text" value="0">';
                                            $html.='</div>';
                                            $html.='<div class="jsdscd">';
                                               $html.=' <p>贴金箔金额</p>';
                                                $html.='<input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                                $html.='<input type="text" value="0">';
                                            $html.='</div>';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="jsdse">';
                                        $html.='<p>备注</p>';
                                        $html.='<textarea></textarea>  ';                             
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdxj">';
                                    $html.='<p>小计</p>';
                                    $html.='<input type="text" value="0">';
                                    $html.='<input type="text" value="0">';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                    $html.='<div class="jsdsan">';
                                        $html.='<input type="checkbox"><label>瓷像</label>';
                                    $html.='</div>';
                                   $html.=' <div class="jsdsbn">';
                                        $html.='<div class="jsdsbnle">';
                                         $html.='   <p>单人</p>';
                                         $html.='   <p>双人</p>';
                                        $html.='</div>';
                                        $html.='<div class="jsdsbnri">';
                                          $html.='  <input type="radio">';
                                          $html.='  <input type="radio">';
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                        $html.='<input type="text" value="0">';
                                        $html.='<input type="text" value="0"> ';                                  
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                        $html.='<input type="text" value="0">';
                                        $html.='<input type="text" value="0">';                                       
                                   $html.=' </div>';
                                    $html.='<div class="jsdsen">';
                                        $html.='<textarea></textarea> ';                  
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                   $html.=' <div class="jsdsan">';
                                        $html.='<input type="checkbox"><label>封门立碑</label>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsbn">';
                                       $html.=' <div class="jsdsbnle">';
                                            $html.='<p>首次</p>';
                                            $html.='<p>二次</p>';
                                        $html.='</div>';
                                        $html.='<div class="jsdsbnri">';
                                            $html.='<input type="radio">';
                                            $html.='<input type="radio">';
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                        $html.='<input type="text" value="0">';
                                        $html.='<input type="text" value="0"> ';                                  
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                       $html.=' <input type="text" value="0">';
                                        $html.='<input type="text" value="0">';                                       
                                    $html.='</div>';
                                    $html.='<div class="jsdsen">';
                                       $html.=' <textarea></textarea>  ';                 
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                    $html.='<div class="jsdsan">';
                                        $html.='<input type="checkbox"><label>家族台阶</label>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsbn">';
                                       $html.=' <div class="jsdsbnle">';
                                        $html.='</div>';
                                       $html.=' <div class="jsdsbnri">';
                                          $html.='  <input type="text" value="0">  '; 
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                        $html.='<input type="text" value="0"> ';                                                                          
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                       $html.=' <input type="text" value="0"> ';                                                                      
                                    $html.='</div>';
                                    $html.='<div class="jsdsen">';
                                        $html.='<textarea class="jztjtext"></textarea>   ';               
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                    $html.='<div class="jsdsan">';
                                       $html.=' <input type="checkbox"><label>墓穴装饰</label>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsbn">';
                                        $html.='<div class="jsdsbnle">';
                                            $html.='<p>花岗岩</p>';
                                            $html.='<p>黑理石</p>';
                                       $html.=' </div>';
                                        $html.='<div class="jsdsbnri">';
                                           $html.=' <input type="radio">';
                                            $html.='<input type="radio">';
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                        $html.='<input type="text" value="0">';
                                       $html.=' <input type="text" value="0"> ';                                  
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                        $html.='<input type="text" value="0">';
                                        $html.='<input type="text" value="0"> ';                                      
                                    $html.='</div>';
                                    $html.='<div class="jsdsen">';
                                        $html.='<textarea></textarea>   ';                
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="jsdtansn">';
                                    $html.='<div class="jsdsan">';
                                        $html.='<input type="checkbox"><label>不干胶</label>';
                                    $html.='</div>';
                                    $html.='<div class="jsdsbn">';
                                       $html.=' <div class="jsdsbnle">';
                                            $html.='<p>单人</p>';
                                           $html.=' <p>双人</p>';
                                        $html.='</div>';
                                        $html.='<div class="jsdsbnri">';
                                           $html.=' <input type="radio">';
                                            $html.='<input type="radio">';
                                        $html.='</div>';
                                        
                                    $html.='</div>';
                                    $html.='<div class="jsdscn">';
                                       $html.=' <input type="text" value="0">';
                                        $html.='<input type="text" value="0"> ';                                  
                                    $html.='</div>';
                                    $html.='<div class="jsdsdn">';
                                        $html.='<input type="text" value="0">';
                                        $html.='<input type="text" value="0"> ';                                      
                                    $html.='</div>';
                                    $html.='<div class="jsdsen">';
                                        $html.='<textarea></textarea>  ';                 
                                    $html.='</div>';
                                $html.='</div>';
                                $html.='<div class="hjtan">';
                                    $html.='<div class="hjtana">合计金额</div>';
                                    $html.='<div class="hjtanb">';
                                        $html.='<p>小写：</p>';
                                       $html.=' <input type="text">';
                                    $html.='</div>';
                                    $html.='<div class="hjtanb">';
                                        $html.='<p>人民币大写：</p>';
                                        $html.='<input type="text">';
                                    $html.='</div>';
                               $html.=' </div>';
                            $html.='</fieldset>';
                        $html.='</form>';
                    $html.='</div>';
                    $html.='<div class="jsdtanfri">';
                        $html.='<div class="jsdanfria">保存碑文费用计算单</div>';
                        $html.='<div class="jsdanfria">打印碑文费用计算单</div>';
                    $html.='</div>';
                $html.='</div>';
           $html.='</div>';
        return $html;
    }
    ////墓位预定--杂费
    static public  function select_buy_type_yu($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->join('dead d','a.id = d.cem_info_id')->where(['a.id'=>$info['id']])->find();
        $cem_status=_Tpl::tlist(9);//墓位状态
        $cem_mat=_Tpl::tlist(3);//墓位材料
        $cem_sty=_Tpl::tlist(2);//墓位样式 
        $html='';
        $html.='<div class="zftan" style="display: block;">';
                $html.='<div class="tanfq">';
                    $html.='<form>';
                        $html.='<fieldset>';
                            $html.='<legend>墓位信息</legend>';
                            $html.='<div class="tanfsa">';
                                $html.='<p>您选择的是：'.$arr['long_title'].'|墓位样式：'.$cem_sty[$arr['style']]['title'].'</p>';
                                $html.='<div class="tanfsb">';
                                    $html.='<div>墓位长：'.$arr['width'].'米</div>';
                                    $html.='<div>墓位宽：'.$arr['length'].'米</div>';
                                    $html.='<div>墓位面积：'.$arr['acreage'].'平方米</div>';
                                    $html.='<div>墓位材质：'.$cem_mat[$arr['material']]['title'].'</div>';
                                    $html.='<div>墓位状态：'.$cem_status[$arr['status']]['title'].'</div>';
                                $html.='</div>';
                            $html.='</div>';
                        $html.='</fieldset>';
                    $html.='</form>';
                $html.='</div>';
                $html.='<div class="zftant">';
                   $html.=' <div class="zftanle">';
                       $html.=' <form>';
                            $html.='<fieldset>';
                                $html.='<legend>墓位定购信息</legend>';
                               $html.=' <div class="zftanlea">';
                                   $html.=' <div>联系人：'.$arr['name'].'</div>';
                                   $html.=' <div>故者姓名：'.$arr['dead_name'].'</div>';
                                   $html.=' <div>联系电话：'.$arr['tel'].'</div>';
                                $html.='</div>';
                                $html.='<div class="zftanlea">';
                                   $html.=' <div>墓位原价：'.$arr['price'].'元</div>';
                                   $html.=' <div>成交价格：'.$arr['money'].'元</div>';
                                   $html.=' <div>应付（已付）款总额：'.$arr['pay_sum_money'].'元</div>';
                                   $html.=' <div>应付（已付）管理费总额：'.$arr['manage_sum_money'].'元</div>';
                                   $html.=' <div>是否已付费：已付款</div>';
                                $html.='</div>';
                                $html.='<div class="zftanlea">';
                                    $html.='<div>购墓日期：'.date('Y-m-d',$arr['settime']).'</div>';
                                    $html.='<div>使用开始：'.date('Y-m-d',$arr['starttime']).'</div>';
                                    $html.='<div>使用结束：'.date('Y-m-d',$arr['endtime']).'</div>';                             
                                $html.='</div>';
                            $html.='</fieldset>';
                        $html.='</form>';
                    $html.='</div>';
                    $html.='<div class="zftanri">';
                        $html.='<form>';
                            $html.='<fieldset>';
                                $html.='<legend>票据信息</legend>';
                                $html.='<div class="zftanria">';
                                    $html.='<div class="zftanrib">';
                                        $html.='<p>收费金额：</p>';
                                        $html.='<input type="text">';
                                        $html.='<button type="button" onclick="jsdtc()" class="zftank">查看以往碑文计算单</button>';
                                    $html.='</div>';
                                    $html.='<div class="zftanric">';
                                       $html.=' <p>开票日期：</p>';
                                        $html.='<div class="zftanrica" style="margin-left:9px;">';
                                            $html.='<input class="Wdate" name="settime" value="'.date('Y-m-d',time()).'" type="text" onClick="WdatePicker()" style="width: 141px;">';
                                            $html.='<input type="radio" name="chetime" value="1" checked style="margin-left:18px;">今天';
                                            $html.='<input type="radio" name="chetime" value="2">定购日期';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="zftanrid">';
                                        $html.='<div class="zftanrida">';
                                            $html.='<p>刻字：</p>';
                                            $html.='<select name="kezi" id="kezi">';
                                               $html.=' <option value="2">是</option>';
                                               $html.=' <option value="3">否</option>';
                                            $html.='</select>';
                                        $html.='</div>';
                                        $html.='<div class="zftanridb">';
                                            $html.='<p>立碑封门：</p>';
                                            $html.='<select name="fengmen" id="fengmen">';
                                                $html.=' <option value="2">是</option>';
                                                $html.=' <option value="3">否</option>';
                                            $html.='</select>';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="zftanrid">';
                                        $html.='<div class="zftanrida">';
                                           $html.=' <p>贴金箔：</p>';
                                            $html.='<select name="jinbo" id="jinbo">';
                                                $html.=' <option value="2">是</option>';
                                                $html.=' <option value="3">否</option>';
                                            $html.='</select>';
                                        $html.='</div>';
                                        $html.='<div class="zftanridb">';
                                           $html.=' <p>家族台阶：</p>';
                                            $html.='<select name="taijie" id="taijie">';
                                                $html.=' <option value="2">是</option>';
                                                $html.=' <option value="3">否</option>';
                                           $html.=' </select>';
                                        $html.='</div>';
                                    $html.='</div>';
                                    $html.='<div class="zftanrid">';
                                        $html.='<div class="zftanrida">';
                                            $html.='<p>瓷像：</p>';
                                            $html.='<select name="cixiang" id="cixiang">';
                                                $html.=' <option value="2">是</option>';
                                                $html.=' <option value="3">否</option>';
                                            $html.='</select>';
                                        $html.='</div>';
                                        $html.='<div class="zftanridb">';
                                           $html.=' <p>墓穴装饰：</p>';
                                            $html.='<select name="zhaungshi" id="zhaungshi">';
                                                $html.=' <option value="2">是</option>';
                                                $html.=' <option value="3">否</option>';
                                           $html.=' </select>';
                                       $html.=' </div>';
                                    $html.='</div>';
                                    $html.='<div class="zftanrid">';
                                        $html.='<div class="zftanrida">';
                                           $html.=' <p>不干胶：</p>';
                                           $html.=' <select name="bzj" id="bzj">';
                                                $html.=' <option value="2">是</option>';
                                                $html.=' <option value="3">否</option>';
                                           $html.=' </select>';
                                        $html.='</div>';
                                        $html.='<div class="zftanridb">';
                                            $html.='<p>礼仪服务：</p>';
                                            $html.='<select name="liyi" id="liyi">';
                                                $html.=' <option value="2">是</option>';
                                                $html.=' <option value="3">否</option>';
                                            $html.='</select>';
                                        $html.='</div>';
                                    $html.='</div>';
                                   $html.=' <div class="zftanbz">';
                                       $html.=' <p>备注：</p>';
                                        $html.='<div class="beizhu">';
                                           $html.=' <textarea></textarea>';
                                            $html.='<div class="bzmore">';
                                               $html.='<button type="button" onclick="subzf('.$info['id'].')" class="bzmorea">保存</button>';
                                               $html.='<button type="button" onclick="closezf()" class="bzmoreb">取消</button>';
                                            $html.='</div>';
                                        $html.='</div>';
                                    $html.='</div>';
                                $html.='</div>';
                            $html.='</fieldset>';
                        $html.='</form>';
                    $html.='</div>';
                $html.='</div>';
                $html.='<div class="zftancz">';
                   $html.=' <form>';
                       $html.=' <fieldset>';
                          $html.=' <legend>操作提示</legend>';
                       $html.=' </fieldset>';
                   $html.=' </form>';
                $html.='</div>';
            $html.='</div>';
        return $html;   
    }
    static public function select_buy_ding($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->where(['a.id'=>$info['id']])->find();
        $cem_status=_Tpl::tlist(9);//墓位状态
        $cem_mat=_Tpl::tlist(3);//墓位材料
        $cem_sty=_Tpl::tlist(2);//墓位样式
        $html='';
        $html.='<div class="ydtan" style="display:block;">';
            $html.='<div class="tanfs">';
                $html.='<form>';
                    $html.='<fieldset>';
                        $html.='<legend>墓位信息</legend>';
                        $html.='<div class="tanfsa">';
                            $html.='<p>您选择的是：'.$arr['long_title'].'|墓位样式：'.$cem_sty[$arr['style']]['title'].'</p>';
                            $html.='<div class="tanfsb">';
                                $html.='<div>墓位长：'.$arr['width'].'米</div>';
                                $html.='<div>墓位宽：'.$arr['length'].'米</div>';
                                $html.='<div>价格：'.$arr['price'].'</div>';
                                $html.='<div>墓位材质：'.$cem_mat[$arr['material']]['title'].'</div>';
                                $html.='<div>墓位状态：'.$cem_status[$arr['status']]['title'].'</div>';
                            $html.='</div>';
                        $html.='</div>';
                    $html.='</fieldset>';
                $html.='</form>';
            $html.='</div>';
            $html.='<div class="tangs">';
                $html.='<form>';
                    $html.='<fieldset>';
                        $html.='<legend>墓位预订信息</legend>';
                        $html.='<div class="tangsa">';
                            $html.='<div class="tangsb">';
                                $html.='<div>成交价：'.$arr['money'].'元</div>';
                                $html.='<div>预付款：'.$arr['reserve_money'].'元</div>';
                                $shengyu=$arr['money']-$arr['reserve_money'];
                                $html.='<div>剩余款：'.$arr['unpaid_money'].'元</div>';
                                $html.='<div>预订日期：'.date('Y-m-d',$arr['reserve_date']).'</div>';
                            $html.='</div>';
                            $html.='<div class="tangsc">';
                                $html.='<div>联系人：'.$arr['name'].'</div>';
                                $html.='<div>身份证：'.$arr['idcard'].'</div>';
                                $html.='<div>联系电话：'.$arr['tel'].'</div>';
                                $html.='<div>过期日期：'.date('Y-m-d',$arr['remind_date']).'</div>';
                            $html.='</div>';
                       $html.=' </div>';
                    $html.='</fieldset>';
                $html.='</form>';
            $html.='</div>';
            $html.='<div class="ydtana">';
                $html.='<div class="ydtanb">';
                    $html.='<div onclick="tc2_show();">修改预订墓位信息</div>';
                    $html.='<div onclick="tc3_show();">交清余款（购墓）</div>';
                    $html.='<div onclick="setqx()">取消预订</div>';
                $html.='</div>';
                $html.='<div class="ydtanc" onclick="setqxclose()">退出</div>';
            $html.='</div>';
        $html.='</div>';
        return $html;
    }
    static public function select_buy_ding_buy($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->join('dead d','a.id = d.cem_info_id')->where(['a.id'=>$info['id']])->find();
        $user = self::table('staff')->field('id,nickname')->select();
        $tpl = self::table('tpl')->where(['type'=>4])->field('id,title')->select();
        $html='';
        $html.='<div class="whtan" style="display:block;">';
            $html.='<div class="whtana">';
                $html.='<form>';
                    $html.='<fieldset>';
                        $html.='<legend>墓位预订信息</legend>';
                        $html.='<div class="whtanb">';
                            $html.='<div class="whtand">';
                                $html.='<p>墓位全称：</p>';
                                $html.='<input type="hidden" value="'.$info['id'].'" id="seid"/>';
                                $html.='<input type="text" value="'.$arr['long_title'].'" disabled/>';
                                $html.='<i></i>';
                            $html.='</div>';
                            $html.='<div class="whtand">';
                                $html.='<p>预定日期：</p>';
                                $html.='<input class="Wdate" name="reserve_date" value="'.date('Y-m-d',$arr['reserve_date']).'" type="text" onClick="WdatePicker()">';
                                $html.='<i></i>';
                            $html.='</div>';
                            $html.='<div class="whtand">';
                                $html.='<p>提醒日期：</p>';
                                $html.='<input class="Wdate" name="remind_date" type="text" value="'.date('Y-m-d',$arr['remind_date']).'"  onClick="WdatePicker()">';
                                $html.='<i></i>';
                            $html.='</div>';
                       $html.=' </div>';
                        $html.='<div class="whtanb">';
                            $html.='<div class="whtand">';  
                                $html.='<p>原始价格：</p>';
                                $html.='<input type="text" value="'.$arr['price'].'" disabled/>';
                                $html.='<i></i>';
                            $html.='</div>';
                            $html.='<div class="whtand">';
                               $html.=' <p>成交价格：</p>';
                               $html.=' <input type="text" value="'.$arr['money'].'" disabled/>';
                               $html.=' <i>*</i>';
                           $html.=' </div>';
                            $html.='<div class="whtand">';
                                $html.='<p>预订金额：</p>';
                                $html.='<input type="text" value="'.$arr['reserve_money'].'" disabled/>';
                                $html.='<i>*</i>';
                            $html.='</div>';
                        $html.='</div>';
                        $html.='<div class="whtanb">';
                            $html.='<div class="whtand">';
                                $html.='<p>补交金额：</p>';
                                $html.='<input type="text" disabled value="'.$arr['unpaid_money'].'"/>';
                                $html.='<i>*</i>';
                            $html.='</div>';
                            $html.='<div class="whtand">';
                               $html.=' <p>余额：</p>';
                               $html.=' <input type="text" value="'.$arr['unpaid_money'].'"  disabled/>';
                                $html.='<i>*</i>';  
                               $html.=' <em>价格单位：（元）</em>';
                            $html.='</div>';
                        $html.='</div>';
                    $html.='</fieldset>';
                $html.='</form>';
            $html.='</div>';
            $html.='<div class="whtane">';
               $html.=' <div class="whtanele">';
                  $html.='  <form>';
                        $html.='<fieldset>';
                            $html.='<legend>联系人信息</legend>';
                            $html.='<div class="whlea">';
                                $html.='<div class="whleb">';
                                    $html.='<p>故者姓名：</p>';
                                    $html.='<input type="text" name="dead_name" value="'.$arr['dead_name'].'"/>';
                                    $html.='<i></i>';
                                $html.='</div>';
                                $html.='<div class="whlec">';
                                    $html.='<p>故者关系：</p>';
                                    $html.='<select name="dead_relationship" id="dead_relationship">';/*'relationship*/
                                        foreach ($tpl as $key => $value) {
                                            if($value['id'] == $arr['relationship']){
                                                $html.=' <option value="'.$value['id'].'" selected>'.$value['title'].'</option>';
                                            }else{
                                                $html.=' <option value="'.$value['id'].'">'.$value['title'].'</option>';    
                                            }
                                        }
                                    $html.='</select>';
                                    $html.='<i>*</i>';
                                $html.='</div>';
                            $html.='</div>';
                            $html.='<div class="whlea">';
                                $html.='<div class="whleb">';
                                   $html.=' <p>联系人姓名：</p>';
                                    $html.='<input type="text" value="'.$arr['name'].'" name="contacts_name"/>';
                                    $html.='<i>*</i>';
                                $html.='</div>';
                                $html.='<div class="whlec">';
                                    $html.='<p>邮政编码：</p>';
                                    $html.='<input type="text" value="'.$arr['postcode'].'" name="contacts_postcode"/>';
                                    $html.='<i></i>';
                                $html.='</div>';
                            $html.='</div>';
                            $html.='<div class="whlea">';
                               $html.=' <div class="whleb">';
                                   $html.=' <p>身份证号：</p>';
                                    $html.='<input type="text" value="'.$arr['idcard'].'" name="contacts_idcard"/>';
                                    $html.='<i>*</i>';
                                $html.='</div>';
                                $html.='<div class="whlec">';
                                    $html.='<p>性别：</p>';
                                     $html.='<select name="contacts_sex" id="contacts_sex">';
                                     if($arr['sex'] == '1'){
                                        $html.='<option value="1" selected>男</option>';
                                       $html.='<option value="0">女</option>';
                                     }else{
                                        $html.='<option value="1" selected>男</option>';
                                       $html.='<option value="0">女</option>';    
                                     }
                                   $html.='</select>';
                                    $html.='<i>*</i>';
                                $html.='</div>';
                            $html.='</div>';
                            $html.='<div class="whlea">';
                                $html.='<div class="whleb">';
                                   $html.='<p>联系电话：</p>';
                                    $html.='<input type="text" value="'.$arr['tel'].'" name="contacts_tel"/>';
                                    $html.='<i>*</i>';
                               $html.=' </div>';
                                $html.='<div class="whlec">';
                                    $html.='<p>手机：</p>';
                                    $html.='<input type="text" value="'.$arr['phone'].'" name="contacts_phone"/>';
                                    $html.='<i></i>';
                                $html.='</div>';
                            $html.='</div>';
                            $html.='<div class="whlea">';
                               $html.=' <div class="whleb">';
                                    $html.='<p>工作单位：</p>';
                                    $html.='<input type="text" value="'.$arr['workplace'].'" name="contacts_workplace"/>';
                                    $html.='<i></i>';
                                $html.='</div>';
                                $html.='<div class="whlec">';
                                    $html.='<p>年龄：</p>';
                                    $html.='<input type="text" value="'.$arr['age'].'" name="contacts_age"/>';
                                    $html.='<i>*</i>';
                                $html.='</div>';
                            $html.='</div>';
                            $html.='<div class="whlea">';
                                $html.='<div class="whleb">';
                                    $html.='<p>电子邮件：</p>';
                                    $html.='<input type="text" value="'.$arr['email'].'" name="contacts_email"/>';
                                    $html.='<i></i>';
                               $html.=' </div>';
                           $html.=' </div>';
                           $html.=' <div class="whlea">';
                               $html.=' <div class="whleb">';
                                   $html.=' <p>家庭住址：</p>';
                                   $html.=' <input type="text" value="'.$arr['address'].'" name="contacts_address"/>';
                                   $html.=' <i></i>';
                               $html.=' </div>';
                           $html.=' </div>';
                        $html.='</fieldset>';
                    $html.='</form>';
                $html.='</div>';
               $html.=' <div class="whtaneri">';
                    $html.='<form>';
                       $html.='<fieldset>';
                           $html.=' <legend>墓位预订操作信息</legend>';
                            $html.='<div class="whtanyw">';
                                $html.='<p>业务员：</p>';
                               $html.=' <input type="text" value="'.session('nickname').'"/>';
                                $html.='<i>*</i>';
                           $html.='</div>';
                            $html.='<div class="whtanyw">';
                               $html.=' <p>操作员：</p>';
                                $html.=' <select name="salesman" id="salesman">';/*staff*/
                                    foreach ($user as $key => $value) {
                                        $html.=' <option value="'.$value['id'].'">'.$value['nickname'].'</option>';
                                    }
                                $html.=' </select>';
                                $html.='<i>*</i>';
                            $html.='</div>';
                            $html.='<div class="whtanbz">';
                               $html.=' <p>备注：</p>';
                                $html.='<textarea id="beizhu">'.$arr['beizhu'].'</textarea>';
                            $html.='</div>';
                            $html.='<div class="whtanbc">';
                                $html.=' <button class="whtanbca" type="button" onclick="subresding()">保存</button>';
                                $html.='  <button class="whtanbcb" type="button" onclick="closeresding()">取消</button>';
                            $html.='</div>';
                            $html.='<button type="button" class="contc whtandy" onclick="printyd()">打印墓位预订单</button>';
                        $html.='</fieldset>';
                   $html.=' </form>';
               $html.=' </div>';
           $html.=' </div>';
            $html.='<div class="whtancz">';
               $html.=' <form>';
                    $html.='<fieldset>';
                       $html.=' <legend>操作提示</legend>';
                   $html.='</fieldset>';
                $html.='</form>';
            $html.='</div>';
        $html.='</div>';
        return $html;
    }
    static public function select_buy_type($info){
        $arr=self::where(['id'=>$info['id']])->find();
        $cem_status=_Tpl::tlist(9);//墓位状态
        $cem_mat=_Tpl::tlist(3);//墓位材料  
        $html='';
        $html.='<div class="ktan" style="display:block;">';
           $html.='<div class="ktana">';
               $html.='<p>您选择的是：<span class="long_title">'.$arr['long_title'].'</span></p>';
          $html.=' </div>';
           $html.='<div class="ktanb">';
              $html.=' <div>墓位长：<span class="c_width">'.$arr['width'].'<span>米</span></span></div>';
               $html.='<div>墓位宽：<span class="c_height"> '.$arr['length'].' <span>米</span></span></div>';
               $html.='<div>价格：<span class="c_width"> '.$arr['price'].'<span></span></span></div>';
               $html.='<div>墓位材质：<span class="c_width">：'.$cem_mat[$arr['material']]['title'].'<span></span></span></div>';
               $html.='<div>墓位状态：<span class="c_width">'.$cem_status[$arr['status']]['title'].'<span></span></span></div>';
           $html.='</div>';
           $html.='<div class="ktanc">';
               $html.=' <div class="ktanca" onclick="ydmw();">预订墓位</div>';
               $html.='<div class="ktancb" onclick="zjgm()">直接购墓</div>';
               $html.='<div class="ktancb" onclick="suoding()">墓位锁定</div>';
           $html.='</div>';
        $html.='</div>';
        return $html;
    }
    //墓位预订
    static public function reserve($info){
        $arr=self::where(['id'=>$info['id']])->find();
        if($arr['suo'] == '3'){
            $tpl = self::table('tpl')->where(['type'=>4])->field('id,title')->select();
            $user = self::table('staff')->field('id,nickname')->select();
            $html='';
            $html.='<form class="add_row" method="post">';
            $html.='<div class="whtan" style="display:block;">';
               $html.='<div class="whtana">';
                       $html.='<fieldset>';
                          $html.=' <legend>墓位预订信息</legend>';
                           $html.='<div class="whtanb">';
                               $html.='<div class="whtand">';
                                   $html.='<p>墓位全称：</p>';
                                   $html.='<input type="hidden" value="'.$info['id'].'" id="seid"/>';
                                   $html.='<input type="hidden"  id="s_staff_id"/>';
                                   $html.='<input type="hidden"  value="3" id="s_sta"/>';
                                   $html.='<input type="hidden"  id="s_lv"/>';
                                   $html.='<input type="hidden"  id="price_m"/>';
                                   $html.='<input type="hidden"  id="money_m"/>';
                                   $html.='<input type="text" value="'.$arr['long_title'].'" readonly  style="background:#c6c6c6;"/>';
                                   $html.='<i></i>';
                               $html.='</div>';
                               $html.='<div class="whtand">';
                                   $html.='<p>预定日期：</p>';
                                   $html.=' <input class="Wdate" name="reserve_date" type="text" onClick="WdatePicker()">';
                                   $html.='<i></i>';
                               $html.='</div>';
                               $html.='<div class="whtand">';
                                   $html.='<p>提醒日期：</p>';
                                 $html.='<input class="Wdate" name="remind_date" type="text" onClick="WdatePicker()">';
                                  $html.=' <i></i>';
                               $html.='</div>';
                           $html.='</div>';
                           $html.='<div class="whtanb">';
                               $html.='<div class="whtand">';
                                   $html.='<p>原始价格：</p>';
                                   $html.='<input type="text" value="'.$arr['price'].'" readonly id="blurprice" style="background:#c6c6c6;"/>';
                                   $html.='<i></i>';
                               $html.='</div>';
                               $html.='<div class="whtand">';
                                   $html.='<p>成交价格：</p>';
                                   $html.='<input type="text" name="money" id="money" onblur="blurmoney()"/>';
                                   $html.='<i>*</i>';
                               $html.='</div>';
                              $html.=' <div class="ktand">';
                                   $html.='价格单位：（元）';
                               $html.='</div>';
                           $html.='</div>';
                           $html.='<div class="whtanb">';
                               $html.='<div class="whtand">';
                                  $html.=' <p>预订金额：</p>';
                                  $html.=' <input type="text" name="reserve_money" id="reserve_money" onblur="reservemoney()"/>';
                                  $html.=' <i>*</i>';
                               $html.='</div>';
                               $html.='<div class="whtand">';
                                   $html.='<p>余额：</p>';
                                   $html.='<input type="text" name="unpaid_money" />';
                                  $html.=' <i>*</i>';
                               $html.='</div>';
                               $html.='<button class="ktane" id="shouquan" type="button" onclick="zksq()" style="color:#c6c6c6;" disabled>折扣授权</button>';
                           $html.='</div>';
                       $html.='</fieldset>';
               $html.='</div>';
               $html.='<div class="whtane">';
                  $html.=' <div class="whtanele">';

                          $html.=' <fieldset>';
                              $html.=' <legend>联系人信息</legend>';
                               $html.='<div class="whlea">';
                                   $html.='<div class="whleb">';
                                      $html.=' <p>故者姓名：</p>';
                                      $html.=' <input type="text" name="dead_name" />';
                                       $html.='<i></i>';
                                   $html.='</div>';
                                   $html.='<div class="whlec">';
                                       $html.=' <p>故者关系：</p>';
                                       $html.='<select name="dead_relationship" id="dead_relationship">';/*'relationship*/
                                            foreach ($tpl as $key => $value) {
                                                $html.=' <option value="'.$value['id'].'">'.$value['title'].'</option>';
                                            }
                                       $html.='</select>';
                                       $html.='<i></i>';
                                   $html.='</div>';
                              $html.=' </div>';
                               $html.='<div class="whlea">';
                                   $html.='<div class="whleb">';
                                       $html.='<p>联系人姓名：</p>';
                                       $html.='<input type="text" name="contacts_name"/>';
                                       $html.='<i>*</i>';
                                   $html.='</div>';
                                   $html.='<div class="whlec">';
                                       $html.='<p>邮政编码：</p>';
                                       $html.='<input type="text" value="150036" name="contacts_postcode"/>';
                                       $html.='<i>*</i>';
                                   $html.=' </div>';
                               $html.='</div>';
                               $html.='<div class="whlea">';
                                  $html.=' <div class="whleb">';
                                       $html.='<p>身份证号：</p>';
                                       $html.='<input type="text" name="contacts_idcard"  />';
                                       $html.='<i>*</i>';
                                  $html.=' </div>';
                                   $html.='<div class="whlec">';
                                       $html.='<p>性别：</p>';
                                       $html.='<select name="contacts_sex" id="contacts_sex">';
                                           $html.='<option value="1">男</option>';
                                           $html.='<option value="0">女</option>';
                                       $html.='</select>';
                                       $html.='<i>*</i>';
                                   $html.='</div>';
                               $html.='</div>';
                               $html.='<div class="whlea">';
                                   $html.='<div class="whleb">';
                                      $html.=' <p>联系电话：</p>';
                                       $html.='<input type="text" name="contacts_tel" menlenght="12"/>';
                                       $html.='<i>*</i>';
                                   $html.='</div>';
                                   $html.='<div class="whlec">';
                                       $html.='<p>手机：</p>';
                                       $html.='<input type="text" name="contacts_phone"  menlenght="11"/>';
                                       $html.='<i></i>';
                                   $html.='</div>';
                               $html.='</div>';
                               $html.='<div class="whlea">';
                                   $html.='<div class="whleb">';
                                       $html.='<p>工作单位：</p>';
                                       $html.='<input type="text" name="contacts_workplace" />';
                                       $html.='<i></i>';
                                   $html.='</div>';
                                   $html.='<div class="whlec">';
                                       $html.='<p>年龄：</p>';
                                       $html.='<input type="text"  name="contacts_age"/>';
                                       $html.='<i>*</i>';
                                   $html.=' </div>';
                               $html.='</div>';
                               $html.='<div class="whlea">';
                                   $html.='<div class="whleb">';
                                       $html.='<p>电子邮件：</p>';
                                       $html.='<input type="text" name="contacts_email" />';
                                       $html.='<i></i>';
                                   $html.='</div>';
                               $html.='</div>';
                               $html.='<div class="whlea">';
                                  $html.=' <div class="whleb">';
                                       $html.='<p>家庭住址：</p>';
                                       $html.='<input type="text"  name="contacts_address" />';
                                       $html.='<i></i>';
                                   $html.='</div>';
                               $html.='</div>';
                          $html.=' </fieldset>';

                   $html.=' </div>';
                   $html.=' <div class="whtaneri">';

                           $html.=' <fieldset>';
                               $html.=' <legend>墓位预订操作信息</legend>';
                               $html.=' <div class="whtanyw">';
                                   $html.=' <p>操作员：</p>';
                                   $html.=' <input type="text" value="'.session('nickname').'" readonly/>';
                                   $html.=' <i>*</i>';
                               $html.=' </div>';
                               $html.=' <div class="whtanyw">';
                                   $html.=' <p>业务员：</p>';
                                   $html.=' <select name="salesman" id="salesman">';/*staff*/
                                        foreach ($user as $key => $value) {
                                            $html.=' <option value="'.$value['id'].'">'.$value['nickname'].'</option>';
                                        }
                                   $html.=' </select>';
                                  $html.='  <i>*</i>';
                               $html.=' </div>';
                               $html.=' <div class="whtanbz">';
                                   $html.=' <p>备注：</p>';
                                  $html.='  <textarea id="beizhu"></textarea>';
                               $html.=' </div>';
                               $html.=' <div class="whtanbc">';
                                   $html.=' <button class="whtanbca" type="button" id="usubmit" onclick="subres()" style="color:#c6c6c6;" disabled>保存</button>';
                                  $html.='  <button class="whtanbca" type="button" onclick="closeres()">取消</button>';
                               $html.=' </div>';
                               $html.=' <button type="button" class="contc whtandy" onclick="printyd()">打印墓位预订单</button>';
                          $html.='  </fieldset>';

                   $html.=' </div>';
               $html.=' </div>';
              $html.='  <div class="whtancz">';
                       $html.=' <fieldset>';
                           $html.=' <legend>操作提示</legend>';
                           $html.=' <div id="shouquantishi" style="color:red;"></div>';
                      $html.='  </fieldset>';
               $html.=' </div>';
               $html.=' </form>';
        }else{
            $html='2';
        }
        return $html;
    }
    //授权折扣
    static public function reserve_zksq($info){
        $html='';
        $html.='<div class="whtan" style="display:block;width: 458px;height: 348px;    margin-left: -232px;margin-top: -87px;height: 170px;">';
            $html.='<div class="whtane">';
               $html.=' <div class="whtaneri" style="width: 390px;margin: 20px;">';
                    $html.='<form>';
                       $html.='<fieldset>';
                           $html.=' <legend>授权信息</legend>';
                           $html.='<div class="whtanyw">';
                                $html.='<p style="width: 135px;">【授权用户名】：</p>';
                               $html.=' <div><input type="text" id="uacc" ></div>';
                            $html.='</div>';
                            $html.='<div class="whtanyw">';
                                $html.='<p style="width: 135px;">【密 码】：</p>';
                               $html.='<div><input type="password" id="upass" ></div>';
                            $html.='</div>';
                            $html.='<div class="whtanbc">';
                                $html.=' <button class="whtanbca" type="button" onclick="setacc()" style="margin-left: 106px;">激活</button>';
                                $html.='  <button class="whtanbcb" type="button" onclick="closacc()">取消</button>';
                            $html.='</div>';
                        $html.='</fieldset>';
                   $html.=' </form>';
               $html.=' </div>';
           $html.=' </div>';
        $html.='</div>';
        return $html;
    }
    //授权折扣
    static public function reserve_zksqs($info){
        $html='';
        $html.='<div class="whtan" style="display:block;width: 458px;height: 348px;    margin-left: -232px;margin-top: -87px;height: 170px;">';
            $html.='<div class="whtane">';
               $html.=' <div class="whtaneri" style="width: 390px;margin: 20px;">';
                    $html.='<form>';
                       $html.='<fieldset>';
                           $html.=' <legend>授权信息</legend>';
                           $html.='<div class="whtanyw">';
                                $html.='<p style="width: 135px;">【授权用户名】：</p>';
                               $html.=' <div><input type="text" id="uacc" ></div>';
                            $html.='</div>';
                            $html.='<div class="whtanyw">';
                                $html.='<p style="width: 135px;">【密 码】：</p>';
                               $html.='<div><input type="password" id="upass" ></div>';
                            $html.='</div>';
                            $html.='<div class="whtanbc">';
                                $html.=' <button class="whtanbca" type="button" onclick="setaccs()" style="margin-left: 106px;">激活</button>';
                                $html.='  <button class="whtanbcb" type="button" onclick="closacc()">取消</button>';
                            $html.='</div>';
                        $html.='</fieldset>';
                   $html.=' </form>';
               $html.=' </div>';
           $html.=' </div>';
        $html.='</div>';
        return $html;
    }
    //续交管理费
    static public function reserve_xjglf($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->join('dead d','a.id = d.cem_info_id')->where(['a.id'=>$info['id']])->find();
        $user = self::table('staff')->field('id,nickname')->where(['id'=>$arr['salesman']])->find();
        $tpl = self::table('tpl')->where(['type'=>4])->field('id,title')->select();
        $html='';
        $html.='<div class="xjglftan" style="display:block;height: 353px;margin-top: -176px;">';
            $html.=' <div class="gztana">';
                 $html.='<form>';
                     $html.='<fieldset>';
                         $html.='<legend>墓位定购信息</legend>';
                         $html.='<div class="gltana">';
                             $html.='<div class="gltanaa">';
                                 $html.='<p>墓位全称：</p>';
                                 $html.='<input type="text" value="'.$arr['long_title'].'" disabled/><input type="hidden" value="'.$info['id'].'" id="xujiaoid"/>';
                             $html.='</div>';
                             $html.='<div class="gltanab">';
                             $html.='    <p>墓位费：</p>';
                                $html.=' <input type="text" value="'.$arr['money'].'" disabled/>';
                             $html.='</div>';
                             $html.='<div class="gltanac">';
                                 $html.='<p>定购日期：</p>';
                                 $html.='<input value="'.date('Y-m-d',$arr['settime']).'" type="text" disabled>';
                             $html.='</div>';
                         $html.='</div>';
                         $html.='<div class="gltanb">';
                             $html.='<div class="gltanba">';
                                 $html.='<p>已付管理费总额：</p>';
                                 $html.='<input type="text" value="'.$arr['manage_sum_money'].'" disabled/>';
                             $html.='</div>';
                             $html.='<div class="gltanbb">';
                                $html.=' <p>已付款总额：</p>';
                                 $html.='<input type="text" value="'.$arr['pay_sum_money'].'" disabled/>';
                             $html.='</div>';
                             $html.='<div class="gltanbc">';
                                 $html.='<p>使用开始：</p>';
                                 $html.='<input class="Wdate" name="starttime" type="text" onClick="WdatePicker()">';
                             $html.='</div>';
                         $html.='</div>';
                         $html.='<div class="gltanc">';
                             $html.='<div class="gltanca">';
                                 $html.='<p>管理费到期时间：</p>';
                                 $html.='<input type="text" value="'.date('Y-m-d',$arr['manage_time']).'" disabled/>';
                             $html.='</div>';
                             $html.='<div class="gltancb">';
                                $html.='<p>本次续交：</p>';
                                $html.='<input type="text" class="gltancba" name="manage_money" id="manage_money" onblur="glmone()">';
                                $html.=' <em>X</em>';
                                $html.='<input type="text" class="gltancbb" name="manage_year" id="manage_year" onchange="glmtwo()">';
                                $html.='<b>年=</b>';
                                $html.='<input type="text" class="gltancbc" name="manage_sum_money" id="manage_sum_money" disabled>';
                             $html.='</div>';
                             $html.='<div class="gltancc">';
                                 $html.='<p>使用结束：</p>';
                                 $html.='<input class="Wdate" name="endtime" type="text" onClick="WdatePicker()">';
                             $html.='</div>';
                         $html.='</div>';
                     $html.='</fieldset>';
                $html.='</form>';
             $html.='</div>';
             $html.='<div class="gztanj" style="margin-top:20px;">';
                 $html.='<div class="gztanjle">';
                     $html.='<div class="gztanja">';
                         $html.='<form>';
                             $html.='<fieldset>';
                                 $html.='<legend>联系人信息</legend>';
                                 $html.='<div class="gztanjc">';
                                     $html.='<div class="gztanjca">';
                                         $html.='<p>联系人姓名：</p>';
                                         $html.='<input type="text" value="'.$arr['name'].'" disabled/>';
                                         $html.='<i>*</i>';
                                     $html.='</div>';
                                    $html.=' <div class="gztanjcb">';
                                         $html.='<p>故者关系：</p>';
                                         $html.='<select disabled>';
                                            foreach ($tpl as $key => $value) {
                                                if($value['id'] == $arr['relationship']){
                                                    $html.=' <option value="'.$value['id'].'" selected>'.$value['title'].'</option>';
                                                }else{
                                                    $html.=' <option value="'.$value['id'].'">'.$value['title'].'</option>';
                                                }
                                            }
                                         $html.='</select>';
                                         $html.='<i>*</i>';
                                     $html.='</div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjd">';
                                     $html.='<div class="gztanjda">';
                                         $html.='<p>身份证号：</p>';
                                         $html.='<input type="text" value="'.$arr['idcard'].'" disabled/>';
                                        $html.=' <i>*</i>';
                                     $html.='</div>';
                                     $html.='<div class="gztanjdb">';
                                         $html.='<p>性别：</p>';
                                         $html.='<select disabled>';
                                         if($arr['sex']==1){
                                            $html.=' <option>男</option>';
                                         }else{
                                            $html.=' <option>女</option>';
                                         }
                                         $html.='</select>';
                                         $html.='<i>*</i>';
                                     $html.='</div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanje">';
                                     $html.='<div class="gztanjea">';
                                         $html.='<p>联系电话：</p>';
                                         $html.='<input type="text" value="'.$arr['tel'].'" disabled/>';
                                         $html.='<i>*</i>';
                                     $html.='</div>';
                                     $html.='<div class="gztanjeb">';
                                         $html.='<p>手机：</p>';
                                         $html.='<input type="text" value="'.$arr['phone'].'" disabled/>';
                                        $html.=' <i></i>';
                                     $html.='</div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjg">';
                                     $html.='<div class="gztanjga">';
                                         $html.='<p>工作单位：</p>';
                                         $html.='<input type="text" type="'.$arr['workplace'].'" disabled />';
                                     $html.='</div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjgs">';
                                     $html.='<div class="gztanjgas">';
                                         $html.='<p>电子邮件：</p>';
                                         $html.='<input type="text" type="'.$arr['email'].'"  disabled/>';
                                     $html.='</div>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjh">';
                                     $html.='<div class="gztanjha">';
                                        $html.=' <p>家庭住址：</p>';
                                         $html.='<input type="text" value="'.$arr['address'].'" disabled/>';
                                     $html.='</div>';
                                 $html.='</div>';
                             $html.='</fieldset>';
                         $html.='</form>';
                     $html.='</div>';
                 $html.='</div>';
                 $html.='<div class="gztanjri">';
                     $html.='<form>';
                        $html.=' <fieldset>';
                             $html.='<legend>故者落葬操作信息</legend>';
                             $html.='<div class="gztanjria">';
                                  $html.='<p>业务员：</p>';
                                 $html.=' <input type="text" value="'.$user['nickname'].'" disabled/>';
                                 $html.=' <i>*</i>';
                             $html.='</div>';
                             $html.='<div class="gztanjric">';
                                  $html.=' <p>备注：</p>';
                                  $html.=' <textarea disabled>'.$arr['beizhu'].'</textarea>';
                             $html.='</div>';
                             $html.='<div class="gztanjrid">';
                                 $html.='<div class="gztanjrida" onclick="setxujiao()">保存</div>';
                                 $html.='<div class="gztanjridb" onclick="closexujiao()">取消</div>';
                            $html.=' </div>';
                        $html.='</fieldset>';
                    $html.=' </form>';
                 $html.='</div>';
             $html.='</div>';
             $html.='<div class="gztani">';
                 $html.='<form>';
                    $html.=' <fieldset>';
                        $html.=' <legend>操作提示</legend>';
                    $html.=' </fieldset>';
                 $html.='</form>';
             $html.='</div>';
         $html.=' </div>';
        return $html;
    }
    static public function reserve_zjgm_jie($info){
        $arr=self::alias('a')->join('contacts b','a.contacts_id = b.id')->join('dead d','a.id = d.cem_info_id')->where(['a.id'=>$info['id']])->find();
        $user = self::table('staff')->field('id,nickname')->select();
        $tpl = self::table('tpl')->where(['type'=>4])->field('id,title')->select();
        $html='';
        $html.=' <form>';
        $html.='<div class="dgtan" style="display:block;">';
            $html.='<div class="dgtana">';
                    $html.='<fieldset>';
                        $html.='<legend>墓位定购信息</legend>';
                        $html.='<div class="dgtanb">';
                            $html.='<div class="dgtanba">';
                               $html.=' <p>墓位全称：</p>';
                               $html.='<input type="hidden" id="setid" value="'.$info['id'].'" />';
                               $html.='<input type="hidden" id="usercardimg" />';
                               $html.=' <input type="text" value="'.$arr['long_title'].'" disabled>';
                            $html.='</div>';
                            $html.='<div class="dgtanbb" style="margin-left: 2px;">';
                                $html.='<p>墓位费：</p>';
                                $html.='<input type="text" value="'.$arr['money'].'" disabled>';
                            $html.='</div>';
                            $html.='<div class="dgtanbc" style="    margin-left: 96px;">';
                                $html.='<p>定购日期：</p>';
                                $html.='<input class="Wdate" name="settime" id="settime" type="text" onClick="WdatePicker()">';
                           $html.=' </div>';
                        $html.='</div>';
                        $html.='<div class="dgtanc">';
                            $html.='<div class="dgtanca" style="margin-left: 0;">';
                                $html.='<p>预交金额：</p>';
                                $html.='<input type="text" value="'.$arr['reserve_money'].'" disabled>';
                            $html.='</div>';
                            $html.='<div class="dgtancb" style="    margin-left: 96px;">';
                            $yue=$arr['money']-$arr['reserve_money'];
                                $html.=' <p>管理费：</p>';
                                $html.='<input type="text" class="dgtancba" name="manage_money" id="manage_money" onblur="glmone()">';
                                $html.=' <em>X</em>';
                                $html.='<input type="text" class="dgtancbb" name="manage_year" id="manage_year" onchange="glmtwo()">';
                                $html.='<b>年=</b>';
                                $html.='<input type="text" class="dgtancbc" name="manage_sum_money" id="manage_sum_money" disabled>';
                            $html.='</div>';
                            $html.='<div class="dgtancc" style="margin-left: 22px;">';
                                $html.='<p>使用开始：</p>';
                                $html.='<input class="Wdate" name="starttime" id="starttime" type="text" onClick="WdatePicker()">';
                           $html.=' </div>';
                        $html.='</div>';
                       $html.=' <div class="dgtand">';
                            $html.='<div class="dgtanda zjtana">';
                                $html.='<p>余额：</p>';
                                $html.=' <input type="hidden" value="'.$arr['unpaid_money'].'" id="yuee"/>';
                               $html.=' <input type="text" value="'.$arr['unpaid_money'].'" disabled />';
                            $html.='</div>';
                            
                            $html.='<div class="whtand" style="margin-left: 124px;">';
                                $html.='<p>应付总额：</p>';
                                $html.='<input type="text" name="pay_sum_money" id="pay_sum_money" disabled/>';
                            $html.='</div>';
                            $html.='<div class="dgtandc">';
                                $html.='<p>使用结束：</p>';
                                $html.='<input class="Wdate" name="endtime" id="endtime" type="text" onClick="WdatePicker()">';
                            $html.='</div>';
                        $html.='</div>';
                    $html.='</fieldset>';
            $html.='</div>';
            $html.='<div class="gztanj" style="margin-top: 20px;">';
                $html.='<div class="gztanjle">';
                    $html.='<div class="gztanja">';
                            $html.='<fieldset>';
                                $html.='<legend>联系人信息</legend>';
                               $html.=' <div class="gztanjc">';
                                    $html.='<div class="gztanjca">';
                                      $html.=' <p>故者姓名：</p>';
                                      $html.=' <input type="text" name="dead_name" value="'.$arr['dead_name'].'" />';
                                       $html.='<i></i>';
                                    $html.='</div>';    
                                    $html.='<div class="gztanjca">';
                                        $html.='<p>联系人姓名：</p>';
                                        $html.='<input type="text" name="contacts_name" value="'.$arr['name'].'">';
                                        $html.='<i>*</i>';
                                    $html.='</div>';
                                    $html.='<div class="gztanjcb">';
                                        $html.='<p>故者关系：</p>';
                                        $html.='<select name="dead_relationship" id="dead_relationship">';/*'relationship*/
                                            foreach ($tpl as $key => $value) {
                                                if($value['id'] == $arr['relationship']){
                                                    $html.=' <option value="'.$value['id'].'" selected>'.$value['title'].'</option>';
                                                }else{
                                                    $html.=' <option value="'.$value['id'].'">'.$value['title'].'</option>';
                                                }
                                            }
                                        $html.='</select>';
                                        $html.='<i>*</i>';
                                    $html.='</div>';
                               $html.=' </div>';
                                $html.='<div class="gztanjd">';
                                   $html.=' <div class="gztanjda">';
                                        $html.='<p>身份证号：</p>';
                                        $html.='<input type="text" name="contacts_idcard" value="'.$arr['idcard'].'">';
                                        $html.='<i>*</i>';
                                    $html.='</div>';
                                    $html.='<div class="gztanjdb">';
                                        $html.='<p>性别：</p>';
                                        $html.='<select name="contacts_sex" id="contacts_sex">';
                                        if($arr['sex'] == '1'){
                                            $html.='<option value="1" selected>男</option>';
                                            $html.=' <option value="0">女</option>';
                                        }else{
                                            $html.='<option value="1">男</option>';
                                            $html.=' <option value="0" selected>女</option>';
                                        }
                                        $html.='</select>';
                                        $html.='<i>*</i>';
                                   $html.=' </div>';
                                $html.='</div>';
                                $html.='<div class="gztanje">';
                                   $html.=' <div class="gztanjea">';
                                        $html.='<p>联系电话：</p>';
                                        $html.='<input type="text" name="contacts_tel" value="'.$arr['tel'].'"/>';
                                        $html.='<i>*</i>';
                                    $html.='</div>';
                                    $html.='<div class="gztanjeb">';
                                        $html.='<p>手机：</p>';
                                        $html.='<input type="text" name="contacts_phone" id="mobile" onblur="gmobile()" maxlength="11" value="'.$arr['phone'].'">'; 
                                        $html.='<i></i>';
                                    $html.='</div>';
                                $html.='</div>     ';                         
                                $html.='<div class="gztanje">';
                                    $html.='<div class="gztanjea">';
                                        $html.='<p>工作单位：</p>';
                                        $html.='<input type="text" name="contacts_workplace"  value="'.$arr['workplace'].'"/>';                                      
                                    $html.='</div> ';   
                                    $html.='<div class="gztanjeb" style="margin-left:30px;">';
                                        $html.='<p>年龄：</p>';
                                        $html.='<input type="text" name="contacts_age" id="contacts_age" maxlength="11" value="'.$arr['age'].'">'; 
                                        $html.='<i>*</i>';
                                    $html.='</div>';                                 
                                $html.='</div>';
                                $html.='<div class="gztanjg">';
                                   $html.=' <div class="gztanjga">';
                                       $html.=' <p>电子邮件：</p>';
                                       $html.='<input type="text" name="contacts_email"  value="'.$arr['email'].'"/>';                                    
                                    $html.='</div>    ';                                  
                                $html.='</div>';
                                $html.='<div class="gztanjh">';
                                   $html.=' <div class="gztanjha">';
                                        $html.='<p>家庭住址：</p>';
                                        $html.='<input type="text" name="contacts_address" value="'.$arr['address'].'">   ';                                      
                                    $html.='</div>    ';                                  
                                $html.='</div>';
                           $html.=' </fieldset>';
                    $html.='</div>';
                    $html.='<div class="gztanjb">';
                           $html.=' <fieldset>';
                            $html.='    <legend>操作提示</legend>';
                            $html.='</fieldset>';
                    $html.='</div>';
                $html.='</div>';
                 $html.='<div class="gztanjri">';
                        $html.=' <fieldset>';
                             $html.='<legend>故者落葬操作信息</legend>';
                             $html.='<div class="gztanjria">';
                                 $html.=' <p>操作员：</p>';
                                 $html.=' <input type="text" value="'.session('nickname').'">';
                                 $html.=' <i>*</i>';
                            $html.=' </div> ';
                            $html.=' <div class="gztanjria">';
                                $html.='  <p>业务员：</p>';
                                $html.=' <select name="salesman" id="salesman">';/*staff*/
                                    foreach ($user as $key => $value) {
                                        $html.=' <option value="'.$value['id'].'">'.$value['nickname'].'</option>';
                                    }
                                $html.=' </select>';
                                $html.='  <i>*</i>';
                             $html.='</div>       ';                       
                             $html.='<div class="gztanjric">';
                                   $html.='<p>备注：</p>';
                                  $html.=' <textarea id="beizhu">'.$arr['beizhu'].'</textarea>';
                             $html.='</div>';
                             $html.='<div class="gztanjrid">';
                                $html.=' <button type="button" class="gztanjrida" onclick="subforms()">保存</button>';
                                $html.=' <button type="button" class="gztanjrida" onclick="closeghtml()">取消</button>';
                            $html.=' </div>';
                            $html.=' <button type="button" class="contc gztanjrie" onclick="uicard()">选择身份证扫描件</button>';
                            $html.='<button type="button" class="contc gztanjrie"  onclick="printdz()">打印购墓合同（正）</button>';
                            $html.='  <button type="button" class="contc gztanjrie"  onclick="printdf()">打印购墓合同（反）</button>';
                         $html.='</fieldset>';
                $html.='</div>';
             $html.='</div>';
          $html.='</div>';
          $html.=' </form>';
        return $html;
    }
    //墓位直接订购
    static public function reserve_zjgm($info){
        $arr=self::where(['id'=>$info['id']])->find();
        if($arr['suo'] == '3'){
            $user = self::table('staff')->field('id,nickname')->select();
            $tpl = self::table('tpl')->where(['type'=>4])->field('id,title')->select();
            $html='';
            $html.=' <form>';
            $html.='<div class="dgtan" style="display:block;">';
                $html.='<div class="dgtana">';
                        $html.='<fieldset>';
                            $html.='<legend>墓位定购信息</legend>';
                            $html.='<div class="dgtanb">';
                                $html.='<div class="dgtanba">';
                                   $html.=' <p>墓位全称：</p>';
                                   $html.='<input type="hidden" id="setid" value="'.$info['id'].'" />';
                                   $html.='<input type="hidden" id="usercardimg" />';
                                   $html.='<input type="hidden"  id="s_staff_id"/>';
                                   $html.='<input type="hidden"  value="3" id="s_sta"/>';
                                   $html.='<input type="hidden"  id="s_lv"/>';
                                   $html.='<input type="hidden"  id="price_m_d"/>';
                                   $html.='<input type="hidden"  id="money_m_d"/>';
                                   $html.=' <input type="text" value="'.$arr['long_title'].'" disabled style="background:#c6c6c6;">';
                                $html.='</div>';
                                $html.='<div class="dgtanbb">';
                                    $html.='<p>原始价格：</p>';
                                    $html.='<input type="text" value="'.$arr['price'].'" id="yprice" disabled style="background:#c6c6c6;">';
                                $html.='</div>';
                                $html.='<div class="dgtanbc">';
                                    $html.='<p>定购日期：</p>';
                                    $html.='<input class="Wdate" name="settime" id="settime" type="text" onClick="WdatePicker()">';
                               $html.=' </div>';
                            $html.='</div>';
                            $html.='<div class="dgtanc">';
                                $html.='<div class="dgtanca">';
                                    $html.='<p>墓位费：</p>';
                                    $html.='<input type="text" name="mw_price" id="mw_price" onblur="jcwf()">';
                                $html.='</div>';
                                $html.='<div class="dgtancb">';
                                   $html.=' <p>管理费：</p>';
                                    $html.='<input type="text" class="dgtancba" name="manage_money" id="manage_money" onblur="glmone()">';
                                    $html.=' <em>X</em>';
                                    $html.='<input type="text" class="dgtancbb" name="manage_year" id="manage_year" onchange="glmtwo()">';
                                    $html.='<b>年=</b>';
                                    $html.='<input type="text" class="dgtancbc" name="manage_sum_money" id="manage_sum_money" disabled style="background:#c6c6c6;">';
                                $html.='</div>';
                                $html.='<div class="dgtancc">';
                                    $html.='<p>使用开始：</p>';
                                    $html.='<input class="Wdate" name="starttime" id="starttime" type="text" onClick="WdatePicker()">';
                               $html.=' </div>';
                            $html.='</div>';
                           $html.=' <div class="dgtand">';
                                $html.='<div class="dgtanda zjtana">';
                                    $html.='<p>应付总额：</p>';
                                   $html.=' <input type="text" name="pay_sum_money" id="pay_sum_money" disabled style="background:#c6c6c6;"/>';
                                $html.='</div>';
                                $html.='<div class="dgtandb zjtanb">';
                                    $html.='<p>价格单位：（元）</p>';
                                    $html.='<button type="button" class="zjtanc" id="zshouquan" onclick="zksqs()" disabled style="color:#c6c6c6;">折扣授权</button>';
                                $html.='</div>';
                                $html.='<div class="dgtandc">';
                                    $html.='<p>使用结束：</p>';
                                    $html.='<input class="Wdate" name="endtime" id="endtime" type="text" onClick="WdatePicker()">';
                                $html.='</div>';
                            $html.='</div>';
                        $html.='</fieldset>';
                $html.='</div>';
                $html.='<div class="gztanj" style="margin-top: 20px;">';
                    $html.='<div class="gztanjle">';
                        $html.='<div class="gztanja">';
                                $html.='<fieldset>';
                                    $html.='<legend>联系人信息</legend>';
                                   $html.=' <div class="gztanjc">';
                                        $html.='<div class="gztanjca">';
                                          $html.=' <p>故者姓名：</p>';
                                          $html.=' <input type="text" name="dead_name" />';
                                           $html.='<i></i>';
                                        $html.='</div>';  
                                        $html.='<div class="gztanjca">';
                                            $html.='<p>联系人姓名：</p>';
                                            $html.='<input type="text" name="contacts_name" >';
                                            $html.='<i>*</i>';
                                        $html.='</div>';
                                        $html.='<div class="gztanjcb">';
                                            $html.='<p>故者关系：</p>';
                                            $html.='<select name="dead_relationship" id="dead_relationship">';/*'relationship*/
                                                foreach ($tpl as $key => $value) {
                                                    $html.=' <option value="'.$value['id'].'">'.$value['title'].'</option>';
                                                }
                                            $html.='</select>';
                                            $html.='<i>*</i>';
                                        $html.='</div>';
                                   $html.=' </div>';
                                    $html.='<div class="gztanjd">';
                                       $html.=' <div class="gztanjda">';
                                            $html.='<p>身份证号：</p>';
                                            $html.='<input type="text" name="contacts_idcard">';
                                            $html.='<i>*</i>';
                                        $html.='</div>';
                                        $html.='<div class="gztanjdb">';
                                            $html.='<p>性别：</p>';
                                            $html.='<select name="contacts_sex" id="contacts_sex">';
                                                $html.='<option value="1">男</option>';
                                               $html.=' <option value="0">女</option>';
                                            $html.='</select>';
                                            $html.='<i>*</i>';
                                       $html.=' </div>';
                                    $html.='</div>';
                                    $html.='<div class="gztanje">';
                                        $html.=' <div class="gztanjea">';
                                            $html.='<p>联系电话：</p>';
                                            $html.='<input type="text" name="contacts_tel"/>';
                                            $html.='<i>*</i>';
                                        $html.='</div>';
                                        $html.='<div class="gztanjeb">';
                                            $html.='<p>手机：</p>';
                                            $html.='<input type="text" name="contacts_phone" id="mobile" onblur="gmobile()" maxlength="11">'; 
                                            $html.='<i></i>';
                                        $html.='</div>';
                                    $html.='</div>     ';                         
                                    $html.='<div class="gztanje">';
                                        $html.='<div class="gztanjea">';
                                            $html.='<p>工作单位：</p>';
                                            $html.='<input type="text" name="contacts_workplace" />';                                      
                                        $html.='</div> ';  
                                        $html.='<div class="gztanjeb" style="margin-left:30px;">';
                                            $html.='<p>年龄：</p>';
                                            $html.='<input type="text" name="contacts_age" maxlength="11">'; 
                                            $html.='<i>*</i>';
                                        $html.='</div>';                                  
                                    $html.='</div>';
                                    $html.='<div class="gztanjg">';
                                       $html.=' <div class="gztanjga">';
                                           $html.=' <p>电子邮件：</p>';
                                           $html.='<input type="text" name="contacts_email" />';                                    
                                        $html.='</div>    ';                                  
                                    $html.='</div>';
                                    $html.='<div class="gztanjh">';
                                       $html.=' <div class="gztanjha">';
                                            $html.='<p>家庭住址：</p>';
                                            $html.='<input type="text" name="contacts_address">   ';                                      
                                        $html.='</div>    ';                                  
                                    $html.='</div>';
                               $html.=' </fieldset>';
                        $html.='</div>';
                        $html.='<div class="gztanjb">';
                               $html.=' <fieldset>';
                                $html.='    <legend>操作提示</legend>';
                                $html.=' <div id="zshouquantishi" style="color:red;"></div>';
                                $html.='</fieldset>';
                        $html.='</div>';
                    $html.='</div>';
                     $html.='<div class="gztanjri">';
                            $html.=' <fieldset>';
                                 $html.='<legend>故者落葬操作信息</legend>';
                                 $html.='<div class="gztanjria">';
                                     $html.=' <p>操作员：</p>';
                                     $html.=' <input type="text" value="'.session('nickname').'">';
                                     $html.=' <i>*</i>';
                                $html.=' </div> ';
                                $html.=' <div class="gztanjria">';
                                    $html.='  <p>业务员：</p>';
                                    $html.=' <select name="salesman" id="salesman">';/*staff*/
                                        foreach ($user as $key => $value) {
                                            $html.=' <option value="'.$value['id'].'">'.$value['nickname'].'</option>';
                                        }
                                    $html.=' </select>';
                                    $html.='  <i>*</i>';
                                 $html.='</div>       ';                       
                                 $html.='<div class="gztanjric">';
                                       $html.='<p>备注：</p>';
                                      $html.=' <textarea id="beizhu"></textarea>';
                                 $html.='</div>';
                                 $html.='<div class="gztanjrid">';
                                    $html.=' <button type="button" class="gztanjrida" id="zusubmit" onclick="subform()" disabled style="color:#c6c6c6;">保存</button>';
                                    $html.=' <button type="button" class="gztanjrida" onclick="closeghtml()">取消</button>';
                                $html.=' </div>';
                                $html.=' <button type="button" class="contc gztanjrie"  onclick="uicard()">选择身份证扫描件</button>';
                                 $html.='<button type="button" class="contc gztanjrie"  onclick="printdz()">打印购墓合同（正）</button>';
                               $html.='  <button type="button" class="contc gztanjrie"  onclick="printdf()">打印购墓合同（反）</button>';
                             $html.='</fieldset>';
                    $html.='</div>';
                 $html.='</div>';
              $html.='</div>';
              $html.=' </form>';
        }else{
            $html='2';
        }
        return $html;
    }
    static public function del ($ids) {
        if (empty($ids) || !count($ids) ) {
            return ['status' => false, 'msg' => '请选择要删除的墓位'];
        }
        if (self::where('id', 'in', $ids)->delete() !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    static public function set_huanyuan($info){
        if (self::where('id', $info['id'])->update(['pay_sum_money'=>'','manage_money'=>'','pay_status'=>0,'status'=>38,'update_by'=>'','update_time'=>'','contacts_id'=>0,'reserve_date'=>'','remind_date'=>'','reserve_money'=>'0.00','unpaid_money'=>'','salesman'=>'','remarks'=>'','sta'=>3,'money'=>'0.00','beizhu'=>'','manage_year'=>'','manage_sum_money'=>'0.00','settime'=>'','starttime'=>'','endtime'=>'','mwnum'=>'','lnum'=>'','hnum'=>'']) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }

    static public function set_beizhu($info){
        if (self::where('id', $info['id'])->update(['beizhu'=>$info['beizhu']]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    //续交管理费
    static public function reserve_xujiao_set($info){
        $arr=self::field('manage_money,manage_year,starttime,endtime,manage_time,manage_sum_money')->where(['id'=>$info['eid']])->find();
        $today=$arr['manage_year']+$info['manage_year'];
        $data['manage_money']=$arr['manage_money']+$info['manage_money'];
        $data['manage_sum_money']=$info['manage_money']+$info['manage_money'];
        $data['manage_year']=$today;
        $data['starttime']=strtotime($info['starttime']);
        $data['endtime']=strtotime($info['endtime']);
        $data['manage_time']= time()+3600*8+3600*24*36*$today;//比如5天前的时间
        if (self::where('id', $info['eid'])->update($data) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    ////各渠道来访及成交情况表--有时间
    static public function show_qudao_all_time($arra){
        if($arra['starttime'] != '' && $arra['endtime'] != ''){
            $pai=self::table('come_channel')->where(['pid'=>$arra['cem_id1'],'ppid'=>$arra['cem_id2']])->select();
            $html='';
            $price='';
            foreach ($pai as $key => $value) {
                $lcount=self::table('visit_log')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->count();//来访份数
                $mcount=self::table('visit_log')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and transaction_status=1 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->count();//成交份数
                $user=self::table('visit_log')->field('contacts_id')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->select();
                $sum=0;
                $idstr1='';
                foreach ($user as $key => $vo) {
                    if($key == 0){
                        $idstr1.=$vo['contacts_id'];
                    }else{
                        $idstr1.=','.$vo['contacts_id'];
                    }
                    $buy[$key]=self::where(['contacts_id'=>$vo['contacts_id'],'status'=>44])->count();
                }
                foreach ($buy as $v){
                    $sum+=$v;//成交个数
                }
                $where['contacts_id']=['in',$idstr1];
                $money=self::field('sum(money)')->where($where)->select();
                if($money[0]['sum(money)'] != null){//成交金额
                    $price=$money[0]['sum(money)'];
                }else{
                    $price=0;
                }
                $k=$key+1;
                $html.='<tr class="trtr">';
                    $html.='<td>'.$k.'</td>';
                    $html.='<td>'.$value['title'].'</td>';
                    $html.='<td>'.$lcount.'</td>';
                    $html.='<td>'.$mcount.'</td>';
                    $html.='<td></td>';
                    $html.='<td>'.$sum.'</td>';
                    $html.='<td></td>';
                    $html.='<td>'.$price.'</td>';
                $html.='</tr>';
            }
        }else if($arra['starttime'] != '' && $arra['endtime'] == ''){
            $pai=self::table('come_channel')->where(['pid'=>$arra['cem_id1'],'ppid'=>$arra['cem_id2']])->select();
            $html='';
            $price='';
            foreach ($pai as $key => $value) {
                $lcount=self::table('visit_log')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and come_date>='.strtotime($arra['starttime']))->count();//来访份数
                $mcount=self::table('visit_log')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and transaction_status=1 and come_date>='.strtotime($arra['starttime']))->count();//成交份数
                $user=self::table('visit_log')->field('contacts_id')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and come_date>='.strtotime($arra['starttime']))->select();
                $sum=0;
                $idstr1='';
                $where='';
                foreach ($user as $key => $vo) {
                    if($key == 0){
                        $idstr1.=$vo['contacts_id'];
                    }else{
                        $idstr1.=','.$vo['contacts_id'];
                    }
                    $buy[$key]=self::where(['contacts_id'=>$vo['contacts_id'],'status'=>44])->count();
                }
                foreach ($buy as $v){
                    $sum+=$v;//成交个数
                }
                $where['contacts_id']=['in',$idstr1];
                $money=self::field('sum(money)')->where($where)->select();
                if($money[0]['sum(money)'] != null){//成交金额
                    $price=$money[0]['sum(money)'];
                }else{
                    $price=0;
                }
                $k=$key+1;
                $html.='<tr class="trtr">';
                    $html.='<td>'.$k.'</td>';
                    $html.='<td>'.$value['title'].'</td>';
                    $html.='<td>'.$lcount.'</td>';
                    $html.='<td>'.$mcount.'</td>';
                    $html.='<td></td>';
                    $html.='<td>'.$sum.'</td>';
                    $html.='<td></td>';
                    $html.='<td>'.$price.'</td>';
                $html.='</tr>';
            }
        }else if($arra['starttime'] == '' && $arra['endtime'] != ''){
            $pai=self::table('come_channel')->where(['pid'=>$arra['cem_id1'],'ppid'=>$arra['cem_id2']])->select();
            $html='';
            $price='';
            foreach ($pai as $key => $value) {
                $lcount=self::table('visit_log')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and come_date<='.strtotime($arra['endtime']))->count();//来访份数
                $mcount=self::table('visit_log')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and transaction_status=1 and come_date<='.strtotime($arra['endtime']))->count();//成交份数
                $user=self::table('visit_log')->field('contacts_id')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and come_date<='.strtotime($arra['endtime']))->select();
                $sum=0;
                $idstr1='';
                foreach ($user as $key => $vo) {
                    if($key == 0){
                        $idstr1.=$vo['contacts_id'];
                    }else{
                        $idstr1.=','.$vo['contacts_id'];
                    }
                    $buy[$key]=self::where(['contacts_id'=>$vo['contacts_id'],'status'=>44])->count();
                }
                foreach ($buy as $v){
                    $sum+=$v;//成交个数
                }
                $where['contacts_id']=['in',$idstr1];
                $money=self::field('sum(money)')->where($where)->select();
                if($money[0]['sum(money)'] != null){//成交金额
                    $price=$money[0]['sum(money)'];
                }else{
                    $price=0;
                }
                $k=$key+1;
                $html.='<tr class="trtr">';
                    $html.='<td>'.$k.'</td>';
                    $html.='<td>'.$value['title'].'</td>';
                    $html.='<td>'.$lcount.'</td>';
                    $html.='<td>'.$mcount.'</td>';
                    $html.='<td></td>';
                    $html.='<td>'.$sum.'</td>';
                    $html.='<td></td>';
                    $html.='<td>'.$price.'</td>';
                $html.='</tr>';
            }
        }
        
        return $html;
    }
    ////各渠道来访及成交情况表--没有时间
    static public function show_qudao_all($arra){
        $pai=self::table('come_channel')->where(['pid'=>$arra['cem_id1'],'ppid'=>$arra['cem_id2']])->select();
        $html='';
        $price='';
        foreach ($pai as $key => $value) {
            $lcount=self::table('visit_log')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'])->count();//来访份数
            $mcount=self::table('visit_log')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'].' and transaction_status=1')->count();//成交份数
            $user=self::table('visit_log')->field('contacts_id')->where('channel_t1='.$arra['cem_id1'].' and channel_t2='.$arra['cem_id2'].' and channel_t3='.$value['id'])->select();
            $sum=0;
            $idstr1='';
            foreach ($user as $key => $vo) {
                if($key == 0){
                    $idstr1.=$vo['contacts_id'];
                }else{
                    $idstr1.=','.$vo['contacts_id'];
                }
                $buy[$key]=self::where(['contacts_id'=>$vo['contacts_id'],'status'=>44])->count();
            }
            foreach ($buy as $v){
                $sum+=$v;//成交个数
            }
            $where['contacts_id']=['in',$idstr1];
            $money=self::field('sum(money)')->where($where)->select();
            if($money[0]['sum(money)'] != null){//成交金额
                $price=$money[0]['sum(money)'];
            }else{
                $price=0;
            }
            $k=$key+1;
            $html.='<tr class="trtr">';
                $html.='<td>'.$k.'</td>';
                $html.='<td>'.$value['title'].'</td>';
                $html.='<td>'.$lcount.'</td>';
                $html.='<td>'.$mcount.'</td>';
                $fcont=(int)$mcount/(int)$lcount;
                $flv=sprintf("%.4f",$fcont)*100;
                $html.='<td>'.$flv.'</td>';
                $html.='<td>'.$sum.'</td>';
                $gcont=$sum/$lcount;
                $glv=sprintf("%.4f",$gcont)*100;
                $html.='<td>'.$glv.'</td>';
                $html.='<td>'.$price.'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //墓位销售、剩余情况表 统计园区总体  时间查询
    static public function show_mwsell_all_time($arra){
        $data['zcount']=self::where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and create_time<='.strtotime($arra['endtime']))->count();
        $data['mcount']=self::where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and status =44 and settime<='.strtotime($arra['endtime']))->count();
        $data['lcount']=self::where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and status =41 and settime<='.strtotime($arra['endtime']))->count();
        $data['scount']=self::where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and status =38 and create_time<='.strtotime($arra['endtime']))->count();
        $money=self::field('sum(price)')->where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and status =38 and create_time<='.strtotime($arra['endtime']))->select();
        if($money[0]['sum(price)'] != null){//墓位费 合计
            $price=$money[0]['sum(price)'];
        }else{
            $price=0;
        }
        $html='';
        $html.='<tr class="trtr">';
            $html.='<td>1</td>';
            $html.='<td>园区墓位总数</td>';
            $html.='<td>'.$data['zcount'].'</td>';
            $html.='<td>座</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>2</td>';
            $html.='<td>已销售墓位总数</td>';
            $html.='<td>'.$data['mcount'].'</td>';
            $html.='<td>座</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>3</td>';
            $html.='<td>已落葬墓位总数</td>';
            $html.='<td>'.$data['lcount'].'</td>';
            $html.='<td>座</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>4</td>';
            $html.='<td>剩余墓位总数</td>';
            $html.='<td>'.$data['scount'].'</td>';
            $html.='<td>座</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>5</td>';
            $html.='<td>剩余墓位可销售</td>';
            $html.='<td>'.$price.'</td>';
            $html.='<td>元</td>';
        $html.='</tr>';
        return $html;
    }
    //墓位销售、剩余情况表 统计园区总体
    static public function show_mwsell_all($arra){
        $data['zcount']=self::where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area']])->count();
        $data['mcount']=self::where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area'],'status'=>44])->count();
        $data['lcount']=self::where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area'],'status'=>41])->count();
        $data['scount']=self::where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area'],'status'=>38])->count();
        $money=self::field('sum(price)')->where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area'],'status'=>38])->select();
        if($money[0]['sum(price)'] != null){//墓位费 合计
            $price=$money[0]['sum(price)'];
        }else{
            $price=0;
        }
        $html='';
        $html.='<tr class="trtr">';
            $html.='<td>1</td>';
            $html.='<td>园区墓位总数</td>';
            $html.='<td>'.$data['zcount'].'</td>';
            $html.='<td>座</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>2</td>';
            $html.='<td>已销售墓位总数</td>';
            $html.='<td>'.$data['mcount'].'</td>';
            $html.='<td>座</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>3</td>';
            $html.='<td>已落葬墓位总数</td>';
            $html.='<td>'.$data['lcount'].'</td>';
            $html.='<td>座</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>4</td>';
            $html.='<td>剩余墓位总数</td>';
            $html.='<td>'.$data['scount'].'</td>';
            $html.='<td>座</td>';
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>5</td>';
            $html.='<td>剩余墓位可销售</td>';
            $html.='<td>'.$price.'</td>';
            $html.='<td>元</td>';
        $html.='</tr>';
        return $html;
    }
     //墓位碑文情况统计
    static public function select_bw_all_list_time($arra){
        $arr=self::table('cem')->field('id,title')->select();
        $html='';
        if($arra['starttime'] != '' && $arra['endtime']!= ''){
            foreach ($arr as $key => $v) {
                $count=self::table('bw_info')->where('cem_id='.$v['id'].' and ztime>='.strtotime($arra['starttime']).' and ztime<='.strtotime($arra['endtime']))->count();
                $zi=self::table('bw_info')->where('cem_id='.$v['id'].' and kzys != 0 and ztime>='.strtotime($arra['starttime']).' and ztime<='.strtotime($arra['endtime']))->count();
                $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$v['id']])->select();
                $html.='<tr class="trtr" onclick="setqk('.$v['id'].')">';
                    $html.='<td>'.$v['id'].'</td>';
                    $html.='<td>'.$v['title'].'</td>';
                    $html.='<td>'.$count.'</td>';
                    $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
                    $html.='<td>'.$zi.'</td>';
                $html.='</tr>';
            }
        }else if($arra['starttime'] != '' && $arra['endtime']== ''){
           foreach ($arr as $key => $v) {
                $count=self::table('bw_info')->where('cem_id='.$v['id'].' and ztime>='.strtotime($arra['starttime']))->count();
                $zi=self::table('bw_info')->where('cem_id='.$v['id'].' and kzys != 0 and ztime>='.strtotime($arra['starttime']))->count();
                $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$v['id']])->select();
                $html.='<tr class="trtr" onclick="setqk('.$v['id'].')">';
                    $html.='<td>'.$v['id'].'</td>';
                    $html.='<td>'.$v['title'].'</td>';
                    $html.='<td>'.$count.'</td>';
                    $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
                    $html.='<td>'.$zi.'</td>';
                $html.='</tr>';
            }
        }else if($arra['starttime'] == '' && $arra['endtime']!= ''){
            foreach ($arr as $key => $v) {
                $count=self::table('bw_info')->where('cem_id='.$v['id'].' and ztime<='.strtotime($arra['endtime']))->count();
                $zi=self::table('bw_info')->where('cem_id='.$v['id'].' and kzys != 0 and ztime<='.strtotime($arra['endtime']))->count();
                $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$v['id']])->select();
                $html.='<tr class="trtr" onclick="setqk('.$v['id'].')">';
                    $html.='<td>'.$v['id'].'</td>';
                    $html.='<td>'.$v['title'].'</td>';
                    $html.='<td>'.$count.'</td>';
                    $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
                    $html.='<td>'.$zi.'</td>';
                $html.='</tr>';
            }   
        }
        return $html;
    }
    //墓位碑文情况统计-全部墓园 没有时间
    static public function select_bw_all_list($arra){
        $arr=self::table('cem')->field('id,title')->select();
        $html='';
        foreach ($arr as $key => $v) {
            $count=self::table('bw_info')->where(['cem_id'=>$v['id']])->count();
            $zi=self::table('bw_info')->where('cem_id='.$v['id'].' and kzys != 0 ')->count();
            $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$v['id']])->select(); 
            $html.='<tr class="trtr" onclick="setqk('.$v['id'].')">';
                $html.='<td>'.$v['id'].'</td>';
                $html.='<td>'.$v['title'].'</td>';
                $html.='<td>'.$count.'</td>';
                $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
                $html.='<td>'.$zi.'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //墓位碑文情况统计
    static public function select_bw_list_time($arra){
        if($arra['starttime'] != '' && $arra['endtime']!= ''){
            $arr=self::table('cem')->field('id,title')->where(['id'=>$arra['id']])->find();
            $count=self::table('bw_info')->where('cem_id='.$arra['id'].' and ztime>='.strtotime($arra['starttime']).' and ztime<='.strtotime($arra['endtime']))->count();
            $zi=self::table('bw_info')->where('cem_id='.$arra['id'].' and kzys != 0 and ztime>='.strtotime($arra['starttime']).' and ztime<='.strtotime($arra['endtime']))->count();
            $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$arra['id']])->select();
        }else if($arra['starttime'] != '' && $arra['endtime']== ''){
            $arr=self::table('cem')->field('id,title')->where(['id'=>$arra['id']])->find();
            $count=self::table('bw_info')->where('cem_id='.$arra['id'].' and ztime>='.strtotime($arra['starttime']))->count();
            $zi=self::table('bw_info')->where('cem_id='.$arra['id'].' and kzys != 0 and ztime>='.strtotime($arra['starttime']))->count();
            $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$arra['id']])->select();
        }else if($arra['starttime'] == '' && $arra['endtime']!= ''){
            $arr=self::table('cem')->field('id,title')->where(['id'=>$arra['id']])->find();
            $count=self::table('bw_info')->where('cem_id='.$arra['id'].' and ztime<='.strtotime($arra['endtime']))->count();
            $zi=self::table('bw_info')->where('cem_id='.$arra['id'].' and kzys != 0 and ztime<='.strtotime($arra['endtime']))->count(); 
            $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$arra['id']])->select();   
        }
        $html='';
        $html.='<tr class="trtr" onclick="setqk('.$arra['id'].')">';
            $html.='<td>'.$arr['id'].'</td>';
            $html.='<td>'.$arr['title'].'</td>';
            $html.='<td>'.$count.'</td>';
            $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
            $html.='<td>'.$zi.'</td>';
        $html.='</tr>';
        return $html;
    }
    ////墓位碑文杂费统计--详情
    static public function select_zf_list_all($arra){
        $arr=self::table('bw_zf')->where(['cem_id'=>$arra['id']])->select();
        $html='';
        foreach ($arr as $key => $v) {
            $title=self::field('long_title')->where(['id'=>$v['cem_info_id']])->find();
            $html.='<tr class="trall">';
                $html.='<td>'.$v['id'].'</td>';
                $html.='<td>'.$title['long_title'].'</td>';
                $html.='<td>'.$v['zk_sum'].'</td>';
                $html.='<td>'.$v['zb_sum'].'</td>';
                if($v['cx_type'] == '2'){
                    $html.='<td>单人</td>';
                }else if($v['cx_type'] == '3'){
                    $html.='<td>双人</td>';
                }
                $html.='<td>'.$v['cx_sum'].'</td>';
                if($v['lb_type'] == '2'){
                    $html.='<td>首次</td>';
                }else if($v['lb_type'] == '3'){
                    $html.='<td>二次</td>';
                }
                $html.='<td>'.$v['lb_sum'].'</td>';
                $html.='<td>'.$v['sum'].'</td>';
                $html.='<td>已付款</td>';
                $html.='<td>'.$v['z_beizhu'].'--'.$v['cx_beizhu'].'--'.$v['lb_beizhu'].'--'.$v['tj_beizhu'].'--'.$v['zs_beizhu'].'--'.$v['bzj_beizhu'].'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //墓位碑文情况统计--详情
    static public function select_bw_list_all($arra){
        $arr=self::table('bw_info')->where(['cem_id'=>$arra['id']])->select();
        $contacts=self::table('contacts')->column('*','id');
        $staff=self::table('staff')->column('*','id');
        $html='';
        foreach ($arr as $key => $v) {
            $cem=self::table('cem')->field('title')->where(['id'=>$arra['id']])->find();
            $title=self::field('long_title,contacts_id,settime')->where(['id'=>$v['cem_info_id']])->find();
            $zi=self::table('bw_info')->where('cem_id='.$arra['id'].' and kzys != 0 and cem_info_id='.$v['cem_info_id'])->count();
            $sum=self::table('bw_zf')->field('sum(sum)')->where('cem_id='.$arra['id'].' and cem_info_id='.$v['cem_info_id'])->select();
            $html.='<tr class="trall">';
                $html.='<td>'.$v['id'].'</td>';
                $html.='<td>'.$cem['title'].'</td>';
                $html.='<td>'.$title['long_title'].'</td>';
                $html.='<td>'.$contacts[$title['contacts_id']]['name'].'</td>';
                $html.='<td>'.$contacts[$title['contacts_id']]['tel'].','.$contacts[$title['contacts_id']]['phone'].'</td>';
                $html.='<td>'.$staff[$v['staff_id']]['nickname'].'</td>';
                $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
                $html.='<td>'.$zi.'</td>';
                if($v['kzys'] == '2'){
                    $html.='<td></td>';
                }else if($v['kzys'] == '3'){
                    $html.='<td>喷砂刻字</td>';
                }
                if($v['bwzt'] == '2'){
                    $html.='<td>隶书</td>';
                }else if($v['bwzt'] == '3'){
                    $html.='<td>魏碑</td>';
                }else if($v['bwzt'] == '4'){
                    $html.='<td>行楷</td>';
                }
                if($v['ziti'] == '2'){
                    $html.='<td>简体</td>';
                }else if($v['ziti'] == '3'){
                    $html.='<td>繁体</td>';
                }
                if($v['tjb'] == '2'){
                    $html.='<td>是</td>';
                }else if($v['shuajin'] == '3'){
                    $html.='<td>否</td>';
                }else{
                    $html.='<td>未选择</td>';
                }
                if($v['shuajin'] == '2'){
                    $html.='<td>是</td>';
                }else if($v['tjb'] == '3'){
                    $html.='<td>否</td>';
                }else{
                    $html.='<td>未选择</td>';
                }
                if($v['cxsl'] == '2'){
                    $html.='<td>单人</td>';
                }else if($v['cxsl'] == '3'){
                    $html.='<td>双人</td>';
                }else{
                    $html.='<td>未选择</td>';
                }
                if($v['cxcc']){
                    $html.='<td>'.$v['cxcc'].'寸</td>';
                }else{
                    $html.='<td>未选择</td>';
                }
                
                if($v['cxsc'] == '2'){
                    $html.='<td>黑白</td>';
                }else if($v['cxsc'] == '3'){
                    $html.='<td>色彩</td>';
                }else{
                    $html.='<td>未选择</td>';
                }
                if($v['cxxz'] == '2'){
                    $html.='<td>椭圆</td>';
                }else if($v['cxxz'] == '3'){
                    $html.='<td>方形</td>';
                }else{
                    $html.='<td>未选择</td>';
                }
                $html.='<td>'.date('Y-m-d',$title['settime']).'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //墓位碑文情况统计
    static public function select_bw_list($arra){
        $arr=self::table('cem')->field('id,title')->where(['id'=>$arra['id']])->find();
        $count=self::table('bw_info')->where(['cem_id'=>$arra['id']])->count();
        $zi=self::table('bw_info')->where('cem_id='.$arra['id'].' and kzys != 0 ')->count();
        $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$arra['id']])->select();
        $html='';
        $html.='<tr class="trtr" onclick="setqk('.$arra['id'].')">';
            $html.='<td>'.$arr['id'].'</td>';
            $html.='<td>'.$arr['title'].'</td>';
            $html.='<td>'.$count.'</td>';
            $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
            $html.='<td>'.$zi.'</td>';
        $html.='</tr>';
        return $html;
    }
    //墓位碑文杂费统计-没有时间
    static public function select_zf_list($arra){
        $arr=self::table('cem')->field('id,title')->where(['id'=>$arra['id']])->find();
        $count=self::table('bw_zf')->where(['cem_id'=>$arra['id'],'sta'=>2])->count();
        $sum=self::table('bw_zf')->field('sum(sum)')->where(['cem_id'=>$arra['id'],'sta'=>2])->select();
        $html='';
        $html.='<tr class="trtr" onclick="setalltr('.$arra['id'].')">';
            $html.='<td>'.$arr['id'].'</td>';
            $html.='<td>'.$arr['title'].'</td>';
            $html.='<td>'.$count.'</td>';
            $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
        $html.='</tr>';
        return $html;
    }
     //墓位碑文杂费统计-有时间
    static public function select_zf_list_time($arra){
        if($arra['starttime'] != '' && $arra['endtime']!= ''){
            $arr=self::table('cem')->field('id,title')->where(['id'=>$arra['id']])->find();
            $count=self::table('bw_zf')->where('cem_id='.$arra['id'].' and sta=2 and ztime>='.strtotime($arra['starttime']).' and ztime<='.strtotime($arra['endtime']))->count();
            $sum=self::table('bw_zf')->field('sum(sum)')->where('cem_id='.$arra['id'].' and sta=2 and ztime>='.strtotime($arra['starttime']).' and ztime<='.strtotime($arra['endtime']))->select();
        }else if($arra['starttime'] != '' && $arra['endtime']== ''){
            $arr=self::table('cem')->field('id,title')->where(['id'=>$arra['id']])->find();
            $count=self::table('bw_zf')->where('cem_id='.$arra['id'].' and sta=2  ztime>='.strtotime($arra['starttime']))->count();
            $sum=self::table('bw_zf')->field('sum(sum)')->where('cem_id='.$arra['id'].' and sta=2 and ztime>='.strtotime($arra['starttime']))->select();
        }else if($arra['starttime'] == '' && $arra['endtime']!= ''){
            $arr=self::table('cem')->field('id,title')->where(['id'=>$arra['id']])->find();
            $count=self::table('bw_zf')->where('cem_id='.$arra['id'].' and sta=2 and ztime<='.strtotime($arra['endtime']))->count();
            $sum=self::table('bw_zf')->field('sum(sum)')->where('cem_id='.$arra['id'].' and sta=2 and ztime<='.strtotime($arra['endtime']))->select();
        }
        $html='';
        $html.='<tr class="trtr"  onclick="setalltr('.$arra['id'].')">';
            $html.='<td>'.$arr['id'].'</td>';
            $html.='<td>'.$arr['title'].'</td>';
            $html.='<td>'.$count.'</td>';
            $html.='<td>'.$sum[0]['sum(sum)'].'</td>';
        $html.='</tr>';
        return $html;
    }
    ////墓位祭扫安葬情况统计
    static public function select_js_list($arra){
        $arr=self::table('grave')->field('djlx')->group('djlx')->select();
        $html1='';
        foreach ($arr as $key => $value) {
            if($arra['starttime'] != '' && $arra['endtime']!= ''){
                $num=self::table('grave')->field('sum(num)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//来访分数
                $prop=self::table('grave')->field('sum(prop)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//来访人数
                $cart_w=self::table('grave')->field('sum(cart_w)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//微型
                $cart_x=self::table('grave')->field('sum(cart_x)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//小型
                $cart_z=self::table('grave')->field('sum(cart_z)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//中型
                $cart_d=self::table('grave')->field('sum(cart_d)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//大型
            }else if($arra['starttime'] != '' && $arra['endtime']== ''){
                $num=self::table('grave')->field('sum(num)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']))->select();//来访分数
                $prop=self::table('grave')->field('sum(prop)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']))->select();//来访人数
                $cart_w=self::table('grave')->field('sum(cart_w)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']))->select();//微型
                $cart_x=self::table('grave')->field('sum(cart_x)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']))->select();//小型
                $cart_z=self::table('grave')->field('sum(cart_z)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']))->select();//中型
                $cart_d=self::table('grave')->field('sum(cart_d)')->where('djlx='.$value['djlx'].' and time>='.strtotime($arra['starttime']))->select();//大型
            }else if($arra['starttime'] == '' && $arra['endtime']!= ''){
                $num=self::table('grave')->field('sum(num)')->where('djlx='.$value['djlx'].' and time<='.strtotime($arra['endtime']))->select();//来访分数
                $prop=self::table('grave')->field('sum(prop)')->where('djlx='.$value['djlx'].' and time<='.strtotime($arra['endtime']))->select();//来访人数
                $cart_w=self::table('grave')->field('sum(cart_w)')->where('djlx='.$value['djlx'].' and time<='.strtotime($arra['endtime']))->select();//微型
                $cart_x=self::table('grave')->field('sum(cart_x)')->where('djlx='.$value['djlx'].' and time<='.strtotime($arra['endtime']))->select();//小型
                $cart_z=self::table('grave')->field('sum(cart_z)')->where('djlx='.$value['djlx'].' and time<='.strtotime($arra['endtime']))->select();//中型
                $cart_d=self::table('grave')->field('sum(cart_d)')->where('djlx='.$value['djlx'].' and time<='.strtotime($arra['endtime']))->select();//大型
            }
            $k=$key+1;
            $html1.='<tr class="trtr">';
                $html1.='<td>'.$k.'</td>';
                if($value['djlx'] == '2'){
                    $html1.='<td>祭扫</td>';
                }else if($value['djlx'] == '3'){
                    $html1.='<td>安葬</td>';
                }
                $html1.='<td>'.$num[0]['sum(num)'].'</td>';
                $html1.='<td>'.$prop[0]['sum(prop)'].'</td>';
                $html1.='<td>'.$cart_w[0]['sum(cart_w)'].'</td>';
                $html1.='<td>'.$cart_x[0]['sum(cart_x)'].'</td>';
                $html1.='<td>'.$cart_z[0]['sum(cart_z)'].'</td>';
                $html1.='<td>'.$cart_d[0]['sum(cart_d)'].'</td>';
            $html1.='</tr>';    
        }
        return $html1;
    }
    //安葬情况统计表
    static public function select_js_list_zang($arra){
        if($arra['starttime'] != '' && $arra['endtime']!= ''){
            $num1=self::table('grave')->field('sum(id)')->where('djlx=3 and status=1 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//总数量
            $prop1=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=1 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w1=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=1  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x1=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=1  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z1=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=1  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d1=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=1  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//大型

            $num2=self::table('grave')->field('sum(id)')->where('djlx=3 and status=2 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//总数量
            $prop2=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=2 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w2=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=2  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x2=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=2  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z2=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=2  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d2=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=2  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//大型

            $num3=self::table('grave')->field('sum(id)')->where('djlx=3 and status=3 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//总数量
            $prop3=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=3 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w3=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=3  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x3=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=3  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z3=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=3  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d3=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=3  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//大型

            $num4=self::table('grave')->field('sum(id)')->where('djlx=3 and status=4 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//总数量
            $prop4=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=4 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w4=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=4  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x4=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=4  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z4=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=4  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d4=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=4  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//大型

            $num5=self::table('grave')->field('sum(id)')->where('djlx=3 and status=5 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//总数量
            $prop5=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=5 and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w5=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=5  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x5=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=5  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z5=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=5  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d5=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=5  and time>='.strtotime($arra['starttime']).' and time<='.strtotime($arra['endtime']))->select();//大型
        }else if($arra['starttime'] != '' && $arra['endtime']== ''){
            $num1=self::table('grave')->field('sum(id)')->where('djlx=3 and status=1 and time>='.strtotime($arra['starttime']))->select();//来访分数
            $prop1=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=1 and time>='.strtotime($arra['starttime']))->select();//来访人数
            $cart_w1=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=1 and time>='.strtotime($arra['starttime']))->select();//微型
            $cart_x1=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=1 and time>='.strtotime($arra['starttime']))->select();//小型
            $cart_z1=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=1 and time>='.strtotime($arra['starttime']))->select();//中型
            $cart_d1=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=1 and time>='.strtotime($arra['starttime']))->select();//大型

            $num2=self::table('grave')->field('sum(id)')->where('djlx=3 and status=2 and time>='.strtotime($arra['starttime']))->select();//来访分数
            $prop2=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=2 and time>='.strtotime($arra['starttime']))->select();//来访人数
            $cart_w2=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=2 and time>='.strtotime($arra['starttime']))->select();//微型
            $cart_x2=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=2 and time>='.strtotime($arra['starttime']))->select();//小型
            $cart_z2=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=2 and time>='.strtotime($arra['starttime']))->select();//中型
            $cart_d2=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=2 and time>='.strtotime($arra['starttime']))->select();//大型

            $num3=self::table('grave')->field('sum(id)')->where('djlx=3 and status=3 and time>='.strtotime($arra['starttime']))->select();//来访分数
            $prop3=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=3 and time>='.strtotime($arra['starttime']))->select();//来访人数
            $cart_w3=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=3 and time>='.strtotime($arra['starttime']))->select();//微型
            $cart_x3=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=3 and time>='.strtotime($arra['starttime']))->select();//小型
            $cart_z3=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=3 and time>='.strtotime($arra['starttime']))->select();//中型
            $cart_d3=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=3 and time>='.strtotime($arra['starttime']))->select();//大型

            $num4=self::table('grave')->field('sum(id)')->where('djlx=3 and status=4 and time>='.strtotime($arra['starttime']))->select();//来访分数
            $prop4=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=4 and time>='.strtotime($arra['starttime']))->select();//来访人数
            $cart_w4=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=4 and time>='.strtotime($arra['starttime']))->select();//微型
            $cart_x4=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=4 and time>='.strtotime($arra['starttime']))->select();//小型
            $cart_z4=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=4 and time>='.strtotime($arra['starttime']))->select();//中型
            $cart_d4=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=4 and time>='.strtotime($arra['starttime']))->select();//大型

            $num5=self::table('grave')->field('sum(id)')->where('djlx=3 and status=5 and time>='.strtotime($arra['starttime']))->select();//来访分数
            $prop5=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=5 and time>='.strtotime($arra['starttime']))->select();//来访人数
            $cart_w5=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=5 and time>='.strtotime($arra['starttime']))->select();//微型
            $cart_x5=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=5 and time>='.strtotime($arra['starttime']))->select();//小型
            $cart_z5=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=5 and time>='.strtotime($arra['starttime']))->select();//中型
            $cart_d5=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=5 and time>='.strtotime($arra['starttime']))->select();//大型
        }else if($arra['starttime'] == '' && $arra['endtime']!= ''){
            $num1=self::table('grave')->field('sum(id)')->where('djlx=3 and status=1 and time<='.strtotime($arra['endtime']))->select();//来访分数
            $prop1=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=1 and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w1=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=1 and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x1=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=1 and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z1=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=1 and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d1=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=1 and time<='.strtotime($arra['endtime']))->select();//大型

            $num2=self::table('grave')->field('sum(id)')->where('djlx=3 and status=2 and time<='.strtotime($arra['endtime']))->select();//来访分数
            $prop2=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=2 and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w2=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=2 and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x2=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=2 and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z2=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=2 and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d2=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=2 and time<='.strtotime($arra['endtime']))->select();//大型

            $num3=self::table('grave')->field('sum(id)')->where('djlx=3 and status=3 and time<='.strtotime($arra['endtime']))->select();//来访分数
            $prop3=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=3 and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w3=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=3 and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x3=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=3 and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z3=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=3 and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d3=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=3 and time<='.strtotime($arra['endtime']))->select();//大型

            $num4=self::table('grave')->field('sum(id)')->where('djlx=3 and status=4 and time<='.strtotime($arra['endtime']))->select();//来访分数
            $prop4=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=4 and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w4=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=4 and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x4=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=4 and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z4=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=4 and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d4=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=4 and time<='.strtotime($arra['endtime']))->select();//大型

            $num5=self::table('grave')->field('sum(id)')->where('djlx=3 and status=5 and time<='.strtotime($arra['endtime']))->select();//来访分数
            $prop5=self::table('grave')->field('sum(prop)')->where('djlx=3 and status=5 and time<='.strtotime($arra['endtime']))->select();//来访人数
            $cart_w5=self::table('grave')->field('sum(cart_w)')->where('djlx=3 and status=5 and time<='.strtotime($arra['endtime']))->select();//微型
            $cart_x5=self::table('grave')->field('sum(cart_x)')->where('djlx=3 and status=5 and time<='.strtotime($arra['endtime']))->select();//小型
            $cart_z5=self::table('grave')->field('sum(cart_z)')->where('djlx=3 and status=5 and time<='.strtotime($arra['endtime']))->select();//中型
            $cart_d5=self::table('grave')->field('sum(cart_d)')->where('djlx=3 and status=5 and time<='.strtotime($arra['endtime']))->select();//大型
        }
        $html='';
        $html.='<tr class="trtr">';
            $html.='<td>1</td>';
            $html.='<td>迁坟</td>';
            if($num1[0]['sum(id)']){
                $html.='<td>'.$num1[0]['sum(id)'].'</td>';
            }else{
               $html.='<td>0</td>'; 
            }
            if($prop1[0]['sum(prop)']){
                $html.='<td>'.$prop1[0]['sum(prop)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_w1[0]['sum(cart_w)']){
                $html.='<td>'.$cart_w1[0]['sum(cart_w)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_x1[0]['sum(cart_x)']){
                $html.='<td>'.$cart_x1[0]['sum(cart_x)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_z1[0]['sum(cart_z)']){
                $html.='<td>'.$cart_z1[0]['sum(cart_z)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_d1[0]['sum(cart_d)']){
                $html.='<td>'.$cart_d1[0]['sum(cart_d)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
        $html.='</tr>'; 
        $html.='<tr class="trtr">';
            $html.='<td>2</td>';
            $html.='<td>首次安葬</td>';
            if($num2[0]['sum(id)']){
                $html.='<td>'.$num2[0]['sum(id)'].'</td>';
            }else{
               $html.='<td>0</td>'; 
            }
            if($prop2[0]['sum(prop)']){
                $html.='<td>'.$prop2[0]['sum(prop)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_w2[0]['sum(cart_w)']){
                $html.='<td>'.$cart_w2[0]['sum(cart_w)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_x2[0]['sum(cart_x)']){
                $html.='<td>'.$cart_x2[0]['sum(cart_x)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_z2[0]['sum(cart_z)']){
                $html.='<td>'.$cart_z2[0]['sum(cart_z)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_d2[0]['sum(cart_d)']){
                $html.='<td>'.$cart_d2[0]['sum(cart_d)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
        $html.='</tr>'; 
        $html.='<tr class="trtr">';
            $html.='<td>3</td>';
            $html.='<td>首次即时安葬</td>';
           if($num3[0]['sum(id)']){
                $html.='<td>'.$num3[0]['sum(id)'].'</td>';
            }else{
               $html.='<td>0</td>'; 
            }
            if($prop3[0]['sum(prop)']){
                $html.='<td>'.$prop3[0]['sum(prop)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_w3[0]['sum(cart_w)']){
                $html.='<td>'.$cart_w3[0]['sum(cart_w)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_x3[0]['sum(cart_x)']){
                $html.='<td>'.$cart_x3[0]['sum(cart_x)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_z3[0]['sum(cart_z)']){
                $html.='<td>'.$cart_z3[0]['sum(cart_z)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_d3[0]['sum(cart_d)']){
                $html.='<td>'.$cart_d3[0]['sum(cart_d)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
        $html.='</tr>'; 
        $html.='<tr class="trtr">';
            $html.='<td>4</td>';
            $html.='<td>迁坟即时安葬</td>';
            if($num4[0]['sum(id)']){
                $html.='<td>'.$num4[0]['sum(id)'].'</td>';
            }else{
               $html.='<td>0</td>'; 
            }
            if($prop4[0]['sum(prop)']){
                $html.='<td>'.$prop4[0]['sum(prop)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_w4[0]['sum(cart_w)']){
                $html.='<td>'.$cart_w4[0]['sum(cart_w)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_x4[0]['sum(cart_x)']){
                $html.='<td>'.$cart_x4[0]['sum(cart_x)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_z4[0]['sum(cart_z)']){
                $html.='<td>'.$cart_z4[0]['sum(cart_z)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_d4[0]['sum(cart_d)']){
                $html.='<td>'.$cart_d4[0]['sum(cart_d)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
        $html.='</tr>'; 
        $html.='<tr class="trtr">';
            $html.='<td>5</td>';
            $html.='<td>二次安葬</td>';
            if($num5[0]['sum(id)']){
                $html.='<td>'.$num5[0]['sum(id)'].'</td>';
            }else{
               $html.='<td>0</td>'; 
            }
            if($prop5[0]['sum(prop)']){
                $html.='<td>'.$prop5[0]['sum(prop)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_w5[0]['sum(cart_w)']){
                $html.='<td>'.$cart_w5[0]['sum(cart_w)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_x5[0]['sum(cart_x)']){
                $html.='<td>'.$cart_x5[0]['sum(cart_x)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_z5[0]['sum(cart_z)']){
                $html.='<td>'.$cart_z5[0]['sum(cart_z)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
            if($cart_d5[0]['sum(cart_d)']){
                $html.='<td>'.$cart_d5[0]['sum(cart_d)'].'</td>';
            }else{
                $html.='<td>0</td>';
            }
        $html.='</tr>';
        $html.='<tr class="trtr">';
            $html.='<td>6</td>';
            $html.='<td>总计</td>';
            $sum1=$num1[0]['sum(id)']+$num2[0]['sum(id)']+$num3[0]['sum(id)']+$num4[0]['sum(id)']+$num5[0]['sum(id)'];
            $sum2=$prop1[0]['sum(prop)']+$prop2[0]['sum(prop)']+$prop3[0]['sum(prop)']+$prop4[0]['sum(prop)']+$prop5[0]['sum(prop)'];
            $sum3=$cart_w1[0]['sum(cart_w)']+$cart_w2[0]['sum(cart_w)']+$cart_w3[0]['sum(cart_w)']+$cart_w4[0]['sum(cart_w)']+$cart_w5[0]['sum(cart_w)'];
            $sum4=$cart_x1[0]['sum(cart_x)']+$cart_x2[0]['sum(cart_x)']+$cart_x3[0]['sum(cart_x)']+$cart_x4[0]['sum(cart_x)']+$cart_x5[0]['sum(cart_x)'];
            $sum5=$cart_z1[0]['sum(cart_z)']+$cart_z2[0]['sum(cart_z)']+$cart_z3[0]['sum(cart_z)']+$cart_z4[0]['sum(cart_z)']+$cart_z5[0]['sum(cart_z)'];
            $sum6=$cart_d1[0]['sum(cart_d)']+$cart_d2[0]['sum(cart_d)']+$cart_d3[0]['sum(cart_d)']+$cart_d4[0]['sum(cart_d)']+$cart_d5[0]['sum(cart_d)'];

            $html.='<td>'.$sum1.'</td>';
            $html.='<td>'.$sum2.'</td>';
            $html.='<td>'.$sum3.'</td>';
            $html.='<td>'.$sum4.'</td>';
            $html.='<td>'.$sum5.'</td>';
            $html.='<td>'.$sum6.'</td>';
        $html.='</tr>';  
        return $html;   
    }
    //来访及成交情况表
    static public function show_all_come($arra){
        if($arra['starttime'] != '' && $arra['endtime']!= ''){
            $banche=self::table('visit_log')->where('come_fun=12 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->count();
            $cart=self::table('visit_log')->where('come_fun=13 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->count();
            $count1=$banche+$cart;
            $banchecount=self::table('visit_log')->where('come_fun=12 and transaction_status=1 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->count();//成交分数
            $cartcount=self::table('visit_log')->where('come_fun=13 and transaction_status=1 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->count();//成交分数
            $count2=$banchecount+$cartcount;
            $user1=self::table('visit_log')->field('contacts_id')->where('come_fun=12 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->select();
            $user2=self::table('visit_log')->field('contacts_id')->where('come_fun=13 and come_date>='.strtotime($arra['starttime']).' and come_date<='.strtotime($arra['endtime']))->select();
            $sum1=0;
            $sum2=0;
            $idstr1='';
            $idstr2='';
            foreach ($user1 as $key => $value) {
                if($key == 0){
                    $idstr1.=$value['contacts_id'];
                }else{
                    $idstr1.=','.$value['contacts_id'];
                }
                $buy1[$key]=self::where(['contacts_id'=>$value['contacts_id'],'status'=>44])->count();
            }
            foreach ($buy1 as $v){
                $sum1+=$v;
            }
            foreach ($user2 as $key => $value) {
                if($key == 0){
                    $idstr2.=$value['contacts_id'];
                }else{
                    $idstr2.=','.$value['contacts_id'];
                }
                $buy2[$key]=self::where(['contacts_id'=>$value['contacts_id'],'status'=>44])->count();
            }
            foreach ($buy2 as $v){
                $sum2+=$v;
            }
            $sumcount=$sum1+$sum2;
            $where1['contacts_id']=['in',$idstr1];
            $where2['contacts_id']=['in',$idstr2];
            $banchemoney=self::field('sum(money)')->where($where1)->select();
            $cartmoney=self::field('sum(money)')->where($where2)->select();
            if($banchemoney[0]['sum(money)'] != null){//墓位费 合计
                $price1=$banchemoney[0]['sum(money)'];
            }else{
                $price1=0;
            }
            if($cartmoney[0]['sum(money)'] != null){//墓位费 合计
                $price2=$cartmoney[0]['sum(money)'];
            }else{
                $price2=0;
            }
            $pricecount=$price1+$price2;
        }else if($arra['starttime'] != '' && $arra['endtime']== ''){
            $banche=self::table('visit_log')->where('come_fun=12 and come_date>='.strtotime($arra['starttime']))->count();
            $cart=self::table('visit_log')->where('come_fun=13 and come_date>='.strtotime($arra['starttime']))->count();
            $count1=$banche+$cart;
            $banchecount=self::table('visit_log')->where('come_fun=12 and transaction_status=1 and come_date>='.strtotime($arra['starttime']))->count();//成交分数
            $cartcount=self::table('visit_log')->where('come_fun=13 and transaction_status=1 and come_date>='.strtotime($arra['starttime']))->count();//成交分数
            $count2=$banchecount+$cartcount;
            $user1=self::table('visit_log')->field('contacts_id')->where('come_fun=12 and come_date>='.strtotime($arra['starttime']))->select();
            $user2=self::table('visit_log')->field('contacts_id')->where('come_fun=13 and come_date>='.strtotime($arra['starttime']))->select();
            $sum1=0;
            $sum2=0;
            $idstr1='';
            $idstr2='';
            foreach ($user1 as $key => $value) {
                if($key == 0){
                    $idstr1.=$value['contacts_id'];
                }else{
                    $idstr1.=','.$value['contacts_id'];
                }
                $buy1[$key]=self::where(['contacts_id'=>$value['contacts_id'],'status'=>44])->count();
            }
            foreach ($buy1 as $v){
                $sum1+=$v;
            }
            foreach ($user2 as $key => $value) {
                if($key == 0){
                    $idstr2.=$value['contacts_id'];
                }else{
                    $idstr2.=','.$value['contacts_id'];
                }
                $buy2[$key]=self::where(['contacts_id'=>$value['contacts_id'],'status'=>44])->count();
            }
            foreach ($buy2 as $v){
                $sum2+=$v;
            }
            $sumcount=$sum1+$sum2;
            $where1['contacts_id']=['in',$idstr1];
            $where2['contacts_id']=['in',$idstr2];
            $banchemoney=self::field('sum(money)')->where($where1)->select();
            $cartmoney=self::field('sum(money)')->where($where2)->select();
            if($banchemoney[0]['sum(money)'] != null){//墓位费 合计
                $price1=$banchemoney[0]['sum(money)'];
            }else{
                $price1=0;
            }
            if($cartmoney[0]['sum(money)'] != null){//墓位费 合计
                $price2=$cartmoney[0]['sum(money)'];
            }else{
                $price2=0;
            }
            $pricecount=$price1+$price2;
        }else if($arra['starttime'] == '' && $arra['endtime']!= ''){
            $banche=self::table('visit_log')->where('come_fun=12 and come_date<='.strtotime($arra['endtime']))->count();
            $cart=self::table('visit_log')->where('come_fun=13 and come_date<='.strtotime($arra['endtime']))->count();
            $count1=$banche+$cart;
            $banchecount=self::table('visit_log')->where('come_fun=12 and transaction_status=1 and come_date<='.strtotime($arra['endtime']))->count();//成交分数
            $cartcount=self::table('visit_log')->where('come_fun=13 and transaction_status=1 and come_date<='.strtotime($arra['endtime']))->count();//成交分数
            $count2=$banchecount+$cartcount;
            $user1=self::table('visit_log')->field('contacts_id')->where('come_fun=12 and come_date<='.strtotime($arra['endtime']))->select();
            $user2=self::table('visit_log')->field('contacts_id')->where('come_fun=13 and come_date<='.strtotime($arra['endtime']))->select();
            $sum1=0;
            $sum2=0;
            $idstr1='';
            $idstr2='';
            foreach ($user1 as $key => $value) {
                if($key == 0){
                    $idstr1.=$value['contacts_id'];
                }else{
                    $idstr1.=','.$value['contacts_id'];
                }
                $buy1[$key]=self::where(['contacts_id'=>$value['contacts_id'],'status'=>44])->count();
            }
            foreach ($buy1 as $v){
                $sum1+=$v;
            }
            foreach ($user2 as $key => $value) {
                if($key == 0){
                    $idstr2.=$value['contacts_id'];
                }else{
                    $idstr2.=','.$value['contacts_id'];
                }
                $buy2[$key]=self::where(['contacts_id'=>$value['contacts_id'],'status'=>44])->count();
            }
            foreach ($buy2 as $v){
                $sum2+=$v;
            }
            $sumcount=$sum1+$sum2;
            $where1['contacts_id']=['in',$idstr1];
            $where2['contacts_id']=['in',$idstr2];
            $banchemoney=self::field('sum(money)')->where($where1)->select();
            $cartmoney=self::field('sum(money)')->where($where2)->select();
            if($banchemoney[0]['sum(money)'] != null){//墓位费 合计
                $price1=$banchemoney[0]['sum(money)'];
            }else{
                $price1=0;
            }
            if($cartmoney[0]['sum(money)'] != null){//墓位费 合计
                $price2=$cartmoney[0]['sum(money)'];
            }else{
                $price2=0;
            }
            $pricecount=$price1+$price2;
        }
        
        $html1.='<tr class="trtr">';
           $html1.='<th>1</th>';
           $html1.='<th>来访份数</th>';
           $html1.='<th>'.$banche.'</th>';
           $html1.='<th>'.$cart.'</th>';
           $html1.='<th>'.$count1.'</th>';
        $html1.='</tr>';
        $html1.='<tr class="trtr">';
           $html1.='<th>2</th>';
           $html1.='<th>成交份数</th>';
           $html1.='<th>'.$banchecount.'</th>';
           $html1.='<th>'.$cartcount.'</th>';
           $html1.='<th>'.$count2.'</th>';
        $html1.='</tr>';
        $gcont=$banchecount/$banche;
        $glv=sprintf("%.4f",$gcont)*100;
        $fcont=$cartcount/$cart;
        $flv=sprintf("%.4f",$fcont)*100;
        $sumcou=$glv+$flv;
        $html1.='<tr class="trtr">';
           $html1.='<th>3</th>';
           $html1.='<th>份数成交率</th>';
           $html1.='<th>'.$glv.'</th>';
           $html1.='<th>'.$flv.'</th>';
           $html1.='<th>'.$sumcou.'</th>';
        $html1.='</tr>';
        $html1.='<tr class="trtr">';
           $html1.='<th>4</th>';
           $html1.='<th>成交个数</th>';
           $html1.='<th>'.$sum1.'</th>';
           $html1.='<th>'.$sum2.'</th>';
           $html1.='<th>'.$sumcount.'</th>';
        $html1.='</tr>';
        $ucont=$sum1/$banche;
        $ulv=sprintf("%.4f",$ucont)*100;
        $ufcont=$sum2/$cart;
        $uflv=sprintf("%.4f",$ufcont)*100;
        $sumucou=$ulv+$uflv;
        $html1.='<tr class="trtr">';
           $html1.='<th>5</th>';
           $html1.='<th>个数成交率</th>';
           $html1.='<th>'.$ulv.'</th>';
           $html1.='<th>'.$uflv.'</th>';
           $html1.='<th>'.$sumucou.'</th>';
        $html1.='</tr>';
        $html1.='<tr class="trtr">';
           $html1.='<th>6</th>';
           $html1.='<th>成交金额</th>';
           $html1.='<th>'.$price1.'</th>';
           $html1.='<th>'.$price2.'</th>';
           $html1.='<th>'.$pricecount.'</th>';
        $html1.='</tr>';
        return $html1;
    }

    //墓位销售、剩余情况表 统计结果  有时间
    static public function select_mwsell_list_time($arra){
        $pai=self::table('cem_row')->field('id,title')->where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area']])->select();
        $cem_model=_Tpl::tlist(8);//墓位类型
        $html='';
        $price='';
        foreach ($pai as $key => $value) {
            $data['zcount']=self::where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and cem_row_id= '.$value['id'].' and create_time<='.strtotime($arra['endtime']))->count();
            $data['mcount']=self::where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and cem_row_id= '.$value['id'].' and status =44 and settime<='.strtotime($arra['endtime']))->count();
            $data['scount']=$data['zcount']-$data['mcount'];
            $p=self::field('price,model')->where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and cem_row_id= '.$value['id'].' and create_time<='.strtotime($arra['endtime']))->find();
            $money=self::field('sum(price)')->where('cem_id='.$arra['id'].' and cem_area_id='.$arra['area'].' and cem_row_id= '.$value['id'].' and status =38 and create_time<='.strtotime($arra['endtime']))->select();
            if($money[0]['sum(price)'] != null){//墓位费 合计
                $price=$money[0]['sum(price)'];
            }else{
                $price=0;
            }
            $k=$key+1;
            $html.='<tr class="trtr">';
                $html.='<td>'.$k.'</td>';
                $html.='<td>'.$p['price'].'</td>';
                $html.='<td>'.$value['title'].'</td>';
                $html.='<td>'.$cem_model[$p['model']]['title'].'</td>';
                $html.='<td>'.$data['zcount'].'</td>';
                $html.='<td>'.$data['mcount'].'</td>';
                $html.='<td>'.$data['scount'].'</td>';
                $html.='<td>'.$price.'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //各个墓区、排售况分析 分开情况
    static public function show_sell_row_one($arra){
        
        $cem=self::table("cem")->field("title")->where(['id'=>$arra['cem_id']])->find();
        $cem_area=self::table("cem_area")->field("title")->where(["id"=>$arra['cem_area_id']])->find();
        $where='';
        $html='';
        if($arra['starttime'] != '' and $arra['endtime'] != ''){
            $where=' and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']);
        }else if($arra['starttime'] != '' and $arra['endtime'] == ''){
            $where=' and settime>='.strtotime($arra['starttime']);
        }else if($arra['starttime'] == '' and $arra['endtime'] != ''){
            $where=' and settime<='.strtotime($arra['endtime']);
        }
        $p=self::field('price')->group('price')->where('cem_id='.$arra['cem_id'].' and cem_area_id='.$arra['cem_area_id'].$where)->select();
        
        foreach ($p as $key => $vo) {
            $arr=self::field("id,cem_row_id")->where('pay_status=1 and status=44 and cem_id='.$arra['cem_id'].' and cem_area_id='.$arra['cem_area_id'].' and price='.$vo['price'].$where)->select();
            $countone=self::field("id")->where('pay_status=1 and status=44 and cem_id='.$arra['cem_id'].' and cem_area_id='.$arra['cem_area_id'].' and price='.$vo['price'].$where)->count();//成交个数
            $countall=self::field("id")->where('pay_status=1 and status=44'.' and price='.$vo['price'].$where)->count();//总成交个数
            $zbili=$countone/$countall*100;//占总个数比例
            $moneyone=self::field("sum(money)")->where('pay_status=1 and status=44 and cem_id='.$arra['cem_id'].' and cem_area_id='.$arra['cem_area_id'].' and price='.$vo['price'].$where)->select();//实收金额
            $moneyall=self::field("sum(money)")->where('pay_status=1 and status=44 '.' and price='.$vo['price'].$where)->select();//总成交金额
            $mbili=$moneyone[0]['sum(money)']/$moneyall[0]['sum(money)']*100;//占总个数比例
            $html.='<tr class="trtr">';
                $html.='<td>'.$cem['title'].'-'.$cem_area['title'].'</td>';
                $html.='<td>'.$vo['price'].'</td>';
                $html.='<td>';
                $idstr='';
                foreach ($arr as $key => $v) {
                    if($key == 0){
                        $idstr.=$v['cem_row_id'];
                    }else{
                        $idstr.=','.$v['cem_row_id'];    
                    }
                }
                $pai=self::table('cem_row')->field('id,title')->where('id in ('.$idstr.')')->select();
                foreach ($pai as $key => $value) {
                    if($key == 0){
                        $html.=$value['title'];
                    }else{
                        $html.=','.$value['title'];
                    }
                    
                }
                $html.='</td>';
                if($countone){
                    $html.='<td>'.$countone.'</td>';
                }else{
                    $html.='<td>0</td>';    
                }
                $html.='<td>'.$zbili.'</td>';
                if($moneyone[0]['sum(money)']){
                    $html.='<td>'.$moneyone[0]['sum(money)'].'</td>';
                }else{
                    $html.='<td>0</td>';    
                }
                $html.='<td>'.$mbili.'</td>';
            $html.='</tr>';
        }
        return $html;                           
    }
    //各个墓区、排售况分析 总体情况
    static public function show_sell_row_all($arra){
        $cem=self::table("cem")->field("id,title")->select();
        $html='';
        $where='';
        if($arra['starttime'] != '' and $arra['endtime'] != ''){
            $where=' and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']);
        }else if($arra['starttime'] != '' and $arra['endtime'] == ''){
            $where=' and settime>='.strtotime($arra['starttime']);
        }else if($arra['starttime'] == '' and $arra['endtime'] != ''){
            $where=' and settime<='.strtotime($arra['endtime']);
        }
        foreach ($cem as $k => $v) {
            $cem_area=self::table("cem_area")->field("id,title")->where(["cem_id"=>$v['id']])->select();
            foreach ($cem_area as $key => $vo) {
                $countone=self::field("id")->where('pay_status=1 and status=44 and cem_id='.$v['id'].' and cem_area_id='.$vo['id'].$where)->count();//成交个数
                $countall=self::field("id")->where('pay_status=1 and status=44'.$where)->count();//总成交个数
                $zbili=$countone/$countall*100;//占总个数比例
                $moneyone=self::field("sum(money)")->where('pay_status=1 and status=44 and cem_id='.$v['id'].' and cem_area_id='.$vo['id'].$where)->select();//实收金额
                $moneyall=self::field("sum(money)")->where('pay_status=1 and status=44 '.$where)->select();//总成交金额
                $mbili=$moneyone[0]['sum(money)']/$moneyall[0]['sum(money)']*100;//占总个数比例
                $html.='<tr class="trtr">';
                    $html.='<td>'.$v['title'].'-'.$vo['title'].'</td>';
                    if($countone){
                        $html.='<td>'.$countone.'</td>';
                    }else{
                        $html.='<td>0</td>';    
                    }
                    $html.='<td>'.$zbili.'</td>';
                    if($moneyone[0]['sum(money)']){
                        $html.='<td>'.$moneyone[0]['sum(money)'].'</td>';
                    }else{
                        $html.='<td>0</td>';    
                    }
                    $html.='<td>'.$mbili.'</td>';
                $html.='</tr>';
            }
        }
        return $html;
    }
    ////墓位销售、剩余情况表 统计结果 
    static public function select_mwsell_list($arra){
        $pai=self::table('cem_row')->field('id,title')->where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area']])->select();
        $cem_model=_Tpl::tlist(8);//墓位类型
        $html='';
        $price='';
        foreach ($pai as $key => $value) {
            $data['zcount']=self::where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area'],'cem_row_id'=>$value['id']])->count();
            $data['mcount']=self::where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area'],'cem_row_id'=>$value['id'],'status'=>44])->count();
            $data['scount']=$data['zcount']-$data['mcount'];
            $p=self::field('price,model')->where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area'],'cem_row_id'=>$value['id']])->find();
            $money=self::field('sum(price)')->where(['cem_id'=>$arra['id'],'cem_area_id'=>$arra['area'],'cem_row_id'=>$value['id'],'status'=>38])->select();
            if($money[0]['sum(price)'] != null){//墓位费 合计
                $price=$money[0]['sum(price)'];
            }else{
                $price=0;
            }
            $k=$key+1;
            $html.='<tr class="trtr">';
                $html.='<td>'.$k.'</td>';
                $html.='<td>'.$p['price'].'</td>';
                $html.='<td>'.$value['title'].'</td>';
                $html.='<td>'.$cem_model[$p['model']]['title'].'</td>';
                $html.='<td>'.$data['zcount'].'</td>';
                $html.='<td>'.$data['mcount'].'</td>';
                $html.='<td>'.$data['scount'].'</td>';
                $html.='<td>'.$price.'</td>';
            $html.='</tr>';
        }
        return $html;
    }
    //墓位销售员业绩统计-个人  有时间
    static public function sselect_user_list_tab_one_time($arra){
        if($arra['type'] == 'one'){
            $html='';
            if($arra['starttime']!='' && $arra['endtime']!=''){
                $arr=self::field('id,long_title,settime,starttime,endtime,money,manage_sum_money')->where('salesman='.$arra['cem'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->select();
                $nickname=self::table('staff')->field('nickname')->where(['id'=>$arra['cem']])->find();
                foreach ($arr as $key => $v) {
                    $html.='<tr class="trtr">';
                        $html.='<td>1</td>';
                        $html.='<td>'.$v['long_title'].'</td>';
                        $html.='<td>'.date('Y-m-d',$v['settime']).'</td>';
                        $html.='<td>'.date('Y-m-d',$v['starttime']).'</td>';
                        $html.='<td>'.date('Y-m-d',$v['endtime']).'</td>';
                        $html.='<td>'.$v['money'].'</td>';
                        $html.='<td>'.$v['manage_sum_money'].'</td>';
                        $sum=$v['money']+$v['manage_sum_money'];
                        $html.='<td>'.$sum.'</td>';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                    $html.='</tr>';
                }
            }else if($arra['starttime']!='' && $arra['endtime']==''){
                $arr=self::field('id,long_title,settime,starttime,endtime,money,manage_sum_money')->where('salesman='.$arra['cem'].' and status=44 and settime>='.strtotime($arra['starttime']))->select();
                $nickname=self::table('staff')->field('nickname')->where(['id'=>$arra['cem']])->find();
                foreach ($arr as $key => $v) {
                    $html.='<tr class="trtr">';
                        $html.='<td>1</td>';
                        $html.='<td>'.$v['long_title'].'</td>';
                        $html.='<td>'.date('Y-m-d',$v['settime']).'</td>';
                        $html.='<td>'.date('Y-m-d',$v['starttime']).'</td>';
                        $html.='<td>'.date('Y-m-d',$v['endtime']).'</td>';
                        $html.='<td>'.$v['money'].'</td>';
                        $html.='<td>'.$v['manage_sum_money'].'</td>';
                        $sum=$v['money']+$v['manage_sum_money'];
                        $html.='<td>'.$sum.'</td>';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                    $html.='</tr>';
                }
            }else if($arra['starttime']=='' && $arra['endtime']!=''){
               $arr=self::field('id,long_title,settime,starttime,endtime,money,manage_sum_money')->where('salesman='.$arra['cem'].' and status=44 and settime<='.strtotime($arra['endtime']))->select();
                $nickname=self::table('staff')->field('nickname')->where(['id'=>$arra['cem']])->find();
                foreach ($arr as $key => $v) {
                    $html.='<tr class="trtr">';
                        $html.='<td>1</td>';
                        $html.='<td>'.$v['long_title'].'</td>';
                        $html.='<td>'.date('Y-m-d',$v['settime']).'</td>';
                        $html.='<td>'.date('Y-m-d',$v['starttime']).'</td>';
                        $html.='<td>'.date('Y-m-d',$v['endtime']).'</td>';
                        $html.='<td>'.$v['money'].'</td>';
                        $html.='<td>'.$v['manage_sum_money'].'</td>';
                        $sum=$v['money']+$v['manage_sum_money'];
                        $html.='<td>'.$sum.'</td>';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                    $html.='</tr>';
                }     
            }
            return $html;
        }
    }
    //墓位销售员业绩统计-个人  没有时间
    static public function select_user_list_tab_one($arra){
        if($arra['type'] == 'one'){
            $html='';
            $arr=self::field('id,long_title,settime,starttime,endtime,money,manage_sum_money')->where(['salesman'=>$arra['cem'],'status'=>44])->select();
            $nickname=self::table('staff')->field('nickname')->where(['id'=>$arra['cem']])->find();
            foreach ($arr as $key => $v) {
                $html.='<tr class="trtr">';
                    $html.='<td>1</td>';
                    $html.='<td>'.$v['long_title'].'</td>';
                    $html.='<td>'.date('Y-m-d',$v['settime']).'</td>';
                    $html.='<td>'.date('Y-m-d',$v['starttime']).'</td>';
                    $html.='<td>'.date('Y-m-d',$v['endtime']).'</td>';
                    $html.='<td>'.$v['money'].'</td>';
                    $html.='<td>'.$v['manage_sum_money'].'</td>';
                    $sum=$v['money']+$v['manage_sum_money'];
                    $html.='<td>'.$sum.'</td>';
                    $html.='<td>'.$nickname['nickname'].'</td>';
                $html.='</tr>';
            }
            return $html;
        }
    }
    //墓位销售员业绩统计-全部 有时间
    static public function select_user_list_all_time($arra){
         if($arra['id'] == 'all'){
            $html='';
            if($arra['starttime']!='' && $arra['endtime']!=''){
                $arr=self::table('staff')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('salesman='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->count();
                    $money=self::field('sum(money)')->where('salesman='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->select();
                    $manage_sum_money=self::field('sum(manage_sum_money)')->where('salesman='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->select();
                    $nickname=self::table('staff')->field('nickname')->where(['id'=>$info['id']])->find();
                    if($money[0]['sum(money)'] != null){//墓位费 合计
                        $price=$money[0]['sum(money)'];
                    }else{
                        $price=0;
                    }
                    if($manage_sum_money[0]['sum(manage_sum_money)'] != null){//管理费 合计
                        $money=$manage_sum_money[0]['sum(manage_sum_money)'];
                    }else{
                        $money=0;
                    }
                    $data['shouru']=$price+$money;//收入
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                        $html.='<td>'.$money.'</td>';
                        $html.='<td>'.$data['shouru'].'</td>';
                    $html.='</tr>';
                }
            }else if($arra['starttime']!='' && $arra['endtime']==''){
                $arr=self::table('staff')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('salesman='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']))->count();
                    $money=self::field('sum(money)')->where('salesman='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']))->select();
                    $manage_sum_money=self::field('sum(manage_sum_money)')->where('salesman='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']))->select();
                    $nickname=self::table('staff')->field('nickname')->where(['id'=>$info['id']])->find();
                    if($money[0]['sum(money)'] != null){//墓位费 合计
                        $price=$money[0]['sum(money)'];
                    }else{
                        $price=0;
                    }
                    if($manage_sum_money[0]['sum(manage_sum_money)'] != null){//管理费 合计
                        $money=$manage_sum_money[0]['sum(manage_sum_money)'];
                    }else{
                        $money=0;
                    }
                    $data['shouru']=$price+$money;//收入
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                        $html.='<td>'.$money.'</td>';
                        $html.='<td>'.$data['shouru'].'</td>';
                    $html.='</tr>';
                }
            }else if($arra['starttime']=='' && $arra['endtime']!=''){
                $arr=self::table('staff')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('salesman='.$info['id'].' and status=44 and settime<='.strtotime($arra['endtime']))->count();
                    $money=self::field('sum(money)')->where('salesman='.$info['id'].' and status=44 and settime<='.strtotime($arra['endtime']))->select();
                    $manage_sum_money=self::field('sum(manage_sum_money)')->where('salesman='.$info['id'].' and status=44 and settime<='.strtotime($arra['endtime']))->select();
                    $nickname=self::table('staff')->field('nickname')->where(['id'=>$info['id']])->find();
                    if($money[0]['sum(money)'] != null){//墓位费 合计
                        $price=$money[0]['sum(money)'];
                    }else{
                        $price=0;
                    }
                    if($manage_sum_money[0]['sum(manage_sum_money)'] != null){//管理费 合计
                        $money=$manage_sum_money[0]['sum(manage_sum_money)'];
                    }else{
                        $money=0;
                    }
                    $data['shouru']=$price+$money;//收入
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                        $html.='<td>'.$nickname['nickname'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                        $html.='<td>'.$money.'</td>';
                        $html.='<td>'.$data['shouru'].'</td>';
                    $html.='</tr>';
                }
            }
           
            return $html;
        }
    }
    //墓位销售员业绩统计-全部 没有时间
    static public function select_user_list_all($arra){
         if($arra['id'] == 'all'){
            $html='';
            $arr=self::table('staff')->select();
            foreach ($arr as $key => $info) {
                $data['count']=self::where(['salesman'=>$info['id'],'status'=>44])->count();
                $money=self::field('sum(money)')->where(['salesman'=>$info['id'],'status'=>44])->select();
                $manage_sum_money=self::field('sum(manage_sum_money)')->where(['salesman'=>$info['id'],'status'=>44])->select();
                $nickname=self::table('staff')->field('nickname')->where(['id'=>$info['id']])->find();
                if($money[0]['sum(money)'] != null){//墓位费 合计
                    $price=$money[0]['sum(money)'];
                }else{
                    $price=0;
                }
                if($manage_sum_money[0]['sum(manage_sum_money)'] != null){//管理费 合计
                    $money=$manage_sum_money[0]['sum(manage_sum_money)'];
                }else{
                    $money=0;
                }
                $data['shouru']=$price+$money;//收入
                $html.='<tr class="trtr">';
                    $html.='<td>'.$nickname['nickname'].'</td>';
                    $html.='<td>'.$nickname['nickname'].'</td>';
                    $html.='<td>'.$data['count'].'</td>';
                    $html.='<td>'.$price.'</td>';
                    $html.='<td>'.$money.'</td>';
                    $html.='<td>'.$data['shouru'].'</td>';
                $html.='</tr>';
            }
            return $html;
        }
    }
    //墓位销售员业绩统计-个人
    static public function select_user_list($arra){
        $data['count']=self::where(['salesman'=>$arra['id'],'status'=>44])->count();
        $money=self::field('sum(money)')->where(['salesman'=>$arra['id'],'status'=>44])->select();
        $manage_sum_money=self::field('sum(manage_sum_money)')->where(['salesman'=>$arra['id'],'status'=>44])->select();
        $nickname=self::table('staff')->field('nickname')->where(['id'=>$arra['id']])->find();
        if($money[0]['sum(money)'] != null){//墓位费 合计
            $price=$money[0]['sum(money)'];
        }else{
            $price=0;
        }
        if($manage_sum_money[0]['sum(manage_sum_money)'] != null){//管理费 合计
            $money=$manage_sum_money[0]['sum(manage_sum_money)'];
        }else{
            $money=0;
        }
        $data['shouru']=$price+$money;//收入
        $data['nickname']=$nickname['nickname'];//姓命
        $data['price']=$price;//管理费 合计
        $data['money']=$money;//墓位费 合计
        return $data;
    }
    //墓位预订情况统计--全部 有时间
    static public function select_cem_yu_list_all_time($arra){
         if($arra['id'] == 'all'){
            $html='';
            if($arra['starttime']!='' && $arra['endtime']!=''){
                $arr=self::table('cem')->field('id,title')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('cem_id='.$info['id'].' and status=39 and reserve_date>='.strtotime($arra['starttime']).' and reserve_date<='.strtotime($arra['endtime']))->count();
                    $reserve_money=self::field('sum(reserve_money)')->where('cem_id='.$info['id'].' and status=39 and reserve_date>='.strtotime($arra['starttime']).' and reserve_date<='.strtotime($arra['endtime']))->select();
                    $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
                    if($reserve_money[0]['sum(reserve_money)'] != null){
                        $price=$reserve_money[0]['sum(reserve_money)'];
                    }else{
                        $price=0;
                    }
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$info['id'].'</td>';
                        $html.='<td>'.$title['title'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                    $html.='</tr>';
                }
            }else if($arra['starttime']!='' && $arra['endtime'] == ''){
                $arr=self::table('cem')->field('id,title')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('cem_id='.$info['id'].' and status=39 and reserve_date>='.strtotime($arra['starttime']))->count();
                    $reserve_money=self::field('sum(reserve_money)')->where('cem_id='.$info['id'].' and status=39 and reserve_date>='.strtotime($arra['starttime']))->select();
                    $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
                    if($reserve_money[0]['sum(reserve_money)'] != null){
                        $price=$reserve_money[0]['sum(reserve_money)'];
                    }else{
                        $price=0;
                    }
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$info['id'].'</td>';
                        $html.='<td>'.$title['title'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                    $html.='</tr>';
                }
            }else if($arra['starttime']=='' && $arra['endtime'] != ''){
                $arr=self::table('cem')->field('id,title')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('cem_id='.$info['id'].' and status=39 and reserve_date<='.strtotime($arra['endtime']))->count();
                    $reserve_money=self::field('sum(reserve_money)')->where('cem_id='.$info['id'].' and status=39 and reserve_date<='.strtotime($arra['endtime']))->select();
                    $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
                    if($reserve_money[0]['sum(reserve_money)'] != null){
                        $price=$reserve_money[0]['sum(reserve_money)'];
                    }else{
                        $price=0;
                    }
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$info['id'].'</td>';
                        $html.='<td>'.$title['title'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                    $html.='</tr>';
                }
            }
            return $html;
        }
    }
    //墓位预订情况统计--全部 没有时间
    static public function select_cem_yu_list_all($arra){
        if($arra['id'] == 'all'){
            $html='';
            $arr=self::table('cem')->field('id,title')->select();
            foreach ($arr as $key => $info) {
                $data['count']=self::where(['cem_id'=>$info['id'],'status'=>39])->count();
                $reserve_money=self::field('sum(reserve_money)')->where(['cem_id'=>$info['id'],'status'=>39])->select();
                $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
                if($reserve_money[0]['sum(reserve_money)'] != null){
                    $price=$reserve_money[0]['sum(reserve_money)'];
                }else{
                    $price=0;
                }
                $html.='<tr class="trtr">';
                    $html.='<td>'.$info['id'].'</td>';
                    $html.='<td>'.$title['title'].'</td>';
                    $html.='<td>'.$data['count'].'</td>';
                    $html.='<td>'.$price.'</td>';
                $html.='</tr>';
            }
            return $html;
        }
    }
    //墓位预订情况统计
    static public function select_cem_yu_list($info){
        $data['count']=self::where(['cem_id'=>$info['id'],'status'=>39])->count();
        $reserve_money=self::field('sum(reserve_money)')->where(['cem_id'=>$info['id'],'status'=>39])->select();
        $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
        if($reserve_money[0]['sum(reserve_money)'] != null){
            $price=$reserve_money[0]['sum(reserve_money)'];
        }else{
            $price=0;
        }
        $data['eid']=$info['id'];
        $data['title']=$title['title'];
        $data['money']=$price;
        return $data;
    }
    //墓位销售情况统计--总计 时间
    static public function select_cem_list_all_time($arra){
        if($arra['id'] == 'all'){
            $html='';
            if($arra['starttime']!='' && $arra['endtime']!=''){
                $arr=self::table('cem')->field('id,title')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('cem_id='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->count();
                    $muwei=self::field('sum(money)')->where('cem_id='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->select();
                    $guanli=self::field('sum(manage_sum_money)')->where('cem_id='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']).' and settime<='.strtotime($arra['endtime']))->select();
                    $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
                    if($muwei[0]['sum(money)'] != null){
                        $price=$muwei[0]['sum(money)'];
                    }else{
                        $price=0;
                    }
                    if($guanli[0]['sum(manage_sum_money)'] != null){
                        $money=$guanli[0]['sum(manage_sum_money)'];
                    }else{
                        $money=0;
                    }
                    $data['shouru']=$price+$money;
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$info['id'].'</td>';
                        $html.='<td>'.$title['title'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                        $html.='<td>'.$money.'</td>';
                        $html.='<td>'.$data['shouru'].'</td>';
                    $html.='</tr>';
                }
            }else if($arra['starttime']!='' && $arra['endtime'] == ''){
                $arr=self::table('cem')->field('id,title')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('cem_id='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']))->count();
                    $muwei=self::field('sum(money)')->where('cem_id='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']))->select();
                    $guanli=self::field('sum(manage_sum_money)')->where('cem_id='.$info['id'].' and status=44 and settime>='.strtotime($arra['starttime']))->select();
                    $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
                    if($muwei[0]['sum(money)'] != null){
                        $price=$muwei[0]['sum(money)'];
                    }else{
                        $price=0;
                    }
                    if($guanli[0]['sum(manage_sum_money)'] != null){
                        $money=$guanli[0]['sum(manage_sum_money)'];
                    }else{
                        $money=0;
                    }
                    $data['shouru']=$price+$money;
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$info['id'].'</td>';
                        $html.='<td>'.$title['title'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                        $html.='<td>'.$money.'</td>';
                        $html.='<td>'.$data['shouru'].'</td>';
                    $html.='</tr>';
                }
            }else if($arra['starttime']=='' && $arra['endtime'] != ''){
                $arr=self::table('cem')->field('id,title')->select();
                foreach ($arr as $key => $info) {
                    $data['count']=self::where('cem_id='.$info['id'].' and status=44 and settime<='.strtotime($arra['endtime']))->count();
                    $muwei=self::field('sum(money)')->where('cem_id='.$info['id'].' and status=44 and settime<='.strtotime($arra['endtime']))->select();
                    $guanli=self::field('sum(manage_sum_money)')->where('cem_id='.$info['id'].' and status=44 and settime<='.strtotime($arra['endtime']))->select();
                    $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
                    if($muwei[0]['sum(money)'] != null){
                        $price=$muwei[0]['sum(money)'];
                    }else{
                        $price=0;
                    }
                    if($guanli[0]['sum(manage_sum_money)'] != null){
                        $money=$guanli[0]['sum(manage_sum_money)'];
                    }else{
                        $money=0;
                    }
                    $data['shouru']=$price+$money;
                    $html.='<tr class="trtr">';
                        $html.='<td>'.$info['id'].'</td>';
                        $html.='<td>'.$title['title'].'</td>';
                        $html.='<td>'.$data['count'].'</td>';
                        $html.='<td>'.$price.'</td>';
                        $html.='<td>'.$money.'</td>';
                        $html.='<td>'.$data['shouru'].'</td>';
                    $html.='</tr>';
                }
            }
            return $html;
        }
    }
    //墓位销售情况统计--总计
    static public function select_cem_list_all($arra){
        if($arra['id'] == 'all'){
            $html='';
            $xiaoshou='';
            $meiwei='';
            $gmoney='';
            $summoney='';
            $arr=self::table('cem')->field('id,title')->select();
            foreach ($arr as $key => $info) {
                $count=self::where(['cem_id'=>$info['id'],'status'=>44])->count();
                $muwei=self::field('sum(money)')->where(['cem_id'=>$info['id'],'status'=>44])->select();
                $guanli=self::field('sum(manage_sum_money)')->where(['cem_id'=>$info['id'],'status'=>44])->select();
                $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
                if($muwei[0]['sum(money)'] != null){
                    $price=$muwei[0]['sum(money)'];
                }else{
                    $price=0;
                }
                if($guanli[0]['sum(manage_sum_money)'] != null){
                    $money=$guanli[0]['sum(manage_sum_money)'];
                }else{
                    $money=0;
                }
                $shouru=$price+$money;
                $html.='<tr class="trtr">';
                    $html.='<td>'.$info['id'].'</td>';
                    $html.='<td>'.$title['title'].'</td>';
                    $html.='<td>'.$count.'</td>';
                    $html.='<td>'.$price.'</td>';
                    $html.='<td>'.$money.'</td>';
                    $html.='<td>'.$shouru.'</td>';
                $html.='</tr>';
                $xiaoshou=(int)$xiaoshou+(int)$count;
                $meiwei=(int)$meiwei+(int)$price;
                $gmoney=(int)$gmoney+(int)$money;
                $summoney=(int)$summoney+(int)$shouru;
            }
            $html.='<tr class="trtr">';
                $html.='<td>总计</td>';
                $html.='<td>总计</td>';
                $html.='<td>'.$xiaoshou.'</td>';
                $html.='<td>'.$meiwei.'</td>';
                $html.='<td>'.$gmoney.'</td>';
                $html.='<td>'.$summoney.'</td>';
            $html.='</tr>';
            return $html;
        }
        
    }
    //墓位销售情况统计
    static public function select_cem_list($info){
        $data['count']=self::where(['cem_id'=>$info['id'],'status'=>44])->count();
        $muwei=self::field('sum(money)')->where(['cem_id'=>$info['id'],'status'=>44])->select();
        $guanli=self::field('sum(manage_sum_money)')->where(['cem_id'=>$info['id'],'status'=>44])->select();
        $title=self::table('cem')->field('title')->where(['id'=>$info['id']])->find();
        if($muwei[0]['sum(money)'] != null){
            $price=$muwei[0]['sum(money)'];
        }else{
            $price=0;
        }
        if($guanli[0]['sum(manage_sum_money)'] != null){
            $money=$guanli[0]['sum(manage_sum_money)'];
        }else{
            $money=0;
        }
        $data['shouru']=$price+$money;
        $data['eid']=$info['id'];
        $data['title']=$title['title'];
        $data['muwei']=$price;
        $data['guanli']=$money;
        return $data;
    }
    //墓位状态统计数量
    static public function select_cem($info){
        $data['kong']=self::where(['cem_id'=>$info['id'],'status'=>38])->count();
        $data['yuding']=self::where(['cem_id'=>$info['id'],'status'=>39])->count();
        $data['dinggou']=self::where(['cem_id'=>$info['id'],'status'=>44])->count();
        $data['xiazang']=self::where(['cem_id'=>$info['id'],'status'=>41])->count();
        return $data;
    }
    //墓位状态统计总数量
    static public function select_show_all($info){
        if($info['id'] == 'all'){
            $data['kong']=self::where(['status'=>38])->count();
            $data['yuding']=self::where(['status'=>39])->count();
            $data['dinggou']=self::where(['status'=>44])->count();
            $data['xiazang']=self::where(['status'=>41])->count();
            return $data;
        }
    }
    //碑文杂费设置--添加
    static public function tomb_setjsd_set($arra){
        $sta=self::field('cem_id,cem_area_id,cem_row_id,status')->where(['id'=>$arra['eid']])->find();
        if($sta['status'] == '41'){
            $chong=self::table('bw_zf')->where(['dead_id'=>$arra['dyzuser']])->find();
            $data['cem_id']=$sta['cem_id'];
            
            $data['cem_area_id']=$sta['cem_area_id'];
            $data['cem_row_id']=$sta['cem_row_id'];
            $data['cem_info_id']=$arra['eid'];
            $data['staff_id']=session('id');
            if($arra['z_t'] != ''){
                $data['z_t']=$arra['z_t'];
            }
            if($arra['z_d'] != ''){
                $data['z_d']=$arra['z_d'];
            }
            if($arra['z_z'] != ''){
                $data['z_z']=$arra['z_z'];
            }
            if($arra['z_x'] != ''){
                $data['z_x']=$arra['z_x'];
            }
            if($arra['z_t_k'] != ''){
                $data['z_t_k']=$arra['z_t_k'];
            }
            if($arra['z_d_k'] != ''){
                $data['z_d_k']=$arra['z_d_k'];
            }
            if($arra['z_z_k'] != ''){
                $data['z_z_k']=$arra['z_z_k'];
            }
            if($arra['z_x_k'] != ''){
                $data['z_x_k']=$arra['z_x_k'];
            }
            if($arra['z_t_b'] != ''){
                $data['z_t_b']=$arra['z_t_b'];
            }
            if($arra['z_d_b'] != ''){
                $data['z_d_b']=$arra['z_d_b'];
            }
            if($arra['z_z_b'] != ''){
                $data['z_z_b']=$arra['z_z_b'];
            }
            if($arra['z_x_b'] != ''){
                $data['z_x_b']=$arra['z_x_b'];
            }
            if($arra['z_t_k_p'] != ''){
                $data['z_t_k_p']=$arra['z_t_k_p'];
            }
            if($arra['z_d_k_p'] != ''){
                $data['z_d_k_p']=$arra['z_d_k_p'];
            }
            if($arra['z_z_k_p'] != ''){
                $data['z_z_k_p']=$arra['z_z_k_p'];
            }
            if($arra['z_x_k_p'] != ''){
                $data['z_x_k_p']=$arra['z_x_k_p'];
            }
            if($arra['z_t_b_p'] != ''){
                $data['z_t_b_p']=$arra['z_t_b_p'];
            }
            if($arra['z_d_b_p'] != ''){
                $data['z_d_b_p']=$arra['z_d_b_p'];
            }
            if($arra['z_z_b_p'] != ''){
                $data['z_z_b_p']=$arra['z_z_b_p'];
            }
            if($arra['z_x_b_p'] != ''){
                $data['z_x_b_p']=$arra['z_x_b_p'];
            }
            if($arra['zk_sum'] != ''){
                $data['zk_sum']=$arra['zk_sum'];
            }
            if($arra['zb_sum'] != ''){
                $data['zb_sum']=$arra['zb_sum'];
            }
            if($arra['cx'] != ''){
                $data['cx']=$arra['cx'];
            }
            if($arra['cx_type'] != ''){
                $data['cx_type']=$arra['cx_type'];
            }
            if($arra['cx_num'] != ''){
                $data['cx_num']=$arra['cx_num'];
            }
            if($arra['cx_price'] != ''){
                $data['cx_price']=$arra['cx_price'];
            }
            if($arra['cx_sum'] != ''){
                $data['cx_sum']=$arra['cx_sum'];
            }
            if($arra['lb'] != ''){
                $data['lb']=$arra['lb'];
            }
            if($arra['lb_type'] != ''){
                $data['lb_type']=$arra['lb_type'];
            }
            if($arra['lb_price'] != ''){
                $data['lb_price']=$arra['lb_price'];
            }
            if($arra['lb_sum'] != ''){
                $data['lb_sum']=$arra['lb_sum'];
            }
            if($arra['tj'] != ''){
                $data['tj']=$arra['tj'];
            }
            if($arra['tj_num'] != ''){
                $data['tj_num']=$arra['tj_num'];
            }
            if($arra['tj_price'] != ''){
                $data['tj_price']=$arra['tj_price'];
            }
            if($arra['tj_sum'] != ''){
                $data['tj_sum']=$arra['tj_sum'];
            }
            if($arra['zs'] != ''){
                $data['zs']=$arra['zs'];
            }
            if($arra['zs_type'] != ''){
                $data['zs_type']=$arra['zs_type'];
            }
            if($arra['zs_price'] != ''){
                $data['zs_price']=$arra['zs_price'];
            }
            if($arra['zs_sum'] != ''){
                $data['zs_sum']=$arra['zs_sum'];
            }
            if($arra['bzj'] != ''){
                $data['bzj']=$arra['bzj'];
            }
            if($arra['bzj_type'] != ''){
                $data['bzj_type']=$arra['bzj_type'];
            }
            if($arra['bzj_price'] != ''){
                $data['bzj_price']=$arra['bzj_price'];
            }
            if($arra['bzj_sum'] != ''){
                $data['bzj_sum']=$arra['bzj_sum'];
            }
            if($arra['cx_beizhu'] != ''){
                $data['cx_beizhu']=$arra['cx_beizhu'];
            }
            if($arra['lb_beizhu'] != ''){
                $data['lb_beizhu']=$arra['lb_beizhu'];
            }
            if($arra['z_beizhu'] != ''){
                $data['z_beizhu']=$arra['z_beizhu'];
            }
            if($arra['tj_beizhu'] != ''){
                $data['tj_beizhu']=$arra['tj_beizhu'];
            }
            if($arra['zs_beizhu'] != ''){
                $data['zs_beizhu']=$arra['zs_beizhu'];
            }
            if($arra['bzj_beizhu'] != ''){
                $data['bzj_beizhu']=$arra['bzj_beizhu'];
            }
            if($arra['sum'] != ''){
                $data['sum']=$arra['sum'];
            }
            if($arra['dsum'] != ''){
                $data['dsum']=$arra['dsum'];
            }
            $data['sta']=3;
            $data['ztime']=time();
            if($chong){
                if (self::table('bw_zf')->where(['dead_id'=>$arra['dyzuser']])->update($data) !== false) {
                    return 'ok';
                }
                return 'no';
            }else{
                $data['dead_id']=$arra['dyzuser'];
                if (self::table('bw_zf')->insert($data) !== false) {
                    return 'ok';
                }
                return 'no';
            }
        }else{
            return 'msg';
        }
        
    }
    //修改业务员信息
    static public function set_subuser($info){
        if (self::where('id', $info['id'])->update(['salesman'=>$info['sale']]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    //预订墓位 退订
    static public function ten_setqx($info){
        if (self::where('id', $info['id'])->update(['sta'=>2,'status'=>38]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    //已购墓位 退订
    static public function tuiding($info){
        if (self::where('id', $info['id'])->update(['sta'=>4,'status'=>38]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    //确认墓位预订收费
    static public function finan_set_muweis($info){
        if (empty($info['id'])) {
            return ['status' => false, 'msg' => '请选择信息'];
        }
        if (self::where('id', $info['id'])->update(['pay_status'=>1]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    //确认墓位预订收费
    static public function finan_set_muwei($info){
        if (empty($info['id'])) {
            return ['status' => false, 'msg' => '请选择信息'];
        }
        if (self::where('id', $info['id'])->update(['pay_status'=>2]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    //确认墓位预订退订收费
    static public function finan_set_muweit($info){
        if (empty($info['id'])) {
            return ['status' => false, 'msg' => '请选择信息'];
        }
        if (self::where('id', $info['id'])->update(['pay_status'=>3]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    //碑文杂费收费确认
    static public function finan_set_muweiz($info){
        if (empty($info['id'])) {
            return ['status' => false, 'msg' => '请选择信息'];
        }
        if (self::table('bw_zf')->where('id', $info['id'])->update(['sta'=>2]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }
    static public function edit ($info) {
        if (empty($info['ids']) || !count($info['ids']) ) {
            return ['status' => false, 'msg' => '请选择要修改的墓位'];
        }

        $feild = [
            // 'cem_id',
            // 'cem_area_id',
            // 'cem_row_id',
            'price',
            'material',
            'style',
            'model',
            'status',
            'length',
            'width',
            'acreage',
        ];
        $update = [];
        // $long_title = self::long_title($info['cem_id'], $info['cem_area_id'], $info['cem_row_id']);
        if (!empty($info['e_all']) && $info['e_all'] ) {
            foreach ($feild as $v) {

                $update[$v] = $info[$v];
            }
        } else {
            foreach ($feild as $v) {
                if (!empty($info['e_' . $v]) && $info['e_' . $v] ) {
                    $update[$v] = $info[$v];
                }
            }
        }
        // wcc($update);
        foreach ($info['ids'] as $id) {
            if (self::where('id', $id)->update($update) === false) {
                return RE_ERROR;
            }
        }

        return RE_SUCCESS;
    }

    static public function set_status ($id, $val) {

        if (self::where('id', $id)->update(['status' => $val]) !== false) {
            return RE_SUCCESS;
        }
        return RE_ERROR;
    }

    static public function long_title ($cem_id, $area_id, $row_id) {
        $e = '';
        $e .= self::table('cem')->where('id', $cem_id)->value('title');
        $e .= '-';
        $e .= self::table('cem_area')->where('id', $area_id)->value('title');
        $e .= '-';
        $e .= self::table('cem_row')->where('id', $area_id)->value('title');
        $e .= '-';
        return $e;
    }

    static public function add ($info) {
        if (!(int)$info['cem_id']) {
            return ['status' => false, 'msg' => '请选择墓园'];
        }
        if (!(int)$info['cem_area_id']) {
            return ['status' => false, 'msg' => '请选择墓区'];
        }
        if (!(int)$info['cem_row_id']) {
            return ['status' => false, 'msg' => '请选择墓排'];
        }
        if ($info['type'] == 'one' && empty($info['title'])) {
            return ['status' => false, 'msg' => '请填写名称'];
        }

        if ($info['type'] == 'many' && (empty($info['many_start']) ||  empty($info['many_num']))) {
            return ['status' => false, 'msg' => '请填写开始编号和数量'];
        }
        $long_title = self::long_title($info['cem_id'], $info['cem_area_id'], $info['cem_row_id']);
        if ($info['type'] == 'one'  && self::insert([
                'title'          => $info['title'],
                'long_title'     => $long_title . $info['title'],
                'cem_id'         => $info['cem_id'],
                'cem_area_id'    => $info['cem_area_id'],
                'cem_row_id'     => $info['cem_row_id'],
                'style'          => $info['style'],
                'material'       => $info['material'],
                'model'          => $info['model'],
                'status'         => $info['status'],
                'length'         => $info['length'],
                'width'          => $info['width'],
                'acreage'        => $info['acreage'],
                'price'        => $info['price'],
                'create_time'    => time(),
                'create_by'    => session('id'),
            ]) !== false) {
            return RE_SUCCESS;
        }
        if ($info['type'] == 'many') {
            $data_list = [];
            for ($i = (int)$info['many_start']; $i <= (int)$info['many_num']; $i++) {
                $data_list[] = [
                        'long_title'     => $long_title . $i . '号',
                        'title'          => $i . '号',
                        'cem_id'         => $info['cem_id'],
                        'cem_area_id'    => $info['cem_area_id'],
                        'cem_row_id'     => $info['cem_row_id'],
                        'style'          => $info['style'],
                        'material'       => $info['material'],
                        'model'          => $info['model'],
                        'status'         => $info['status'],
                        'length'         => $info['length'],
                        'width'          => $info['width'],
                        'acreage'        => $info['acreage'],
                        'price'        => $info['price'],
                        'create_time'    => time(),
                        'create_by'    => session('id'),
                    ];
            }
            if (count($data_list) && self::insertAll($data_list) !== false) {
                return RE_SUCCESS;
            }

        }
        return RE_ERROR;
    }


    public function long_name ($id) {
        $e =  self::alias('a')
            ->join('contacts b','a.contacts_id = b.id')
            ->where('a.id', $id)->find();
    }

    public function pay_status () {
        return ['未付款', '已付款'];
    }

}

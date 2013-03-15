<?php
header('Content-Type: text/html; charset=UTF-8');

    @$number=$_GET['no'];

if($number!=''){
  $url="http://api.ickd.cn/?id=D6A933B5DBA5B4B7B38268CD778CE46B&com=ems&type=html&encode=utf8&ver=2&nu=$number";  
    $ch = curl_init();
    $timeout = 5; 
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $file_contents = curl_exec($ch);
    curl_close($ch);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMS单号<?php echo $number ?>查询 - EMS快递单号查询 邮政速递单号查询 E邮宝查询 快递网点 快递价钱</title>
<meta name="keywords" content="申通快递单号查询、申通E物流单号查询、E邮宝单号查询、速递单号查询">
<meta name="description" content="快递查询网提供的实时准确的EMS邮政速递E邮宝快递单号查询和网点分布及快递价钱，E邮宝物流查询服务，实时跟踪运送记录，。">
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta http-equiv="Content-Language" content="zh-cn" />
<link rel="stylesheet" href="http://upey.net/kuaidi.cx/css/kd.css" type="text/css" />

</head>
<body>
    <div id="header">
	   <div id="logo"><h1><a href="http://kuaidi.cx/" title="快递查询网"><img src="http://upey.net/kuaidi.cx/logo.jpg" width="150" height="50" title="快递查询网" alt="快递查询网" /></a></h1></div>
            <div class="box2">
            	<div class="boxtitle">[<a href="http://kuaidi.cx/ems.php" title="EMS单号查询">EMS邮政速递单号查询</a>]</div>
                <form id="form1" name="form1" method="get" action="http://kuaidi.cx/ems.php">
                <div class="boxform">
                	EMS单号：
                	<input type="text" name="no" id="no" />
            	    <input type="submit"  class="button" value="查询" />
                </div>
                </form>
            </div>
	</div>
	<div class="clear"></div>
<div class="kdresult">

<?php if($number!=''){echo "$file_contents";}else{ echo "快递查询网为你提供快捷的邮政速递单号查询服务！如需帮助，可拨打EMS客服电话（11183）咨询。"; } ?>
<p>
<script type="text/javascript"> 
alimama_pid="mm_13943357_3481981_11390199"; 
alimama_width=728; 
alimama_height=90; 
</script> 
<script src="http://a.alimama.cn/inf.js" type="text/javascript"> 
</script>
</p>    
	数据由邮政速递E邮宝公司官网提供！如需帮助，可拨打客服电话（11183）咨询。
	<div class="tip"><b>操作建议:</b>
    <ol>
    <li>请核对您的单号是否为<b>EMS快递单号</b>,EMS单号首尾各两个英文字母+中间9位阿拉伯数字组成的13位字符串，尾部2字母一
般是国别码，国内EMS一般使用CN或者CS，以KA、SA、XA、XB、XC、XN、SB、AA、PA、ES、EX等开头，结尾不是两位字母的是邮政国内单号或邮政国际单号；</li>    
    <li>历史单号一段时间后会失效；</li>
	<li>刚发的快递，有时第二天才可查到；</li>
	<li>EMS邮政速递全国统一客服电话：11183；</li>
    <li>[LP]开头的是淘宝内部单号，用运单号码才可查询；</li>
	<li><b>注意</b>：在查询高峰时可能会出现网速缓慢的情况，请稍后查询，或是到邮政速递EMS官方网站查询。</li>
    </ol>
    </div>
      <div id="myads"></div>
</div>
	  
<div class="com text-indent">
<p><h2><img src="http://upey.net/kuaidi.cx/logo/ems.gif" width="190" height="60" title="EMS邮政速递单号查询" alt="EMS邮政速递单号查询" /></h2></p>
<p>中国邮政EMS快递集团公司，主要经营国际、国内EMS快递业务，是中国快递服务业的最早供应商之一，也是目前中国快递行业的最大运营商和领导者。EMS快递拥有员工2万多人，EMS快递业务通达全球200多个国家和地区以及国内近2千个城市，是目前国内快递配送网点最齐全的快递公司之一。</p>
<p>EMS快递业务除提供国内、国际特快专递服务外，EMS快递相继推出国内次晨达和次日递、EMS国际承诺服务和限时递等高端服务，同时提供EMS代收货款、收件人付费、鲜花礼仪速递等增值服务。</p>
<p>EMS还具备领先的信息处理能力。建立了以国内300多个城市为核心的信息处理平台，与万国邮政联盟查询系统链接，可实现EMS快递单号查询、包裹查询、邮件的全球跟踪查询。建立了以EMS快递查询网站、短信、EMS快递电话客服三位一体的实时信息查询系统。</p>
<p>EMS快递拥有首屈一指的航空和陆路运输网络。依托中国邮政航空公司，建立了上海EMS快递集散中心的全夜航航空集散网，现有专用速递揽收、投递车辆20,000余部。覆盖最广的网络体系为EMS实现国内300多个城市间次晨达、次日递提供了有力的支撑。</p>
<p>EMS快递具有高效发达的邮件处理中心。全国共有200多个处理中心，其中北京EMS、上海EMS和广州EMS处理中心分别达到30000平方米、20000余平方米和 37000平方米，同时，各处理中心配备了先进的自动分拣设备。亚洲地区规模最大、技术装备先进的中国邮政EMS航空速递物流集散中心也将于2008年在南京建成并投入使用。</p>
<p>“e邮宝”是中国速递服务公司与支付宝最新打造的一款国内经济型速递业务，专为中国个人电子商务所设计，采用全程陆运模式，其价格较普通EMS有大幅度下降，大致为EMS的一半，但其享有的中转环境和服务与EMS几乎完全相同，而且一些空运中的禁运品将可能被e邮宝所接受。“e邮宝”的发货地目前已开通九大省市，送达区域覆盖全国。 双方合作之后，目前在阿里巴巴和淘宝以及外部千余家网店用户可轻松选用EMS标准服务（简称e-EMS）和e邮宝作为物流形式。09年已经采用全程空运模式了，液体，膏状物体等才采用陆运模式。e邮宝属于EMS旗下品牌，经济型快递，价格低廉，全程陆运。e邮宝一般实效在6-10天或更久，所以非常慢，类似于普通平邮，由于e邮宝的服务合同中无时限，故对于无法及时到达的货物，不负有法律责任。2013年1月1号，e邮宝被取消了，国内经济快递代替。</p>
<p>EMS快递单号查询有效期 ：国内邮件自交寄之日起，一年内有效（自交寄之日起6个月内的邮件，可通过登陆本网站查询，6个月-1年内的邮件，可通过拨打客服电话11183查询）；国际及台港澳特快专递邮件（EMS）自交寄之日起4个月内。</p>
</div>

<div id="footer">
<p>&copy; 2013 KuaiDi.CX <a href="http://kuaidi.cx/ems.php" title="EMS邮政速递单号查询">EMS邮政速递单号查询</a> - <a href="http://kuaidi.cx/" title="快递单号查询">快递单号查询</a></p>
</div>
    <div id="span_myads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-6731721627828202";
/* 快递抬头 */
google_ad_slot = "3791291439";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div> 
<script type="text/javascript"> 
document.getElementById("myads").innerHTML = document.getElementById("span_myads").innerHTML; 
document.getElementById("span_myads").innerHTML = ""; 
</script>
</body>
</html>

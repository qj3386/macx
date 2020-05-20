<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:39:"template/default_pc/html/vod\index.html";i:1589939435;s:62:"D:\wamp\www\maccms10\template\default_pc\html\public\head.html";i:1589935841;s:64:"D:\wamp\www\maccms10\template\default_pc\html\public\paging.html";i:1589848306;s:67:"D:\wamp\www\maccms10\template\default_pc\html\public\right_box.html";i:1589880711;s:62:"D:\wamp\www\maccms10\template\default_pc\html\public\foot.html";i:1589861025;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"><meta http-equiv="Cache-Control" content="no-siteapp" /><meta http-equiv="Cache-Control" content="no-transform" />
<title><?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<link rel="stylesheet" href="<?php echo $maccms['path']; ?>static/images/layout.css">
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/4.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/public.js"></script>
<!--[if IE 6]>
<script src="<?php echo $maccms['path']; ?>static/js/DD_belatedPNG_0.0.8a.js"></script>
<script>
DD_belatedPNG.fix("div,img,li,input,a,span");
</script>
<![endif]-->
</head><body>
<div id="head">
	<div class="logo">
		<a href="<?php echo $maccms['path']; ?>"><img src="<?php echo $maccms['path']; ?><?php echo $maccms['site_logo']; ?>" width="350" height="80" /></a>
	</div>
	<div class="subvs"><script type="text/javascript">show(74);</script></div>
	<div class="clear"></div>
	<div id="allmenu">
		<div class="nav">
			<div class="search">
				<form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>">
					<input type="text" name="wd" id="wd" class="s_text" onclick="if(this.value=='请输入检索的关键词')this.value=''" value="请输入检索的关键词">
					<input type="submit" value="搜索" class="s_ton" id="s_ton">
				</form>
			</div>
			<ul id="nav" class="superfish">
				<li class="<?php if($maccms['aid'] == 1): ?>active<?php endif; ?>"><a class="<?php if($maccms['aid'] == 1): ?>navbar-brand<?php endif; ?>" href="<?php echo $maccms['path']; ?>">首页</a></li>
				<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","num":"4","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="rndmenu">
			<div id="submenu" style="display:block;">
				<ul class="pinx plast"><li>类型：</li><?php $__TAG__ = '{"start":"5","ids":"parent","order":"asc","by":"sort","num":"8","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
			</div>
		</div>
	</div>
</div>
<div class="box" style="margin:5px auto;">
	<div id="url">
		<script type="text/javascript">show(61);</script>
		<script type="text/javascript">show(69);</script>
		<script type="text/javascript">show(70);</script>
	</div>
</div>
<div id="main">
	<div class="mbox">
		<div class="newslist">
			<p>最后更新时间</p>
			<p class="cur">
			<span class="time"><?php echo date('Y/m/d'); ?></span>
			<span><font color="#c62765">已收录<?php echo mac_data_count(0,'all','vod'); ?>部</font></span>
			</p>
			<br>
			<p>做一个聪明的AV收藏家，速记网址：</p>
			<p class="pur">AVXCL.COM XCLAV.COM</p>
			<br>
			<p>会欣赏AV的狼友们撸管只上AV小次郎<font color="#C62765">(www.avxcl.com)</font></p>
			<p class="pur"><a href="javascript:void(0)" onclick="getFav()">【立刻加入收藏夹】</a></p>
		</div>

		<?php $__TAG__ = '{"num":"1","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<div class="list">
			<h4 class="rtl"><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
			<div class="info">
				<span class="time"><?php echo date('Y/m/d',$vo['vod_time']); ?></span>
			</div>
			<a href="<?php echo mac_url_vod_detail($vo); ?>" class="img" target="_blank" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" /></a>
			<p align="center">
			<a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><br />
			<!-- <a href="javascript:;"><?php echo $vo['vod_area']; ?></a><br /> -->
			演员：<?php echo $vo['vod_actor']; ?><br />
			更新时间：<?php echo date('Y/m/d',$vo['vod_time']); ?><br />
			</p>
			<p align="center">
			<a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" class="more">[查看详细]</a>
			</p>
			<div class="meta">
				<span class="fav"><a href="javascript:void(0)" onclick='getFav("<?php echo mac_url_vod_detail($vo); ?>","<?php echo $vo['vod_name']; ?>")'>收藏本片</a></span>
				<span class="tag">所属系列：<a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type']['type_name']; ?></a></span>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>

		<div class="box100" style="margin-bottom:40px;"><script>for(var g=346;g<357;g++)show(g);</script></div>

		<?php $__TAG__ = '{"num":"15","start":"1","order":"desc","by":"time","paging":"yes","pageurl":"vod\/search","half":"3","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<div class="list">
			<h4 class="rtl"><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
			<div class="info">
				<span class="time"><?php echo date('Y/m/d',$vo['vod_time']); ?></span>
			</div>
			<a href="<?php echo mac_url_vod_detail($vo); ?>" class="img" target="_blank" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" /></a>
			<p align="center">
			<a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><br />
			<!-- <a href="javascript:;"><?php echo $vo['vod_area']; ?></a><br /> -->
			演员：<?php echo $vo['vod_actor']; ?><br />
			更新时间：<?php echo date('Y/m/d',$vo['vod_time']); ?><br />
			</p>
			<p align="center">
			<a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" class="more">[查看详细]</a>
			</p>
			<div class="meta">
				<span class="fav"><a href="javascript:void(0)" onclick='getFav("<?php echo mac_url_vod_detail($vo); ?>","<?php echo $vo['vod_name']; ?>")'>收藏本片</a></span>
				<span class="tag">所属系列：<a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type']['type_name']; ?></a></span>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<!-- 分页 -->
		<div class="ui-bar list-page fn-clear">
			<?php if($__PAGING__['record_total'] > 0): ?>
<div class="mac_pages">
    <div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div>
    <div class="page_info">
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a>
        <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
        <?php else: ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a>
    </div>
</div>
<?php else: ?>
<div class="wrap">
    <h1>没有找到匹配数据</h1>
</div>
<?php endif; ?>
		</div>
	</div>
	<div class="sbox">
	<div class="sidebar">
		<h4 class="stl">热门分类</h4>
		<div class="scon">
			<ul class="stag">
				<li><a href="<?php echo mac_url('vod/type', [], ['type_id'=>3]); ?>">无码</a>(<?php echo mac_data_count(3, 'all', 'vod'); ?>)</li>
				<li><a href="<?php echo mac_url('vod/type', [], ['type_id'=>7]); ?>">字幕</a>(<?php echo mac_data_count(7, 'all', 'vod'); ?>)</li>
				<li><a href="<?php echo mac_url('vod/type', [], ['type_id'=>9]); ?>">韩国</a>(<?php echo mac_data_count(9, 'all', 'vod'); ?>)</li>
				<li><a href="<?php echo mac_url('vod/type', [], ['type_id'=>16]); ?>">SM</a>(<?php echo mac_data_count(16, 'all', 'vod'); ?>)</li>
				<li><a href="<?php echo mac_url('vod/type', [], ['type_id'=>10]); ?>">人妖</a>(<?php echo mac_data_count(10, 'all', 'vod'); ?>)</li>
				<li><a href="<?php echo mac_url('vod/type', [], ['type_id'=>11]); ?>">男同</a>(<?php echo mac_data_count(11, 'all', 'vod'); ?>)</li>
				<li><a href="<?php echo mac_url('vod/type', [], ['type_id'=>12]); ?>">女同</a>(<?php echo mac_data_count(12, 'all', 'vod'); ?>)</li>
			</ul>
		</div>
	</div>
	<div class="sidebar" style="width:300px;padding:0;border:none"><script>show(358);</script></div>
	<div class="sidebar">
		<h4 class="stl">最近更新</h4>
		<div class="scon">
			<ul class="stag">
				<?php $__TAG__ = '{"num":"10","paging":"no","type":"all","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li style="background:none;"><a href="<?php echo mac_url_vod_detail($vo); ?>"><?php echo $vo['vod_name']; ?></a> <?php echo date('m/d',$vo['vod_time']); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
<div class="box" style="margin-top:5px;">
	<div id="url">
		<script type="text/javascript">show(73);</script>
	</div>
</div>
<div id="foot">
	<div style="display:none;" class="back-to" id="toolBackTop">
		<a title="返回顶部" onclick="window.scrollTo(0,0);return false;" href="#top" class="back-top">返回顶部</a>
	</div>
	<p>Copyright © 2013-2020 （www.avxsl.com）All rights reserved.</p>
	<div style="display:none"><?php echo $maccms['site_tj']; ?></div>
</div>
<script type="text/javascript">
function getFav(url,name){
	var turl = url==""?"http://www.lucilang.com/":"http://www.lucilang.com"+url;
	var tname = name==""||name==undefined?"AV撸次郎":"AV撸次郎-"+name;
	if(url=="play"){turl = location.href}
	if (document.all)
	{
		window.external.addFavorite(turl,tname);
	}
	else if (window.sidebar)
	{
		window.sidebar.addPanel(tname,turl,"");
	}
}
$(document).ready(function () {
	var bt = $('#toolBackTop');
	var sw = $(document.body)[0].clientWidth;
	var limitsw = (sw - 1060) / 2 - 40;
	if (limitsw > 0){
		limitsw = parseInt(limitsw);
		bt.css("right",limitsw);
	}

	$(window).scroll(function() {
		var st = $(window).scrollTop();
		if(st > 30){
			bt.show();
		}else{
			bt.hide();
		}
	});
})
</script>
</body></html>
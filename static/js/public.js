function get_iframe(ifr_id, width, height)
{
	var iframe='';
	iframe+='<iframe id="'+ifr_id+'" ';
	iframe+='name="'+ifr_id+'" ';
	iframe+='src="about:blank" ';
	iframe+='frameborder="0" ';
	iframe+='marginwidth="0" ';
	iframe+='marginheight="0" ';
	iframe+='vspace="0" ';
	iframe+='allowtransparency="true" ';
	iframe+='scrolling="no" ';
	iframe+='width="'+width+'" ';
	iframe+='height="'+height+'">';
	iframe+='</iframe>';
	return iframe;
}
function ad1(id, url, pic1, url2, pic2, width, height) {
	var html    = '';
	var doc     = '';
	var get_id  = '_ifr_'+id+'_ad';
	var iframe  = get_iframe(get_id,width,height);
	html+='<!DOCTYPE html><html>';
	html+='<head>';
	html+='<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
    html+='<style type="text/css">*{margin: 0px;padding: 0px;border: 0px;}</style>';
	html+='</head>';
	html+='<body style="padding:0px;margin:0px;border:0px;">';
    if(url2!='' && pic2!='')
    {
        width = width/2;
	    html+='<a href="'+url+'" target="_blank">';
	    html+='<img src="'+pic1+'" width="'+width+'" height="'+height+'" />';
	    html+='</a>';
	    html+='<a href="'+url2+'" target="_blank">';
	    html+='<img src="'+pic2+'" width="'+width+'" height="'+height+'" />';
	    html+='</a>';
    } else {
	    html+='<a href="'+url+'" target="_blank">';
	    html+='<img src="'+pic1+'" width="'+width+'" height="'+height+'" />';
	    html+='</a>';
    }
	html+='</body></html>';
	document.write(iframe);
	doc = document.getElementById(get_id);
	if( doc.document ) {
		doc.contentWindow.document.open();
		doc.contentWindow.document.write(html);
		doc.contentWindow.document.close();
	} else {
		doc.contentDocument.open();
		doc.contentDocument.write(html);
		doc.contentDocument.close();
	}
}
function ad2(id,url,url2,pic1,pic2,width,height) {
	var right_html  ='';
	var left_html   ='';

	var right_doc   ='';
	var left_doc    ='';

	var right_get_id='_ifr_'+id+'_right_ad';
	var left_get_id ='_ifr_'+id+'_left_ad';

	var right_iframe='';
	var left_iframe ='';

	right_iframe+= '<div id="ad_right" ';
	right_iframe+= 'style="padding:0px; display:block; visibility:visible; border:none; float:none; ';
	right_iframe+= 'overflow:hidden; position:fixed; width: 120px; height: 290px; background:none;';
	right_iframe+= 'z-index: 9001; right: 7px; top:7px;';
	right_iframe+= '_position:absolute;_top:expression(eval(document.documentElement.scrollTop+7))">';
	right_iframe+= get_iframe(right_get_id,width,height);
	right_iframe+= '<a style="position: absolute;width: 120px;height: 20px;';
	right_iframe+= 'top: 270px;left: 0px;cursor: pointer;color: rgb(255, 255, 255);';
	right_iframe+= 'font-size: 13px;font-family: 微软雅黑;text-align: center;';
	right_iframe+= 'line-height: 20px;background-color: rgb(153, 153, 153); text-decoration:none;" ';
	right_iframe+= 'href="javascript:void(0);" ';
	right_iframe+= 'onclick="document.getElementById(\'ad_right\').style.display=\'none\'">';
	right_iframe+= '关闭</a>';
	right_iframe+= '</div>';

	left_iframe+= '<div id="ad_left" ';
	left_iframe+= 'style="padding:0px; display:block; visibility:visible; border:none; float:none; ';
	left_iframe+= 'overflow:hidden; position:fixed; width: 120px; height: 290px; background:none;';
	left_iframe+= 'z-index: 9001; left: 7px; top:7px;';
	left_iframe+= '_position:absolute;_top:expression(eval(document.documentElement.scrollTop+7))">'
	left_iframe+= get_iframe(left_get_id,width,height);
	left_iframe+= '<a style="position: absolute;width: 120px;height: 20px;';
	left_iframe+= 'top: 270px;left: 0px;cursor: pointer;color: rgb(255, 255, 255);';
	left_iframe+= 'font-size: 13px;font-family: 微软雅黑;text-align: center;';
	left_iframe+= 'line-height: 20px;background-color: rgb(153, 153, 153); text-decoration:none;" ';
	left_iframe+= 'href="javascript:void(0);" ';
	left_iframe+= 'onclick="document.getElementById(\'ad_left\').style.display=\'none\'">';
	left_iframe+= '关闭</a>';
	left_iframe+= '</div>';

	right_html+='<!DOCTYPE html><html>';
	right_html+='<head>';
	right_html+='<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	right_html+='</head>';
	right_html+='<body style="padding:0px;margin:0px;border:0px;">';
	right_html+='<div style="padding:0px;width:120px;height:270px;border:0px;margin:0px;">';
	right_html+='<a href="'+url+'" target="_blank">';
	right_html+='<img src="'+pic1+'" width="'+width+'" height="'+height+'" />';
	right_html+='</a>';
	right_html+='</div>';

	left_html+='<!DOCTYPE html><html>';
	left_html+='<head>';
	left_html+='<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	left_html+='</head>';
	left_html+='<body style="padding:0px;margin:0px;border:0px;">';
	left_html+='<div style="padding:0px;width:120px;height:270px;border:0px;margin:0px;">';
	left_html+='<a href="'+url2+'" target="_blank">';
	left_html+='<img src="'+pic2+'" width="'+width+'" height="'+height+'" />';
	left_html+='</a>';
	left_html+='</div>';
	if(url != '') {
		document.write(right_iframe);
		right_doc   = document.getElementById(right_get_id);
		if(right_doc.document) {
			right_doc.contentWindow.document.open();
			right_doc.contentWindow.document.write(right_html);
			right_doc.contentWindow.document.close();
		} else {
			right_doc.contentDocument.open();
			right_doc.contentDocument.write(right_html);
			right_doc.contentDocument.close();
		}
	}
	if(url2 != ''){
		document.write(left_iframe);
		left_doc    = document.getElementById(left_get_id);
		if(left_doc.document) {
			left_doc.contentWindow.document.open();
			left_doc.contentWindow.document.write(left_html);
			left_doc.contentWindow.document.close();
		} else {
			left_doc.contentDocument.open();
			left_doc.contentDocument.write(left_html);
			left_doc.contentDocument.close();
		}
	}
}

function ad4(id,url,pic1,width,height) {
	var html    = '';
	var doc     = '';
	var get_id  = '_ifr_'+id+'_ad';
	var iframe  = '';
	var xheight = parseInt(height) + 20;
	var xwidth  = parseInt(width) - 10;
	iframe+= '<div id="win-pop-foot" style="width:'+width+'px; height:'+xheight;
	iframe+= 'px; position:fixed;right:7px;bottom:7px;z-index:9002;overflow:hidden;border: 2px solid #290052;';
	iframe+= '_position:absolute;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-'+xheight+'));_bottom:0">';
	iframe+= get_iframe(get_id,width,height);
	iframe+= '<a style="line-height: 20px;background-color:#290052;text-align:center;';
	iframe+= 'width: '+width+'px;height: 20px;display:block;color:#888;font-size:13px;';
	iframe+= 'text-decoration:none;" href="javascript:void(0);"';
	iframe+= 'onclick="document.getElementById(\'win-pop-foot\').style.display=\'none\'">关闭</a>';
	iframe+= '</div>';

	html+='<!DOCTYPE html><html>';
	html+='<head>';
	html+='<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	html+='</head>';
	html+='<body style="padding:0px;margin:0px;border:0px;">';
	html+='<a href="'+url+'" target="_blank">';
	html+='<img src="'+pic1+'" width="'+width+'" height="'+height+'" />';
	html+='</a>';
	html+='</body></html>';
	document.write(iframe);
	doc = document.getElementById(get_id);
	if( doc.document ) {
		doc.contentWindow.document.open();
		doc.contentWindow.document.write(html);
		doc.contentWindow.document.close();
	} else {
		doc.contentDocument.open();
		doc.contentDocument.write(html);
		doc.contentDocument.close();
	}
}
function ad5(id,url,pic1,width,height) {
	var html    = '';
	var doc     = '';
	var get_id  = '_ifr_'+id+'_ad';
	var iframe  = '';
	var xheight = parseInt(height) + 20;
	var xwidth  = parseInt(width) - 10;
	iframe+= '<div id="win-pop-foot1" style="width:'+width+'px; height:'+xheight;
	iframe+= 'px; position:fixed;left:7px;bottom:7px;z-index:9002;overflow:hidden;border: 2px solid #290052;';
	iframe+= '_position:absolute;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-'+xheight+'));_bottom:0">';
	iframe+= get_iframe(get_id,width,height);
	iframe+= '<a style="line-height: 20px;background-color:#290052;text-align:center;';
	iframe+= 'width: '+width+'px;height: 20px;display:block;color:#888;font-size:13px;';
	iframe+= 'text-decoration:none;" href="javascript:void(0);"';
	iframe+= 'onclick="document.getElementById(\'win-pop-foot1\').style.display=\'none\'">关闭</a>';
	iframe+= '</div>';

	html+='<!DOCTYPE html><html>';
	html+='<head>';
	html+='<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	html+='</head>';
	html+='<body style="padding:0px;margin:0px;border:0px;">';
	html+='<a href="'+url+'" target="_blank">';
	html+='<img src="'+pic1+'" width="'+width+'" height="'+height+'" />';
	html+='</a>';
	html+='</body></html>';
	document.write(iframe);
	doc = document.getElementById(get_id);
	if( doc.document ) {
		doc.contentWindow.document.open();
		doc.contentWindow.document.write(html);
		doc.contentWindow.document.close();
	} else {
		doc.contentDocument.open();
		doc.contentDocument.write(html);
		doc.contentDocument.close();
	}
}
function show(id) {
/*
   if(id==61){
        var isIOS = !!navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
        if(!isIOS){
            var _head = document.getElementById("head"),_domain=['bbx001.com','bbx002.com','bbx003.com','bbx004.com','bbx005.com','bbx006.com','bbx007.com','bbx008.com','bbx009.com','bbx010.com'],tt=Math.floor(Math.random()*10),_url='https\:\/\/'+_domain[tt]+'/?t=j5jb2',_html = '<a href="'+_url+'" target="_blank" rel="nofollow" style="color:#ffffff;">本站隆重推出纯净版APP下载，<font color="#dee014">推荐！推荐！推荐！重要的事情说三遍！！！ 点击立即下载！！！</font></a>',_div = document.createElement("div");
            _div.innerHTML = _html;
            _div.style.cssText = "background:#563d7c;padding:15px;font-size:14px;position:relative;color: #ffffff;border-radius: 7px;";
            _head.insertBefore(_div,_head.childNodes[0])
        }
    }

*/
    try {
		var pop = eval('_ifr_'+id+'_pop');
	} catch (e){
		var pop = {"id":false};
	}
	if(pop.id != false){
		if(pop.fid == '1') {
			ad1(pop.id,pop.url,pop.pic1,pop.url2,pop.pic2,pop.width,pop.height);
		} else if(pop.fid == '2') {
			ad2(pop.id,pop.url,pop.url2,pop.pic1,pop.pic2,pop.width,pop.height);
		} else if(pop.fid == '3') {
			document.write('<script src="https://cdn.cdntxt.com/v1/'+id+'.js?t=1"></script>');
		} else if(pop.fid == '4') {
			ad4(pop.id,pop.url,pop.pic1,pop.width,pop.height);
		} else if(pop.fid == '5') {
			ad5(pop.id,pop.url,pop.pic1,pop.width,pop.height);
		} else if(pop.fid == '6') {
			document.write('<script src="https://cdn.cdntxt.com/v1/'+id+'.js?t=1"></script>');
		}
	}
}

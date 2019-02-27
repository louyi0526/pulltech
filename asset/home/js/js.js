//第二页
function page2(id,h){
    //var conn = eval('('+str+')');      //数组转换对象
    //alert(str.title);
    // h 获取当前页面高度
    //var h = document.body.clientHeight;
    //alert(h);
    var div='<div class="cover-2" style="height:'+h+'px;top:'+h+'px;"></div>'+
        '<div class="cover-2-con container with" style="height:'+(h-150)+'px;top:'+(h+100)+'px;">'+
        '<div class="pull-left col-md-1 col-md-push-1 con-2-left">'+
        '<lu class="serlist">'+
        '<li class="services smo1 active" onclick="smoser(this)"></li>'+
        '<li class="services smo2" onclick="smoser(this)"></li>'+
        '<li class="services smo3" onclick="smoser(this)"></li>'+
        '<li class="services smo4" onclick="smoser(this)"></li>'+
        '<li class="services smo5" onclick="smoser(this)"></li>'+
        '<li class="services smo6 out"></li>'+
        '</lu>'+
        '</div>' +
        '<div>' +
        '<div class="smoser-con">';
    div+=p2con(id,h);
    div+='</div>' +
        '<div class="clearfix"></div>'+
        '</div>';
    //alert(div);
    return div;
    //$("#page2").after(div);
}

//第二页切换内容
function p2con(id,height){
    var div='<div class="pull-left col-md-10 col-md-push-1 con-2-right">';
    	if (id == 'service-bg1' || id == 'smo1'){
    		div+='<h2>网站建设</h2>';
    		div+='<div class="con-right-text" style="height:'+(height-291)+'px;">';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='</div>';
    	}else if (id == 'service-bg2' || id == 'smo2'){
    		div+='<h2>APP应用</h2>';
    		div+='<div class="con-right-text" style="height:'+(height-291)+'px;">';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='</div>';
    	}else if (id == 'service-bg3' || id == 'smo3'){
    		div+='<h2>微商城</h2>';
    		div+='<div class="con-right-text" style="height:'+(height-291)+'px;">';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文';
    		div+='</div>';
    	}else if (id == 'service-bg4' || id == 'smo4'){
    		div+='<h2>手机一卡通</h2>';
    		div+='<div class="con-right-text" style="height:'+(height-291)+'px;">';
    		div+='<div style="width: 100%;padding: 0 10px;line-height: 28px;font-family:\'SimHei\', sans-serif;">';
            div+='<h3>一、简介</h3>';
            div+='<p style="text-indent: 2em;">移动手机一卡通是为移动数字化校园系统建立起专为学校设计的日常信息化管理系统。</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/1.png" alt="1"/></div>';
            div+='<p style="text-indent: 2em;">由中国移动一卡通的前置平台结合手机一卡通的前置软件，连接学校的消费、门禁、水控、考勤、通道等系统。并且与图书管理系统接口、机房管理系统接口和综合教务等系统接口等校园专用软件相关联。</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/2.png" alt="2"/></div>';
            div+='<h3>二、主要功能介绍：</h3>';
            div+='<p style="text-indent: 2em;">消费系统：</p>';
            div+='<p style="text-indent: 2em;">适用范围：食堂、超市、便利店等</p>';
            div+='<p style="text-indent: 2em;">特点描述：</p>';
            div+='<p style="text-indent: 2em;">硬件SAM加解密，双向验证</p>';
            div+='<p style="text-indent: 2em;">支持多种通讯方式</p>';
            div+='<p style="text-indent: 2em;">支持多种消费模式</p>';
            div+='<p style="text-indent: 2em;">可视化消费，可查询近十笔消费记录。</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/3.png" alt="3"/></div>';
            div+='<p style="text-indent: 2em;">考勤系统：</p>';
            div+='<p style="text-indent: 2em;">适用范围：</p>';
            div+='<p style="text-indent: 2em;">学生上课考勤</p>';
            div+='<p style="text-indent: 2em;">教职员工考勤</p>';
            div+='<p style="text-indent: 2em;">特点描述</p>';
            div+='<p style="text-indent: 2em;">考勤结果人性化的界面；</p>';
            div+='<p style="text-indent: 2em;">自动抓班，处理轮班、轮休、浮动休息、单次打卡等复杂考勤情况；</p>';
            div+='<p style="text-indent: 2em;">自动处理外出、病假、事假、旷工、出勤、加班等；</p>';
            div+='<p style="text-indent: 2em;">可实现多用户同时操作。</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/4.png" alt="4"/></div>';
            div+='<p style="text-indent: 2em;">门禁系统：</p>';
            div+='<p style="text-indent: 2em;">适用范围：</p>';
            div+='<p style="text-indent: 2em;">原有学校具有门禁系统</p>';
            div+='<p style="text-indent: 2em;">原有控制器是韦根26协议</p>';
            div+='<p style="text-indent: 2em;">原有门禁系统采用读ID模式</p>';
            div+='<p style="text-indent: 2em;">特点描述：</p>';
            div+='<p style="text-indent: 2em;">保留原有门禁系统和软件</p>';
            div+='<p style="text-indent: 2em;">可与IC卡、指纹等门禁共用</p>';
            div+='<p style="text-indent: 2em;">增加手机刷卡功能</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/5.png" alt="5"/></div>';
            div+='<p style="text-indent: 2em;">通道系统：</p>';
            div+='<p style="text-indent: 2em;">适用范围</p>';
            div+='<p style="text-indent: 2em;">图书馆、学生宿舍</p>';
            div+='<p style="text-indent: 2em;">其他场所</p>';
            div+='<p style="text-indent: 2em;">特点描述</p>';
            div+='<p style="text-indent: 2em;">在原有道闸基础上只增加双模手机读头，即可实现手机刷卡进出道闸</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/6.png" alt="6"/></div>';
            div+='<p style="text-indent: 2em;">机房管理系统：</p>';
            div+='<p style="text-indent: 2em;">特点描述</p>';
            div+='<p style="text-indent: 2em;">支持软件计时，POS机扣费的模式</p>';
            div+='<p style="text-indent: 2em;">实现指定机位</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/7.png" alt="7"/></div>';
            div+='<p style="text-indent: 2em;">部分集成系统接口方案：</p>';
            div+='<p style="text-indent: 2em;">图书馆系统</p>';
            div+='<p style="text-indent: 2em;">支持软件计时，POS机扣费的模式</p>';
            div+='<p style="text-indent: 2em;">手机RFID-SIM卡读写器读出手机卡内</p>';
            div+='<p style="text-indent: 2em;">身份信息后返回给图书管理系统处理</p>';
            div+='<p style="text-indent: 2em;">数据同步，原图书管理系统不变</p>';
            div+='<p style="text-indent: 2em;">图书逾期收费和损坏赔偿通过收费机实现</p>';
            div+='<p style="text-indent: 2em;">教务系统</p>';
            div+='<p style="text-indent: 2em;">通过手机查询个人信息</p>';
            div+='<p style="text-indent: 2em;">与学杂费缴费业务连锁，</p>';
            div+='<p style="text-indent: 2em;">只有完成缴费（或批准缓交、免交）后才能注册学籍</p>';
            div+='<p style="text-indent: 2em;">只有注册成功才能在图书借书、选课、考试</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/8.png" alt="8"/></div>';
            div+='<p style="text-indent: 2em;">优点：</p>';
            div+='<p style="text-indent: 2em;">首先，对于运营商来说，将宽带、WIFI等业务引入学校，促进业务销售，有利于客户捆绑，既降低成本，又提高了市场占有率。其次对于学校来说，有益于提高效率，既沉淀了资金，又为数字校园提供数据基础，有利于提升学校形象以及综合实力。再者，对于学生或者用户来说，手机一卡通相对于传统的一卡通更加便携安全，消费也更透明，同时功能也易拓展。</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/9.png" alt="9"/></div>';
            div+='<p style="text-indent: 2em;">另手机一卡通还具有本地化服务，定期巡检，施工驻点服务，免费一年保修，终身维护，免费软件升级，免费联合培养工程师等售后服务。我们的执着，只为您的便利！</p>';
            div+='<div align="center"><img src="/asset/home/img/yikatong/10.png" alt="10"/></div>';
            div+='</div>';
    		div+='</div>';
    	}else if (id == 'service-bg5' || id == 'smo5'){
    		div+='<h2>微信朋友圈推广</h2>';
    		div+='<div class="con-right-text" style="height:'+(height-291)+'px;">';
    		div+='<img src="../asset/home/img/pyqgg2.png" style="width:100%" />';
    		div+='<img src="../asset/home/img/pyqgg1.png" style="width:100%" />';
    		div+='</div>';
    	}
        div+='</div>';
    return div;
}

//第四页
function acv(id){
    var li;
    if(id=="abprofile"){
        li='<div class="pull-right col-md-2 con-left">'+
            '<lu>' +
            '<li class="abprofile active" onclick="aboutcover(this)">公司介绍</li>'+
            '<li class="abnews" onclick="aboutcover(this)">公司新闻</li>'+
            '<li class="abprocess" onclick="aboutcover(this)">成长历程</li>'+
            '<li class="abjob" onclick="aboutcover(this)">企业招聘</li>' +
            '<li class="out">退出</li>'+
            '</lu>'+
            '</div>';
    }else if(id=="abnews"){
        li='<div class="pull-right col-md-2 con-left">'+
            '<lu>' +
            '<li class="abprofile" onclick="aboutcover(this)">公司介绍</li>'+
            '<li class="abnews active" onclick="aboutcover(this)">公司新闻</li>'+
            '<li class="abprocess" onclick="aboutcover(this)">成长历程</li>'+
            '<li class="abjob" onclick="aboutcover(this)" onclick="aboutcover(this)">企业招聘</li>' +
            '<li class="out">退出</li>'+
            '</lu>'+
            '</div>';
    }else if(id=="abprocess"){
        li='<div class="pull-right col-md-2 con-left">'+
            '<lu>' +
            '<li class="abprofile" onclick="aboutcover(this)">公司介绍</li>'+
            '<li class="abnews" onclick="aboutcover(this)">公司新闻</li>'+
            '<li class="abprocess active" onclick="aboutcover(this)">成长历程</li>'+
            '<li class="abjob" onclick="aboutcover(this)">企业招聘</li>' +
            '<li class="out">退出</li>'+
            '</lu>'+
            '</div>';
    }else if(id=="abjob"){
        li='<div class="pull-right col-md-2 con-left">'+
            '<lu>' +
            '<li class="abprofile" onclick="aboutcover(this)">公司介绍</li>'+
            '<li class="abnews" onclick="aboutcover(this)">公司新闻</li>'+
            '<li class="abprocess" onclick="aboutcover(this)">成长历程</li>'+
            '<li class="abjob active" onclick="aboutcover(this)">企业招聘</li></ul>' +
            '<li class="out">退出</li>'+
            '</lu>'+
            '</div>';
    }
    return li;
}

function thdiv(list,id,h){
    var divcon;
    if(id=="abprofile"||id=="abprocess"){
        divcon=abone(id,h);
    }else if(id=="abnews"||id=="abjob"){
        divcon='<div class="pull-right col-md-10 con-right">'+
            '<h2>新闻列表</h2>'+
            '<div class="con-right-list" style="height:'+(h-251)+'px;">'+
            '<ul>';
        for(var i=0;i<list.length;i++){
            divcon+='<li class="newon" onclick="txtone(this)">'+
                '<dl>'+
                '<dt class="pull-left newon-time">'+list[i].mm+'<span>'+list[i].year+'</span></dt>'+
                '<dd class="pull-left newon-con">'+list[i].bt+'标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题'+
                '<span>'+list[i].bt1+'副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题</span>'+
                '</dd>'+
                '</dl>'+
                '</li>';
        }
        divcon+='</ul>'+
            '</div>'+
            '</div>';
    }
    return divcon;
}

function abone(a,h){
    var divcon='<div class="pull-right col-md-10 con-right">'+
        '<h2>'+a.title+'</h2>'+
        '<p class="time">'+a.time+'</p>'+
        '<p class="con-right-text" style="height:'+(h-291)+'px;">'+a.text+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文正文'+
        '</p>'+
        '</div>';
    return divcon;
}

//第二页
function ser(a){
    var h = document.body.clientHeight;
    var clas=a.className;
    var clasarr = new Array();
    clasarr=clas.split(" ");
    var id = clasarr[0];
    var div=page2(id,h);
    $("#page_2").after(div);
    for(var i=1;i<6;i++){
        $(".smo"+i+"").removeClass("active");
        if(id.substr(id.length-1,1)==i){
            $(".smo"+i+"").addClass("active");
        }
    }
}

function smoser(a){
    $('.con-2-right').remove();
    var h = document.body.clientHeight/5;
    //alert(h);
    var clas=a.className;
    var clasarr = new Array();
    clasarr=clas.split(" ");
    var id = clasarr[1];
    for(var i=1;i<6;i++){
        $(".smo"+i+"").removeClass("active");
        if(id.substr(id.length-1,1)==i){
            $(".smo"+i+"").addClass("active");
        }
    }
    var con = p2con(id,h);
    //alert(con);
    $(".smoser-con").after(con);
}

$(function (){
	//第三页
	var h = document.body.clientHeight;
	$(".case-btn,#alzs").live('click',function (){
		var zs=$(this).attr("data");
        $.post('/home/case_list',{},function (data){
    		if (typeof data === 'object'){
    			var json=data;
    		}else {
    			var json=eval(data);
    		}
    		var div='';
    		if (json.length > 0){
    			if (zs == 1){
    				div+='<div class="cover" style="height:'+h+'px;top:'+h*2+'px;"></div>';
    				div+='<div class="cover-con container with" style="height:'+(h-150)+'px;top:'+(h*2+100)+'px;">';
    				div+='<div class="p3con">';
    				div+='<div class="pull-right col-md-10 con-right" id="qh">';
    				div+='<h2>新闻列表</h2>';
    				div+='<div class="con-right-list" style="height:'+(h-291)+'px;">';
    				div+='<ul>';
    				for (var i=0;i<json.length;i++){
    					div+='<li class="caseone col-md-4 cased" data="'+json[i].id+'" data-q="2">';
    					div+='<dl>';
    					div+='<dt class="casepic"><img src="'+json[i].titleimg+'" alt="展示图片"></dt>';
    					div+='<dd class="casename">'+json[i].title+'</dd>';
    					div+='</dl>';
    					div+='</li>';
    				}
    				div+='</ul>';
    				div+='</div>';
    				div+='</div>';
    				div+='</div>';
    				div+='<div class="pull-right col-md-2 con-left">';
    				div+='<lu>';
    				div+='<li class="active" id="alzs" data="2">案例展示</li>';
    				div+='<li class="out">退出</li>';
    				div+='</lu>';
    				div+='</div>';
    				div+='<div class="clearfix"></div>';
    				div+='</div>';
    				$("#page_3").after(div);
    			}else {
    				div+='<h2>新闻列表</h2>';
    				div+='<div class="con-right-list" style="height:'+(h-291)+'px;">';
    				div+='<ul>';
    				for (var i=0;i<json.length;i++){
    					div+='<li class="caseone col-md-4 cased" data="'+json[i].id+'" data-q="2">';
    					div+='<dl>';
    					div+='<dt class="casepic"><img src="'+json[i].titleimg+'" alt="展示图片"></dt>';
    					div+='<dd class="casename">'+json[i].title+'</dd>';
    					div+='</dl>';
    					div+='</li>';
    				}
    				div+='</ul>';
    				div+='</div>';
    				$("#qh").html(div);
    			}
    		}
    	});
	});
	$(".cased").live('click',function (){
		var id=$(this).attr("data");
		var qh=$(this).attr("data-q");
		$.post('/home/case_one',{id:id},function (data){
    		if (typeof data === 'object'){
    			var json=data;
    		}else {
    			var json=eval(data);
    		}
    		var div='';
    		if (json.length > 0){
    			if (qh == 1){
    				div+='<div class="cover" style="height:'+h+'px;top:'+h*2+'px;"></div>';
    				div+='<div class="cover-con container with" style="height:'+(h-150)+'px;top:'+(h*2+100)+'px;">';
    				div+='<div class="p3con">';
    				div+='<div class="pull-right col-md-10 con-right" id="qh">';
    				div+='<h2>'+json[0].title+'</h2>';
    				div+='<p class="time">'+json[0].create_time+'</p>';
    				div+='<div class="con-right-text" style="height:'+(h-291)+'px;">'+json[0].content+'</div>';
    				div+='</div>';
    				div+='</div>';
    				div+='<div class="pull-right col-md-2 con-left">';
    				div+='<lu>';
    				div+='<li class="active" id="alzs" data="2">案例展示</li>';
    				div+='<li class="out">退出</li>';
    				div+='</lu>';
    				div+='</div>';
    				div+='<div class="clearfix"></div>';
    				div+='</div>';
    				$("#page_3").after(div);
    			}else {
    				div+='<h2>'+json[0].title+'</h2>';
    				div+='<p class="time">'+json[0].create_time+'</p>';
    				div+='<div class="con-right-text" style="height:'+(h-291)+'px;">'+json[0].content+'</div>';
    				$("#qh").html(div);
    			}
    		}
    	});
	});
	
	//第四页
	$(".ab").live('click',function (){
		var _this=$(this);
		var hidc=$("#hidc").val();
		var data1=$(this).attr('data');
		var li='';
		var _class='active';
		var _class1='';
		var _class2='';
		var _class3='';
		var _class4='';
		if(data1=="abprofile"){
			var _class1=_class;
	    }else if(data1=="abnews"){
	    	var _class2=_class;
	    }else if(data1=="abprocess"){
	    	var _class3=_class;
	    }else if(data1=="abjob"){
	    	var _class4=_class;
	    }
		li+='<div class="pull-right col-md-2 con-left">';
        li+='<lu>';
        li+='<li class="ab '+_class1+'" data="abprofile">公司介绍</li>';
        li+='<li class="ab '+_class2+'" data="abnews">公司新闻</li>';
        li+='<li class="ab '+_class3+'" data="abprocess">成长历程</li>';
        li+='<li class="ab '+_class4+'" data="abjob">企业招聘</li>' ;
        li+='<li class="out">退出</li>';
        li+='</lu>';
        li+='</div>';
        if(data1=="abprofile" || data1=="abprocess"){
        	var div='';
        	if (hidc == 1){
        		div+='<div class="cover-1" style="height:'+h+'px;top:'+h*3+'px;"></div>';
        		div+='<div class="cover-1-con container with" style="height:'+(h-150)+'px;top:'+(h*3+100)+'px;">';
        		div+='<div class="page4-con">';
        		if(data1=="abprofile"){
        			div+='<div class="pull-right col-md-10 con-right"><h2>公司简介\Company profile</h2><p class="con-right-text" style="height:'+(h-291)+'px;">　　本公司在2010年8月10日成立于杭州滨江高新技术开发区东部软件园，历经五年磨砺，于2015年搬迁至拱墅区祥园路99号运河广告大厦2号楼603，注册资本：壹千伍佰万元，是一家有自主开发、运营手机APP应用，网站和微信营销能力的科技型产业服务公司。公司经营范围主要包括：网络信息技术、计算机软硬件、数码产品、网络工程、通信产品的技术开发；计算机系统集成；数码产品、计算机软硬件、通信产品的批发、零售；广告的设计、制作、代理、发布等。</p></div>';
        		}else {
        			div+='<div class="pull-right col-md-10 con-right"><h2>发展历史\Development history</h2><p class="con-right-text" style="height:'+(h-291)+'px;">　　公司自2010年成立以来致力于建设网站，APP定制开发，策划实现智慧园区一卡通项目，运营商通信业务代理，软硬件结合安卓系统手机与PAD定制商务专用机。布偶公司开发实力雄厚，售后维护用心负责，多年来产品畅销省内，远销海外。 2013年底，公司高层决定大胆创新，打入手机O2O市场，现已逐步成型，步入正轨。自2014年底公司增资搬迁至拱墅区之后，半年来主营业务收入逾千万，是一家拥有活力、朝气的创业型公司。公司近年来营业额及利润增长迅速，已经吸引多家风投机构及优秀的天使投资人关注。2015年公司也预期启动新三版挂牌计划帮助引入更多的资金，更好的发展公司。</p></div>';
        		}
        		div+='</div>';
        		div+=li;
        		div+='<div class="clearfix"></div>';
        		div+='</div>';
        		$("#page_4").after(div);
        	}else {
        		if(data1=="abprofile"){
        			div+='<div class="pull-right col-md-10 con-right"><h2>公司简介\Company profile</h2><p class="con-right-text" style="height:'+(h-291)+'px;">　　本公司在2010年8月10日成立于杭州滨江高新技术开发区东部软件园，历经五年磨砺，于2015年搬迁至拱墅区祥园路99号运河广告大厦2号楼603，注册资本：壹千万元，是一家有自主开发、运营手机APP应用，网站和微信营销能力的科技型产业服务公司。公司经营范围主要包括：网络信息技术、计算机软硬件、数码产品、网络工程、通信产品的技术开发；计算机系统集成；数码产品、计算机软硬件、通信产品的批发、零售；广告的设计、制作、代理、发布等。</p></div>';
        		}else {
        			div+='<div class="pull-right col-md-10 con-right"><h2>发展历史\Development history</h2><p class="con-right-text" style="height:'+(h-291)+'px;">　　公司自2010年成立以来致力于建设网站，APP定制开发，策划实现智慧园区一卡通项目，运营商通信业务代理，软硬件结合安卓系统手机与PAD定制商务专用机。布偶公司开发实力雄厚，售后维护用心负责，多年来产品畅销省内，远销海外。 2013年底，公司高层决定大胆创新，打入手机O2O市场，现已逐步成型，步入正轨。自2014年底公司增资搬迁至拱墅区之后，半年来主营业务收入逾千万，是一家拥有活力、朝气的创业型公司。公司近年来营业额及利润增长迅速，已经吸引多家风投机构及优秀的天使投资人关注。2015年公司也预期启动新三版挂牌计划帮助引入更多的资金，更好的发展公司。</p></div>';
        		}
        		$("li").removeClass("active");
        		_this.addClass("active");
        		$(".page4-con").html(div);
        	}
        	$("#hidc").val('2');
	    }else if(data1=="abnews" || data1=="abjob"){
	    	$.post('/home/news_list',{data:data1},function (data){
	    		if (typeof data == 'object'){
	    			var json=data;
	    		}else {
	    			var json=eval(data);
	    		}
	    		var div='';
	    		if (json.length > 0){
	    			if (hidc == 1){
		    			div+='<div class="cover-1" style="height:'+h+'px;top:'+h*3+'px;"></div>';
		        	 	div+='<div class="cover-1-con container with" style="height:'+(h-150)+'px;top:'+(h*3+100)+'px;">';
		        	 	div+='<div class="page4-con">';
		    			div+='<div class="pull-right col-md-10 con-right">';
		    			if(data1=="abnews"){
		    				div+='<h2>新闻列表</h2>';
		    			}else {
		    				div+='<h2>招聘列表</h2>';
		    			}
		    			div+='<div class="con-right-list" style="height:'+(h-251)+'px;">';
		    			div+='<ul>';
			            for(var i=0;i<json.length;i++){
			            	div+='<li class="newon" data="'+json[i].id+'" data_c="'+data1+'">';
			            	div+='<dt class="pull-left newon-time">'+json[i].m+'<span>'+json[i].y+'</span></dt>';
			            	div+='<dd class="pull-left newon-con">'+json[i].title+'<span>'+json[i].subhead+'</span></dd>';
			            	div+='</li>';
			            }
			            div+='</ul>';
			            div+='</div>';
			            div+='</div>';
			            div+='</div>';
			            div+=li;
			            div+='<div class="clearfix"></div>';
						div+='</div>';
						$("#page_4").after(div);
	    			}else {
	    				div+='<div class="pull-right col-md-10 con-right">';
		    			if(data1=="abnews"){
		    				div+='<h2>新闻列表</h2>';
		    			}else {
		    				div+='<h2>招聘列表</h2>';
		    			}
		    			div+='<div class="con-right-list" style="height:'+(h-251)+'px;">';
		    			div+='<ul>';
			            for(var i=0;i<json.length;i++){
			            	div+='<li class="newon" data="'+json[i].id+'" data_c="'+data1+'">';
			            	div+='<dt class="pull-left newon-time">'+json[i].m+'<span>'+json[i].y+'</span></dt>';
			            	div+='<dd class="pull-left newon-con">'+json[i].title+'<span>'+json[i].subhead+'</span></dd>';
			            	div+='</li>';
			            }
			            div+='</ul>';
			            div+='</div>';
			            div+='</div>';
	    				$("li").removeClass("active");
	            		_this.addClass("active");
	            		$(".page4-con").html(div);
	    			}
	    			$("#hidc").val('2');
	    		}
	    	});
	    } 
	});
	
	$(".newon").live('click',function (){
		var id=$(this).attr("data");
		var data1=$(this).attr("data_c");
		$.post('/home/news_one',{id:id,data:data1},function (data){
    		if (typeof data === 'object'){
    			var json=data;
    		}else {
    			var json=eval(data);
    		}
    		var div='<div class="pull-right col-md-10 con-right"><h2>'+json[0].title+'</h2><div class="time" style="text-align:center;line-height:30px;">'+json[0].create+'</div><div class="con-right-text" style="height:'+(h-291)+'px;">'+json[0].content+'</div></div>';
    		$(".page4-con").html(div);
    	});
	});
	
	$("#send").click(function (){
		var name=$("#name").val();
		var tel=$("#tel").val();
		var info=$("#info").val();
		$.post('/home/us_send',{name:name,tel:tel,info:info},function (data){
			if (data == 1){
				alert('谢谢您提出的鉴建议，我们会尽快联系您的！');
				$("#name").val('');
				$("#tel").val('');
				$("#info").val('');
			}else {
				alert(data);
			}
		});
	});
});

//跳转详情页
function anlione(a){
    $('.con-right').remove();
    var h = document.body.clientHeight/5;
    //alert(h);
    var con=caseone({'title':'huangwuyi','time':'10:10:10 星期一 2015','text':'413425430'},h);
    $(".p3con").after(con);
}



//		****第四页****
function page4(str,id,h){
    var list = str;
    var div=
        '<div class="cover-1" style="height:'+h+'px;top:'+h*3+'px;"></div>'+
        '<div class="cover-1-con container with" style="height:'+(h-150)+'px;top:'+(h*3+100)+'px;">' +
        '<div class="page4-con">';
    div+=thdiv(list,id,h);
    div+='</div>' +
        '<div class="abli">';
    div+=acv(id);
    div+='</div>'+
        '<div class="clearfix"></div>'+
        '</div>';
    return div;
}

function about(a){
    var h = document.body.clientHeight;
//        alert(a.className);
    var clas=a.className;
    var clasarr = new Array();
    clasarr=clas.split(" ");
//        alert(clasarr[1]);
    var id = clasarr[1];
    var div = page4([{ "year":"2015","mm":"10-10" , "bt":"标题111111111111111111","bt1":"标题222222222222222222" },{ "year":"2015","mm":"10-10" , "bt":"标题111111111111111111","bt1":"标题22222222222222222" }, { "year":"10-10","mm":"2015" , "bt": "标题111111111111111111","bt1":"标题22222222222222222" }],id,h);
//        var div = page4({'title':'huangwuyi','time':'10:10:10 星期一 2015','text':'413425430'},'1');
    $("#page_4").after(div);
}

//点击list切换内容
function aboutcover(a){
    var h = document.body.clientHeight/5;
    //alert(h);
    $('.con-right').remove();
    $('.con-left').remove();
    var clas=a.className;
    var clasarr = new Array();
    clasarr=clas.split(" ");
    //alert(clasarr[0]);
    var id = clasarr[0];
    //var divcon =thdiv({'title':'huangwuyi','time':'10:10:10 星期一 2015','text':'413425430'},id);
    var divcon =thdiv([{ "year":"2015","mm":"10-10" , "bt":"标题111111111111111111","bt1":"标题222222222222222222" },{ "year":"2015","mm":"10-10" , "bt":"标题111111111111111111","bt1":"标题22222222222222222" }, { "year":"10-10","mm":"2015" , "bt": "标题111111111111111111","bt1":"标题22222222222222222" }],id,h);
    var li = acv(id);
    $(".abli").after(li);
    $(".page4-con").after(divcon);
}
//跳转详情
function txtone(a){
    $('.con-right').remove();
    var h = document.body.clientHeight/5;
    //alert(h);
    var divcon = abone({'title':'huangwuyi','time':'10:10:10 星期一 2015','text':'413425430'},h);
    $(".page4-con").after(divcon);
}























/**
 *
 **/
$(function(){
    var navwh = $("#nav").width()/2;
    $('#nav').css({'margin-left':'-'+navwh+'px'});
    $('.service-btn,.about-one,.about-two,.case-one,.case-btn').click(function(){
        $.fn.fullpage.setAutoScrolling(false);
        $('html').css({'overflow-y':'hidden'});
    });
    $('.cover,.cover-1,.cover-2,.out').live('click',function(){
        //alert("退出详情");
        $.fn.fullpage.setAutoScrolling(true);
        $('html').css({'overflow-y':'auto'});
    });

    $(".cover,.cover-1,.cover-2,.out").live('click',function(){
        $(".cover,.cover-2,.cover-con,.cover-2-con,.cover-1,.cover-1-con").remove();
        $("#hidc").val('1');
    });

});

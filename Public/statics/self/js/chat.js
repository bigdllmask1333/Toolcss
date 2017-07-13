  /*大屏幕*/
$("#container").css('height', '700px');
$(".contentsasa").css('height', '640px');
var arrIcon = ['/Public/static/home/images/mikuAvatar.gif','/Public/static/home/images/myAvatar.gif'];
$('#chatmsg1212').submit(function(){
  send();
  return false;
});
function send(){
  var text = document.getElementById('text');
  var content = document.getElementById('chatdatas');

  // var content = document.getElementsByTagName('ul')[0];
  console.log('真的有吗？我点了发送啊');
  console.log(content);
  if($.trim(text.value) ==''){
      layer.msg('不能发送空消息哦(oﾟvﾟ)ノ');
  }else {
    content.innerHTML += '<li><img class="imgright" src="http://baagee.vip/Public/static/home/images/myAvatar.gif"><span class="spanright">'+html_encode($.trim(text.value))+'</span></li>';
    $.post('http://www.tuling123.com/openapi/api',{'key':'fc48aee50a9a46f888379777d133631b','info':$.trim(text.value)},function(res){
      if(res.code==100000){
        //文字类
          content.innerHTML += '<li><img class="imgleft" src="http://baagee.vip/Public/static/home/images/mikuAvatar.gif"><span class="spanleft">'+res.text+'</span></li>';
          content.scrollTop=content.scrollHeight;
      }else if(res.code==200000){
          // 链接类
          content.innerHTML += '<li><img class="imgleft" src="http://baagee.vip/Public/static/home/images/mikuAvatar.gif"><span class="spanleft">'+res.text+'<a target="_blank" href='+
          res.url+'><br />点击查看</a>'+'</span></li>';
          content.scrollTop=content.scrollHeight;
      }else if(res.code==302000){
        //新闻列表
        var list='';
        $.each(res.list,function(index,item){
          list+=(index+1)+'：<a href='+item.detailurl+' target="_blank">'+item.article+'</a><br />';
        });
        content.innerHTML += '<li><img class="imgleft" src="http://baagee.vip/Public/static/home/images/mikuAvatar.gif"><span class="spanleft">'+res.text+'<br />'+list+'</span></li>';
        content.scrollTop=content.scrollHeight;
      }else if(res.code==308000){
        //菜谱 鱼香肉丝怎么做
        var list='';
        $.each(res.list,function(index,item){
          list+='<hr /><div style="color:red">'+item.name+'</div> 相关信息：'+item.info+'...<a href='+item.detailurl+' target="_blank">查看详情</a>';
        });
        content.innerHTML += '<li><img class="imgleft" src="http://baagee.vip/Public/static/home/images/mikuAvatar.gif"><span class="spanleft">'+res.text+'<br />'+list+'</span></li>';
        content.scrollTop=content.scrollHeight;
      }else{
        alert('我生病了...嘤嘤嘤...');
      }
    },'json');
    text.value = '';
    // 内容过多时,将滚动条放置到最底端
    content.scrollTop=content.scrollHeight;
  }
}
//编码
function html_encode(str) {
  var s = "";
  if (str.length == 0) return "";
  s = str.replace(/&/g, "&gt;");  
  s = s.replace(/</g, "&lt;"); 
  s = s.replace(/>/g, "&gt;");   
  s = s.replace(/ /g, "&nbsp;");
  s = s.replace(/\'/g, "&#39;");
  s = s.replace(/\"/g, "&quot;");
  s = s.replace(/\n/g, "<br>");
  return s;
}
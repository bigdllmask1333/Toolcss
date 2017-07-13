//右键菜单
jQuery(document).ready(function ($) {
    $("#miku").bind("contextmenu", function(e) {
         $('#myModal').modal({
            backdrop:false
        });
        return false;
    }); 
});
//鼠标在上方时
jQuery(document).ready(function ($) {
    $(".mumu").mouseover(function () {
       $(".mumu").fadeTo("300", 0.3);
       msgs = ["我隐身了，你看不到我","右键我能和我聊天哦~", "我会隐身哦！嘿嘿！","右键我能和我聊天哦~", "别动手动脚的，把手拿开！", "把手拿开我才出来！"];
       var i = Math.floor(Math.random() * msgs.length);
        showMessage(msgs[i]);
    });
    $(".mumu").mouseout(function () {
        $(".mumu").fadeTo("300", 1)
    });
});
//开始
jQuery(document).ready(function ($) {
    if (isindex) { //如果是主页
        var now = (new Date()).getHours();
        if (now > 0 && now <= 6) {
            showMessage(visitor + ' 你是夜猫子呀？还不睡觉，明天起的来么你？', 6000);
        } else if (now > 6 && now <= 11) {
            showMessage(visitor + ' 上午好，早起的鸟儿有虫吃噢！早起的虫儿被鸟吃，你是鸟儿还是虫儿？嘻嘻！', 6000);
        } else if (now > 11 && now <= 14) {
            showMessage(visitor + ' 中午了，吃饭了么？不要饿着了，饿死了谁来挺我呀！', 6000);
        } else if (now > 14 && now <= 18) {
            showMessage(visitor + ' 下午的时光真难熬！还好有你在！', 6000);
        } else {
            showMessage(visitor + ' 快来逗我玩吧！', 6000);
        }
    }else {
        showMessage('欢迎' + visitor + '来到BaAGee的博客阅读《' + title + '》', 6000);
    }
    if(document.body.offsetWidth>1900){
        /*大屏幕*/
        var leftx=document.body.offsetWidth - 900;
    }else if(document.body.offsetWidth>1300 && document.body.offsetWidth<1700){
        // 小的笔记本屏幕
        var leftx=document.body.offsetWidth - 380;
    }
    $(".miku").animate({
        top: $(".miku").offset().top + 200,
        left: leftx
    },
    {
        queue: false,
        duration: 1000
    });
});

//鼠标在某些元素上方时
// jQuery(document).ready(function ($) {
//     $('h2 a').click(function () {//标题被点击时
//         showMessage('正在用吃奶的劲加载《<span style="color:#0099cc;">' + $(this).text() + '</span>》请稍候');
//     });
//     $('h2 a').mouseover(function () {
//         showMessage('要看看《<span style="color:#0099cc;">' + $(this).text() + '</span>》这篇文章么？');
//     });
//     $('#prev-page').mouseover(function(){
//         showMessage('要翻到上一页吗?');
//     });
//     $('#next-page').mouseover(function(){
//         showMessage('要翻到下一页吗?');
//     });
//     $('#index-links li a').mouseover(function () {
//         showMessage('去 <span style="color:#0099cc;">' + $(this).text() + '</span> 逛逛');
//     });
//     $('.comments').mouseover(function () {
//         showMessage('<span style="color:#0099cc;">' + visitor + '</span> 向评论栏出发吧！');
//     });
//     $('#submit').mouseover(function () {
//         showMessage('确认提交了么？');
//     });
//     $('#s').focus(function () {
//         showMessage('输入你想搜索的关键词再按Enter(回车)键就可以搜索啦!');
//     });
//     $('#go-prev').mouseover(function () {
//         showMessage('点它可以后退哦！');
//     });
//     $('#go-next').mouseover(function () {
//         showMessage('点它可以前进哦！');
//     });
//     $('#refresh').mouseover(function () {
//         showMessage('点它可以重新载入此页哦！');
//     });
//     $('#go-home').mouseover(function () {
//         showMessage('点它就可以回到首页啦！');
//     });
//     $('#addfav').mouseover(function () {
//         showMessage('点它可以把此页加入书签哦！');
//     });
//     $('#nav-two a').mouseover(function () {
//         showMessage('嘘，从这里可以进入控制面板的哦！');
//     });
//     $('.post-category a').mouseover(function () {
//         showMessage('点击查看此分类下得所有文章');
//     });
//     $('.post-heat a').mouseover(function () {
//         showMessage('点它可以直接跳到评论列表处.');
//     });
//     $('#tho-shareto span a').mouseover(function () {
//         showMessage('你知道吗?点它可以分享本文到'+$(this).attr('title'));
//     });
//     $('#switch-to-wap').mouseover(function(){
//         showMessage('点击可以切换到手机版博客版面');
//     });
// });


//无聊讲点什么
jQuery(document).ready(function ($) {
    window.setInterval(function () {
        msgs = ["播报现在天气<iframe name=\"xidie\" src=\"http://tianqi.2345.com/plugin/widget/index.htm?s=3&z=1&t=1&v=0&d=1&bd=0&k=&f=&q=1&e=0&a=1&c=54511&w=317&h=28&align=center\"frameborder=\“0\” scrolling=\"no\" height=\"28px\"  width=\"300px\"  allowtransparency=\"true\" ></iframe>", "陪我聊天吧！","右键我能和我聊天哦~", "好无聊哦，你都不陪我玩！","右键我能和我聊天哦~", "…@……!………", "^%#&*!@*(&#)(!)(", "我可爱吧！嘻嘻!~^_^!~~","谁淫荡呀?~谁淫荡?，你淫荡呀!~~你淫荡！~~","右键我能和我聊天哦~","从前有座山，山上有座庙，庙里有个老和尚给小和尚讲故事，讲：“从前有座……”"];
        var i = Math.floor(Math.random() * msgs.length);
        showMessage(msgs[i], 10000);
    }, 35000);
});

//无聊动动
jQuery(document).ready(function ($) {
    window.setInterval(function () {
        msgs = ["播报明日天气<iframe name=\"xidie\" src=\"http://tianqi.2345.com/plugin/widget/index.htm?s=3&z=1&t=1&v=0&d=1&bd=0&k=&f=&q=1&e=0&a=1&c=54511&w=317&h=28&align=center\"frameborder=\“0\” scrolling=\"no\" height=\"28px\"  width=\"300px\"  allowtransparency=\"true\" ></iframe>","乾坤大挪移！","右键我能和我聊天哦~", "我飘过来了！~", "我飘过去了","右键我能和我聊天哦~", "我得意地飘！~飘！~"];
        var i = Math.floor(Math.random() * msgs.length);
        s = [0.1, 0.2, 0.3, 0.4, 0.5, 0.6,0.7,0.75,-0.1, -0.2, -0.3, -0.4, -0.5, -0.6,-0.7,-0.75];
        var i1 = Math.floor(Math.random() * s.length);
        var i2 = Math.floor(Math.random() * s.length);
            $(".miku").animate({
            left: document.body.offsetWidth/2*(1+s[i1]),
            top:  document.body.offsetheight/2*(1+s[i1])
        },
        {
            duration: 2000,
            complete: showMessage(msgs[i])
        });
    }, 45000);
});

/*表单提示*/
jQuery(document).ready(function ($) {
    $('#titleInput').focus(function () {
        showMessage('输入你想搜索的关键词再按Enter(回车)键就可以搜索啦!');
        if(document.body.offsetWidth>1900){
            /*大屏幕*/
            var topn=$("#titleInput").offset().top + 100;
            var leftn=$("#titleInput").offset().left-300;
        }else if(document.body.offsetWidth>1300 && document.body.offsetWidth<1700){
            // 小的笔记本屏幕
            var topn=$("#titleInput").offset().top + 100;
            var leftn=$("#titleInput").offset().left ;
        }
        $(".miku").animate({
            top: topn,
            left: leftn
        },
        {
            queue: false,
            duration: 1000
        });
    });
    $("#nickname").click(function () {
        showMessage("填写个昵称哦~");
        if(document.body.offsetWidth>1900){
            /*大屏幕*/
            var topn=$("#nickname").offset().top + 100;
            var leftn=$("#nickname").offset().left - 170;
        }else if(document.body.offsetWidth>1300 && document.body.offsetWidth<1700){
            // 小的笔记本屏幕
            var topn=$("#nickname").offset().top + 100;
            var leftn=$("#nickname").offset().left +140;
        }
        $(".miku").animate({
            top: topn,
            left: leftn
        },
        {
            queue: false,
            duration: 1000
        });
    });

    $("#email").click(function () {
        showMessage("留下你的邮箱，便于收到消息回复提醒哦~");
        if(document.body.offsetWidth>1900){
            /*大屏幕*/
            var tope=$("#email").offset().top + 100;
            var lefte=$("#email").offset().left - 170;
        }else if(document.body.offsetWidth>1300 && document.body.offsetWidth<1700){
            // 小的笔记本屏幕
            var tope=$("#email").offset().top + 100;
            var lefte=$("#email").offset().left - 20;
        }
        $(".miku").animate({
            top: tope,
            left: lefte
        },
        {
            queue: false,
            duration: 1000
        });
    });
    $("#code").click(function () {
        showMessage("一定要填写验证码哦！");
        if(document.body.offsetWidth>1900){
            /*大屏幕*/
            var topc=$("#code").offset().top + 100;
            var leftc=$("#code").offset().left - 210;
        }else if(document.body.offsetWidth>1300 && document.body.offsetWidth<1700){
            // 小的笔记本屏幕
            var topc=$("#code").offset().top+100;
            var leftc=$("#code").offset().left;
        }
        $(".miku").animate({
            top: topc ,
            left: leftc
        },
        {
            queue: false,
            duration: 1000
        });
    });
    $("#message").click(function () {
        showMessage("认真填写哦！不然会被认作垃圾留言的！我的乖乖~");
        if(document.body.offsetWidth>1900){
            /*大屏幕*/
            var topm=$("#message").offset().top + 150;
            var leftm=$("#message").offset().left - 170;
        }else if(document.body.offsetWidth>1300 && document.body.offsetWidth<1700){
            // 小的笔记本屏幕
            var topm=$("#message").offset().top + 150;
            var leftm=$("#message").offset().left +140;
        }
        $(".miku").animate({
            top: topm,
            left: leftm
        },
        {
            queue: false,
            duration: 1000
        });
    });
});

var miku_top = 50;
//滚动条移动
jQuery(document).ready(function ($) {
    var f = $(".miku").offset().top;
    $(window).scroll(function () {
        $(".miku").animate({
            top: $(window).scrollTop() + f +300
        },
        {
            queue: false,
            duration: 1000
        });
    });
});

//鼠标点击时
jQuery(document).ready(function ($) {
    var stat_click = 0;
    $(".mumu").click(function () {
        if (!ismove) {
            stat_click++;
            if (stat_click > 4) {
                msgs = ["你有完没完呀？", "你已经摸我" + stat_click + "次了", "非礼呀！救命！OH，My ladygaga"];
                var i = Math.floor(Math.random() * msgs.length);
            }else if(stat_click<3){
                msgs=['右键我能和我聊天哦~'];
                var i=0;
            }else{
                msgs = ["筋斗云！~我飞！","右键我能和我聊天哦~", "我跑呀跑呀跑！~~","右键我能和我聊天哦~", "别摸我，大男人，有什么好摸的！","右键我能和我聊天哦~", "惹不起你，我还躲不起你么？","右键我能和我聊天哦~", "不要摸我了，我会告诉老婆来打你的！","右键我能和我聊天哦~", "干嘛动我呀！小心我咬你！"];
                var i = Math.floor(Math.random() * msgs.length);
            }
            s = [0.1, 0.2, 0.3, 0.4, 0.5, 0.6,0.7,0.75,-0.1, -0.2, -0.3, -0.4, -0.5, -0.6,-0.7,-0.75];
            var i1 = Math.floor(Math.random() * s.length);
            var i2 = Math.floor(Math.random() * s.length);
            $(".miku").animate({
            left: document.body.offsetWidth/2*(1+s[i1]),
            top:  document.body.offsetheight/2*(1+s[i1])
            },
            {
                duration: 500,
                complete: showMessage(msgs[i])
            });
        } else {
            ismove = false;
        }
    });
});
//显示消息函数 
function showMessage(a, b) {
    if (b == null) b = 10000;
    jQuery("#messages").hide().stop();
    jQuery("#messages").html(a);
    jQuery("#messages").fadeIn();
    jQuery("#messages").fadeTo("1", 1);
    jQuery("#messages").fadeOut(b);
};

//拖动
var _move = false;
var ismove = false; //移动标记
var _x, _y; //鼠标离控件左上角的相对位置
jQuery(document).ready(function ($) {
    $("#miku").mousedown(function (e) {
        _move = true;
        _x = e.pageX - parseInt($("#miku").css("left"));
        _y = e.pageY - parseInt($("#miku").css("top"));
     });
    $(document).mousemove(function (e) {
        if (_move) {
            var x = e.pageX - _x; 
            var y = e.pageY - _y;
            var wx = $(window).width() - $('#miku').width();
            var dy = $(document).height() - $('#miku').height();
            if(x >= 0 && x <= wx && y > 0 && y <= dy) {
                $("#miku").css({
                    top: y,
                    left: x
                }); //控件新位置
            ismove = true;
            }
        }
    }).mouseup(function () {
        _move = false;
    });
});
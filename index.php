<!DOCTYPE html>
<html lang="zh-CN">
 <head> 
 <style>
        /* 设置整个页面的背景色为黑色 */
        body {
            background-color: black;
            margin: 0;
            padding: 0;
        }
    </style>
 <script>
    // 初始化主题设置
    (function() {
        var theme = localStorage.getItem('theme') || 'auto';
        if (theme === 'light') {
            document.documentElement.setAttribute('data-theme', 'light');
        } else if (theme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
        } else if (theme === 'auto') {
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
            }
        }
        
        // 初始化背景设置
        document.addEventListener('DOMContentLoaded', function() {
            var backgroundType = localStorage.getItem('backgroundType') || 'bing';
            if (backgroundType === 'custom') {
                var customBgUrl = localStorage.getItem('customBackgroundUrl');
                if (customBgUrl) {
                    document.querySelector('.bgo').style.background = 'url(' + customBgUrl + ')';
                    document.querySelector('.bgo').style.backgroundSize = 'cover';
                }
            }
            
            // 初始化链接打开方式
            var linkTarget = localStorage.getItem('linkTarget') || '_blank';
            document.querySelectorAll('.list a').forEach(function(link) {
                if (!link.getAttribute('href').startsWith('/')) { // 不修改内部链接
                    link.setAttribute('target', linkTarget);
                }
            });
        });
    })();
 </script>
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="apple-touch-fullscreen" content="yes" /> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
  <meta name="msvalidate.01" content="E6A585911EAC904DB98EFD927873E636" />
  <meta name="full-screen" content="yes" />
  <!--UC强制全屏--> 
  <meta name="browsermode" content="application" />
  <!--UC应用模式--> 
  <meta name="x5-fullscreen" content="true" />
  <!--QQ强制全屏--> 
  <meta name="x5-page-mode" content="app" />
  <!--QQ应用模式--> 
  <title>星芒起始页 - Star.Lumina</title> 
  <meta name="keywords" content="星芒导航,星芒搜索,星芒搜索导航,星芒,星芒起始页,起始页,搜索导航,首页,浏览器首页,百度,谷歌,谷歌搜索,必应,starlumina.com,快捷导航,浏览器,星芒浏览器">
  <meta name="description" content="最简洁的搜索导航，给你简单舒爽的搜索体验。">
  <link rel="shortcut icon" href="https://ico.starlumina.com/logo.ico" type="image/x-icon" /> 
  <link href="/css/style.css" rel="stylesheet" /> 
  <link href="/css/sousuo.css" rel="stylesheet" /> 
  <link rel="stylesheet" href="/css/font_1230786_gdvd1b4wlz.css" /> 
  <link rel="stylesheet" href="/css/font_1572019_yrk10qvz.css" /> 
  <script src="/js/jquery.min.js"></script> 
  <script src="/js/xd.js" defer async onerror="console.error('Failed to load xd.js')"></script>

 </head> 
 <body> 

  <div id="menu">
   <i></i>
  </div> 
  <div class="list closed"> 
  <ul>
    <li class="title"><i class="iconfont icon-changyong"></i> 常用</li> 
        <li><a rel="nofollow" href="https://www.taobao.com" target="_blank"><i class="iconfont icon-taobao" style="color: #ff6019;"></i>淘宝网</a></li>
	    <li><a rel="nofollow" href="https://www.jd.com" target="_blank"><i class="iconfont icon-jingdong" style="color: #E31D1A;"></i>京东</a></li>
	    <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><i class="iconfont icon-weibo" style="color: #e6162d;"></i>微博</a></li>
	    <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><i class="iconfont icon-bili" style="color:#09e;"></i>哔哩哔哩</a></li> 
	    <li><a rel="nofollow" href="https://fanyi.youdao.com/" target="_blank"><i class="iconfont icon-fanyi"></i>有道翻译</a></li>
	    <li><a rel="nofollow" href="https://bigjpg.com/zh" target="_blank"><i class="iconfont icon-tupian" style="color: #00bcff;"></i>JPG放大</a></li>
	    <li><a rel="nofollow" href="https://www.picdiet.com/zh-cn" target="_blank"><i class="iconfont icon-tupian"style="color:#fcb600"></i>JPG压缩</a></li>
	    <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><i class="iconfont icon-baidu" style="color: #1371ff;"></i>百度网盘</a></li>
	    <li><a rel="nofollow" href="https://www.aliyundrive.com/sign/in" target="_blank"><i class="iconfont icon-cloud-download" style="color: #4bbdff;"></i>阿里云盘</a></li>
    <li class="title"><i class="iconfont icon-youxiang"></i> 邮箱</li> 
        <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank"><i class="iconfont icon-QQ" style="color: #f05;"></i>QQ邮箱</a></li>
        <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><i class="iconfont icon-wangyi" style="color: #169;"></i>网易邮箱</a></li> 
        <li><a rel="nofollow" href="https://www.petalmail.com/#/" target="_blank"><i class="" style="color: #4bbdff;"></i>花瓣邮箱</a></li>
    <li class="title"><i class="iconfont icon-msg"></i> 论坛</li> 
       <li><a rel="nofollow" href="https://blog.starlumina.com/" target="_blank"><i class="iconfont icon-gmail" style="color: #f03;"></i>星芒博客</a></li>
        <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><i class="iconfont icon-weibo" style="color: #e6162d;"></i>微博</a></li> 
        <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank"><i class="iconfont icon-zhihu" style="color: #0084ff;"></i>知乎</a></li>
    <li class="title"><i class="iconfont icon-shipin"></i> 媒体</li> 
        <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><i class="iconfont icon-bili" style="color:#09e;"></i>哔哩哔哩</a></li> 
        <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><i class="iconfont icon-youtube" style="color:#f03;"></i>Youtube</a></li>
        <li><a rel="nofollow" href="https://www.douyin.com/" target="_blank"><i class="iconfont icon-douyin" style="color:#f03;"></i>抖音</a></li>
        <li><a rel="nofollow" href="https://www.yhdmz.org/" target="_blank"><i class="iconfont icon-acfun" style="color:#f33;"></i>樱花动漫</a></li> 
        <li><a rel="nofollow" href="https://music.163.com/" target="_blank"><i class="iconfont icon-wangyi" style="color:#f03;"></i>网易云音乐</a></li> 
    <li class="title"><i class="iconfont icon-ai-tool"></i> 工具</li> 
        <li><a rel="nofollow" href="https://pan.starlumina.com/" target="_blank"><i class="iconfont icon-cloud-download" style="color: #ff6019;"></i>星芒下载站</a></li>
        <li><a rel="nofollow" href="https://tool.starlumina.com/" target="_blank"><i class="iconfont icon-wangluo1" style="color: #ff6019;"></i>星芒工具箱</a></li>
        <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><i class="iconfont icon-baiduyun" style="color: #148bfe;"></i>百度网盘</a></li>
        <li><a rel="nofollow" href="https://www.aliyundrive.com/sign/in" target="_blank"><i class="iconfont icon-cloud-download" style="color: #4bbdff;"></i>阿里云盘</a></li>
        <li><a rel="nofollow" href="https://vocalremover.org/ch/" target="_blank"><i class="iconfont icon-video" style="color: #4bbdff;"></i>音频编辑</a></li> 
    <li class="title"><i class="iconfont icon-kongzhitai"></i> 开发</li> 
        <li><a rel="nofollow" href="https://github.com/" target="_blank"><i class="iconfont icon-github"></i>Github</a></li> 
        <li><a rel="nofollow" href="https://next.itellyou.cn/" target="_blank"><i class="iconfont icon-windows" style="color: #48c;"></i>MSDN</a></li> 
        <li><a rel="nofollow" href="https://ping.pe" target="_blank"><i class="iconfont icon-wangluo1" style="color:#1d0;"></i>Ping.pe</a></li> 
    <li class="title">AI</li> 
        <li><a rel="nofollow" href="https://www.deepseek.com/" target="_blank"><i class="" style="color: #4bbdff;"></i>DeppSeek</a></li>
        <li><a rel="nofollow" href="https://yuanbao.tencent.com/" target="_blank"><i class="" style="color: #4bbdff;"></i>腾讯元宝</a></li>
        <li><a rel="nofollow" href="https://chat.openai.com/" target="_blank"><i class="" style="color: #4bbdff;"></i>ChatGPT</a></li> 
        <li><a rel="nofollow" href="https://tongyi.aliyun.com/" target="_blank"><i class="" style="color: #4bbdff;"></i>通义千问</a></li>
        <li><a rel="nofollow" href="https://yiyan.baidu.com/" target="_blank"><i class="" style="color: #4bbdff;"></i>文心一言</a></li> 
        <li><a rel="nofollow" href="https://www.doubao.com/chat/" target="_blank"><i class="" style="color: #4bbdff;"></i>豆包</a></li>
    <li class="title"></i>关于本站</li> 
         <li><a href="/settings.html"><i class="iconfont icon-setting" style="color: #4bbdff;"></i>系统设置</a></li>
         <li><a rel="nofollow" href="https://starlumina.com/" target="_blank"><i class="" style="color: #4bbdff;"></i>关于我们</a></li> 
         <li><a rel="nofollow" href="https://blog.starlumina.com/?post=3" target="_blank"><i class="" style="color: #4bbdff;"></i>捐助我们</a></li> 
         <li><a rel="nofollow" href="https://app.starlumina.com/" target="_blank"><i class="" style="color: #4bbdff;"></i>下载客户端</a></li>
         <li><a rel="nofollow" href="https://blog.starlumina.com/?post=8" target="_blank"><i class="" style="color: #4bbdff;"></i>漏洞反馈</a></li>
         <li><a rel="nofollow" href="https://blog.starlumina.com/?post=4" target="_blank"><i class="" style="color: #4bbdff;"></i>背景下载</a></li>
         <li><a rel="nofollow" href="https://jq.qq.com/?_wv=1027&k=A6wxje1W" target="_blank"><i class="iconfont icon-cloud-download-alt" style="color: #4bbdff;"></i>官方QQ群</a></li>
   </ul>  
  </div> 
  <div id="search" class="s-search">
   <div id="search-list" class="hide-type-list">
    <div class="s-type">
     <span></span>
     <div class="s-type-list animated fadeInUp">
      <label for="type-search">搜索</label>
      <label for="type-GitHub">开发</label>
      <label for="type-zhihu">社区</label>
     </div>
    </div>
    <div class="search-group group-a">
     <span class="type-text">搜索</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-search" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下" /><label for="type-search"><span>百度</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-google" value="https://www.google.com/search?q=" data-placeholder="谷歌搜索" /><label for="type-google"><span>Google</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-bing" value="https://cn.bing.com/search?q=" data-placeholder="微软Bing搜索" /><label for="type-bing"><span>Bing</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-web" value="" data-placeholder="请输入网址" /><label for="type-web"><span>网址访问</span></label></li>
     </ul>
    </div>
    <div class="search-group group-b">
     <span class="type-text">开发</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-GitHub" value="https://github.com/search?q=" data-placeholder="GitHub" /><label for="type-GitHub"><span>GitHub</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-gitee" value="https://so.gitee.com/?q=" data-placeholder="gitee" /><label for="type-gitee"><span>gitee</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-CSDN" value="https://so.csdn.net/so/search?q=" data-placeholder="CSDN" /><label for="type-CSDN"><span>CSDN</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-ping" value="https://ping.pe/" data-placeholder="请输入网址" /><label for="type-ping"><span>Ping</span></label></li>

     </ul>
    </div>
    <div class="search-group group-c">
     <span class="type-text">社区</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-zhihu" value="https://www.zhihu.com/search?type=content&amp;q=" data-placeholder="知乎" /><label for="type-zhihu"><span>知乎</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-weibo" value="http://s.weibo.com/weibo/" data-placeholder="微博" /><label for="type-weibo"><span>微博</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-快递100" value="http://www.kuaidi100.com/?" data-placeholder="快递100" /><label for="type-快递100"><span>快递100</span></label></li>
    <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-bili" value="https://search.bilibili.com/all?keyword=" data-placeholder="请输入在Bilibili上想搜索关键词" /><label for="type-bili"><span>哔哩哔哩</span></label></li>
     </ul>
    </div>
   </div>
   <form action="https://www.baidu.com/s?wd=" method="get" target="_blank" id="super-search-fm">
    <input type="text" id="search-text" placeholder="输入关键字搜索" style="outline:0" />
    <button type="submit"><i class="iconfont icon-xdss"></i></button>
    <ul id="ul" class="ko"></ul>
   </form>
   <div id="yy" style="display:none;">
    <input type="text" id="kos" placeholder="<?php echo $word; ?>" />
    <button type="submit" id="kob"><i class="iconfont icon-xdss"></i></button>
    <ul id="kol" class="ko"></ul>
   </div>
   <div class="set-check hidden-xs">
    <input type="checkbox" id="set-search-blank" class="bubble-3" autocomplete="off" />
   </div>
  </div> 
  <script type="text/javascript" src="/js/yyss.js"></script>
  <script type="text/javascript" src="/js/sousuo.js"></script> 
  <script type="text/javascript" src="/js/lianxiang.js"></script> 
  <div class="bgo"></div> 
 </body>

<div style="position: fixed;width: 100%;height: 30px;line-height: 30px;bottom: 0;left: 0;text-align: center;">
            <a><?php echo $currentYear; ?></a>
            <a style="color: #fff;">Made by&nbsp;&copy</a>
            <a style="color: #fff;" href="https://starlumina.com/">成都市天府新区星芒云网络工作室</a>
			<a style="color: #fff;" href="https://beian.miit.gov.cn/" target="_blank">蜀ICP备2024095899号-3</a>
			<img class="logos" src="https://ico.starlumina.com/备案图标.png"  width="15" height="15" >
			<a style="color: #fff;" href="https://beian.mps.gov.cn/#/query/webSearch?code=51019002007728" rel="noreferrer" target="_blank"> 川公网安备51019002007728号</a>
			<a style="color: #fff;margin-left: 20px;cursor: pointer;" onclick="jiu()">切换旧版</a>
			</div>
</html>



<script>



function jiu(){
		setCookie('style',1,30);
		window.location.href="old/index.html"
	}
	
	function setCookie(name, value, liveMinutes) {
		if (liveMinutes == undefined || liveMinutes == null) {
			liveMinutes = 60 * 2;
		}
		if (typeof (liveMinutes) != 'number') {
			liveMinutes = 60 * 2;//默认120分钟
		}
		var minutes = liveMinutes * 60 * 1000;
		var exp = new Date();
		exp.setTime(exp.getTime() + minutes + 8 * 3600 * 1000);
		//path=/表示全站有效，而不是当前页
		document.cookie = name + "=" + value + ";path=/;expires=" + exp.toUTCString();
	}

	
</script>


<script>
	function getCookie(cname)
	{
	  var name = cname + "=";
	  var ca = document.cookie.split(';');
	  for(var i=0; i<ca.length; i++) 
	  {
	    var c = ca[i].trim();
	    if (c.indexOf(name)==0) return c.substring(name.length,c.length);
	  }
	  return "";
	}
	var style=getCookie('style');
	console.log(style)
	if(style==1){
		window.location.href="old/"
	}
	
	
</script>



<style>
        /* 默认样式 */
        body {
            color: white;
            background-color: white;
        }

        /* 黑白样式 */
        .grayscale {
            filter: grayscale(100%);
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);
        }
    </style>
<script>
        // 获取当前日期
        const today = new Date();
        const month = today.getMonth() + 1; // 月份从0开始，所以要加1
        const day = today.getDate();

        // 指定日期
        const specialDates = [
            { month: 5, day: 12 },  // 5月12日
            { month: 9, day: 18 },  // 9月18日
            { month: 12, day: 13 }  // 12月13日
        ];

        // 检查当前日期是否为指定日期
        const isSpecialDate = specialDates.some(date => date.month === month && date.day === day);

        // 如果是指定日期，应用黑白样式
        if (isSpecialDate) {
            document.body.classList.add('grayscale');
        }
    </script>
    
    
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?31f85df8d6bbcc62ef282c2b4a5340f5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

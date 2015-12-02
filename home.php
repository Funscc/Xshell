<?php 
/**
* 首页模版
*
* @package custom
*/
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>Xshell编程学习团队</title>
    <meta name="keywords" content="Xshell编程学习团队,php,html,css,typecho" />
    <meta name="description" content="Xshell编程学习团队,Xshell编程学习团队是为五个小伙伴学习交流而创建的博客，这里有各自的心得体会，给与基友们方便学习和交流的平台" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
    <meta name="copyright" content="Copyright Xshell编程学习团队 版权所有" />
    <link href="<?php $this->options->themeUrl('templets/Content/bootstrap.min.css'); ?>" rel="stylesheet" />
    
    <link href="<?php $this->options->themeUrl('templets/Content/index.min.css'); ?>" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script src="/templets/Scripts/html5shiv.min.js"></script>
    <![endif]-->
    <script src="<?php $this->options->themeUrl('templets/Scripts/jquery.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('templets/Scripts/index.min.js'); ?>"></script>
</head>

<body>
    <header>
        <div class="logo">
          <img src="<?php $this->options->themeUrl('templets/Picture/logo.png'); ?>" alt="Xshell编程学习团队- 官网首页" class="img-responsive" />
        </div>
        <strong class="words">专注IT学习交流</strong>
        <nav class="menu">
          <ul class="list-inline">
            <li class="active"><a>首页</a></li>
            <li><a>学习</a></li>
            <li><a>案例</a></li>
            <li><a>产品</a></li>
            <li><a>行业</a></li>
          <li><a>团队</a></li>
            <li><a>关于</a></li>
            <li><a>联系</a></li>
          </ul>
        </nav>
        
        <div class="menu-icon">
  			<tel:400-000-0000" title="点击直拨服务热线><span class="glyphicon glyphicon-earphone"></span></a>
            <span class="glyphicon glyphicon-th-large"></span>
        </div>
    </header>
    
    <div class="welcome"><p><u>Loading . . .</u></p></div>
    
    <section class="video">
    	<div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide nth1">
                <div class="box">
                  <div class="left"></div>
                  <div class="right">
                	<span>专注于Web编程学习交流</span><i></i>
                    <p>始于 2015 - 2015 展望未来<br />专注于web开发，专业于问题解决交流</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide nth2">
              	<div class="box">
                	<span>无数次失败与尝试，我们更看重</span><i></i>
                    <p>不是非要高大上，只是醉心于学习<br />我们想，再完善一个好案例</p>
                </div>
              </div>
              <div class="swiper-slide nth3">
              	<div class="box">
                  <div class="top">技术派，我们在路上</div>
                  <div class="mid"></div>
                  <div class="bottom">我说，没有最好的技术，只有最棒的方案<br />至少我们在努力</div>
                </div>
              </div>
              <div class="swiper-slide nth4">
              	<div class="box">
                  <div class="top"><span>制定目标，持续练习</span><i></i></div>
                  <div class="bottom">无论<u>前端</u>还是<u>后端</u><br />制定一个目标<br />努力<u>学习、实践、尝试</u>着向目标前进，重点：<u>坚持</u></div>
                </div>
              </div>
            </div>
        </div>
        <div class="innerBox">
        	<div class="news">
            	<span>最新文章 :</span>
                <a href="/blog" title="更多文章动态" class="more" target="_blank">更多文章</a>
                <ul>           
                <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                </ul>
            </div>
            <div class="guide"></div>
            <a class="movedown"></a>
        </div>
    </section>
    
    <section class="business">
      <div class="box">
        <div class="caption">
        	<i></i><span>我们都在干什么</span>
            <br class="clear" />
        </div>
        <ul class="items list-inline">
        	<li class="pc">
            	<i></i><strong>VMWARE</strong>
                <p>服务器、桌面、应用虚拟化<br />虚拟化安全解决方案学习</p>
            </li>
            <li class="mobi">
            	<i></i><strong>Web安全</strong>
                <p>安全爱好者<br />社会工程学<br />渗透入侵学习</p>
            </li>
            <li class="sys">
            	<i></i><strong>服务器、存储</strong>
                <p>Linux学习<br />服务器安全与存储</p>
            </li>
            <li class="app">
            	<i></i><strong>web开发、优化</strong>
                <p>PHP、Java、Html5+Css3<br />Seo、Sem<br />等学习计划</p>
            </li>
            <li class="host">
            	<i></i><strong>网络-机房</strong>
                <p>网络基础机构、网络安全<br />机房建设/机房改造</p>
            </li>
        </ul>
      </div>
    </section>

    <section class="cases">
      <div class="box">
    	<div class="caption">
        	<i></i><span>我们的案例</span>
            <br class="clear" />
        </div>
        <div class="swiper-container items">
           <div class="swiper-wrapper">
                 <div class="swiper-slide">
                    <a href="http://www.xiachedancc/Start.html" target="_blank">
                    <img src="http://www.xiachedan.cc/usr/uploads/2015/10/3116567899.png" alt="基于Typecho的单栏个人博客主题-Start" />
                    <p>方案设计<br /><strong>基于Typecho的单栏个人博客主题- Start</strong><br />适用于个人博客,单栏，简洁，自适应</p></a>
                  </div>

                  <div class="swiper-slide">
                    <a href="https://www.ciyuanai.net/archives/181.html" target="_blank">
                    <img src="https://dn-ciyuanai.qbox.me/2015/10/1180370408.png" alt="基于Typecho的单栏个人博客主题-V2ex" />
                    <p>方案设计<br /><strong>基于Typecho的仿V2EX博客主题- V2EX</strong><br />V2ex，typecho，双栏</p></a>
                  </div>

                  <div class="swiper-slide">
                    <a href="https://www.ciyuanai.net/archives/244.html" target="_blank">
                    <img src="https://dn-ciyuanai.qbox.me/2015/10/1780451525.jpg" alt="基于Typecho的单栏个人博客主题-Start" />
                    <p>方案设计<br /><strong>Tyepcho主题 Sunburst</strong><br />双栏，个人博客，简洁</p></a>
                  </div>

           </div>
        </div>
        <a href="/blog" title="更多方案" class="more" target="_blank">更多方案</a>
      </div>
    </section>
    
    <section class="clients">
   	  <div class="box">
    	<div class="caption">
        	<i></i><span>合作伙伴</span>
            <br class="clear" />
        </div>
        <ul class="items list-inline">
        	<li class="cctv"><span>IBM金牌代理</span></li>
            <li class="unicom"><span>HP金牌代理</span></li>
            <li class="tsinghua"><span>DELL合作伙伴</span></li>
            <li class="cas"><span>EMC金牌代理</span></li>
            <li class="sipo"><span>联想合作伙伴</span></li>
            <li class="apple"><span>数存白金代理商</span></li>
            <li class="das"><span>思杰战略合作伙伴</span></li>
            <li class="hunantv"><span>VMWARE 金牌代理商</span></li>
            <li class="sino"><span>H3C金牌代理商</span></li>
            <li class="report"><span>深信服金牌</span></li>
       

        </ul>
      </div>
    </section>
    
    <section class="quality">
      <div class="box">
    	<div class="caption">
        	<i></i><span>团队成员从事职业</span>
            <br class="clear" />
        </div>
        <div class="swiper-container items">
            <div class="swiper-wrapper">
              <div class="swiper-slide nth1">
                <ul class="list-inline">
                  <li class="mobi"><span>运维工程师</span></li><li class="pad"><span>响应式平板网站建设</span></li><li class="pc"><span>响应式PC网站建设</span></li>
                </ul>
                <p>运维工程师1名<br />运货搬砖侠1名</p>
              </div>
              <div class="swiper-slide nth2">
              	<ul class="list-inline">
                  <li class="ie"><span>web前端开发人员1名</span></li><li class="chrome"><span>公司企业级网站维护</span></li><li class="firefox"><span>网络销售工程师</span></li><li class="safari"><span>虚拟化销售工程师</span></li>
                </ul>
                <p>web前端开发人员1名<br />公司企业级网站维护1名<br /></p>
              </div>
              <div class="swiper-slide nth3">
              	<ul class="list-inline">
                  <li class="windows"><span>机房巡检</span></li><li class="ios"><span>IT信息化规划</span></li><li class="andriod"><span>IT信息化咨询</span></li>
                </ul>
                <p>linux运维工程师1名<br />大学狗1名<br /></p>
              </div>
            </div>
        </div>
        <a href="http://www.xshell.cc/blog" class="lookall" target="_blank">你以为看到了网站的全部？</a>
      </div>
    </section>
    
    
    <section class="marketing">
      <div class="box">
        <div class="caption">
        	<i></i><span>我们都是谁</span>
            <br class="clear" />
        </div>
        <ul class="items list-inline">
        	<li class="se">
            	<i></i><strong>Jasho</strong>
                <p>扯淡心理学专家<br />社会工程学研究者</p>
            </li>
            <li class="weixin">
            	<i></i><strong>Axhello</strong>
                <p>网络爱好者<br />web前端开发人员<br /></p>
            </li>
         
            <li class="pay">
            	<i></i><strong>起司</strong>
                <p>虚位以待<br />虚位以待</p>
            </li>
            <li class="bbs">
            	<i></i><strong>虚位以待</strong>
                <p>虚位以待<br />虚位以待</p>
            </li>
        </ul>
      </div>
    </section>


    <section class="aboutus">
    	<ul class="menu"><li>Jasho</li><li>Axhello</li><li>Public</li></ul>
        <div class="swiper-container items">
            <div class="swiper-wrapper">
              <div class="swiper-slide nth1">
              
 <strong>厚积薄发</strong>
                <p>登上峰顶，不是为了饱览风光，是为了寻找更高的山峰<br />日出东方，告别了昨天的荣耀，将光芒照向更远的地方<br />一路上，我更在意如何积累和沉淀</p>
                <u>下一秒，让你看，我到底有多强</u>
              </div>
              <div class="swiper-slide nth2">
              	<strong>宇宙论</strong>
                <p>给我一个女朋友，我可以撑起整个地球。</p>
                
              </div>
              <div class="swiper-slide nth3">
              	<strong>放下荣誉，放眼未来</strong>
                <ul>
                  <li>PHP<u>-</u>PHP学习历程</li>
                  <li>Html5<u>-</u>html5学习历程</li>
                  <li>Css3<u>-</u>Css3学习历程</li>
                  <li>Seo<u>-</u>搜索引擎优化学习历程</li>
                  <li>Sem<u>-</u>搜索引擎竞价排名学习历程</li>
                </ul>
              </div>
            </div>
        </div>
        <table class="exp">
        	<tr>
              <td><u>PHP</u>PHP学习历程</td>
              <td><u>Html5</u>html5学习历程</td>
              <td><u>Css3</u>Css3学习历程</td>
              <td><u>Seo</u>搜索引擎优化学习历程</td>
              <td><u>Sem</u>搜索引擎竞价排名学习历程</td>
            </tr>
        </table>
    </section>
    
    <section class="contact">
    	<div class="box">
        	<div class="above">
            	<div class="wechat"><img src="<?php $this->options->themeUrl('templets/Picture/wechat_code.jpg'); ?>" alt="扫描关注微信公众账号" style="height: 150px;"/></div>
                <div class="left">
                	
                    <p>中国<u>·</u>各地区<u></u><br />联系电话：400000000<u>/</u>0000-000000<br />地址：天朝各分部<br />邮编：000000<a href="/a/job/" target="_blank" class="job">[ 更多联系方式 ]</a></p>
                </div>
                <div class="right">
                	Email：root@xshell.cc<br />Copyright 2005-2015<u><br /><br /><br /></u>Xshell编程学习团队 版权所有<br />
                </div>
            </div>
        </div>
    </section>
    
    <div class="dock">
        <ul class="icons">
        	<li class="up"><i></i></li>
            <li class="im">
            	<i></i><p>免费服务咨询<br />在线沟通，请点我<a href="http://wpa.qq.com/msgrd?v=3&uin=842134234&site=qq&menu=yes">在线咨询</a></p>
            </li>
            <li class="tel">
            	<i></i><p>咨询热线：<br />400-000-0000<br /></p>
            </li>
            <li class="wechat">
            	<i></i><p><img src="<?php $this->options->themeUrl('templets/Picture/wechat_code.jpg'); ?>" alt="扫描关注微信公众账号" style="height: 150px;"  /></p>
            </li>
            <li class="down"><i></i></li>
        </ul>
        <a class="switch"></a>
    </div>
    
    
</body>
</html>
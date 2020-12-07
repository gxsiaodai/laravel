<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>联想首页</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
 <!--header是头部标签，用来定义文档的页眉（介绍信息） -->  
 <!--ul是定义无序列表-->         
 <!--li是定义列表项目的，用在ol和ul中-->
 <!--a标签是生成链接的-->
 <!--em标签告诉浏览器把其中的文本表示为强调的内容，会把这段文字用斜体来显示-->
      <header>
      <div class=left>
       <ul>
       <li><a href="">个人及家用产品库</a><em></em></li>
       <li><a href="">商用桌面产品集</a><em></em></li>
       <li><a href="">聚享汇</a><em></em></li>
       <li><a href="">会员专享</a><em></em></li>
       <li><a href="">销售网点查询</a><em></em></li>
       <li><a href="">社交平台</a><em></em></li>
       <li><a href="">手机版</a><em></em></li>
      </ul>
      </div>

      <div class="right">
       <!--<i>标签和em类似，显示斜体文本效果-->
       <ul>     
         <li><a href="http://www.myf.com/login">登录</a><em></em></li>
         <li><a href="">注册</a><em></em></li>
         <li><a href="">购物车</a><i>0</i></li>
       </ul>
      </div>
  </header>

<!--头部广告-->
  <div id="abs">
    <img src="img/header.jpg">
    
  </div>
 

<!--logo-->
  <div id=header>
    <div id=logo>
       <a href=""><img src="img/logo.png"></a>
        </div>
     

   <div>
   <ul>
         <li><a href="">联想首页</a></li>
         <li><a href="">品牌</a></li>
         <li><a href="">服务</a></li>
         <li><a href="">社区</a></li>
         <li><a href="">门店</a></li>
       </ul>
   </div> 
<form action="post" method="post">
    <div id=search>
    <form action="post" method="post">
       <input name=aa id=ss type='text' autocomplete='off' placeholder='inhone12买买买'>
    <!--button是普通按钮  submit是提交按钮  reset是重置按钮-->   
       <input type="button" value="搜索">
     </form>
    </div>
   
 </div>

  <!--<nav> 标签定义导航链接的部分-->
  <nav>
    <ul>
      <li><img src="img/timg.gif"></li>
      <li><a href="">爆款</a></li>
      <li><a href="">小新铺子</a></li>
      <li><a href="">联想合伙人</a></li>
      <li><a href="">0元试用</a></li>
      <li><a href="">以旧换新</a></li>
      <li><a href="">私人定制</a></li>
      <li><a href="">服务</a></li>
      <li><a href="">社区</a></li>
    </ul>
  </nav>

  <div id=main>
  <div class=main-lfet>
    <ul>
     <li><a href="">Lenovo</a></li>
     <li><a href="">Thinkpad电脑 </a></li>
     <li><a href="">平板电脑</a></li>
     <li><a href="">手机</a></li>
     <li><a href="">通信卡</a></li>
     <li><a href="">打印机</a></li>
     <li><a href="">智能数码</a></li>
     <li><a href="">电脑增值服务</a></li>
    </ul>

  </div>
    
   <div class="center"><img src="img/center.jpg"></div>  
    </div>

<!--footer定义文档中的页脚部分-->
  <footer>
    
    
    <ul>
      <li>
       <a class=a href="" title="关于联想">关于联想</a>
       <a href="" title="投资者关系 ">投资者关系</a>
       <a href="" title="加入我们">加入我们</a>
       <a href="" title="联系我们">联系我们</a>
       <a href="" title="参观联想">参观联想</a>
       <a href="" title="销售网点查询">销售网点查询</a>
       <a href="" title="服务网点查询">服务网点查询</a>
      </li>
     </ul>
     </footer>

</body>
</html>

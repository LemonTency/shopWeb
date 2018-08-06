<!DOCTYPE html>  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<link href="css/main.css"rel="stylesheet"type"text/css"/>
<link href="css/bootstrap.min.css"rel="stylesheet">
<!--引入风格js文件-->
<script src="js/js.js"type="text/javascript"charset="utf-8"></script>
</head>

<body>
<div class="container">
<div class="head headCustomer">
  <ul>
    <li><a href="index.php">打折商品</a></li>
    <li><a href="attention.php">商品关注度</a></li>
    <li><a href="position.php">我的位置</a></li>
  </ul>
</div> <!-- 灰色的头顶框结束 -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display --> 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
      </form>
  </div><!-- /.container-fluid -->
</nav>
<div class="detailPicture">
  <img src="images/good1.1.jpg"/>
</div>
<div class="detailIntrodue">
  <div class="detailName">【三只松鼠】创意大礼包</div>
  <div class="box1">
  <div class="detailPosition"><p>优惠价</p><span class="fonthighlight" >¥45</span></div>
  <div class="detailPosition"><p>关注度</p><span class="fonthighlight" >1</span></div>   <!-- 商品热度 -->
  <div class="detailPosition"><p>折 扣</p><span class="fonthighlight" > 6折</span></div>
  <div class="detailBuss"> <p>生产日期</p>2018.01.12</div>
  </div>
  <div class="detailBuss"><p>生产公司</p>三只松鼠股份有限公司</div><!-- 生产商家 -->
  <div class="detailPosition"><p>位  置</p>A53</div>  
  <div class="detailPosition"><p>商品EPC</p>00000022</div>
  <div class="detailPosition"><p>商品销售量</p>150</div>
  <div class="detailPosition"><p>商品初始量</p>200</div>
  <div class="detailPosition"><p>销售额</p>￥6750</div>
  <div class="detailPosition"><p>商品简介</p>配料表：扁核桃，白砂糖，食用盐</div>
  <!-- 上面有的是可以用同一个样式的 -->
  <a href="navigation.php"class="btn btn-primary btn-self" href="#" role="button">导航</a></p>
</div>
<!--   <form><input type="submit" class="submit" value="导航" onclick=""></form> -->
</div> <!-- 导航框结束 ,这里想要实现的功能就是点击此按钮之后弹出一个警告框要你输入购物车的编号，暂时还没实现，到时用js实现，还要提交表单这些功能-->
</div>
</body>
</html>
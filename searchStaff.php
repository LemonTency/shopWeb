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
<div class="head">
  <ul>
    <li><a href="dated.php">即将过期</a></li>
    <li><a href="attentionStaff.php">商品关注度</a></li>
    <li><a href="wrong.php">错放商品</a></li>
  </ul>
</div>
<div class="head">
  <ul>
    <li><a href="peopleCounting.php">商品销售统计</a></li>
    <li><a href="flowDensity.php">人流密度</a></li>
  </ul>
</div>
</div> <!-- 灰色的头顶框结束 -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->	
    <!-- Collect the nav links, forms, and other content for toggling -->
    <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
          <a href="searchStaff.php"class="btn btn-primary btn-self" href="#" role="button">搜索</a>
        </div>
        
      </form>
  </div><!-- /.container-fluid -->
</nav>
<div class="col">
  <div class="col-xs-6 col-md-4">
    <div class="thumbnail">
      <a href="detailCustomer.php">
      <img src="images/good1.jpg" class="img-responsive" alt="Responsive image"></a>
      <!-- <div class="caption"> -->
        <h5>三只松鼠创意大礼包</h5>
        <div class='indexDesc'>
          <div class="price">¥12</div>
          <div class="discount">7.8折</div>
        </div>
          <div class="heat">关注度：1</div> 
    </div>
  </div>
</div>
<div class="col">
  <div class="col-xs-6 col-md-4">
    <div class="thumbnail">
      <img src="images/good5.jpg" alt="...">
      <h5>3D哈士奇创意抱枕</h5>
      <div class='indexDesc'>
          <div class="price">¥78</div>
          <div class="discount">9.0折</div>
      </div>
          <div class="heat">关注度：2</div>
    </div>
  </div>
</div>
</body>
</html>
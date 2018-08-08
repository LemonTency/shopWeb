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
</div></div> <!-- 灰色的头顶框结束 -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->	
    <!-- Collect the nav links, forms, and other content for toggling -->
    <form class="navbar-form navbar-left">
        <div class="form-group">
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
          <a href="searchStaff.php"class="btn btn-primary btn-self" href="#" role="button">搜索</a>
        </div>
      </form>
  </div><!-- /.container-fluid -->
</nav>
<table class="table table-hover">
  <tr>
    <th>商品EPC码</th>
    <th>错放位置</th>
    <th>正确位置</th>
  </tr>
  <tr>
      <td>00000001</td>
      <td>A33</td>
      <td>A43</td>
  </tr>
  <tr>
      <td>00000002</td>
      <td>B21</td>
      <td>C32</td>
  </tr>
  <tr>
      <td>00000003</td>
      <td>C32</td>
      <td>B42</td>
  </tr>
  <tr>
      <td>00000004</td>
      <td>D21</td>
      <td>A33</td>
  </tr>
  <tr>
      <td>00000005</td>
      <td>B33</td>
      <td>B21</td>
  </tr>
  <tr>
      <td>00000007</td>
      <td>A21</td>
      <td>B33</td>
  </tr>
  <tr>
      <td>00000009</td>
      <td>B42</td>
      <td>A11</td>
  </tr>
  <tr>
      <td>00000013</td>
      <td>B11</td>
      <td>C21</td>
  </tr>
</table>
</div>
</body>
</html>
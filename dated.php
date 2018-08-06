<!DOCTYPE html>  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"content="width=device-width,initial-scale=1.0">
</head>
<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        </div>
        <a href="searchStaff.php"class="btn btn-primary btn-self" href="#" role="button">搜索</a></p>
      </form>
  </div><!-- /.container-fluid -->
</nav>
<table class="table table-hover">
  <tr>
    <th>商品EPC码</th>
    <th>所在位置</th>
    <th>即将过期</th>
  </tr>
  <tr>
      <td>00000001</td>
      <td>A43</td>
      <td>0</td>
  </tr>
  <tr>
      <td>00000004</td>
      <td>A33</td>
      <td>2</td>
  </tr>
  <tr>
      <td>00000005</td>
      <td>B21</td>
      <td>6</td>
  </tr>
  <tr>
      <td>00000002</td>
      <td>C32</td>
      <td>9</td>
  </tr>
  <tr>
      <td>00000007</td>
      <td>C32</td>
      <td>11</td>
  </tr>
  <tr>
      <td>00000013</td>
      <td>D21</td>
      <td>12</td>
  </tr>
  <tr>
      <td>00000015</td>
      <td>A21</td>
      <td>13</td>
  </tr>
  <tr>
      <td>00000003</td>
      <td>B42</td>
      <td>15</td>
  </tr>
</table>
</div>
</body>
</html>
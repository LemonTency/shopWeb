<!DOCTYPE html>  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<link href="css/main.css"rel="stylesheet"type"text/css"/>
<script src="js/jquery-1.4.4.min.js"type="text/javascript"charset="utf-8"></script>
<link href="css/bootstrap.min.css"rel="stylesheet">
<!--引入风格js文件-->
<script src="js/js.js"type="text/javascript"charset="utf-8"></script>
</head>
<body>
<!-- <form>
<table width="350" bgcolor="#ccffcc" style="border-color" border="1">
<tr align=center>
<td>用户名</td><td><input type="text" name="username" id="username"></td>
</tr>

<tr align=center><td>密 码</td><td><input type="password" name="password" id="password"></td></tr>
<tr align=center><td colspan="2"><input type="button" value="登 录" onclick="r()"/></td></tr>
</table>
</form> -->
<!-- <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div> -->
  <div class="panel panel-default">
    <div class="panel-heading">您好！</div>
    <div class="panel-body">
            <form role="form">
                <div class="form-group">
                    <label for="username">工号:</label>
                    <input id="username" type="email" class="form-control" placeholder="请输入工号">
                </div>
                <div class="form-group">
                    <label for="password">密码:</label>
                    <input type="password" id="password" class="form-control" placeholder="请输入密码">
                </div>
                <div class="checkbox">
                </div>
<!--                 <div class="img">
                    <input type="text" value="请输入验证码">
                    <img>
                </div> -->
                <button class="btn  btn-primary">
                    登录
                </button>
            </form>
      </div>
</div>
<script>
    $(function(){
        var $btn=$(".btn");
        var $username=$("#username");
        var $password=$("#password");
        $btn.onclick=function(){
                 $.ajax({  //ajax() 方法通过 HTTP 请求加载远程数据。
                     url:"data.txt",
                     data:"$username+$password",
                     dataType:"json",
                     type:"post",
                    success:function(){
                       if(data==Fail){
                           alert("登陆失败！请重新输入");
                       }else{
                           alert("登陆成功！");
                           window.location.href="indexStaff.php";
                       }
                    }
                  })
        }
    })

    // 用一个data.txt来存放员工数据库
    //jquery代码还没看
//     function verifySta(str)
// {
// var xmlhttp;
// if (str.length==0)
//   { 
//   document.getElementById("txtHint").innerHTML="";
//   return;
//   }
// if (window.XMLHttpRequest)
//   {// code for IE7+, Firefox, Chrome, Opera, Safari
//   xmlhttp=new XMLHttpRequest();
//   }
// else
//   {// code for IE6, IE5
//   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//   }
// xmlhttp.onreadystatechange=function()
//   {
//   if (xmlhttp.readyState==4 && xmlhttp.status==200)
//     {
//     document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
//     }
//   }
// xmlhttp.open("GET","data.php?q="+str,true);
// xmlhttp.send();
// }
</script>
</body>
</html>

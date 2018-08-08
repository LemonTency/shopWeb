<!DOCTYPE html>  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<link href="css/main.css"rel="stylesheet"type"text/css"/>
<!-- <script src="js/jquery-1.4.4.min.js"type="text/javascript"charset="utf-8"></script> -->
<link href="css/bootstrap.min.css"rel="stylesheet">
<!--引入风格js文件-->
<script src="js/js.js"type="text/javascript"charset="utf-8"></script>
</head>
<body>
  <div class="panel panel-default">
    <div class="panel-heading">您好！</div>
    <div class="panel-body">
            <form role="form">
                <div class="form-group">
                    <label for="username">工号:</label>
                    <input id="username"class="form-control" placeholder="请输入工号" onkeyup="showHint(this.value)">
                    <p><span id="txtHint"></span></p> 
                </div>
                <div class="form-group">
                    <label for="password">密码:</label>
                    <input type="password" id="password" class="form-control" placeholder="请输入密码">
                </div>
                <div class="checkbox">
                </div>
                 <a type="submit" class="btn" id="btn" href="indexStaff.php">登陆</a>
            </form>
      </div>
</div>
<script>
  window.onload = function(){
   
    // $(function(){
    //     var $btn=$(".btn");
    //     var $username=$("#username");
    //     var $password=$("#password");
    //     $btn.onclick=function(){
    //              $.ajax({  //ajax() 方法通过 HTTP 请求加载远程数据。
    //                  url:"data.txt",
    //                  data:"$username+$password",
    //                  dataType:"json",
    //                  type:"post",
    //                 success:function(){
    //                    if(data==Fail){
    //                        alert("登陆失败！请重新输入");
    //                    }else{
    //                        alert("登陆成功！");
    //                        window.location.href="indexStaff.php";
    //                    }
    //                 }
    //               })
    //     }
    // })

    // 用一个data.txt来存放员工数据库
    //jquery代码还没看
  //     function showHint(str)
  //       {
  //       var xmlhttp;
  //       if (str.length==0)
  //         { 
  //         document.getElementById("username").innerHTML="";
  //         return;
  //         }
  //       if (window.XMLHttpRequest)
  //         {// code for IE7+, Firefox, Chrome, Opera, Safari
  //         xmlhttp=new XMLHttpRequest();
  //         }
  //       else
  //         {// code for IE6, IE5
  //         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  //         }
  //       xmlhttp.onreadystatechange=function()
  //         {
  //         if (xmlhttp.readyState==4 && xmlhttp.status==200)
  //           {
  //           document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
  //           }
  //         }
  //       xmlhttp.open("GET","data.php?q="+str,true);
  //       xmlhttp.send();
  //       }
  //       var btn = document.getElementById('btn');
  //       var password = document.getElementById("password").value;
  //       var username = document.getElementById("username").value;
  //       btn.addEventListener('click',function(){
  //         if(password==""&&username==""){
  //           window.location.href="indexStaff.php"
  //           }
  //         })

  // }
  var btn = document.getElementById('btn');
  console.log(btn);
  var password = document.getElementById("password").value;
  var username = document.getElementById("username").value;
  btn.onclick = function(){
    console.log(11);
    window.location.href='indexStaff.php';  
  }
}
</script>
</body>
</html>

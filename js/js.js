function positionRequest(){
	var name=prompt("请输入你手中的购物车号","001");
	if(name!=null){
		alert("你好! "+name+" !欢迎进入导航界面");
		// window.location.href='position.php';
	}
}
function search(){
	document.getElementById("myForm").submit()
}

function r()
{
var username=document.getElementById("username").value;
var pass=document.getElementById("password").value;
// if(username.value=="")
// {
// alert("工作编号");
// username.focus();
// return;
// }
// if(pass.value=="")
// {
// alert("请输入密码");
// return;
// }
if(username.value==''&&pass.value==''){
	window.location.href='indexStaff.php';  
}
return true;
}
//账号密码登陆页面

function skip(){
	window.location.href='search.php'; 
}
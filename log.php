<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	include("function.php");
	$log_type=$_GET["log_type"];
	//$line=mysql_connect('qdm16147017.my3w.com','qdm16147017','19981102aa');
	$line=mysql_connect("121.196.226.94","root","root");
	 if($line){
			mysql_select_db('zckj_db',$line) or die( '错误'.mysql_error());
			mysql_query("SET NAMES 'utf8'");//SQL读取中文乱码解决
			switch($log_type){
				case "login":                                                         //登录功能
					$user=$_GET["user"];
					$pwd=md5($_GET["pwd"]);
					$sql=mysql_query("select * from user where user='".$user."'");
					$cha=0;
						while($row=mysql_fetch_array($sql)){
							$user_name[]=$row["name"];
							if($user==$row["user"]&&$pwd==$row["password"]){$cha=1;break;}
						}
						if($cha){
							session_start();
							$_SESSION['username']=$user_name[0];
							echo"<script>location.relace('index.php');</script>";
							echo"登录成功 $user_name=".$user_name[0];
						}else{
							echo"用户名或密码错误";
							echo $pwd;
							echo"<br>".$row["password"]."</br>";
						}
				break;
				case "update":                                                           //数据更新					
					$name=$_GET["name"];
					$type=$_GET["type"];
					$phone=$_GET["phone"];
					$mail=$_GET["mail"];
					$addr=$_GET["addr"];
					//echo "addr=".$addr."<br>";
					$getid=$_GET["id"];
					$sql=mysql_query("update user set name='".$name."', type='".$type."', phone='".$phone."', mail='".$mail."', addr='".$addr."' where id=".$getid);
					if($sql){
						echo "成功保存";
					}else{
							echo "<br>".mysql_error();
					}						
				break;
				case "delete":								                         //数据删除						
					$getid=$_GET["id"];
					$sql=mysql_query("delete from user where id=".$getid);
					if($sql) echo "成功保存"; else echo "<br>".mysql_error();	
				break;
				
				case "SaiXuan":
					$company=$_GET["company"];
					$type=$_GET["type"];
					//echo"comoany=".$company."type=".$type;
					
					if($company!="公司"&&$type!="用户类型"){
						$sql1=mysql_query("SELECT * FROM user where company='".$company."' and type='".$type."'  order by id ");
					}else if($company=="公司"&&$type!="用户类型"){
						$sql1 = mysql_query("SELECT * FROM user where type='".$type."' order by id ");
					}else if($company!="公司"&&$type=="用户类型"){
						$sql1 = mysql_query("SELECT * FROM user where company='".$company."' order by id ");
					}else{
						$sql1 = mysql_query("SELECT * FROM user  order by id ");	
					}

					//echo "count=".$count."<br>pagecount=".$pagecount."<br>page=".$page."<br>begin=".$begin;
					$c=1;
					while( $arr = mysql_fetch_array($sql1)){
						echo"<tr>
								<td>".$c++."</td>
								<td>".$arr["name"]."</td>
								<td>".type_c($arr["type"])."</td>
								<td>".$arr["phone"]."</td>
								<td>".$arr["company"]."</td>
								<td>
									<a href='user.php?id=".$arr["id"]."'><i class='icon-pencil'></i></a>
									<a href='#myModal' role='button' data-toggle='modal'><i class='icon-remove'></i></a>
								</td>
						    </tr>";
					}
				break;
				case "check":
					$user=$_GET["user"];
					conmysql();
					echo check_j("user",$user);
					
					
				break;
			    case "p_msg":
					$phone=$_GET["phone"];
					$number=$_GET["c_num"];
					$msg="感谢您注册自点车坊。您的验证码是".$number."如非本人操作，请忽略此消息。";
					$url="http://www.zidianchefang.com:7001/HS4SShop/v1_0/MessageSend/Default.aspx?__VIEWSTATE=%2FwEPDwUKMTY1MjIyNTY0Nw9kFgICAw9kFgQCAw8WAh4JaW5uZXJodG1sBQsxODc1NzczOTA0MmQCBQ8WAh8ABQR0ZXN0ZGQ0c0Het2XAhdUncnw2e%2FxDXPMxoKrMwWV3UI2Z%2FdLCnQ%3D%3D&__EVENTVALIDATION=%2FwEWBAKwi7W%2BCALRg4zZCQKjj%2Bv3CgKZgbK3C664ed3Dpxoun2wWbwkKsnkKTXidxLEJ1av9On2FlbaW&TxtMobile=".$phone."&TxtSeoWords=".$msg."&ButtonSaveLogicPicSet=%E5%8F%91%E9%80%81";
					//echo "<script>window.location.href=".$url."<//script>";
                    echo "<a href='".$url."'>点击发送短信</a>";
					iconv("gb2312","utf-8",file_get_contents($url));
				break;
				case "reg":
					conmysql();
						 $user=$_GET["user"];
						 $name=$_GET["name"];
						 $pwd=$_GET["pwd"];
						 $company=$_GET["company"];
						 $cphone=$_GET["cphone"];
						 $shen=$_GET["shen"];
						 $addr=$_GET["addr"];
						 $cadmin=$_GET["cadmin"];
						 $cadminp=$_GET["cadminp"];
						 $yewu=$_GET["yewu"];
					
					//echo $user."<br>".$name."<br>".$pwd."<br>".$company."<br>".$cphone."<br>".$shen."<br>".$addr."<br>".$cadmin."<br>".$cadminp."<br>".$yewu;
						$a[][]=array(
									array("user",$user),
									array("name",$name),
									array("pwd",$pwd),
									array("company",$company),
									array("cphone",$cphone),
									array("shen",$shen),
									array("addr",$addr),
									array("cadmin",$cadmin),
									array("cadminp",$cadminp),
									array("yewu",$yewu)
									);
									
						//insert();
						
				  					$sqls=" insert into user(user,name,password,company,cphone,shen,addr,cadmin,cadminp,yewu) values('".$user."','".$name."','".$pwd."','".$company."','".$cphone."','".$shen."','".$addr."','".$cadmin."','".$cadminp."','".$yewu."');";
									mysql_query("SET NAMES 'utf8'");
									$sql=mysql_query($sqls);
		 							if($sql && mysql_affected_rows()>0){echo "成功";}else{echo "<br>".mysql_error();}

		
	
			
	 }}
?>
</body>
</html>
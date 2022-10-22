<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>大哥大使用意見調查表確認網頁</title>
	</head>
	<body background = "free0.gif">
	<p> <img src = "free1.jpg"> </p>
	<?php
		$Name = $_POST["UserName"];
		$Mail = $_POST["UserMail"];
		switch($_POST["UserAge"])
		{
			case "Age1":
				$Age = "未滿20歲";
				break;
			case "Age2":
				$Age = "20~29";
				break;
			case "Age3":
				$Age = "30~39";
				break;
			case "Age4":
				$Age = "40~49";
				break;
			case "Age5":
				$Age = "50歲以上";
		}
		$Phone = $_POST["UsePhone"];
		$Trouble = $_POST["UserTrouble"];
		$Number = $_POST["UserAge"];
		?>
		<p><i><?php echo $Name; ?></i>，您好! 您輸入的資訊如下:</php>
		電子郵件地址: <?php echo $Mail; ?><br>
		年齡: <?php echo $Age; ?><br>
		曾經使用過的手機廠牌:<?php foreach($Phone as Value)echo $Value. '&nbsp'; ?><br>
		使用手機時最常碰到的問題:<?php echo $Trouble; ?><br>
		使用哪家業者的門號:<?php foreach($Number as Value)echo $Value. '&nbsp'; ?>
    </body>
</html>
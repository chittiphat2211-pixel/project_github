<?php
// ตัวอย่างหน้า PHP แบบง่าย
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'ผู้เยี่ยมชม';
$date = date('Y-m-d H:i:s');
?>
<!doctype html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>สวัสดี — ตัวอย่างง่ายๆ</title>
	<style>
		body { font-family: Arial, Helvetica, sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; color: #222 }
		header { border-bottom: 1px solid #eee; padding-bottom: 12px; margin-bottom: 18px }
		input { padding: 8px; font-size: 14px }
		button { padding: 8px 12px; font-size: 14px }
	</style>
</head>
<body>
	<header>
		<h1>สวัสดี, <?php echo $name; ?>!</h1>
		<p>เวลาปัจจุบัน: <?php echo $date; ?></p>
	</header>

	<p>นี่คือตัวอย่างหน้า PHP แบบง่าย — ใส่ชื่อโดยเพิ่มพารามิเตอร์ <code>?name=ชื่อของคุณ</code> ใน URL หรือใช้แบบฟอร์มด้านล่าง.</p>

	<form method="get">
		<input name="name" placeholder="ชื่อของคุณ">
		<button type="submit">ส่ง</button>
	</form>

</body>
</html>

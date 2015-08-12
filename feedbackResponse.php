<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>

<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>Feedback</h1>
    <div data-role="navbar">
      <ul>
        <li><a href="index.html" data-icon="home">Menu</a>
		</li>
		
       
      </ul>
   </div>
  </div>
  <div data-role="content">
  Thank you <?php echo $_POST["fullname"]; ?><br>
  your feedback has been collected and kept for further analysis.
 </div>
<div data-role="footer">
    <h1>Tasty.CO LTD</h1>	
	</div>
</div>
</body>
</html>

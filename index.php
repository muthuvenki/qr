<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
function check()
	{
		var start=document.get.star.value);
		var end=document.get.end.value;
		if (end-start <= 16)
				       return true;
			else{
				alert('pls readt the NOTE carefully');
				document.get.star.value="";
				document.get.star.focus();
				return false;
		}
			
	}
	</script>
</head>
<body>
	<p>NOTE : THE K! id must be start with KQ15---- to KQ15---- and number range must be 16 exactly
<form action="home.php" method="post" name="get" onSubmit="return check()">
<input type="text" name="star">
<input type="text" name="end">
<input type="submit" value="generate">
</form>
</body>
</html>
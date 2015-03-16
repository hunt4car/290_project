<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<script>
	$.post('http://localhost:8888/290_project/test.php', { key1: 'value1', key2: 'value2' }, function(result) {
    alert('successfully posted key1=value1&key2=value2 to foo.php');
});
</script>
	
</body>
</html>


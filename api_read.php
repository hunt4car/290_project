<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.min.js'></script>
	<script type='text/javascript' src='includes/js/json2html.js'></script>
	<script type='text/javascript' src='includes/js/jquery.json2html.js'></script>
	<script type='text/javascript' src='includes/js/helper.js'></script>
	<link rel="StyleSheet" href="includes/css/helper.css" type="text/css"/>
	<!-- <script type='text/javascript' src=''></script> -->
</head>

<!-- <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.min.js'></script> -->
<script type="text/javascript">


$.ajax({
    url : "http://localhost:8888/290_project/api_write.php",
    dataType: 'json',
    type: 'get',
    cache: false,
    success : function(data){
    	// var result = (data);
        document.write(data);
    }
});





























// var html = "http://localhost:8888/290_project/api_write.php";	

// document.write(html);

// var url;
// $.ajax({
//     url : "http://localhost:8888/290_project/api_write.php",
//     success : function(result){
//     	var url = result;
//         document.write(url);
//         var html = json2html(url);
//     	document.write(html);

//     }
   
// });

// document.write(url);
// var html = json2html(url);
//     document.write(html);


</script>
<body>	
</body>
</html>


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
    	document.write(data);
    	console.log(data);



    	function json2php(object){
    		var json = "{";
    		for(property in object) {
    			var value = object[property];
    			if (typeof(value) == "string") {
    				json += '"'+property+'":"'+value+'",'
    			}else {
    				if (!value[0]) {
    					json += '"'+property+'",'+json2php(value)+',';
    				} else {
    					json += '""'+property+'":[';
    					for(prop in value) json += '""'+value[prop]+'",';
    						json = json.substr(0,json.length-1) + "]";

    				}
    			}
    		}
    		return json = json.substr(0,json.length-1) + "}";
    	}
    	// $(data.object).each(function(index,value)
    	// 	console.log(value);
    	// });
	// function json2php(data);

// var result = (data);
// JSON.stringify(data);
// document.write(data);
// console.log(data);

// convert json to javascript or php

//         for (var key in data) {
//   if (data.hasOwnProperty(key)) {
//     alert(key + " = " + data[key]);
//   }
// }


//         // prints content

        var output = '';
for (var property in data) {
  output += property + ': ' + data[property]+'; ';
}
document.write(output);


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


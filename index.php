<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Dark Humor</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/jquery.firefly.js"> </script>
	<script src="js/script.js"> </script>
	<script>
	$(document).ready(function() {
		$.firefly({images : ['img/spark.png'],total : 10});
		function myFunction()
		{
			var makeevent = Math.floor((Math.random()*10)+1);
			console.log(makeevent);
			if (makeevent === 7) {
				$("#slendy").show();
				setTimeout(function(){
					fade(idmaincontent, 500, 0);
					$("#slendy").hide();
				},50);
			}	
		}
		setInterval(myFunction, 3000);
	});
	</script>
</head>
<body>
	<div id="slendy"><img src="img/slendy.png" alt="Slenderman, is supposed to be scary and randomly pop up" height="130px" width="130px"></div>
	<div id="staticbk"></div>
</body>
</html>
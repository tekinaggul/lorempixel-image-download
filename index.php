<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-git2.min.js"></script>
</head>
<body>
<input type="button" value="gonder" id="gonder" />
<div id="post"></div>
<script type="text/javascript">
	var cat = ["abstract","animals","business","cats","city","food","nightlife","fashion","people","nature","sports","technics","transport"];
	
	$("#gonder").click(function(event) {
		for (var j = cat.length - 1; j >= 0; j--) {
			for (var i = 1; i <= 10; i++) {
				$.ajax({
				    url: 'post.php',
				    type: 'POST',
				    data: {
				        address: 'http://lorempixel.com/1920/1920/'+cat[j]+'/'+i, name:cat[j]+"-"+i
				    },
				    dataType: "script",
				    success: function(response) {
				       	$("#post").html(response);
				    }
				});
			};
		};
	});
</script>
</body>
</html>
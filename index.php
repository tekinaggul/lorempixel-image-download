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
	var size = [["600","600"],["400","400"],["400","200"],["1920","1920"],["1200","1200"],["1200","600"],["1200","800"],["1920","1080"],["1600","900"],["1280","720"],["1024","768"]]
	$("#gonder").click(function(event) {
		for (var k = size.length - 1; k >= 0; k--) {
			for (var j = cat.length - 1; j >= 0; j--) {
				for (var i = 1; i <= 10; i++) {
					$.ajax({
					    url: 'post.php',
					    type: 'POST',
					    data: {
					        address: 'http://lorempixel.com/'+size[k][0]+'/'+size[k][1]+'/'+cat[j]+'/'+i, name:i,path_name:cat[j],sizeH:size[k][0],sizeV:size[k][1]
					    },
					    dataType: "script",
					    success: function(response) {
					       	$("#post").html(response);
					    }
					});
				};
			};
		};
	});
</script>
</body>
</html>
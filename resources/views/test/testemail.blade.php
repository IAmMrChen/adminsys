<!DOCTYPE html>
<html>
<head>
	<title>For test</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div>
		<span>測試：</span><input id="value">	
	</div>
	<input type="button" name="button" id="button" value='提交測試' style="margin-left: 30px;">
</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
		});
		$("#button").click(function () {
	  		$.post('/testemail', function (data) {
	  			
	  		}, 'json');
		})
	});
</script>
</html>
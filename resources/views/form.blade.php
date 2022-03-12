<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	 
	 <div class="checkbox">
 
<input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">

</div>
	<div class="container">
	<form id="frm">

	@csrf
		Name:<input type="text" name="name">
		Email:<input type="text" name="email">
             <input type="submit" name="submit" id="formsubmit">
		
	</form>

                        <div id="message" class="alert alert-success" role="alert">
                            
                        </div>
                   
</div>
</body>
</html>
<script type="text/javascript">
	$('#frm').submit(function(e){
       e.preventDefault();
       $.ajax({

       	url:"{{url('form_submit')}}",
       	data:$('#frm').serialize(),
       	type:'post',
       	success:function(result){
       		$('#message').html(result.msg);
       		$('#frm')['0'].reset();
       	}
       })
	});
</script>
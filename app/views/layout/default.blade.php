<!DOCTYPE HTML>
<html>
	<head>
		@yield('css')
		 <title>
        @section('title')
        Habitech Dashboard
        @show
	    </title>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	    {{ HTML::style('assets/css/bootstrap.min.css') }}
	    {{ HTML::style('assets/css/tabs.css'); }}

	    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
		{{ HTML::script('assets/js/tabs.js'); }}
		{{ HTML::script('assets/js/bootstrap.js') }}
		{{ HTML::script('assets/js/bootstrap-datepicker.js') }}

	</head>

	<body>
		@yield('content')
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script>
		  $(function() {
		    $( "#datepicker" ).datepicker();
		  });
		</script>
	</body>

</html>
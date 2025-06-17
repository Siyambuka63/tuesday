<!DOCTYPE html>
<html lang="en-US" >
    <head>
        <meta charset="UTF-8" />
        <title> {{ $task['title'] }} </title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Load Stile -->
        <link rel="stylesheet" href="{{ asset('stylesheet/edittask.css') }}">

        <!-- Meta SEO -->
		<meta name="keyword" content="" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="canonical" href="" />
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        @include('partials._header')
		
        @include('partials._tasks')

        @include('partials._task')
    </body>
</html>

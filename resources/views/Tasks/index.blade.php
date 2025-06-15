<!--/*****************
*
*    Theme Name: ''
*    Theme URL: ''
*    Author: Mohammad Rahmani
*    Author URL: http://mohammadrahmani.com
*
*/-->

<!DOCTYPE html>
<html lang="en-US" >
    <head>
        <meta charset="UTF-8" />
        <title> Task </title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Load Stile -->
        <link rel="stylesheet" href="{{ asset('stylesheet/min.css') }}">

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
        <!-- Start Header -->
        <header id="main-header">
            <div class="account">
                <figure>
                    <div class="avatar">
                        <img src = "{{ asset('images/avatar/man/23.jpg')}}" alt="" class="w-100 h-100">
                        <div class="effect"></div>
                    </div>
                    <figcaption>
                        <h2 class="text-md">Mohammad Rahmani</h2>
                    </figcaption>
                </figure>
            </div>
            <div class="search">
                <span class="icon flaticon-search color-fff"></span>
                <input type="text" placeholder="Search" name="search" id="search">
            </div>
        </header>
        @include('partials._tasks')
    </body>
</html>

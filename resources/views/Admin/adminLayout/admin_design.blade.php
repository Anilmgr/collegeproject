<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nepathya - Dashboard</title>

<link href="{{ asset('css/backend_css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/backend_css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ asset('css/backend_css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/backend_css/bootstrap-table.css') }}" rel="stylesheet">

<script src="{{ asset('js/backend_js/lumino.glyphs.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">

</head>

<body>
	
	@include('Admin.adminLayout.admin_header')
	@include('Admin.adminLayout.admin_sidebar')	
	@yield('content')	

	<script src="{{ asset('js/backend_js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/backend_js/chart.min.js') }}"></script>
	<script src="{{ asset('js/backend_js/chart-data.js') }}"></script>
	<script src="{{ asset('js/backend_js/easypiechart.js') }}"></script>
	<script src="{{ asset('js/backend_js/easypiechart-data.js') }}"></script>
	<script src="{{ asset('js/backend_js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('js/backend_js/bootstrap-table.js') }}"></script>	
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	 	<script>
			 CKEDITOR.replace( 'article-ckeditor1' );
	 	</script>

 	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	 	<script>
			 CKEDITOR.replace( 'article-ckeditor2' );
	 	</script>

</body>

</html>

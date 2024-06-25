<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RTP">
    <meta name="author" content="RTP">
     <title>RTP PROPERTIES NC INC Property Management</title>

    <!-- Favicons-->
   <link rel="shortcut icon" href="{{ asset('landing/img/favicon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('landing/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('landing/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('landing/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('landing/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('landing/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('landing/css/vendors.css')}}" rel="stylesheet">

	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('revolution-slider/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution-slider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution-slider/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution-slider/css/navigation.css')}}">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('landing/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/css/listing.css')}}" rel="stylesheet">
    <!-- ALTERNATIVE COLORS CSS -->
    <link href="{{ asset('landing/css/testmonials.css')}}" rel="stylesheet">
<style>
.hero-button{
position: relative;
    background: #fff;
}
.hero-buttons{
position: relative;
    top: -33px;
    background: #f8f8f8;
}
.hero-btns{
    padding: 20px;
}
.text-hero{
margin-bottom:0rem !important;
}
</style>
</head>
<body>
	<div id="page">
<!-- whatsapp start -->
	<div class="floating_btn">
		<a target="_blank" href="https://wa.link/85mh0n">
		  <div class="contact_icon">
	     	<i class="fa-icon-whatsapp"></i>
		  </div>
		</a>
	  </div>
      @include('landing/include/header')
	<!-- whatsapp End-->
    <div id="app">

        <main>
            @yield('content')
        </main>
    </div>


<style>
    .success1 {
        border: 2px solid #5cb85c;
        color: #5cb85c;
        display: none;
        font-weight: bold;
        margin-bottom: 20px;
        padding: 10px;
        margin-top: 15px;
        float: left;
    }
    </style>
    
    </body>
    </html>
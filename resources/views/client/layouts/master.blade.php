<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="shortcut icon" href="utehy.ico" />
	<title>@yield('title')</title>
   <meta name="description" content="@yield('meta_desc')"/>
   <meta name="news_keywords" content="@yield('meta_key')" />
   <meta name="original-source" content="@yield('links')" />
   <meta name="robots" content="noodp"/>
   <meta property="og:locale" content="en_US" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('meta_desc')" />
   <meta property="og:url" content="@yield('links')" />
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	@include('client.includes.css')
</head>
<body>
   @include('client.includes.header')
   @yield('content')
  	@include('client.includes.footer')
	
   </body>
   @include('client.includes.js')
   @yield('scripts')
</html>`
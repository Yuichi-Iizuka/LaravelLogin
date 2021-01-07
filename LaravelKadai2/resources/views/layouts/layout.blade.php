<!DOCTYPE html>
<html lang="ja"> 
<!-- 親レイアウト  -->
<html>

<head>
  <title>@yield('title')</title>

</head>
@yield('menubar')


<body>
  <h1>@yield('title')</h1>
 
@yield('content')

</body>

</html>
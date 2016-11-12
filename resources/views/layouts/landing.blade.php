<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>vCloudOneMGMT</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('/css/vcloudone-mgmt-landing.css') }}" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
            <!--
            <li>
                <a href="#">
                    <i class="fa fa-facebook-square"></i>
                    Like
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-github"></i>
                    Code
                </a>
            </li>
            -->
            @if (Auth::guest())
                <li>
                    <a href="/auth/azure">
                        <i class="fa fa-cloud"></i>
                        Login
                    </a>
                </li>
            @else
                <li>
                    <a href="/home">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            @endif
       </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('img/clouds.jpg')">

    <div class="cover black" data-color="black"></div>

<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo">
            vCloudOneMGMT
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->

        <div class="content">
            <h4 class="motto">One app to rule them all.</h4>
            <div class="login">
                <a href="/auth/azure" class="btn btn-custom btn-lg btn-fill">Get Started</a>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="container">
             Made with <i class="fa fa-heart heart"></i> by <a href="http://github.com/wpouseele">Wim Pouseele</a>. Powered by <a href="http://www.conxion.be">ConXioN</a>.
      </div>
    </div>
 </div>
</body>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>
</html>
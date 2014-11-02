<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>

            <div class="navbar navbar-inverse">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">RightRecipe</a>
          </div>
          <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/recipe/top">เมนูยอดนิยม</a></li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">หมวดหมู่อาหาร <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/category/soup">ต้ม</a></li>
                  <li><a href="#">ผัด</a></li>
                  <li><a href="#">ทอด</a></li>
                  <li><a href="#">นึ่ง</a></li>
                  <li><a href="#">ปิ้งย่าง</a></li>
                  <li><a href="#">อื่นๆ</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ค้นหาเมนู <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">ค้นหาจากชื่ออาหาร</a></li>
                  <li><a href="#">ค้นหาจากวัตถุดิบ</a></li>
               </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              @if(Auth::guest())
                <li><a href="/signup">สมัครสมาชิก</a></li>
                <li><a href="/signin">Sign in</a></li>
              @else
                <li><a href="/user/index/{{Auth::user()->id}}">ข้อมูลส่วนตัว</a></li>
                <li><a href="/signout">Sign out</a></li>
              @endif
            </ul>
          </div>
</div>

<div class="container">
    @yield('body')
</div>
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="/js/bootstrap.min.js"></script>
</body>
<footer>
@yield('footer')
</footer>
</html>
<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" initial-scale="1">
    <title>Admin | Home</title>


    {{--<script src="script/js/jquery.min.js" type="text/javascript"></script>--}}
    {{--<link href="style/css/bootstrap.min.css" rel="stylesheet" media="screen" title="no title" charset="utf-8">--}}

    {{--<script src="script/js/bootstrap.min.js" type="text/javascript"></script>--}}


    {{--<link href="style/css/font-awesome.min.css" rel="stylesheet" media="screen" title="no title" charset="utf-8">--}}
    {{--<link href="side.css" rel="stylesheet" type="text/css" media="screen" title="no title" charset="utf-8">--}}

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

</head>
<body>

<div class="block"  id="block" onclick="toggler()"></div>

<div class="header">
    <h2 class="centry">Admin panel</h2>
</div>

<div class="container">
<div class="sidebar">

    <h3 onclick="toggler()" class="pull-right menubtn"><i  class="fa fa-list"></i></h3>

    <div class="sidenav">

        <ul class="menu-list">

            <div class="box">
                <div class="searchbox">
                    <span class="icone"><i class="fa fa-search s-ic" aria-hidden="true"></i></span>
                    <input type="search" id="search" placeholder="Search..." />
                </div>
            </div>


            <div  class="dash">Dashbord</div>

            <li data-toggle="collapse" data-target=".user" class=" collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>User<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="user collapse">
                    <li><a href="{{route('admin.users.index')}}">All user</a></li>
                    <li><a href="{{route('admin.users.create')}}">Create User</a></li>

                </ul>

            <li data-toggle="collapse" data-target=".post" class=" collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>Post<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="post collapse">
                    <li><a href="{{route('admin.posts.index')}}">All Post</a></li>
                    <li><a href="{{route('admin.posts.create')}}">Create Post</a></li>

                </ul>

            <li data-toggle="collapse" data-target=".categoris" class=" collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>Categoris<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="categoris collapse">
                    <li><a href="{{route('admin.categoris.index')}}">All Categoris</a></li>
                    <li><a href="{{route('admin.categoris.create')}}">Create Categirs</a></li>

                </ul>

            <li data-toggle="collapse" data-target=".media" class=" collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>Media<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="media collapse">
                    <li><a href="#"></a>1</li>
                    <li><a href="#"></a>2</li>
                    <li><a href="#"></a>3</li>
                </ul>

            <li data-toggle="collapse" data-target=".chart" class=" collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>Chart<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="chart collapse">
                    <li><a href="#"></a>1</li>
                    <li><a href="#"></a>2</li>
                    <li><a href="#"></a>3</li>
                </ul>

            <li data-toggle="collapse" data-target=".table" class=" collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>table<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="table collapse">
                    <li><a href="#"></a>1</li>
                    <li><a href="#"></a>2</li>
                    <li><a href="#"></a>3</li>
                </ul>


            <li data-toggle="collapse" data-target=".form" class="active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>Forms<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="form collapse">
                    <li><a href="#"></a>1</li>
                    <li><a href="#"></a>2</li>
                    <li><a href="#"></a>3</li>
                </ul>

            <li data-toggle="collapse" data-target=".ui" class=" collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>Ui Elements<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="ui collapse">
                    <li><a href="#"></a>1</li>
                    <li><a href="#"></a>2</li>
                    <li><a href="#"></a>3</li>
                </ul>

            <li data-toggle="collapse" data-target=".multilevel" class=" collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg menu-ic"></i>Multi-Dropdown<i class="fa fa-chevron-left pull-right" aria-hidden="true"></i></a>
                <ul class="multilavel collapse">
                    <li><a href="#"></a>1</li>
                    <li><a href="#"></a>2</li>
                    <li><a href="#"></a>3</li>
                </ul>
        </ul>

    </div>

</div>

@yield('content')
</div>

{{--<script type="text/javascript" src="script/js/jquery.js"></script>--}}
{{--<script type="text/javascript" src="script/js/bootstrap.js"></script>--}}

<script src="{{asset('js/main.js')}}"></script>

<script type="text/javascript">
    function toggler()
    {
        $('.sidebar').toggleClass('active');
        $('.block').toggleClass('active');
    }
</script>




</body>
</html>
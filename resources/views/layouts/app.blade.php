@inject('helper', 'App\Services\Helper')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{$helper::config('WEB_SITE_DESCRIPTION')}} - @yield('description')">
    <meta name="keyword" content="{{$helper::config('WEB_SITE_KEYWORDS')}} - @yield('keyword')">
    <title>{{$helper::config('WEB_SITE_NAME')}} - @yield('title')</title>
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/swiper.min.css">
  </head>
  <body>
    @section('header')
    <header class="met-head" m-id="48" m-type="head_nav">
        <nav class="navbar navbar-default box-shadow-none head_nav_met_16_9_48">
            <div class="nav-top">
                <div class="container">
                    <div class="row">
                        <div class="clearfix">
                            <!-- logo -->
                            <div class="navbar-header pull-xs-left">
                                <a href="" class="met-logo pull-xs-left" title="{{$helper::config('WEB_SITE_NAME')}}">
                                    <div class="">
                                        <img src="{{$helper::config('WEB_SITE_LOGO')}}" alt="{{$helper::config('WEB_SITE_NAME')}}" class="hidden-sm-down">
                                    </div>
                                </a>
                            </div>
                            <!-- logo -->
                            <button type="button" class="navbar-toggler hamburger hamburger-close collapsed p-x-5 head_nav_met_16_9_48-toggler" data-target="#head_nav_met_16_9_48-collapse" data-toggle="collapse">
                                <span class="sr-only"></span>
                                <span class="hamburger-bar"></span>
                            </button>
                            <!-- 会员注册登录 -->
                            <!-- icon -->
                            <div class="eco_header pull-right hidden-xs hidden-sm">
                                <div class="eco_header_tel">
                                    <p class="tel1 m-b-0"><img src="/images/head_certification.jpg"></p>
                                    <p class="tel2  m-b-0 m-t-20">服务热线: 0515-87294098</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 导航 -->
            <div class="fullnav collapse navbar-collapse navbar-collapse-toolbar p-0" id="head_nav_met_16_9_48-collapse">
                <div class="container">
                    <div class="row flex-navlist">
                        <ul class="nav navbar-nav navlist clearfix flex fixedw">
                            @navs($nav,0)
                            @if (isset($nav['_child']))
                            <li class="nav-item dropdown m-l-0">
                                <a href="img/" target="_self" title="{{ $nav['title'] }}" class="nav-link dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">
                                    <span style="">{{ $nav['title'] }}</span></a>
                                <div class="dropdown-menu animate two-menu" style="">
                                    <a href="{{ $nav['url'] }}" target="_self" title="全部" class="dropdown-item nav-parent hidden-lg-up">全部</a>
                                    @foreach($nav['_child'] as $childKey=>$childValue)
                                    <a class="dropdown-item hassub" href="{{ $childValue['url'] }}"><span style="">{{ $childValue['title'] }}</span></a>
                                    @endforeach
                                </div>
                            </li>
                            @else
                            <li class="nav-item">
                                <a href="/" title="网站首页" class="nav-link">{{ $nav['title'] }}</a>
                            </li>
                            @endif
                            @endnavs

                        </ul>
                    </div>
                    <!-- 导航 -->
                </div>
            </div>
        </nav>
    </header>
    @show
    <main role="main">
        @yield('content')
    </main>
    @section('footer')
    <footer class="foot_info_met_35_3_4 met-foot  border-top1" m-id="4" m-type="foot">
        <div class="footer_widget_area">
            <div class="container">
                <div class="down_L col-lg-6  col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-3 col-md-3 col-xs-6 list">
                        <h4 class="font-size-16 m-t-0 list">
                            <a href="about/" title="关于我们">    <span style="">关于我们</span></a>
                        </h4>
                        <ul class="ulstyle m-b-0">
                            @categorys($category,'ARTICLE',1)
                            <li>
                                <a href="about/show.php?id=85" title="公司简介" target="_self">    <span style="">公司简介</span></a>
                            </li>
                            @endcategorys
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-6 list">
                        <h4 class="font-size-16 m-t-0 list">
                            <a href="product/" title="产品中心">    <span style="">产品中心</span></a>
                        </h4>
                        <ul class="ulstyle m-b-0">
                            <li>
                                <a href="product/product.php?class2=89" title="真空吸盘" target="_self">    <span style="">真空吸盘</span></a>
                            </li>
                            <li>
                                <a href="product/product.php?class2=90" title="压力传感器" target="_self">    <span style="">压力传感器</span></a>
                            </li>
                            <li>
                                <a href="product/product.php?class2=91" title="真空切换阀" target="_self">    <span style="">真空切换阀</span></a>
                            </li>
                            <li>
                                <a href="product/product.php?class2=92" title="真空过滤器" target="_self">    <span style="">真空过滤器</span></a>
                            </li>
                            <li>
                                <a href="product/product.php?class2=93" title="真空发生器" target="_self">    <span style="">真空发生器</span></a>
                            </li>
                            <li>
                                <a href="product/product.php?class2=94" title="气缸接口" target="_self">    <span style="">气缸接口</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-6 list">
                        <h4 class="font-size-16 m-t-0 list">
                            <a href="download/" title="技术服务">    <span style="">技术服务</span></a>
                        </h4>
                        <ul class="ulstyle m-b-0">
                            <li>
                                <a href="about2/" title="服务体系" target="_self">    <span style="">服务体系</span></a>
                            </li>
                            <li>
                                <a href="download/download.php?class2=96" title="技术指南" target="_self">    <span style="">技术指南</span></a>
                            </li>
                            <li>
                                <a href="download/download.php?class2=97" title="CAD数据" target="_self">    <span style="">CAD数据</span></a>
                            </li>
                            <li>
                                <a href="feedback/" title="信息反馈" target="_self">    <span style="">信息反馈</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-6 list">
                        <h4 class="font-size-16 m-t-0 list">
                            <a href="news/" title="新闻资讯">    <span style="">新闻资讯</span></a>
                        </h4>
                        <ul class="ulstyle m-b-0">
                            <li>
                                <a href="news/news.php?class2=99" title="公司新闻" target="_self">    <span style="">公司新闻</span></a>
                            </li>
                            <li>
                                <a href="news/news.php?class2=100" title="公司展会" target="_self">    <span style="">公司展会</span></a>
                            </li>
                            <li>
                                <a href="news/news.php?class2=101" title="行业资讯" target="_self">    <span style="">行业资讯</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="down_R col-lg-6  col-md-12 col-sm-12 col-xs-12">
                    <div class="r_fist col-lg-5">
                        <div class="r_span">
                            <div class="top1">
                                <p class="p1">气动元件有限公司</p>
                                <p class="p2">联系电话：</p>
                                <p class="p3">0731-000-000</p>
                            </div>
                        </div>
                        <div class="fx">
                            <span class="span_lf"> </span>
                        </div>
                    </div>
                    <div class="r_last col-lg-7">
                        <div class="er_fist">
                            <img src="https://images.mituo.cn/mui891/upload/202006/1592366280.jpg" alt="$ui.er_descfistr">
                            <p class="edesc">关注微信公众号</p>
                        </div>
                        <div class="er_lasr">
                            <img src="https://images.mituo.cn/mui891/upload/202006/1592367340.jpg" alt="$ui.er_desclast">
                            <p class="edesc">添加微信小程序</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 底部信息 -->
            <div class="footer_copy_right">
                <div class="container mydibucontainer">
                    <div class="met_lang_all mymet_lang_all">
                        <!-- 语言 -->
                        <!-- 简繁体 -->
                    </div>
                    <p class="my_p">{{$helper::config('WEB_SITE_COPYRIGHT')}}</p>
                    <p class="my_p">
                        @links($link)<a href="{{$link['url']}}">{{$link['title']}}</a>
                    @endlinks</p>
                    <p></p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="blog-footer">
        <p>{!!$helper::config('WEB_SITE_COPYRIGHT')!!} {!!$helper::config('WEB_SITE_SCRIPT')!!}</p>
    </footer>
    @show
    <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
    @section('script')
    @show
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $('.dropdown-toggle').dropdown()
    </script>

    @show
  </body>
</html>
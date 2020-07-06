@inject('helper', 'App\Services\Helper')
<!-- 引入模板布局 -->
@extends('layouts.app')
<!-- 定义标题 -->
@section('title', '官网')
@section('keywords', '官网')
@section('description', '官网')

@section('content')
<div class="swiper-container banner_met_16_3_49box     ">
    <div class="swiper-wrapper banner_met_16_3_49 page-bg" m-id="49" m-type="banner" style="height: auto;">
        @banners($banner,'IndexBanner')
        <div class="swiper-slide">
            @if ($banner['url'])
            <a href="{{$banner['url']}}"><img class="cover-image" src="{{ $helper::getPicture($banner['cover_id']) }}" alt=""></a>
            @else
            <img class="cover-image" src="{{ $helper::getPicture($banner['cover_id']) }}" alt="">
            @endif
            <div class="banner-text p-4" data-position="p-4|p-4" met-imgmask="">
                <div class="container">
                    <div class="banner-text-con">
                        <div class="text-con">
                            <h4 class="animation-slide-top font-weight-500 m-t-0     " style="color:;font-size:px;"></h4>
                            <p class="animation-slide-bottom m-b-0     " style="color:;font-size:px;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endbanners
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="met-index-case">
        <div class="container">
            <div class="case" id="case" role="toolbar">
                <ul class="sliderbox row  slick-dotted slick-vertical">
                    <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
                    <div aria-live="polite" class="slick-list draggable" style="height: 28px;"><div class="slick-track" style="opacity: 1; height: 112px; transform: translate3d(0px, -28px, 0px);" role="listbox"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 1144px;" tabindex="-1"><div>
                                    <li class="a-list" style="width: 100%; display: inline-block;"><a href="../news1/shownews.php?id=8" tabindex="-1">五金配件行业迎来挑战</a></li></div>
                                <div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=7" tabindex="-1">五金选购有窍门</a>
                                    </li></div><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=6" tabindex="-1">厕所怎么装修 风水破解大全</a>
                                    </li></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1144px;" tabindex="-1" role="option" aria-describedby="slick-slide00"><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=11" tabindex="0">未来卫浴五金依然充满潜力</a>
                                    </li></div><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=10" tabindex="0">电子商务促进出口 广东五金冲向欧洲市场</a>
                                    </li></div><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=9" tabindex="0">五金行业竞争将呈现六大特点</a>
                                    </li></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1144px;" tabindex="-1" role="option" aria-describedby="slick-slide01"><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=8" tabindex="-1">五金配件行业迎来挑战</a>
                                    </li></div><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=7" tabindex="-1">五金选购有窍门</a>
                                    </li></div><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=6" tabindex="-1">厕所怎么装修 风水破解大全</a>
                                    </li></div></div><div class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" style="width: 1144px;" tabindex="-1"><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=11" tabindex="-1">未来卫浴五金依然充满潜力</a>
                                    </li></div><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=10" tabindex="-1">电子商务促进出口 广东五金冲向欧洲市场</a>
                                    </li></div><div><li class="a-list" style="width: 100%; display: inline-block;">
                                        <a href="../news1/shownews.php?id=9" tabindex="-1">五金行业竞争将呈现六大特点</a>
                                    </li>
                                </div></div></div></div><button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button><ul class="slick-dots" role="tablist" style="display: block;"><li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><button type="button" data-role="none" role="button" tabindex="0">2</button></li></ul></ul>
            </div>
        </div>
    </div>
</div>
<div class="product_list_met_16_14_47 met-index-body" m-id="47">
    <div class="container">
        <div class="title">
            <h3 class="animation-slide-top appear-no-repeat" data-plugin="appear" data-animate="slide-top" data-repeat="false">产品中心</h3>
        </div>
        <div class="nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate" data-plugin="tabs">
            <ul class="nav nav-tabs nav-tabs-solid flex flex-center">
                @goodsCategorys($gcategory,0)
                <li class="nav-item" role="presentation">
                    <a class="nav-link radius0" href="#list_{{$key}}" data-toggle="tab" aria-controls="list_{{$key}}" role="tab" aria-expanded="false" title="{{$gcategory['title']}}">
                        {{$gcategory['title']}}
                    </a>
                </li>
                @endgoodsCategorys
            </ul>
        </div>
        <div class="tab-content">
            @goodsCategorys($gcategory,0)
            <ul class=" blocks-xs-2 blocks-md-2 blocks-lg-4 blocks-xxl-4 no-space imagesize index-product-list tab-pane
            @if($key==0)
            active
            @endif
            animation-scale-up" id="all8" role="tabpanel" data-scale="300X400">
                <?php $subCategoryIDs = [];?>
                @goodsCategorys($subCategory,$gcategory['id'])
                <?php $subCategoryIDs[] = $subCategory['id'];?>
                @endgoodsCategorys
                @goods($good,$subCategoryIDs,8,0)
                <li class="p-r-10 m-b-10" data-type="list_14">
                    <div class="card card-shadow">
                        <figure class="card-header cover">
                            <a href="product/showproduct.php?id=17" title="{{$good['goods_name']}}" target="_self">
                                <img class="cover-image lazy" data-original="{{$good['cover_path']}}" alt="{{$good['goods_name']}}" src=""></a>
                        </figure>
                        <h4 class="card-title m-0 p-x-10 text-shadow-none font-szie-16 font-weight-300">
                            <a href="product/showproduct.php?id=17" title="{{$good['goods_name']}}" class="block text-truncate" target="_self">    <span style="">{{$good['goods_name']}}</span></a>
                            <p class="m-b-0 m-t-5 red-600"></p>
                        </h4>
                    </div>
                </li>
                @endgoods
            </ul>
            @endgoodsCategorys
        </div>
    </div>
</div>
<!-- /.container -->
<section class="news_list_met_11_3_60  text-xs-left" m-id="60">
    <div class="container">
        <div class="title-box clearfix">
            <div class="head">
                <h2 class="title" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">新闻资讯</h2>
                <p class="desc" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></p>
            </div>
            <ul class="tabs clearfix">
                @categorys($category,'ARTICLE',0)
                <li
                        @if($key == 0)
                        class="active"
                        @endif
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                    <a href="news/" title="{{$category['title']}}" target="_self"><h3>{{$category['title']}}</h3></a>
                </li>
                @endcategorys
            </ul>
        </div>
        <div class="img-news clearfix">
            <ul class="imgnews-list">
                @page($page,'aboutus')
                <li class="item-1">
                    <div class="img">
                        <a href="/page/detail/{{$page['id']}}" title="{{$page['title']}}" target="_self"><img alt="{{$page['title']}}" src="{{ $helper::getPicture($page['cover_ids']) }}" class="" style="display: inline;"></a>
                    </div>
                    <div class="text clearfix">
                        <div class="date">
                            <span class="day">{{date('d',strtotime($page['created_at']))}}</span>
                            <span class="year">{{date('Y-m',strtotime($page['created_at']))}}</span>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="/page/detail/{{$page['id']}}" title="{{$page['title']}}" target="_self">    <span style="">{{ $helper::msubstr($page['title'],0,30) }}</span></a>
                            </h3>
                            {{$helper::msubstr(strip_tags($page['content']),0,120)}}
                        </div>
                    </div>
                </li>
                @endpage
                @articles($article,'news-of-company',9,0,1)
                <li class="item-other item-2 clearfix" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                    <a href="/article/detail/{{$article['id']}}" title="{{$article['title']}}" target="_self">
                        <div class="text">
                            <h3 class="title" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <span style="">{{ $helper::msubstr($article['title'],0,30) }}</span>                                </h3>
                            <p class="m-y-0">{{ $helper::msubstr(strip_tags($article['content']),0,130) }}</p>
                            <!--{!!strip_tags($article['description'])!!}-->
                        </div>
                        <div class="date">
                            <span class="day">{{date('d',strtotime($article['created_at']))}}</span>
                            <span class="year">{{date('Y-m',strtotime($article['created_at']))}}</span>
                        </div>
                    </a>
                </li>
                @endarticles
            </ul>
        </div>
        <a href="news/" title="新闻资讯" target="_self" class="btn-more">
            查看更多
        </a>
    </div>
</section>
<div class="contact_met_35_1_58 text-xs-center met-index-body" m-id="58" m-type="nocontent">
    <div class="container">
        <div class="inquiryMain clearfix">
            <div class="left ">
                <h3 class="tit">为你提供优质的阀门产品</h3>
                <ul class="list clearfix">
                    <li>针型阀、阀组、管件</li>
                    <li>工艺阀门、过滤器</li>
                    <li>特种阀门</li>
                    <li>其他定制产品</li>
                </ul>
            </div>
            <div class="right ">
                <div class="zx clearfix">
                    <img src="https://images.mituo.cn/mui891/upload/202006/1592462051.png" alt="咨询电话">
                    <p>咨询电话</p>
                </div>
                <a href="tel:0731-000-0000"><div class="tel">0515-87294098</div></a>
                <a href="feedback/" target="_blank"><div class="btn">留言咨询</div></a>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- 自定义脚本 -->
@section('script')
<script src="/js/swiper.min.js"> </script>
<script src="/js/jquery.lazyload.min.js"> </script>

<script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var $original = $('[data-original]');
<!--    if ($original.length) {-->
        $original.lazyload()
<!--    }-->
</script>
@endsection
@inject('helper', 'App\Services\Helper')
<!-- 引入模板布局 -->
@extends('layouts.app')
<!-- 定义标题 -->
@section('title', $category->title)
@section('keywords', $category->description)
@section('description', $category->description)

@section('content')
<div class="banner_met_36_4_62 page-bg" m-id="62" m-type="banner">
    <div class="container" data-count="1">
        @banners($banner,'NewsBanner')
        <img class="cover-image" src="{{ $helper::getPicture($banner['cover_id']) }}" width="100%">
        @endbanners
    </div>
</div>
<div class="location_met_16_1_13 met-crindex_cnumbs" m-id="13">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb m-b-0 subcolumn-crumbs">
                <li class="breadcrumb-item">
                    <a href="/" title="网站首页"><em class="icon fa fa-home"></em> 网站首页</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/article/list/{{$category['id']}}" title="{{$category['title']}}" class="">{{$category['title']}}</a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="news_list_page_met_83_1_53 met-news">
    <div class="container popular-product right">
        <!-- sidebar -->
        <div class="col-md-9 met-news-body">
            <div class="row">
                <!-- /sidebar -->
                <div class="main-content" m-id="53">
                    <ul class="met-pager-ajax imagesize" data-scale="500x">
                        @foreach($articles as $key => $article)
                        <li class="li1">
                            <a href="/article/detail/{{$article->id}}" title="{{$article->title}}" target="_self" class="clearfix">
                                <div class="img-box">
                                    <img src="{{ $helper::getPicture($article['cover_ids']) }}" alt="{{$article->title}}">
                                </div>
                                <div class="right-content">
                                    <h3 class="content-title">    <span style="">{{ $helper::msubstr($article['title'],0,30) }}</span></h3>

                                    <p class="content-desc font-weight-200">{{ $helper::msubstr(strip_tags($article['content']),0,80) }}</p>

                                    <span class="content-time">{{date('Y-m',strtotime($article['created_at']))}}</span>
                                </div>

                            </a>
                        </li>
                        @endforeach
                    </ul>

                    <!-- 分页 -->
                    <div class="m-t-20 text-xs-center hidden-sm-down" m-type="nosysdata">
                        {{ $articles->appends(['name'=>$category->name])->links() }}
                    </div>
                    <div class="met_pager met-pager-ajax-link hidden-md-up" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" m-type="nosysdata" style="">
                        <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
                            <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- sidebar -->
            </div>
        </div>
        <!-- /sidebar -->

        <!--      -->
        <div class="floats col-md-3 eh-sidebar" style="overflow: hidden;">
            <div class="row">
                <aside class="sidebar_met_21_1_47 met-sidebar panel-body m-b-0" boxmh-h="" m-id="47" m-type="nocontent">
                    <h2 class="sidebar-tile head-bg     bgpic">
                        <a href="javascript:;" title="新闻资讯" class="    active" target="_self">
                            新闻资讯
                        </a>
                    </h2>
                    <ul class="sidebar-column list-icons">
                        @categorys($cate,'ARTICLE',3)
                        <li @if($cate['id'] == $category['id'])
                            class="active"
                            @endif>
                            <a href="/article/list/{{$cate['id']}}" title="{{$cate['title']}}" class="bars ">{{$cate['title']}}</a>
                        </li>
                        @endcategorys
                    </ul>
                </aside>
            </div>
        </div>

    </div>
</div>
  <!-- /.container -->
@endsection

<!-- 自定义脚本 -->
@section('script')
<script>
</script>
@endsection
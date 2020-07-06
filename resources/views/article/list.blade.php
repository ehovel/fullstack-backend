@inject('helper', 'App\Services\Helper')
<!-- 引入模板布局 -->
@extends('layouts.app')
<!-- 定义标题 -->
@section('title', $category->title)
@section('keywords', $category->description)
@section('description', $category->description)

@section('content')
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

                                    <p class="content-desc font-weight-200">{{ $helper::msubstr(strip_tags($article['content']),0,130) }}</p>

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
        <div class="floats col-md-3 col-xs-12" style="overflow: hidden;">
            <div class="">
                <div class="row">
                    <aside class="sidebar_met_21_1_47 met-sidebar panel-body m-b-0" boxmh-h="" m-id="47" m-type="nocontent">
                        <h2 class="sidebar-tile head-bg     bgpic">
                            <a href="../news/" title="新闻资讯" class="    active" target="_self">
                                新闻资讯
                            </a>
                        </h2>
                        <ul class="sidebar-column list-icons">
                            @categorys($category,'ARTICLE',0)
                            <li>
                                <a href="/category/list/{{$category['id']}}" title="{{$category['title']}}" class="bars ">{{$category['title']}}</a>
                            </li>
                            @endcategorys
                        </ul>
                    </aside>
                </div>
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
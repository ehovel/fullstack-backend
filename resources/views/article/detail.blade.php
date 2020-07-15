@inject('helper', 'App\Services\Helper')
<!-- 引入模板布局 -->
@extends('layouts.app')
<!-- 定义标题 -->
@section('title', $article->title)
@section('keywords', $article->description)
@section('description', $article->description)

@section('content')
<div class="location_met_16_1_13 met-crumbs" m-id="13">
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
<main class="news_list_detail_met_16_1_37 met-shownews animsition     left">
    <div class="container">
        <div class="row sm0">
            <div class="col-md-9 met-shownews-body" m-id="37">
                <div class="row">
                    <section class="details-title border-bottom1">
                        <h1 class="m-0">{{$article->title}}</h1>
                        <div class="info font-weight-300">
                            <span>{{date('Y-m-d',strtotime($article->created_at))}} &nbsp;&nbsp;</span>
                            <span>浏览：{{$article->view}}</span>
                        </div>
                    </section>
                    <section class="met-editor clearfix">
                        {!!$article->content!!}
                    </section>
                    <div class="met-page p-y-30 border-top1">
                        <div class="container p-t-30 ">
                            <ul class="pagination block blocks-2 text-xs-center text-sm-left">

                                <li class="page-item m-b-0 ">
                                    @if ($prev['id'])
                                    <a href="/article/detail/{{$prev['id']}}" title="{{$prev['title']}}" class="page-link text-truncate">
                                        上一篇                <span aria-hidden="true" class="hidden-xs-down">: {{$prev['title']}}</span>
                                    </a>
                                    @endif
                                </li>
                                <li class="page-item m-b-0 ">
                                    @if ($next['id'])
                                    <a href="/article/detail/{{$next['id']}}" title="{{$next['title']}}" class="page-link pull-xs-right text-truncate">
                                        下一篇                <span aria-hidden="true" class="hidden-xs-down">: {{$next['title']}}</span>
                                    </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--      -->
            <div class="floats col-md-3" style="overflow: hidden;">
                <div class="">
                    <div class="row">
                        <aside class="sidebar_met_21_1_49 met-sidebar panel-body m-b-0" boxmh-h="" m-id="49" m-type="nocontent">
                            <h2 class="sidebar-tile head-bg     bgpic">
                                <a href="../news/" title="新闻资讯" class="    " target="_self">新闻资讯</a>
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
                            <h2 class="sidebar-tile">
									<span>
										为你推荐									</span>
                            </h2>
                            <div class="side-tel">
                                <p style="white-space: normal; text-indent: 2em;"><span style="font-size: 14px;"></span></p>
                                <p style="white-space: normal; text-indent: 2em;"><span style="font-size: 14px;"></span></p>
                                <p style="white-space: normal; text-indent: 2em;"><span style="font-size: 14px;"></span></p>
                                <p style="white-space: normal; text-indent: 2em;"><span style="font-size: 14px;"></span></p>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
  <!-- /.container -->
@endsection

<!-- 自定义脚本 -->
@section('script')
<script>
</script>
@endsection
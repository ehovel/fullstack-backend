@inject('helper', 'App\Services\Helper')
<!-- 引入模板布局 -->
@extends('layouts.app')
<!-- 定义标题 -->
@section('title', $article->title)
@section('keywords', $article->description)
@section('description', $article->description)

@section('content')
<div class="banner_met_36_4_62 page-bg" m-id="62" m-type="banner">
    <div class="slick-slide" data-count="1">
        <img class="cover-image" src="https://images.mituo.cn/mui891/upload/202006/1592373944.jpg" srcset="../upload/thumb_src/x_767/1592373944.jpg 767w,../upload/202006/1592373944.jpg" sizes="(max-width: 767px) 767px" alt="专注中高端气动市场" data-height="0|0|0" data-fade="true" data-autoplayspeed="4000" style="height: auto;">
        <div class="banner-text p-4" data-position="p-4|p-4" met-imgmask="">
            <div class="container">
                <div class="banner-text-con">
                    <div>

                        <div class="m-t-15 animation-slide-bottom banner-btn">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="location_met_16_1_13 met-crumbs" m-id="13">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb m-b-0 subcolumn-crumbs">
                <li class="breadcrumb-item">
                    <a href="../" title="网站首页"><em class="icon wb-home"></em> 网站首页</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="../news/" title="新闻资讯" class="">新闻资讯</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="../news/news.php?class2=99" title="公司新闻" class="">公司新闻</a>
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
                                    <a href="" title="坚持以“以科技求发展，以质量求生存”为方针" class="page-link text-truncate">
                                        上一篇                <span aria-hidden="true" class="hidden-xs-down">: 坚持以“以科技求发展，以质量求生存”为方针</span>
                                    </a>
                                </li>
                                <li class="page-item m-b-0 ">
                                    <a href="../news/shownews.php?id=32" title="专业气动研发、生产、销售为一体的高科技企业" class="page-link pull-xs-right text-truncate">
                                        下一篇                <span aria-hidden="true" class="hidden-xs-down">: 专业气动研发、生产、销售为一体的高科技企业</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--      -->
            <div class="floats col-md-3 col-xs-12" style="overflow: hidden;">
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
                                <p style="white-space: normal; text-indent: 2em;"><span style="font-size: 14px;">气动元件有限公司</span></p><p style="white-space: normal; text-indent: 2em;"><span style="font-size: 14px;">服务热线：0731-0000-0000</span></p><p style="white-space: normal; text-indent: 2em;"><span style="font-size: 14px;">电子邮箱：email@email.mt</span></p><p style="white-space: normal; text-indent: 2em;"><span style="font-size: 14px;">官方网址：www.@@@.com</span></p>								</div>
                            <h2 class="sidebar-tile m-t-25">
								<span>
									搜索								</span>
                            </h2>
                            <div class="sidebar_met_21_1_49-search" data-placeholder="search">
                                <form method="get" class="page-search-form" role="search" action="../news/index.php?lang=cn" m-id="search_column" m-type="nocontent">
                                    <input type="hidden" name="lang" value="cn">
                                    <input type="hidden" name="stype" value="0">
                                    <input type="hidden" name="search" value="search"><input type="hidden" name="class1" value="83">
                                    <div class="input-search input-search-dark">
                                        <button type="submit" class="input-search-btn"><i class="icon wb-search" aria-hidden="true"></i></button>
                                        <input type="text" class="form-control input-lg" name="content" value="" placeholder="search">
                                    </div>
                                </form>		                   </div>
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
@inject('helper', 'App\Services\Helper')
<!-- 引入模板布局 -->
@extends('layouts.app')
<!-- 定义标题 -->
@section('title', $article->title)
@section('keywords', $article->description)
@section('description', $article->description)

@section('content')
  <div class="banner rounded">
  </div>
  <main role="main" class="container"> 
   <div class="row"> 
    <div class="col-md-12 blog-main"> 
     <h3 class="pb-4 mb-4 font-italic border-bottom"> {{$article->title}}</h3>
     <div class="blog-post">
        {!!$article->content!!}
     </div>
     <!-- /.blog-post -->
    </div>
    <!-- /.blog-main --> 
   </div>
   <!-- /.row --> 
  </main>
  <!-- /.container -->
@endsection

<!-- 自定义脚本 -->
@section('script')
<script>
</script>
@endsection
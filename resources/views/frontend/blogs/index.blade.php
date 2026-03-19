@extends('frontend.layouts.index')

@if(isset($article->meta_title) && $article->meta_title != '')
@section('title') {!!$article->meta_title!!} @endsection
@endif
@if(isset($article->meta_keyword) && $article->meta_keyword != '')
@section('keywords') {{$article->meta_keyword}} @endsection
@endif
@if(isset($article->meta_description) && $article->meta_description != '')
@section('description') {!!$article->meta_description!!} @endsection
@endif
@if(isset($article->page_index) && $article->page_index != '' && $article->page_index == 'on')
@section('robots') index @endsection
@else
@section('robots') noindex @endsection
@endif
@if(isset($article->canonical_url) && $article->canonical_url != '' && $article->canonical_url != null)
@section('canonical') {{$article->canonical_url}} @endsection
@endif
@section('content')
<section class="single-blog-page-banner sandk-common sandk-common-padding blog-page">
   <div class="container-md">
      <div class="row">
         <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
         </div>
      </div>
   </div>
</section>
<section class="blog-content-sec single-blog-content sandk-common sandk-common-padding">
   <div class="container-md single-blog-container">
      <div class="row">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 single-blog-box-sec-col left-side">
            <!--  -->
            <div class="single-blog-box-sec">
               @if(isset($article->image) && $article->image != null)
               @php
               $img = App\Models\MediaImage::select('name')->where('id', $article->image)->first();
               @endphp
               <img src="{{ asset('uploads/'.$img->name) }}" class="img-fluid" alt="{{$article->title}}" decoding="async" fetchpriority="high">
               @else
               <img src="{{ asset('front-assets/src/images/not-found-image.webp') }}" class="img-fluid" alt="{{$article->title}}" decoding="async" fetchpriority="high">
               @endif
               <!--  -->
               <?php 
                  $time = strtotime($article->published_at);
                  $newformat = date('jS \of F Y',$time);
                  
                  ?>
               <div class="row blog_social_icon">
                  <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 common-text">
                     @if(isset($article->published_at))
                     <p class="date-cat"><b>Posted On: {{ $newformat }}</b> <br><span>in for <u>{{ $article->category($article->category_id) }}</u></span></p>
                     <p class="author-name">By {{ isset($article->author_name->name) ? $article->author_name->name : '' }}</p>
                     @endif
                  </div>
                  <!-- <div class="col-sm-12 col-md-6 col-lg-6 text-end author_name">
                      <p>
                        <b>By {{ isset($article->author_name->name) ? $article->author_name->name : '' }}</b> <br>
                        <b>IN {{ $article->category($article->category_id) }}</b>
                     </p>
                  </div> -->
                  
               </div>
               <!--  -->
               <h4>{{$article->title}}</h4>
               {!! html_entity_decode($article->content) !!}
               <!--  @if($article->tag_id)
                  <div class="tags_data">
                      <span>{!! $article->tags_data($article->tag_id) !!}</span>
                  </div>
                  @endif -->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 mt-3 text-end blog-social-icons-last">
                 <!-- Twitter -->
                 <a href="https://twitter.com/intent/tweet?url={{URL::to('/blog/')}}/{{$article->slug}}&text={{$article->title}}" target="_blank" class="share-btn1 share-btn twitter">
                    <img src="{{ asset('front-assets/src/images/twitter-new.png') }}" class="img-fluid">
                 </a>
                 <!-- Google Plus -->
                 <!-- <a href="https://plus.google.com/share?url={{URL::to('/blogs/')}}/{{$article->slug}}" target="_blank" class="share-btn1 share-btn google-plus">
                    <img src="{{ asset('front-assets/src/images/google-plus-new.png') }}" class="img-fluid">
                 </a> -->
                 <!-- Facebook -->
                 <a href="https://www.facebook.com/sharer/sharer.php?u={{URL::to('/blog/')}}/{{$article->slug}}" target="_blank" class="share-btn1 share-btn facebook">
                    <img src="{{ asset('front-assets/src/images/facebook-new.png') }}" class="img-fluid">
                 </a>
                 <!-- LinkedIn -->
                 <a href="https://www.linkedin.com/shareArticle?mini=true&url={{URL::to('/blog/')}}/{{$article->slug}}&title={{$article->title}}" target="_blank" class="share-btn1 share-btn linkedin">
                    <img src="{{ asset('front-assets/src/images/linkedin-new.png') }}" class="img-fluid">
                 </a>
                 <!-- Email -->
                 <a href="https://api.whatsapp.com/send?text={{$article->title}} {{URL::to('/blog/')}}/{{$article->slug}}" target="_blank" class="share-btn1 share-btn email">
                    <img src="{{ asset('front-assets/src/images/whatsapp-new.png') }}" class="img-fluid">
                 </a>

                 
          </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 single-right-sec-col right-side">
            @php
            $p_count = 10;
            $posts = App\Models\Article::where('status', 1)->take($p_count)->latest()->get();
            @endphp  
            @if($posts->count() > 0)
            <div class="new-inner-featured-articles-sec">
               <h3>Recent Articles</h3>
               @foreach($posts as $val) 
               @php
               if(isset($val->published_at)){
               $time = strtotime($val->published_at);
               $newformat = date('F j\, Y',$time);
               }else{
               $time = strtotime($val->created_at);
               $newformat = date('F j\, Y',$time);
               }
               @endphp
               <h4><a href="{{url('/blog/'.$val->slug)}}/">{{$val->title}}</a></h4>
               <h5>{{$newformat}}</h5>
               @endforeach
            </div>
            @endif
         </div>
      </div>
   </div>
</section>
@endsection
@section('script')
<!-- Font Awesome 5 CDN -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
@endsection
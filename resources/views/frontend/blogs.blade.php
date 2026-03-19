@extends('frontend.layouts.index')

@section('title') {{ isset($meta_title) ? $meta_title : '' }} @endsection
@section('description') {{ isset($meta_description) ? $meta_description : '' }} @endsection

@section('content')

<section class="sandk-common sandk-common-padding blog-page">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="blog-title">Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="sandk-common sandk-common-padding blog-boxes-section">
    <div class="container-md">
        <div class="row">
            <input type='hidden' id='current_page' />
            <input type='hidden' id='show_per_page' />
            @if(isset($blogs) && count($blogs) > 0)
                @foreach($blogs as $item)
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 blog-box-sec">
                        <article>
                            <a href="{{route('front.single_blog_detail',[$item->slug])}}/" class="blog-img">
                                @if(isset($item->image) && $item->image != null)
                                    @php
                                        $img = App\Models\MediaImage::select('name')->where('id', $item->image)->first();
                                    @endphp
                                    <img src="{{asset('uploads/'.$img->name)}}" class="img-fluid" width="auto" height="auto">
                                @else
                                    <img src="{{ asset('front-assets/src/images/not-found-image.webp') }}" class="img-fluid" width="auto" height="auto">
                                @endif
                            </a>

                            <div class="blog-content">
                                <h4>
                                    <a href="{{route('front.single_blog_detail',[$item->slug])}}/">{{ isset($item->title) ? $item->title : '' }}</a>
                                </h4>
                                
                                @php
                                    if(isset($item->published_at)){
                                        $time = strtotime($item->published_at);
                                        $newformat = date('F j\, Y',$time);
                                    }else{
                                        $time = strtotime($item->created_at);
                                        $newformat = date('F j\, Y',$time);
                                    }
                                @endphp
                                
                                <div class="publish-date"><h5>{{$newformat}}</h5></div>
                                
                                <p>{{ isset($item->short_description) ? $item->short_description : ''}}</p>
                                <a href="{{route('front.single_blog_detail',[$item->slug])}}/" class="read-more-link common-btn">View Article</a>
                            </div>

                        </article>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
        
@endsection
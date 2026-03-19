
<section class="sandk-common sandk-common-padding blog-boxes-section home-page-blog-sec article-page-sec desktop-layout">
    <div class="container-md">
        <div class="row align-items-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @if(isset($blog_sec->blog_title) && $blog_sec->blog_title != '')
                    <h2>{{$blog_sec->blog_title}}</h2>
                    <h2 class="mobile-heading">{{$blog_sec->blog_title}}</h2>
                @endif
            </div>
        </div>
        <div class="row desktop-blog-sec">
            
            


             @if(isset($blogs) && count($blogs) > 0)
                @foreach($blogs->take(2) as $item)
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 blog-box-sec post-item">
                        <article>
                            <a href="{{route('front.single_blog_detail',[$item->slug])}}/" class="blog-img">
                                @if(isset($item->image) && $item->image != null)
                                    @php
                                        $img = App\Models\MediaImage::select('name')->where('id', $item->image)->first();
                                    @endphp
                                    <img src="{{asset('uploads/'.$img->name)}}" class="img-fluid" width="778" height="332" loading="lazy" alt="Blog Image">
                                @else
                                    <img src="{{ asset('front-assets/src/images/not-found-image.webp') }}" class="img-fluid" width="778" height="332" loading="lazy" alt="Blog Image">
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



<section class="sandk-common sandk-common-padding blog-boxes-section home-page-blog-sec article-page-sec mobile-layout">
    <div class="container-md">
        <div class="row align-items-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @if(isset($blog_sec->blog_title) && $blog_sec->blog_title != '')
                    <h2>{{$blog_sec->blog_title}}</h2>
                    <h2 class="mobile-heading">{{$blog_sec->blog_title}}</h2>
                @endif
            </div>
        </div>
        <div class="mobile-blog-sec blog-carousel owl-loaded owl-carousel owl-theme owl-center">
            
            @if(isset($blogs) && count($blogs) > 0)
               @foreach($blogs->take(3) as $item)
                    <div class="blog-box-sec post-item article-box">
                        <article>
                            <a href="{{route('front.single_blog_detail',[$item->slug])}}/" class="blog-img">
                                @if(isset($item->image) && $item->image != null)
                                    @php
                                        $img = App\Models\MediaImage::select('name')->where('id', $item->image)->first();
                                    @endphp
                                    <img src="{{asset('uploads/'.$img->name)}}" class="img-fluid" width="778" height="332" loading="lazy" alt="Blog Image">
                                @else
                                    <img src="{{ asset('front-assets/src/images/not-found-image.webp') }}" class="img-fluid" width="778" height="332" loading="lazy" alt="Blog Image">
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
                                <a href="{{route('front.single_blog_detail',[$item->slug])}}/" class="read-more-link new-cmn-btn"><span class="text">View article </span><svg viewBox="0 0 24 24" preserveAspectRatio="none" fill="currentColor" role="presentation" class="LinkSanity_Icon__JmAKV LinkSanity_Icon_right__9NwEP LinkSanity_Icon_triggered__kerGW" xmlns="http://www.w3.org/2000/svg"><path d="M16.6075 11.8572L13.255 8.40897L14.1388 7.5L19 12.5L14.1388 17.5L13.255 16.591L16.6075 13.1428H5V11.8572H16.6075Z"></path></svg></a>
                                
                            </div>

                        </article>
                    </div>
                @endforeach
            @endif
        </div>






        
    </div>
</section>
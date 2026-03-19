<section class="area-we-cover-sec sandk-common-padding sandk-common servicearea-newarea-sec">
    <div class="container-md">
        <div class="row align-items-center">
           

            <div class="col-12 right-side">
                @if(isset($serviceareas->title) && $serviceareas->title != '')
                    <h1>{{ $serviceareas->title ?: 'Areas We Serve' }}</h1>
                @endif
                {!! $serviceareas->description !!}
            </div>
        </div>
    </div>
</section>
<h1>{{$photos->first()->section->section_name}}</h1>

<div class="tz-gallery">
    <div class="row">
        @foreach($photos as $photo)
            <div class='col-sm-12 col-md-6 col-lg-4'>
                <div class="thumbnail img-thumbnail">
                    <a class='lightbox' href='{{Storage::url($photo->img_url)}}'>
                        <img src="{{Storage::url($photo->img_url)}}" alt='Park'>
                    </a>
                    <div class='caption'>
                        <h6><b>{{$photo->title}}</b></h6>
                        <p>{{$photo->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    baguetteBox.run('.tz-gallery');
</script>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($slider as $sliders)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ $sliders->image_path }}" alt="">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

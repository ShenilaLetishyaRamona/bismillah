<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="01"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="02"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="03"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="04"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="05"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ URL::asset('images/slider/default-slider.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Home</h5>
      </div>
    </div>
    @foreach($slider as $s)
    <div class="carousel-item">
      <img src="{{ asset('images/slider/'.$s->image) }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $s->title_slider }}</h5>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
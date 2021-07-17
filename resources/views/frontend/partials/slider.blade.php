<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    @foreach($slider as $s)
    <li data-target="#demo" data-slide-to="{{ $s->id }}"></li>
    @endforeach
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.w3schools.com/bootstrap4/chicago.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Home</h3>
      </div>   
    </div>
    @foreach($slider as $p)
    <div class="carousel-item">
      <img src="{{ asset('images/slider/'.$p->image) }}" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>{{ $p->title_slider }}</h3>
      </div>   
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
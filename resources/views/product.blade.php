@extends('master')

@section('content')

<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" >
          @foreach ($products as $item)
          <div class="carousel-item {{ $item['id'] == 1?'active':''}}">
             <a href="detail/{{ $item['id'] }}">
                <img class="" height="400px !important" src="{{ $item['gallery'] }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-info">{{ $item['name'] }}</h5>
                    <p class="text-info">{{ $item['description'] }}</p>
                </div>
             </a>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bg-info" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon bg-info" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div>
          <h3 class="text-center py-3">Trending Products</h3>
          <div class="row">
            @foreach($products as $item)

            <div class="col-sm-3">
                <a href="#exampleModal{{ $item['id'] }}" data-toggle="modal" style="text-decoration: none">
                    <img class="w-100" height="200" width="" src="{{ $item['gallery'] }}" alt="First slide">
                    <h4 class="text-info text-center">{{ $item['name'] }}</h4>
                </a>
            </div>

            <!-- Modal -->
  <div class="modal fade" id="exampleModal{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mx-auto" role="document" style="max-width: 75%!important">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $item['name'] }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
              <div class="row">
                <div class="col-sm-4">
                    <img src="{{ $item['gallery'] }}" height="200" width="300"><br>
                    <b> Price: {{ $item['price'] }} $</b><br>
                    <b> Category: {{ $item['category'] }} </b><br>
                    <b>Description:</b><br><br>
                    {{ $item['description'] }}

                </div>
                <div class="col-sm-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aut dolore eum sit quo saepe quod rem exercitationem! Atque fuga aperiam nemo inventore molestias ipsa consectetur molestiae repellat modi nobis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo hic dolor eos, earum quos possimus voluptatem. Voluptates quia distinctio, dolorem tempora ipsum debitis soluta. Ad iure eius quod accusantium aliquam!
                </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="/add_to_cart" method="POST">
              @csrf
            <input type="hidden" name="product_id" value={{ $item['id'] }}>
            <button type="submit" class="btn btn-success">Add to Cart</button>
          </form>
          <a class="btn btn-danger px-4" href="example2/{{ $item['id'] }}">Buy</a>
        </div>
      </div>
    </div>
  </div>

              @endforeach
          </div>
      </div>


</div>

@endsection

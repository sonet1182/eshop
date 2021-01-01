@extends('master')

@section('content')

<div class="container-fluid">


      <div>
          <h3 class="text-center py-3">Order Item</h3>
          <div class="row mx-auto" style="max-width: 80%!important">
            @foreach($products as $item)

            <div class="col-sm-4 my-auto">
                <a href="#exampleModal{{ $item->id }}" data-toggle="modal" style="text-decoration: none">
                    <img class="w-100" height="200" width="" src="{{ $item->gallery }}" alt="First slide">

                </a>
            </div>

            <div class="col-sm-4 my-auto">
                <a href="#exampleModal{{ $item->id }}" data-toggle="modal" style="text-decoration: none"><h4 class="text-info">{{ $item->name }}</h4></a>

                <div class="row">
                    <div class="col-4 my-auto"><b>Price:</b></div>
                    <div class="col-8"><span style="font-size: 30px"> {{ $item->price }} $</span></div>
                </div>

                <div class="row">
                    <div class="col-4"><b>Category: </b></div>
                    <div class="col-8">{{ $item->category }} $</div>
                </div>


            </div>

            <div class="col-sm-4 my-auto ml-auto p-3">
                <div class="row">
                    <div class="col-6 my-auto"><b>Shipping Address:</b></div>
                    <div class="col-6"> {{ $item->address }} </div>
                </div>

                <div class="row">
                    <div class="col-6"><b>Delivery status: </b></div>
                    <div class="col-6">{{ $item->status }} </div>
                </div>

                <div class="row">
                    <div class="col-6"><b>Payment status: </b></div>
                    <div class="col-6">{{ $item->payment_status }} </div>
                </div>

                <div class="row">
                    <div class="col-6"><b>Payment Method: </b></div>
                    <div class="col-6">{{ $item->payment_method }} </div>
                </div>
            </div>

            <!-- Modal -->
  <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 75%!important">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $item->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
              <div class="row">
                <div class="col-sm-4">
                    <img src="{{ $item->gallery }}" height="200" width="300"><br>
                    <b> Price: {{ $item->price }} $</b><br>
                    <b> Category: {{ $item->category }} </b><br>
                    <b>Description:</b><br><br>
                    {{ $item->description }}

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
              <input type="hidden" name="product_id" value={{ $item->id }}>
              <button type="submit" class="btn btn-success">Add to Cart</button>
            </form>
            <a class="btn btn-danger px-4" href="example2/{{ $item->id }}">Buy</a>
          </div>
      </div>
    </div>
  </div>

        @endforeach
        

          </div>



      </div>


</div>

@endsection

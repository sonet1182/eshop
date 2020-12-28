@extends('master')

@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Product Code</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Price($)</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category }}</td>
                <td>$ {{ $item->price }}</td>
            </tr>
            @endforeach

            <tr>
                <th scope="row">Amount</th>
                <td></td>
                <td></td>
                <td class="text-danger">$ {{ $total }} </td>
            </tr>

        </tbody>
      </table>
</div>



<div class="row mx-auto pt-5">

    <div class="col-sm-6">
        <h3 class="text-center pb-2">Cash Memo</h3>
    <table class="table table-striped">
        <tbody>

            <tr>
                <th scope="row">Amount</th>
                <td>$ {{ $total }} </td>
            </tr>


            <tr>
                <th scope="row">Tax</th>
                <td>$ 0 </td>
            </tr>

            <tr>
                <th scope="row">Delivery Charge</th>
                <td>$ 10</td>
            </tr>

            <tr>
                <th scope="row">Total</th>
                <td><b>$ {{ $total + 10 }}</b></td>
            </tr>

        </tbody>
      </table>
    </div>

    <div class="col-sm-6">
        <h3 class="text-center pb-2">Payment</h3>
        <form action="/sells" method="POST">
            @csrf
            <div class="form-group">
              <h5>Input your Address:</h5> <br>
              <textarea class="w-100" name="address" id="address" required></textarea>
            </div>
            <div class="form-group">
              <h5>Input Payment Method:</h5> <br>
              <input type="radio" value="cash" name="payment"><b>   Online Payment</b> <br>
              <input type="radio" value="cash" name="payment"><b>   EMI Payment</b> <br>
              <input type="radio" value="cash" name="payment"><b>   Cash On Delivery</b>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection

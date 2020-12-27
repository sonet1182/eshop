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

<div class="w-50 mx-auto pt-5">
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

@endsection

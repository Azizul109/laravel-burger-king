@extends('layouts.main')

@section('content')
    <section class="cart container py-5" style="margin-bottom: 80px">

        <div class="container mt-2">
            <h4>Order # {{ $order_id }}</h4>
        </div>
        <table class="pt-5">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>

            @foreach ($details_array as $detail)
                <tr>
                    <td>
                        <div>
                            <img src="{{ asset('images/' . $detail->product_image) }}" alt="">
                        </div>

                    </td>

                    <td>
                        <div class="product-info">
                            <div>
                                <p>{{ $detail->product_name }}</p>
                                <small><span></span></small>
                                <br>
                            </div>
                        </div>
                    </td>

                    <td>
                        <p>${{ $detail->product_price }}</p>
                        
                    </td>

            @endforeach
        </table>
    </section>
@endsection

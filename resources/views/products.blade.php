@extends('layoutcos')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="100" height="100">
                        <div class="caption">
                            <h6>{{ $product->name }}</h6>
                            <p>{{ (($product->description)) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }} RON</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection


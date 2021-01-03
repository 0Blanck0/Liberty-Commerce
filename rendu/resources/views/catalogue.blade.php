@extends('layouts.catalogue')

@include('header')

@include('cookie')

@section('content')

    @php
        $loop = 0;
    @endphp

    <div class="catalogue_container">

        <div class="catalogue_row">
            @foreach($prod as $prod)
            <div class="product_container">
                <div class="product_box">

                    <div class="product_header">

                        <div class="img_container">
                            <img src="{{ $prod->image_url }}" alt="Image du produit">
                        </div>

                        <div class="title_container">
                            <p class="title">{{ $prod->name }}</p>
                        </div>

                        <div class="price_container">
                            <p class="price">Price: {{ $prod->price }}€</p>
                        </div>

                    </div>

                    <div class="product_body">

                        <div class="btn_container">
                            <a href="{{ route('show_product', ['id'=>$prod->id]) }}" class="rainbow_btn" alt="Product page"></a>
                        </div>

                        <div class="btn_container">
                            <a href="#" class="rainbow_btn" onclick="addPanier({{ $prod->id }}, '{{ $prod->name }}', {{ $prod->price }})" alt="Buy quickly"></a>
                        </div>

                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>

@endsection

@include('footer')

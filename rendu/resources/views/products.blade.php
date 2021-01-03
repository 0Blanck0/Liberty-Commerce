@extends('layouts.products')

@include('header')

@include('cookie')

@section('content')

    @foreach($prod as $prod)
    <div class="product_container">

        <div class="content">

            <div class="product_main">

                <div class="img_container">
                    <img src="{{ $prod->image_url }}" alt="image du produit">
                </div>

                <div class="information_container">

                    <div class="product_name">
                        <h3 class="name">{{ $prod->name }}</h3>
                    </div>

                    <div class="price_container">
                        <p>Price: {{ $prod->price }}€</p>
                    </div>

                    <div class="max_amount_container">
                        <p>Total available: {{ $prod->nb_max }}</p>
                    </div>

                    <div class="category_container">
                        <p>Category: {{ $prod->categories }}</p>
                    </div>

                    <div class="description_container">
                        <p>Description:<br>{{ $prod->description }}</p>
                    </div>

                    <div class="amount_container">
                        <label>Amount</label><br>
                        <input type="number" name="product_amount">
                    </div>

                </div>

            </div>

            <div class="btn_container">
                <div class="btn_content_box">

                    <div class="btn_content">
                        <a href="#" class="rainbow_btn" alt="Add to panier"></a>
                    </div>

                    <div class="btn_content">
                        <a href="#" class="rainbow_btn" alt="Buy it now"></a>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endforeach

@endsection

@include('footer')

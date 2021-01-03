@extends('layouts.paniers')

@include('header')

@include('cookie')

@section('content')
<div class="panier_container">

    <div class="title_container">
        <h2 class="title">Panier</h2>
    </div>

    <div class="table_container">
        <table>

            <caption>Your current basket :</caption>

            <thead>
                <tr>
                    <td>Product name</td>
                    <td>Price</td>
                    <td>Amount</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody id="panier_container">
            </tbody>

        </table>
    </div>

    <div class="btn_container">
        <a href="{{ route('catalogue') }}" class="rainbow_btn" alt="Continue shopping"></a>
    </div>

    <div class="btn_container">
        <a type="submit" href="{{ route('buy') }}" class="rainbow_btn" alt="Buy now" id="buy_btn"></a>
    </div>

    <div class="btn_container">
        <a href="#" class="rainbow_btn" alt="Delete All" onclick="deletePanier()"></a>
    </div>

</div>

@endsection

@include('footer')

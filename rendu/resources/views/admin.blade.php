@extends('layouts.admin')

@include('header')

@include('cookie')

@section('content')
    <div class="form_container">
        <h2>Add new product</h2>

        <form method="POST" action="{{ route('save') }}">
            @csrf

            <div class="form_case">
                <input type="text" name="name" required="">
                <label>Product name</label>
            </div>

            <div class="form_case">
                <input type="text" name="description" required="">
                <label>Product description</label>
            </div>

            <div class="form_case">
                <input type="text" name="url" required="">
                <label>Product picture (URL)</label>
            </div>

            <div class="form_case">
                <input type="number" name="category" required="">
                <label>Product category id</label>
            </div>

            <div class="form_case">
                <input type="number" name="price" required="">
                <label>Product price</label>
            </div>

            <div class="form_case">
                <input type="number" name="ref" required="">
                <label>Product code</label>
            </div>

            <div class="form_case">
                <input type="number" name="max" required="">
                <label>Max elements</label>
            </div>

            <div class="btn_container">
                <button type="submit" class="submit_btn" alt="Add Product"></button>
            </div>

        </form>

    </div>
@endsection

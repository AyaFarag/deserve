@extends('user.index')

@section('usercontent')

<h1> single plan</h1>

<div class="container">
    <div class="container mb-5 mt-5">
        <div class="pricing card-deck flex-column flex-md-row mb-3">
            <div class="col col-md-4">
                <div class="card card-pricing text-center px-3 mb-4">
                        <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
                        <div class="bg-transparent card-header pt-4 border-0">
                            <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price">1000</span></h1>
                        </div>
                        <div class="card-body pt-0">
                            <ul class="list-unstyled mb-4">
                                <li>Up to 5 users</li>
                                <li>Basic support on Github</li>
                                <li>Monthly updates</li>
                                <li>Free cancelation</li>

                            </ul>
                            <a href="/cart" > <button type="button" class="btn btn-danger mb-3 btn-block">
                                Add To Cart
                            </button></a>
                            <button type="button" class="btn btn-outline-warning mb-3 btn-block">Add To Wishlist</button>
                        </div>
                </div>
            </div>








        </div>
    </div>
</div>


<div class="container">
    @include('user.plan')
</div>
@endsection

@extends('template')

@section('title')
    صفحه محصولات
@endsection


@section('content')


    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light border-bottom border-secondary">
                        <h5>محصولات </h5>
                    </div>

                    <div class="row p-4 ">
                        @foreach($products as $product )
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <a href="product/{{$product->id}}" class="card border-0 text-decoration-none">
                                <img src="{{$product->url}}" class="card-img-top p-3"
                                     alt="iPhone 13 Pro Max ">
                                <div class="card-body">
                                    <p class="card-text text-dark">
                                        {{$product->name}}
                                    </p>
                                </div>
                                <ul class="list-group border-0 ">
                                    <li
                                        class="list-group-item d-flex justify-content-end align-items-center border-0 ">
                                        <p class="fw-bolder"> {{$product->price}} تومان </p>
                                    </li>

                                </ul>
                            </a>
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>




@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card mt-5 shadow">
                   <h1 class="header m-3">Product Detail</h1>
                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            <tr>
                                    <td scope="row">{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->quantity }}</td>
                            </tr>
                        </tbody>
                      </table>

                      <a href="{{ route('product.index') }}" class="btn btn-outline-dark">
                        <i class="fa fa-arrow-left fa-lg"></i>
                    </a>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
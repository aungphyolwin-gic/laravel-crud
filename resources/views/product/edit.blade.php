@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card mt-5 shadow">
                   <h1 class="header m-3">Edit Product</h1>
                <div class="card-body m-3">
                    <div class="">
                            <form action="{{ route('product.update',$product->id) }}" method="post">
                                @csrf
                                @method("put")
                                <div class="mb-3 mt-3">
                                    <label  class="form-label">Name</label>
                                    <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Price</label>
                                    <input type="price" name="price" class="form-control  @error('price') is-invalid @enderror" value="{{ $product->price }}">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Size</label>
                                    <input type="size" name="size" class="form-control  @error('size') is-invalid @enderror" value="{{ $product->size }}">
                                    @error('size')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Quantity</label>
                                    <input type="quantity" name="quantity" class="form-control  @error('quantity') is-invalid @enderror" value="{{ $product->quantity }}">
                                    @error('quantity')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 btn-group container ">
                                    <a href="{{ route('product.index') }}" class="btn btn-outline-dark col ">
                                        <i class="fas fa-arrow-left fa-lg"></i>
                                    </a>
                                    <button class="btn btn-outline-success col">Update</button>
                                </div>
                            </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
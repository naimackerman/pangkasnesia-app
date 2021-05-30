@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Product') }}
    </h2>
@endsection

@section('content')
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>List Product</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered table-responsive-lg">
                        <tr>
                            <th>No</th>
                            <th>Owner ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Date Created</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $product->user_id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ date_format($product->created_at, 'jS M Y') }}</td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                                        <a href="{{ route('products.show', $product->id) }}" title="show">
                                            <i class="fas fa-eye text-success  fa-lg"></i>
                                        </a>

                                        <a href="{{ route('products.edit', $product->id) }}">
                                            <i class="fas fa-edit  fa-lg"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                            <i class="fas fa-trash fa-lg text-danger"></i>

                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
    

@endsection
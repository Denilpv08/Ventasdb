@extends('layouts/view')

@section('title', 'Delete Product')
    
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table table-bordered table-striped text-center">
                                            <thead>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Client</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->category->name }}</td>
                                                    <td>{{ $product->client->name }}</td>
                                                    <td>{{ $product->price }}</td>
                                                    <td>{{ $product->stock }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br><br>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('products.index')}}" class="btn btn-dark">Go Back</a>
                                            <button class="btn btn-danger">
                                            <span class="fas fa-trash-alt"></span> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
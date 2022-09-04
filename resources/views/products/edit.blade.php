@extends('layouts/view')

@section('title', 'Edit Product')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
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
                                        <form action="{{ route('products.update', $product->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required value="{{ $product->name }}">
                                            <label for="category">Category</label>
                                            <select name="category" id="category" class="form-select" required>
                                                @foreach ($category as $item)
                                                    @if ($item->id == $product->id)
                                                        <option selected value="{{ $item->id }}">{{ $item->name }}</option> 
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <label for="client">Category</label>
                                            <select name="client" id="client" class="form-select" required>
                                                @foreach ($client as $item)
                                                    @if ($item->id == $product->id)
                                                        <option selected value="{{ $item->id }}">{{ $item->name }}</option> 
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <label for="price">Price</label>
                                            <input type="number" name="price" id="price" class="form-control" required value="{{ $product->price }}">
                                            <label for="stock">Stock</label>
                                            <input type="number" name="stock" id="stock" class="form-control" required value="{{ $product->stock }}">
                                            <br><br>
                                            <a href="{{ route('products.index')}}" class="btn btn-dark">Go Back</a>
                                            <button class="btn btn-warning">
                                                <span class="fas fa-edit"></span> Update
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
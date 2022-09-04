@extends('layouts/view')

@section('title', 'Add Product')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
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
                                        <form action="{{ route('products.store')}}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                            <label for="category">Category</label>
                                            <select name="category" id="category" class="form-select" required>
                                                <option value="">Seletc an category</option>
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                            <label for="client">Client</label>
                                            <select name="client" id="client" class="form-select" required>
                                                <option value="">Seletc an client</option>
                                                @foreach ($client as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="price">Price</label>
                                            <input type="number" name="price" id="price" class="form-control" required>
                                            <label for="stock">Stock</label>
                                            <input type="number" name="stock" id="stock" class="form-control" required>
                                            <br>
                                            <a href="{{ route('products.index')}}" class="btn btn-dark">Go Back</a>
                                            <button class="btn btn-primary">
                                            <span class="fas fa-plus-square"></span> Add
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
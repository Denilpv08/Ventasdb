@extends('layouts/view')

@section('title', 'Edit Category')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
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
                                        <form action="{{ route('categories.update', $category->id )}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required value="{{ $category->name}}">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" cols="30" rows="5" class="form-control" required>{{ $category->description }}
                                            </textarea>
                                            <br>
                                            <a href="{{ route('categories.index')}}" class="btn btn-dark">
                                             Go Back
                                            </a>
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
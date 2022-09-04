@extends('layouts/view')

@section('title', 'Category')
    
@section('content')
    
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
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
                                        <br>
                                        <a href="{{ route('categories.create') }}" class="btn btn-primary" style="float: right">
                                        <span class="fas fa-plus-square"></span> Add New
                                        </a>
                                        <br><br>
                                        @if ($messeger = Session::get('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ $messeger }}
                                            </div>                            
                                        @endif
                                        <br>
                                        <table class="table table table-bordered table-striped text-center">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>
                                                        <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                                            <span class="fas fa-edit"></span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('categories.show', $item->id) }}" class="btn btn-danger btn-sm">
                                                            <span class="fas fa-trash-alt"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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


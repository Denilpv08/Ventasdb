@extends('layouts/view')

@section('title', 'Edit Client')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Client') }}
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
                                        <form action="{{ route('clients.update', $client->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required value="{{ $client->name }}">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" required value="{{ $client->last_name }}">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control" required value="{{ $client->phone }}">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required value="{{ $client->email }}">
                                            <br>
                                            <a href="{{ route('clients.index')}}" class="btn btn-dark">Go Back</a>
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
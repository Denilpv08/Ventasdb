@extends('layouts/view')

@section('title', 'Client')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client') }}
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
                                        <a href="{{ route('clients.create')}}" class="btn btn-primary" style="float: right">
                                        <span class="fas fa-plus-square"></span> Add New
                                        </a>
                                        <br><br>
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ $message }}
                                            </div>                                            
                                        @endif
                                        <br>
                                        <table class="table table table-bordered table-striped text-center">
                                            <thead>
                                                <th>Name</th>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($client as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->last_name }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>
                                                        <a href="{{ route('clients.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                                            <span class="fas fa-edit"></span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('clients.show', $item->id) }}" class="btn btn-danger btn-sm">
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
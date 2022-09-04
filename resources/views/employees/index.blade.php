@extends('layouts/view')

@section('title', 'Employee')

@section('content')
    
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
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
                                        <a href="{{ route('employees.create')}}" class="btn btn-primary" style="float: right">
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
                                                <th>Names</th>
                                                <th>Surnames</th>
                                                <th>Position</th>
                                                <th>Birth Date</th>
                                                <th>Num Document</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($employee as $item)
                                                <tr>
                                                    <td>{{ $item->names }}</td>
                                                    <td>{{ $item->surnames }}</td>
                                                    <td>{{ $item->position }}</td>
                                                    <td>{{ $item->birth_date }}</td>
                                                    <td>{{ $item->num_document }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>
                                                        <a href="{{ route('employees.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                                            <span class="fas fa-edit"></span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('employees.show', $item->id)}}" class="btn btn-danger btn-sm">
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
@extends('layouts/view')

@section('title', 'Delete Employee')

@section('content') 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Employee') }}
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
                                                <th>Names</th>
                                                <th>Surnames</th>
                                                <th>Position</th>
                                                <th>Birth Date</th>
                                                <th>Num Document</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $employee->names }}</td>
                                                    <td>{{ $employee->surnames }}</td>
                                                    <td>{{ $employee->position }}</td>
                                                    <td>{{ $employee->birth_date }}</td>
                                                    <td>{{ $employee->num_document }}</td>
                                                    <td>{{ $employee->email }}</td>
                                                    <td>{{ $employee->phone }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('employees.index')}}" class="btn btn-dark">Go Back</a>
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

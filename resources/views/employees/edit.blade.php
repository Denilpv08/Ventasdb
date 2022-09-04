@extends('layouts/view')

@section('title', 'Edit Employee')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employee') }}
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
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-12">
                                        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="names">Names</label>
                                            <input type="text" class="form-control" id="names" name="names" required value="{{ $employee->names }}">
                                            <label for="surnames">Surnames</label>
                                            <input type="text" class="form-control" id="surnames" name="surnames" required value="{{ $employee->surnames }}">
                                            <label for="position">Position</label>
                                            <input type="text" class="form-control" id="position" name="position" required value="{{ $employee->position }}">
                                            <label for="birth_date">Birth Date</label>
                                            <input type="date" class="form-control" id="birth_date" name="birth_date" required value="{{ $employee->birth_date }}">
                                            <label for="num_document">Num Document</label>
                                            <input type="text" class="form-control" id="num_document" name="num_document" required value="{{ $employee->num_document }}">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required value="{{ $employee->phone }}">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" required value="{{ $employee->email }}">
                                            <br>
                                            <a href="{{ route('employees.index')}}" class="btn btn-dark">Go Back</a>
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
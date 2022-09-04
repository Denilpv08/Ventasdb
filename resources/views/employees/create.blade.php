@extends('layouts/view')

@section('title', 'Add Employee')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Employee') }}
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
                                        <form action="{{ route('employees.store') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <label for="names">Names</label>
                                            <input type="text" class="form-control" id="names" name="names" required>
                                            <label for="surnames">Surnames</label>
                                            <input type="text" class="form-control" id="surnames" name="surnames" required>
                                            <label for="position">Position</label>
                                            <input type="text" class="form-control" id="position" name="position" required>
                                            <label for="birth_date">Birth Date</label>
                                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                                            <label for="num_document">Num Document</label>
                                            <input type="text" class="form-control" id="num_document" name="num_document" required>
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" required>
                                            <br>
                                            <a href="{{ route('employees.index')}}" class="btn btn-dark">Go Back</a>
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
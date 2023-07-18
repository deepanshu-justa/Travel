@extends('layouts.admin.main')

@section('content')
    <x-admin.title title="Leads"></x-admin.title>

    <div class="content">
        <div class="card">
            <div class="card-header">
                <h2>Add New Lead</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.leads.store') }}" method="POST">
                    @csrf 
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="package">Package</label>
                            <input type="text" name="package" id="package" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
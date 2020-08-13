@extends('admin.layouts.master')

@section('content')

<div class="row">

    <form method="POST" action="{{route('companies.store')}}" enctype="multipart/form-data" class="mt-3 form-inline w-100">
        @csrf
        <div class="form-group mb-2 col-md-5">
            <label for="staticEmail2" class="col-md">Company Name</label>
            <input type="text" class="form-control col-md-8" id="staticEmail2" name="company" placeholder="ABC Company">
        </div>
        <div class="form-group mb-2 col-md-5">
            <label for="inputPassword2" class="col-md">Company Logo</label>
            <input type="file" class="form-control col-md-8" id="inputPassword2" name="logo" placeholder="Company Logo...">
        </div>
        <button type="submit" class="btn btn-primary col-md-2 mb-2">Add Company</button>
    </form>
</div>

<hr>
<div class="row">
    @foreach($companies as $company)
    @if($loop->index % 5 ==0)
    <div class="card-deck">
        @endif
        <div class="card d-flex mt-3 mb-3">
            <div class="card-body">
                <div class="companylogo-img pt-4 pb-3">
                    <img src="../assets/images/logo/prime-logo.png" class="img-responsive w-100 ">
                </div>
                <div class="company-name pt-2 mt-4">
                    <h4 class="card-text">AbC Company Name</h4>
                </div>
            </div>
            <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-warning">Edit</a>
            </div>
        </div>

        <!-- Add next logo card here -->
        @if($loop->iteration % 5 ==0)
    </div>
    @endif
    @endforeach
</div>

@if($errors->any())
@section('error')
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
@endsection
@endif

@endsection
@extends('admin.layouts.master')

@section('content')









<div class="row">
    <div class="card-deck">
        <!-- Event Blog -->
        <div class="card col-md-6 d-flex mt-3 mb-3">
            <h4 class="card-header">Event name Here</h4>
            <div class="card-body card-text scroll">
                <p class="dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodovelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodovelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodovelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="btn-group">
                <a href="#" class="btn btn-danger">Update</a>
            </div>
        </div>
        <!-- Add next event blog card here -->
    </div>
</div>


<div class="row">
    <div class="card-deck">
        <!-- Members -->
        <div class="card d-flex col-md-6 mt-3 mb-3">
            <div class="card-body row">
                <div class="teammember-img col-md-5 pt-4 pb-3">
                    <img src="../assets/images/executives/IMG_8738.png" class="img-responsive">
                </div>
                <div class="teammember-desc col-md-7 card-text pt-2 mt-4">
                    <h3 class="center pl-3">My Name</h3>
                    <ul>
                        <li><label>Designation:</label> Secretary</li>
                        <li><label>Email:</label> Email</li>
                        <li><label>Linkedin:</label> Linkedin</li>
                        <li><label>Facebook:</label> Facebook</li>
                        <li><label>Instagram:</label> Instagram</li>
                        <li>
                            <h4><label>Year:</label> 2014-2016</h4>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-primary">Remove</a>
            </div>
        </div>
        <!-- Add next member card here -->
    </div>
</div>



@endsection
@extends('admin.layouts.master')

@section('content')


<div class="row">
    @foreach($events as $event)
    @if($loop->index % 2 ==0)
    <div class="card-deck">
        @endif
        <!-- Our Events -->

        <div class="card col-md-6 d-flex mt-3 mb-3">
            <div class="card-body card-text">
                <p class=" small dark">Date: {{$event->date}} <br>
                    Time: {{$event->to}}</p>
                <h3>Event Name: {{$event->name}}</h3>
                <p>{{$event->description}}</p>
                <h6>
                    Collaborating Company:
                    @foreach($event->company as $company)
                    @if($company->pivot->type == "Collaborator")
                    {{$company->name}}
                    @endif
                    @endforeach
                </h6>
                <h6>Resource Person: {{$event->resource_person}}</h6>
            </div>
            <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-info">Responses</a>
                <a href="#" class="btn btn-danger">Update</a>
            </div>
        </div>
        <!-- Add next event card here -->
        @if($loop->iteration % 2 ==0)
    </div>
    @endif
    @endforeach
</div>


@endsection
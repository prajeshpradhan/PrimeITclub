<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"><img src="../assets/images/logo/prime-logo.png" class="img-responsive"></div>
    <ul class="list-group list-group-flush">

        <li id="">
            <a href="{{route('dashboard')}}"><button class="list-group-item list-group-item-action bg-light">Dashboard</button></a>
        </li>

        <li id="toggle-eventsHead">
            <button class="list-group-item list-group-item-action bg-light dropdown-toggle" type="button" data-toggle="dropdown">Our Events<span class="caret"></span></button>
            <ul id="toggle-events">
                <li class="list-group-item list-group-item-action bg-light"><a href="{{route('events.index')}}">Our Events</a></li>
                <li class="list-group-item list-group-item-action bg-light"><a href="#">Register Event</a></li>
                <li class="list-group-item list-group-item-action bg-light"><a href="{{route('companies.index')}}">Companies</a></li>
                <li class="list-group-item list-group-item-action bg-light"><a href="#">Event Blog</a></li>
            </ul>
        </li>

        <li id="toggle-formHead">
            <button class="list-group-item list-group-item-action bg-light dropdown-toggle" type="button" data-toggle="dropdown">Create Form<span class="caret"></span></button>
            <ul id="toggle-form">
                <li class="list-group-item list-group-item-action bg-light"><a href="#">Registration Form</a></li>
                <li class="list-group-item list-group-item-action bg-light"><a href="#">Feedback Form</a></li>
            </ul>
        </li>

        <li id="">
            <button class="list-group-item list-group-item-action bg-light" type="button" data-toggle="dropdown">Participants</button>
        </li>

        <li id="toggle-teammembersHead">
            <button class="list-group-item list-group-item-action bg-light dropdown-toggle" type="button" data-toggle="dropdown">Team Members<span class="caret"></span></button>
            <ul id="toggle-teammembers">
                <li class="list-group-item list-group-item-action bg-light"><a href="#">Add Members</a></li>
                <li class="list-group-item list-group-item-action bg-light"><a href="#">Members</a></li>
            </ul>
        </li>

    </ul>
</div>
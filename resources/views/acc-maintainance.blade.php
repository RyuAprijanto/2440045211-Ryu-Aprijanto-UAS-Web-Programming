@extends('layouts.main')

@section('section')
<div class="homeContainer">
    <div class="homeHeader">
        <div class="home">
            @foreach ($userlist as $u)
                    <div class="boxOuter">
                        <div class="boxInner">
                            <div class="card-body">
                                {{ $u->first_name}} {{ $u->last_name }} - {{ $roles->role_name }}
                            </div>
                            <div class="card-body">
                                <a href="/updateRole/{{ $u->id }}">Update Role</a>
                                <a href="/delete/{{ $key->id }}">Delete</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

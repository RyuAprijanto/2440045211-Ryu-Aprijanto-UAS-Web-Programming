@extends('layouts.main')

@section('section')

<div class="homeContainer">
        <div class="homeHeader">
            <div class="home">
                @guest
                <div class="p-3 mb-2 bg-danger text-white">Please Login</div>
                @endguest

            @auth
                @if (Auth::check() == true)
                    @foreach ($items as $items)
                    <div class="boxOuter">
                        <div class="boxInner">
                            <div>
                            <h1>{{ $items->item_name }}</h1><br>
                            <a href="/details/{{ $item_id }}" class="btn btn-primary">Details</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            @endauth


             </div>
        </div>
</div>
@endsection

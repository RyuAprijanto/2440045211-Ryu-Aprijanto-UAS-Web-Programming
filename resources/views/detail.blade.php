@extends('layouts.main')

@section('section')

    <div class="card" style="width: 30%; max-height: 100%">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $item_detail->item_name}}<h5>
            <p class="card-text">Price: {{ $item_detail->price }}</p>
            <p class="card-text">Description:</p><br>
            <p class="card-text">{{ $item->item_desc }}</p>
        </div>
        @auth
            @if (Auth::user()->role_id !== 1)
            <form action="/addToCart/{{ $item_detail->id }}" method="post">
                @csrf
                <input type="submit" value="Add to Cart">
            </form>
            @endif
        @endauth
    </div>
@endsection

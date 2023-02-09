@extends('layouts.main')

@section('section')

<div class="homeContainer">
    <div class="homeHeader">
        <div class="home">
            @foreach ($items as $i)
                @foreach ($carts as $c)
                    @if($i->id == $c->item_id)
                        <div class="boxOuter">
                            <div class="boxInner">
                                <p">{{ $i->item_name }}</p>
                                $total += {{ $i->price }}
                                <form action="/cart" method="post">
                                    @csrf
                                    <label for="price">Price: </label>
                                    printf($total);
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
            <form action="/transactionHistory" method="post">
                @csrf
                <button type="submit">Checkout</button>
            </form>
            </div>
    </div>
</div>
@endsection

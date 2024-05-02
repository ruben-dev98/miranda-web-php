@extends('layout')
@section('content')
    <header class="banner">
        <div class="banner__inner banner__inner--rooms --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury </p>
            <h2 class="font__subtitle font__subtitle--banner font__subtitle--dark">Ultimate<br> Room</h2>
        </div>
        <div class="banner__pagination">
            <span>Home</span><span>|</span><span>Rooms</span>
        </div>
    </header>
    <section class="rooms__grid --max-width">
        <div class="rooms-grid__swiper swiper">
            <div class="swiper-wrapper">
                @foreach ($rooms as $room)
                    <div class="rooms swiper-slide">
                        <div class="rooms__grid-item">
                            <img class="rooms__grid-item-img" src="{{ json_decode($room['photo'])[0] }}" alt="">
                            @component('amenitiesMenu', ['room' => $room])
                            @endcomponent
                            <div class="rooms__grid-item-details">
                                <p class="rooms__grid-item-details-title">{{ $room['type'] }} - Room {{ $room['number'] }}
                                </p>
                                <p class="rooms__grid-item-details-text">
                                    {{ $room['description'] }}
                                </p>
                                <p class="rooms__grid-item-details-price">
                                    <span>${{ calculateDiscount($room['price'], $room['discount']) }}/Night</span><span><a
                                            href="room-details.php?id={{ $room['_id'] }}"></a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="rooms-grid__swiper-pagination swiper-pagination">
        </div>
    </section>
@endsection

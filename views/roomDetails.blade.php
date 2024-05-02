@extends('layout')
@section('content')
    <header class="banner">
        <div class="banner__inner banner__inner--rooms --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury</p>
            <h2 class="font__subtitle font__subtitle--banner font__subtitle--dark">Ultimate<br> Room</h2>
        </div>
        <div class="banner__pagination banner__pagination--room-details">
            <span>Home</span><span>|</span><span>Room Details</span>
        </div>
    </header>
    <section class="room-details__details --max-width">
        <div class="room-details__details-info">
            <div class="details-info__text">
                <div>
                    <p class="room-details__details-informative-text upper__case">{{ $room['type'] }}</p>
                    <p class="room-details__details-title">Habitación {{ $room['number'] }}</p>
                </div>
                <p class="room-details__details-price">
                    <span>$</span>
                    <span>{{ calculateDiscount($room['price'], $room['discount']) }}</span>
                    <span>/Night</span>
                </p>
            </div>
            <img class="room-details__details-img" src="{{json_decode($room['photo'])[0]}}" alt="">
        </div>
        <form class="room-details__form">
            <div class="room-details__form-title">
                <span>Check Availability</span>
            </div>
            <div class="room-details__form-control">
                <label for="chek-in">Check In</label>
                <input type="date" id="check_in" name="check_in">
            </div>
            <div class="room-details__form-control">
                <label for="check-out">Check Out</label>
                <input type="date" id="check_out" name="check_out">
            </div>
            <div class="room-details__form-control">
                <label for="">Full Name</label>
                <input type="text" id="full_name" name="full_name">
            </div>
            <div class="room-details__form-control">
                <label for="">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="room-details__form-control">
                <label for="">Phone</label>
                <input type="text" id="phone" name="phone">
            </div>
            <button class="button upper__case" type="submit">Check Availability</button>
        </form>
        <p class="room-details__text">
            {{ $room['description'] }}
        </p>
    </section>
    <section class="room-details__amenities --max-width">
        <p class="room-details__amenities-title">Amenities</p>
        <ul class="room-details__amenities-list">
            @foreach(json_decode($room['amenities']) as $amenity)
                @if($amenity !== null)
                    <li class="room-details__amenities-list-item">
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-air-conditioner.svg"
                            alt="">
                        <span class="room-details__amenities-list-item-text">{{ $amenity }}</span>
                    </li>
                @endif
            @endforeach
        </ul>
    </section>
    <section class="room-details__founder --max-width">
        <div class="room-details__founder-content">
            <div class="room-details__founder-img" style="background-image: url(assets/img/bg-footer.png);">
                <div class="room-details__founder-elipsis">
                    <img class="room-details__founder-check" src="assets/icon/check.svg" alt="">
                </div>
            </div>
            <p class="room-details__founder-title">Rosalina D. William</p>
            <p class="room-details__founder-subtitle">Founder, Qux Co.</p>
            <p class="room-details__founder-text">
                Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore.
            </p>
        </div>
    </section>
    <section class="room-details__cancellation --max-width">
        <p class="room-details__cancellation-title">Cancellation</p>
        <p class="room-details__cancellation-text">
            {{ $room['cancellation'] }}
        </p>
    </section>
    <section class="offers__popular-rooms offers__popular-rooms--ligth room-details__related-rooms --max-width">
        <p class="offers__popular-rooms-title offers__popular-rooms-title--related-rooms">Related Rooms</p>
        <div class="offers__swiper swiper --max-width">
            <div class="offers__swiper-wrapper swiper-wrapper">
                @foreach ($rooms as $room)
                    <div class="offers__swiper-slide rooms__grid-item swiper-slide">
                        <img src="{{ json_decode($room['photo'])[0] }}" alt="">
                        <menu class="rooms__grid-item-menu rooms__menu offers__menu">
                            <span class="rooms__menu-item">
                                <img src="assets/icon/bed.svg" alt="icono de una cama">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="assets/icon/wifi.svg" alt="icono de conexión wifi">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="assets/icon/car.svg" alt="icono de un coche">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="assets/icon/snowflake.svg" alt="icono de un copo de nieve">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="assets/icon/gym.svg" alt="icono de una mancuerna">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="assets/icon/no-smoking.svg" alt="icono de prohibido fumar">
                            </span>
                            <span class="rooms__menu-item">
                                <img src="assets/icon/cocktail.svg" alt="icono de un coctel">
                            </span>
                        </menu>
                        <div class="rooms__grid-item-details offers__details">
                            <p class="rooms__grid-item-details-title">{{ $room['type'] }} - {{ $room['number'] }}</p>
                            <p class="rooms__grid-item-details-text">
                                {{ $room['description'] }}
                            </p>
                            <p class="rooms__grid-item-details-price">
                                <span>${{ calculateDiscount($room['price'], $room['discount']) }}/Night</span><span><a
                                        href="room-details.php?id={{ $room['_id'] }}"></a></span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="offers__swiper-button-prev swiper-button-prev"></div>
            <div class="offers__swiper-button-next swiper-button-next"></div>
        </div>
    </section>
@endsection

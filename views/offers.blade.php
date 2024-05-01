@extends('layout')
@section('content')
    <header class="banner">
        <div class="banner__inner banner__inner--rooms --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury </p>
            <h2 class="font__subtitle font__subtitle--banner font__subtitle--dark">Our Offers</h2>
        </div>
        <div class="banner__pagination">
            <span>Home</span><span>|</span><span>Offers</span>
        </div>
    </header>
    <section class="offers offers__cards --max-width">
        @foreach ($rooms as $room)
            <div class="offers__card">
                <a href="room-details.php?id={{ $room['_id'] }}"><img class="offers__img"
                        src="{{ json_decode($room['photo'])[0] }}" alt=""></a>
                <div class="offers__inner">
                    <header class="offers__card-header">
                        <div>
                            <p class="offers__informative-text upper__case">{{ $room['type'] }}</p>
                            <p class="offers__title"><a href="room-details.php?id={{ $room['_id'] }}">Habitación
                                    {{ $room['number'] }}</a></p>
                        </div>
                        <div class="offers__prices">
                            <p class="offers__price offers__price--crossed">
                                <span>${{ calculateDiscount($room['price'], 0) }}</span>
                                <span>/Night</span>
                            </p>
                            <p class="offers__price">
                                <span>${{ calculateDiscount($room['price'], $room['discount']) }}</span>
                                <span>/Night</span>
                            </p>
                        </div>
                    </header>
                    <div class="offers__card-body">
                        <p class="offers__text">
                            {{ $room['description'] }}
                        </p>
                        <section class="offers__amenities">
                            <ul class="offers__amenities-list room-details__amenities-list">
                                @foreach (json_decode($room['amenities']) as $amenity)
                                    @if($amenity !== null)
                                        <li class="room-details__amenities-list-item">
                                            <img class="room-details__amenities-list-item-img"
                                                src="assets/icon/amenities-air-conditioner.svg" alt="">
                                            <span class="room-details__amenities-list-item-text">{{ $amenity }}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </section>
                        <button class="offers__button upper__case"><a href="room-details.php?id={{ $room['_id'] }}">Book
                                Now</a></button>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <section class="offers__popular-rooms">
        <p class="offers__popular-rooms-informative-text upper__case">Popular List</p>
        <p class="offers__popular-rooms-title">Popular Rooms</p>
        <div class="offers__swiper swiper --max-width">
            <div class="offers__swiper-wrapper swiper-wrapper">
                @foreach ($popularRooms as $room)
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
                                <span>${{ $room['price'] }}/Night</span><span><a
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

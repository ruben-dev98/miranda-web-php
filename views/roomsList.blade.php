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
    <section class="rooms__list rooms__list --max-width">
        <div class="rooms-list__swiper swiper">
            <div class="swiper-wrapper">
                @foreach ($rooms as $room)
                    <div class="rooms-list__swiper-slide swiper-slide">
                        <div class="rooms__list-item">
                            <img class="rooms__list-item-img" src="{{ json_decode($room['photo'])[0] }}" alt="">
                            <div class="rooms__list-content">
                                <div class="rooms__list-item-details">
                                    <menu class="rooms__list-item-menu rooms__menu">
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
                                    <p class="rooms__list-item-details-title">{{ $room['type'] }} - {{ $room['number'] }}
                                    </p>
                                    <p class="rooms__list-item-details-text">
                                        {{ $room['description'] }}
                                    </p>
                                </div>
                                <p class="rooms__list-item-details-price">
                                    <span>${{ calculateDiscount($room['price'], $room['discount']) }}/Night</span><span><a
                                            href="room-details.php?id={{ $room['_id'] }}"></a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="rooms-grid__swiper-pagination rooms-list__swiper-pagination swiper-pagination">
        </div>
    </section>
@endsection

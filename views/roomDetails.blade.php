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
                    <p class="room-details__details-informative-text upper__case">Double Bed</p>
                    <p class="room-details__details-title">Luxury Double Bed</p>
                </div>
                <p class="room-details__details-price">
                    <span>$</span>
                    <span>345</span>
                    <span>/Night</span>
                </p>
            </div>
            <img class="room-details__details-img" src="assets/img/luxury-room.jpg" alt="">
        </div>
        <form class="room-details__form">
            <div class="room-details__form-title">
                <span>Check Availability</span>
            </div>
            <div class="room-details__form-control">
                <label for="chek-in">Check In</label>
                <input type="date">
            </div>
            <div class="room-details__form-control">
                <label for="check-out">Check Out</label>
                <input type="date">
            </div>
            <div class="room-details__form-control">
                <label for="">Full Name</label>
                <input type="text">
            </div>
            <div class="room-details__form-control">
                <label for="">Email</label>
                <input type="email">
            </div>
            <div class="room-details__form-control">
                <label for="">Phone</label>
                <input type="text">
            </div>
            <!--<div class="room-details__form-control">
                <label for=""></label>
                <input type="text">
            </div>-->
            <button class="button upper__case">Check Availability</button>
        </form>
        <p class="room-details__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
            sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore
            et dolore magnam aliquam quaerat voluptatem.
        </p>
    </section>
    <section class="room-details__amenities --max-width">
        <p class="room-details__amenities-title">Amenities</p>
        <ul class="room-details__amenities-list">
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-air-conditioner.svg"
                    alt="">
                <span class="room-details__amenities-list-item-text">Air conditioner </span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-breakfast.svg" alt="">
                <span class="room-details__amenities-list-item-text">Breakfast</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-cleaning.svg" alt="">
                <span class="room-details__amenities-list-item-text">Cleaning</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-grocery.svg" alt="">
                <span class="room-details__amenities-list-item-text">Grocery</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shop.svg" alt="">
                <span class="room-details__amenities-list-item-text">Shop near</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-online-support.svg"
                    alt="">
                <span class="room-details__amenities-list-item-text">24/7 Online Support</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-smart-security.svg"
                    alt="">
                <span class="room-details__amenities-list-item-text">Smart Security</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-wifi.svg" alt="">
                <span class="room-details__amenities-list-item-text">High speed WiFi</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-kitchen.svg" alt="">
                <span class="room-details__amenities-list-item-text">Kitchen</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shower.svg" alt="">
                <span class="room-details__amenities-list-item-text">Shower</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-single-bed.svg"
                    alt="">
                <span class="room-details__amenities-list-item-text">Single bed</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-towels.svg" alt="">
                <span class="room-details__amenities-list-item-text">Towels</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-strong-locker.svg"
                    alt="">
                <span class="room-details__amenities-list-item-text">Strong Locker</span>
            </li>
            <li class="room-details__amenities-list-item">
                <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-expert.svg" alt="">
                <span class="room-details__amenities-list-item-text">Expert Team</span>
            </li>
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
            Phasellus volutpat neque a tellus venenatis,
            a euismod augue facilisis. Fusce ut metus
            mattis, consequat metus nec, luctus lectus.
            Pellentesque orci quis hendrerit sed eu dolor.
            Cancel up to 14 days to get a full refund.
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
                                        href="room-details.php/?id={{ $room['_id'] }}"></a></span>
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
@extends('layout')
@section('content')
    <header class="banner">
        <div class="banner__inner banner__inner--about --max-width">
            <p class="font__title font__title--dark upper__case">The Ultimate Luxury </p>
            <h2 class="font__subtitle font__subtitle--banner font__subtitle--dark">New Details</h2>
        </div>
        <div class="banner__pagination">
            <span>Home</span><span>|</span><span>Blog</span>
        </div>
    </header>
    <section class="contact__info --max-width">
        <section class="contact__card">
            <div class="contact__card-inner">
                <img class="contact__card-icon footer__contact-info-icon" src="assets/img/ubi.svg"
                    alt="icono para representar una ubicación en un mapa">
                <div class="contact__card-text footer__contact-info-text">
                    <p>Hotel Address</p>
                    <p>C. de la Princesa, 31, planta, 2ª, Moncloa - Aravaca, 28008 Madrid, España</p>
                </div>
            </div>
            <p class="contact__card-number">01</p>
        </section>
        <section class="contact__card">
            <div class="contact__card-inner">
                <img class="contact__card-icon footer__contact-info-icon" src="assets/img/call.svg"
                    alt="icono de un telefono recibinedo una llamada">
                <div class="contact__card-text footer__contact-info-text">
                    <p>Phone Number</p>
                    <p>620734859</p>
                </div>
            </div>
            <p class="contact__card-number contact__card-number--position">02</p>
        </section>
        <section class="contact__card">
            <div class="contact__card-inner">
                <img class="contact__card-icon footer__contact-info-icon" src="assets/img/email.svg"
                    alt="icono de un sobre con un numero 1 en un bocadillo indicando que se tiene un mensaje sin leer">
                <div class="contact__card-text footer__contact-info-text">
                    <p>Email</p>
                    <p>ruben.dopico.dev@gmail.com</p>
                </div>
            </div>
            <p class="contact__card-number contact__card-number--position">03</p>
        </section>
    </section>
    <section class="contact__map --max-width">
        <iframe class="contact__map-map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.1328875022737!2d-3.717276088381854!3d40.428056271318695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229fc15efcb09%3A0xb0036150b0cd3867!2sOXYGEN%20Academy%20%7C%20Full%20Stack%20Bootcamps!5e0!3m2!1ses!2ses!4v1709047244567!5m2!1ses!2ses"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact__form --max-width">
        <form action="">
            <div class="contact__form-control">
                <img class="contact__form-control-img contact__form-control-img--full-name"
                    src="assets/icon/contact-full-name.svg" alt="">
                <input class="contact__input" placeholder="Your full name" type="text">
            </div>
            <div class="contact__form-control">
                <img class="contact__form-control-img" src="assets/icon/contact-phone.svg" alt="">
                <input class="contact__input" placeholder="Add phone number" type="text">
            </div>
            <div class="contact__form-control">
                <img class="contact__form-control-img" src="assets/icon/contact-email.svg" alt="">
                <input class="contact__input" placeholder="Enter email address" type="text">
            </div>
            <div class="contact__form-control">
                <img class="contact__form-control-img" src="assets/icon/contact-subject.svg" alt="">
                <input class="contact__input" placeholder="Enter subject" type="text">
            </div>
            <div class="contact__form-control contact__form-control--area">
                <img class="contact__form-control-img contact__form-control-img--area" src="assets/icon/contact-message.svg"
                    alt="">
                <textarea class="contact__area" name="" placeholder="Enter message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="contact__form-button">
                <button class="button contact__button upper__case">Send</button>
            </div>
        </form>
    </section>
@endsection
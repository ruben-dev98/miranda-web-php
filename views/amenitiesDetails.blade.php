<ul class="room-details__amenities-list">
    @foreach (json_decode($room['amenities']) as $amenity)
        @if ($amenity !== null)
            <li class="room-details__amenities-list-item">
                @switch($amenity)
                    @case('Air Conditioner')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-air-conditioner.svg"
                            alt="">
                    @break

                    @case('Breakfast')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-breakfast.svg"
                            alt="">
                    @break

                    @case('Cleaning')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-cleaning.svg"
                            alt="">
                    @break

                    @case('Grocery')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-grocery.svg"
                            alt="">
                    @break

                    @case('Shop Near')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shop.svg" alt="">
                    @break

                    @case('24/7 Online Support')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-online-support.svg"
                            alt="">
                    @break

                    @case('Smart Security')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-smart-security.svg"
                            alt="">
                    @break

                    @case('High Speed Wifi')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-wifi.svg" alt="">
                    @break

                    @case('Kitchen')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-kitchen.svg"
                            alt="">
                    @break

                    @case('Shower')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-shower.svg"
                            alt="">
                    @break

                    @case('Single Bed')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-single-bed.svg"
                            alt="">
                    @break

                    @case('Expert Team')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-expert.svg"
                            alt="">
                    @break

                    @case('Towels')
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-towels.svg"
                            alt="">
                    @break

                    @default
                        <img class="room-details__amenities-list-item-img" src="assets/icon/amenities-strong-locker.svg"
                            alt="">
                @endswitch
                <span class="room-details__amenities-list-item-text">{{ $amenity }}</span>
            </li>
        @endif
    @endforeach
</ul>
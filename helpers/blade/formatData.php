<?php

function formatRoom($rawRoom) {
    return [
        'id' => $rawRoom['_id'],
        'description' => $rawRoom['description'],
        'type' => $rawRoom['type'],
        'name' => 'Room ' . $rawRoom['number'],
        'type_name' => $rawRoom['type'] . ' - Room ' . $rawRoom['number'],
        'amenities' => json_decode($rawRoom['amenities']),
        'price' => calculateDiscount($rawRoom['price'], $rawRoom['discount']),
        'price_not_discount' => calculateDiscount($rawRoom['price'], 0),
        'photo' => json_decode($rawRoom['photo'])[0],
        'cancellation' => $rawRoom['cancellation']
    ];
}

function formatListRooms($rawRooms) {
    $formatRooms = [];
    foreach($rawRooms as $roomToFormat) {
        $formatRooms[] = formatRoom($roomToFormat);
    }
    return $formatRooms;
}

function getAmenityIcon($amenity) {
    
    $amenities = [
        'Air Conditioner' => 'assets/icon/amenities-air-conditioner.svg',
        'Breakfast' => 'assets/icon/amenities-breakfast.svg',
        'Cleaning' => 'assets/icon/amenities-cleaning.svg',
        'Grocery' => 'assets/icon/amenities-grocery.svg',
        'Shop Near' => 'assets/icon/amenities-shop.svg',
        '24/7 Online Support' => 'assets/icon/amenities-online-support.svg',
        'Smart Security' => 'assets/icon/amenities-smart-security.svg',
        'High Speed Wifi' => 'assets/icon/amenities-wifi.svg',
        'Kitchen' => 'assets/icon/amenities-kitchen.svg',
        'Shower' => 'assets/icon/amenities-shower.svg',
        'Single Bed' => 'assets/icon/amenities-single-bed.svg',
        'Expert Team' => 'assets/icon/amenities-expert.svg',
        'Towels' => 'assets/icon/amenities-towels.svg',
        'Strong Locker' => 'assets/icon/amenities-strong-locker.svg',
    ];

    return $amenities[$amenity];
}
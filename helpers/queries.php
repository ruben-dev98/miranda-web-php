
<?php

$queryAllRooms = "SELECT room._id, 
room.type,
photos.urls 'photo',
room.number,
room.description, room.offer, room.price,
json_arrayagg(amenity.name) as amenities,
room.cancellation, room.discount, room.status
FROM amenity
LEFT JOIN amenity_room on amenity_id = amenity._id
RIGHT JOIN room on amenity_room.room_id = room._id
LEFT JOIN (SELECT json_arrayagg(url) as urls, room_id as id_room FROM photo group by room_id) as photos on photos.id_room = room._id
GROUP BY room._id;";

$queryMostPrice = "SELECT room._id, 
room.type,
photos.urls 'photo',
room.number,
room.description, room.offer, room.price,
json_arrayagg(amenity.name) as amenities,
room.cancellation, room.discount, room.status
FROM amenity
LEFT JOIN amenity_room on amenity_id = amenity._id
RIGHT JOIN room on amenity_room.room_id = room._id
LEFT JOIN (SELECT json_arrayagg(url) as urls, room_id as id_room FROM photo group by room_id) as photos on photos.id_room = room._id
GROUP BY room._id ORDER BY price DESC LIMIT 3;";

$queryOneRoom = "SELECT room._id, 
room.type,
photos.urls 'photo',
room.number,
room.description, room.offer, room.price,
json_arrayagg(amenity.name) as amenities,
room.cancellation, room.discount, room.status
FROM amenity
LEFT JOIN amenity_room on amenity_id = amenity._id
RIGHT JOIN room on amenity_room.room_id = room._id
LEFT JOIN (SELECT json_arrayagg(url) as urls, room_id as id_room FROM photo group by room_id) as photos on photos.id_room = room._id
WHERE room._id = ?
GROUP BY room._id;";

$queryAllOfferRooms = "SELECT room._id, 
room.type,
photos.urls 'photo',
room.number,
room.description, room.offer, room.price,
json_arrayagg(amenity.name) as amenities,
room.cancellation, room.discount, room.status
FROM amenity
LEFT JOIN amenity_room on amenity_id = amenity._id
RIGHT JOIN room on amenity_room.room_id = room._id
LEFT JOIN (SELECT json_arrayagg(url) as urls, room_id as id_room FROM photo group by room_id) as photos on photos.id_room = room._id
WHERE room.offer = 1
GROUP BY room._id;";

$queryRoomsOnSwiper = "SELECT room._id, 
room.type,
photos.urls 'photo',
room.number,
room.description, room.offer, room.price,
json_arrayagg(amenity.name) as amenities,
room.cancellation, room.discount, room.status
FROM amenity
LEFT JOIN amenity_room on amenity_id = amenity._id
RIGHT JOIN room on amenity_room.room_id = room._id
LEFT JOIN (SELECT json_arrayagg(url) as urls, room_id as id_room FROM photo group by room_id) as photos on photos.id_room = room._id
GROUP BY room._id LIMIT 3;";

$queryAllRoomsCheckAvailability = "SELECT room._id, 
room.type,
photos.urls 'photo',
room.number,
room.description, room.offer, room.price,
json_arrayagg(amenity.name) as amenities,
room.cancellation, room.discount, room.status
FROM amenity
LEFT JOIN amenity_room on amenity_id = amenity._id
RIGHT JOIN room on amenity_room.room_id = room._id
LEFT JOIN (SELECT json_arrayagg(url) as urls, room_id as id_room FROM photo group by room_id) as photos on photos.id_room = room._id
WHERE room._id IN (SELECT room._id FROM room
LEFT JOIN booking on booking.room_id = room._id WHERE (SELECT count(_id) FROM booking 
WHERE booking.check_in < ? AND booking.check_out > ?
AND room_id = room._id group by room_id) IS NULL
group by room._id)
GROUP BY room._id;";

$queryInsertMessage = "INSERT INTO message (full_name, phone, email, subject, messages) values (?,?,?,?,?)";

$queryInsertBooking = "INSERT INTO booking (check_in, check_out, full_name, email, phone, special_request, room_id) values (?,?,?,?,?,?,?)";

$queryOneRoomCheckAvailability = "SELECT room._id FROM room
WHERE room._id IN (SELECT room._id FROM room
LEFT JOIN booking on booking.room_id = room._id WHERE (SELECT count(_id) FROM booking 
WHERE (booking.check_in < ? AND booking.check_out > ?) group by room_id) IS NULL AND room._id = ?
group by room._id)
GROUP BY room._id;";
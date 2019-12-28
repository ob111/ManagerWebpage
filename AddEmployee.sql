 SELECT DISTINCT last_name, first_name, address, city, district, country, postal_code, email, phone
 FROM staff, sakila.address a, sakila.city ci, sakila.country co
 WHERE staff.address_id = a.address_id AND
 a.city_id = ci.city_id AND
 ci.country_id = co.country_id
 ;
 






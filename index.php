<?php

// librairie faker 
require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();

// connexion à la DB
$db = new PDO('sqlite:ecommerce.db');

foreach(range(1, 100) as $x) {

    // table user 
    $username = $faker->name;
    $user_photo_id = $faker->unique()->numberBetween($min = 1, $max = 1000);
    $password = $faker->sha256;
    $last_name = $faker->lastName;
    $first_name = $faker->firstName;
    $phone_number = $faker->phoneNumber;
    $email = $faker->email;


    // table user_address
    $address_line = $faker->streetAddress;
    $country = $faker->country;
    $postal_code = $faker->postcode;
    $city = $faker->city;
    $fax_phone = $faker->phoneNumber;

    // table product
    $product_name = $faker->word;
    $quantity = $faker->randomNumber;
    $product_desc = $faker->word;
    $product_photo_id = $faker->unique()->numberBetween($min = 1, $max = 1000);
    $stock = $faker->randomNumber;
    $sku = $faker->word;
    $price = $faker->randomFloat;
    $category = $faker->word;

    //table cart 
    $product_id = $faker->unique()->numberBetween($min = 1, $max = 1000);
    
    // table command 
    $delivery_date = $faker->date($format = 'Y-m-d', $max = 'now');
    $address_line = $faker-> streetAddress;
    $country = $faker-> country;
    $order_date = $faker-> date($format = 'Y-m-d', $max = 'now');
    $postal_code = $faker-> postcode;

    // table invoices 
    $command_id = $faker->word;
    $command_date = $faker->date($format = 'Y-m-d', $max = 'now');

    // table payement 
    $creditCardType = $faker-> creditCardType;
    $creditCardNumber = $faker-> creditCardNumber;
    $creditCardExpirationDate = $faker-> creditCardExpirationDateString;
    $iban = $faker ->iban;
    $swiftBicNumber = $faker -> swiftBicNumber;


    // table photo 
    $photo = $faker->word . ".png";


    // table rate 
    $rating_product = $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5);
    $feedback = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);


    
    // requêtes sql
        $db->query("
        INSERT INTO user (username,user_photo_id, password, first_name, last_name, phone_number, email)
        VALUES ('{$username}','{$x}', '{$password}', '{$first_name}','{$last_name }','{$phone_number}', '{$email}')
    ");
        $db->query("
        INSERT INTO user_address (user_id, address_line, country ,postal_code,city,fax_phone)
        VALUES ('{$x}', '{$address_line }', '{$country}','{$postal_code}','{$city}', '{$fax_phone}')
    ");
        $db->query("
        INSERT INTO product (product_name, quantity, product_desc,product_photo_id,stock,sku,price,category)
        VALUES ('{$product_name }', '{$quantity}', '{$product_desc}','{$product_photo_id}','{$stock}','{$sku}', '{$price}','{$category}')
    ");
        $db->query("
        INSERT INTO cart (user_id, product_id)
        VALUES ('{$x}', '{$product_id}')
    ");
        $db->query("
        INSERT INTO command (cart_id,delivery_date,address_line,country,order_date,postal_code)
        VALUES ('{$x}','{$delivery_date}','{$address_line}', '{$country}','{$order_date}','{$postal_code }')
    "); 
        $db->query("
        INSERT INTO invoices (command_id,command_date)
        VALUES ('{$command_id}','{$command_date}')
    ");
    $db->query("
        INSERT INTO payment (user_id,creditCardType,creditCardNumber,creditCardExpirationDate,iban,swiftBicNumber)
        VALUES ('{$x}','{$creditCardType}','{$creditCardNumber}','{$creditCardExpirationDate}','{$iban}','{$swiftBicNumber}')
    ");
    $db->query("
        INSERT INTO photo (photo)
        VALUES ('{$photo}')
    ");
    $db->query("
    INSERT INTO rate (rating_product,feedback)
    VALUES ('{$rating_product}','{$feedback}')
    ");
}

?>
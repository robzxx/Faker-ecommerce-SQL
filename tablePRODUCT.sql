CREATE TABLE product (
    id  INTEGER PRIMARY KEY NOT NULL,
    product_name VARCHAR(50) NOT NULL,
    product_photo_id VARCHAR(50) NOT NULL,
    quantity SMALLINT(6) NOT NULL,
    price FLOAT NOT NULL,
    sku VARCHAR(100) NOT NULL,
    product_desc VARCHAR(300) NOT NULL,
    stock VARCHAR(100) NOT NULL,
    category VARCHAR(500) NOT NULL
); 

-- SELECT * FROM product;
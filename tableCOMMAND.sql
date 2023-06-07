CREATE TABLE command (
    id  INTEGER PRIMARY KEY NOT NULL,
    cart_id INTEGER NOT NULL,
    delivery_date VARCHAR(50) NOT NULL,
    address_line VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL,
    order_date DATETIME NOT NULL,
    postal_code VARCHAR(50) NOT NULL
); 

-- SELECT * FROM command;
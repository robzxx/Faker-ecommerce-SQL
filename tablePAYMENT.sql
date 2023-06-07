CREATE TABLE payment (
    id  INTEGER PRIMARY KEY NOT NULL,
    user_id NOT NULL,
    creditCardType VARCHAR(20) NOT NULL,
    creditCardNumber VARCHAR(20) NOT NULL,
    creditCardExpirationDate VARCHAR(20) NOT NULL,
    iban VARCHAR(20) NOT NULL,
    swiftBicNumber VARCHAR(20) NOT NULL
); 

-- SELECT * FROM payment;
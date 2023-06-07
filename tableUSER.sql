CREATE TABLE user (
    id  INTEGER PRIMARY KEY NOT NULL,
    user_photo_id VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL
); 

-- SELECT * FROM user;

CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL ,
    lastname VARCHAR(255) NOT NULL,
    role INT NOT NULL DEFAULT "1",
    JoinDate TIMESTAMP DEFAULT NOW(),
    upload_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    email VARCHAR(255) NOT NULL DEFAULT "Enter Your Email",
    password VARCHAR(255) NOT NULL ,
    phonenumber VARCHAR(255) NOT NULL DEFAULT "Enter Your Phone Number",
    user_img MEDIUMBLOB NOT NULL DEFAULT "team-1.jpg.webp",
    city VARCHAR(200) NOT NULL DEFAULT "Enter Your City",
    country VARCHAR(200) NOT NULL DEFAULT "Enter Your Country",
    address1 VARCHAR(255) NOT NULL DEFAULT "Enter Your address 1",
    address2 VARCHAR(255) NOT NULL DEFAULT "Enter Your address 2",
    postcode CHAR(200) NOT NULL DEFAULT "Enter Your postcode"
);



CREATE TABLE IF NOT EXISTS products (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price INT NOT NULL,
    categories CHAR(200),
    rating INT NOT NULL,
    product_img1 BLOB NOT NULL ,
    product_img2 BLOB NOT NULL,
    description MEDIUMTEXT
);

INSERT INTO products (name,price,categories,rating,product_img1,product_img2,description) VALUES 
("product-1",14,"bouquet",2,"product-1.jpg.webp","product-1.jpg.webp", "Most people are unaware of the less common flower"),
("product-2",20,"flowerbox",3,"product-2.jpg.webp","product-2.jpg.webp", "Most people are unaware of the less common flower"),
("product-3",15,"flowershelf",4,"product-3.jpg.webp","product-3.jpg.webp", "Most people are unaware of the less common flower"),
("product-4",28,"basketflower",2,"product-4.jpg.webp","product-4.jpg.webp", "Most people are unaware of the less common flower"),
("product-5",29,"gift",1,"product-5.jpg.webp","product-5.jpg.webp", "Most people are unaware of the less common flower"),
("product-6",32,"bouquet",3,"product-6.jpg.webp","product-6.jpg.webp", "Most people are unaware of the less common flower"),
("product-7",17,"flowerbox",2,"product-7.jpg.webp","product-7.jpg.webp", "Most people are unaware of the less common flower"),
("product-8",13,"flowershelf",4,"product-8.jpg.webp","product-8.jpg.webp", "Most people are unaware of the less common flower"),
("product-9",14,"basketflower",1,"product-9.jpg.webp","product-9.jpg.webp", "Most people are unaware of the less common flower"),
("product-10",9,"gift",3,"product-10.jpg.webp","product-10.jpg.webp", "Most people are unaware of the less common flower"),
("product-11",25,"bouquet",5,"thumb-1.jpg.webp","thumb-1.jpg.webp", "Most people are unaware of the less common flower"),
("product-12",40,"flowerbox",2,"thumb-2.jpg.webp","thumb-2.jpg.webp", "Most people are unaware of the less common flower"),
("product-13",37,"flowerbox",1,"thumb-3.jpg.webp","thumb-3.jpg.webp", "Most people are unaware of the less common flower"),
("product-14",29,"flowershelf",4,"thumb-4.jpg.webp","thumb-4.jpg.webp", "Most people are unaware of the less common flower"),
("product-15",16,"basketflower",3,"thumb-5.jpg.webp","thumb-5.jpg.webp", "Most people are unaware of the less common flower");

CREATE TABLE IF NOT EXISTS reviews (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_id INT NOT NULL ,
    user_id INT NOT NULL,
    reviews MEDIUMTEXT NOT NULL DEFAULT "Enter Your Review",
    JOD TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    upload_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS comments (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_id INT NOT NULL,
    user_id INT NOT NULL,
    comments MEDIUMTEXT NOT NULL DEFAULT "Enter Your Comment",
    JOD TIME DEFAULT NOW(),
    upload_time DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS orders (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_id INT NOT NULL,
    user_id INT NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    create_at TIMESTAMP DEFAULT NOW(),
    amount INT NOT NULL DEFAULT "1",
    ordernote MEDIUMTEXT,
    p_name VARCHAR(255) NOT NULL,
    price INT NOT NULL,
    categories CHAR(200),
    rating INT NOT NULL,
    product_img1 BLOB NOT NULL ,
    product_img2 BLOB NOT NULL,
    description MEDIUMTEXT
);


CREATE TABLE IF NOT EXISTS blogs (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL DEFAULT "Your Name",
    email VARCHAR(255) NOT NULL DEFAULT "Your Email",
    create_at DATETIME NOT NULL DEFAULT NOW(),
    upload_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    comments MEDIUMTEXT 
);

CREATE TABLE IF NOT EXISTS contacts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    message TEXT
);


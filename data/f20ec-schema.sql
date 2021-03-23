CREATE TABLE orders (
  ord_id            INTEGER PRIMARY KEY AUTOINCREMENT,
  ord_del_name      TEXT,
  ord_del_addr_1    TEXT,
  ord_del_addr_2    TEXT,
  ord_del_postcode  TEXT,
  ord_del_city      TEXT,
  ord_del_county    TEXT,
  ord_auth_code     TEXT
);

CREATE TABLE products ( 
  prod_id         INTEGER PRIMARY KEY AUTOINCREMENT,
  prod_name       TEXT,
  prod_desc       TEXT,
  prod_price      REAL,
  prod_stock      INTEGER,
  prod_created    INTEGER
);

CREATE TABLE accounts (
  acc_id          INTEGER PRIMARY KEY AUTOINCREMENT,
  acc_username    TEXT,
  acc_password    TEXT,
  acc_created     INTEGER
);

CREATE TABLE product_img (
  prod_img_id     INTEGER PRIMARY KEY AUTOINCREMENT,
  prod_img_link   TEXT,
  prod_id         TEXT,
  FOREIGN KEY (prod_id) REFERENCES products(prod_id)
);

CREATE TABLE baskets (
  acc_id            INTEGER,
  prod_id           INTEGER,
  ord_id            INTEGER,
  bask_amount       INTEGER,
  bask_ship_status  TEXT,
  bask_consign_no   TEXT,
  FOREIGN KEY (acc_id)  REFERENCES accounts(acc_id),
  FOREIGN KEY (prod_id) REFERENCES products(prod_id),
  FOREIGN KEY (ord_id)  REFERENCES orders(ord_id)
);

INSERT INTO products 
  (prod_name, prod_desc, prod_price, prod_stock, prod_created)
VALUES
  ( "Black face mask 10pc", 
    "Black face mask description! Triple-layered and very warm on hot days.",
    12.99,
    1000,
    strftime('%s','now'));

INSERT INTO products 
  (prod_name, prod_desc, prod_price, prod_stock, prod_created)
VALUES
  ( "Pink face mask 10pc", 
    "Pink face mask description! Very snazzy indeed.",
    13.99,
    1000,
    strftime('%s','now'));

INSERT INTO product_img (prod_img_link, prod_id) VALUES ("/~bm56/f20ec/public/content/images/1_1.jpg", 1);
INSERT INTO product_img (prod_img_link, prod_id) VALUES ("/~bm56/f20ec/public/content/images/1_2.jpg", 1);
INSERT INTO product_img (prod_img_link, prod_id) VALUES ("/~bm56/f20ec/public/content/images/2_1.jpg", 2);
INSERT INTO product_img (prod_img_link, prod_id) VALUES ("/~bm56/f20ec/public/content/images/2_2.jpg", 2);
INSERT INTO product_img (prod_img_link, prod_id) VALUES ("/~bm56/f20ec/public/content/images/2_3.jpg", 2);
INSERT INTO product_img (prod_img_link, prod_id) VALUES ("/~bm56/f20ec/public/content/images/2_4.jpg", 2);
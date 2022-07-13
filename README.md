# A CRUD Product Website
Group 3 members includes Kean Whatanak, Ouk Vattanak, and Hem RithyBondeth.

## Database Schema
```
CREATE DATABASE lab4;
USE lab4;
CREATE TABLE IF NOT EXISTS users(
 u_id int primary key AUTO_INCREMENT,
    u_name varchar(20),
    u_gender varchar(10),
    u_class varchar(2),
    u_password varchar(50),
    u_gmail varchar(50)
);

CREATE TABLE IF NOT EXISTS products(
 p_id int primary key AUTO_INCREMENT,
    p_name varchar(20),
 u_id int,
    p_amount int, 
    p_price double,
    FOREIGN KEY (u_id) REFERENCES users(u_id)
);
```

## Screenshots

![Screenshot from 2022-07-13 21-19-07](https://user-images.githubusercontent.com/85047164/178759088-6af034d8-803c-4da6-a6c9-e9aab6419837.png)
![Screenshot from 2022-07-13 21-19-10](https://user-images.githubusercontent.com/85047164/178759363-4262c0a9-8716-46ea-bdbe-bf91428a31f5.png)
![Screenshot![Screenshot from 2022-07-13 21-19-31](https://user-images.githubusercontent.com/85047164/178759401-9b05db68-44e4-498c-8ed0-2267e2328803.png)
 from 2022-07-13 21-19-28](https://user-images.githubusercontent.com/85047164/178759377-b4149f02-3e82-42ce-a93c-619627fc14f9.png)
![Screenshot from 2022-07-13 21-19-42](https://user-images.githubusercontent.com/85047164/178759408-e8d71f9c-6f7a-4cb1-a776-79d7ef0fd425.png)

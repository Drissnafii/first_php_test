creat database phptest;

CREATE TABLE role (
	id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(50)
)

CREATE TABLE userX (
	id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(50),
    email varchar(100),
    role_id int,
    FOREIGN KEY role_id references role(id)
)
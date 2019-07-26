CREATE TABLE jobs(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  job ENUM('Programador', 'Tecnico', 'Obrero') NOT NULL,
  reg_date TIMESTAMP
);
CREATE TABLE data(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  date_admission DATE NOT NULL,
  date_retirement DATE NOT NULL,
  salary INT(13) NOT NULL,
  job INT(6) NOT NULL,
  FOREIGN KEY (job) REFERENCES jobs(id),
  reg_date TIMESTAMP
);
CREATE TABLE employees(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(40) NOT NULL,
  age INT(2) NOT NULL,
  children INT(2),
  job INT(6) NOT NULL,
  data INT(6) NOT NULL,
  FOREIGN KEY (data) REFERENCES data(id),
  FOREIGN KEY (job) REFERENCES jobs(id),
  reg_date TIMESTAMP
);
INSERT INTO
  `jobs` (id, job)
VALUES
  (1, 1);
INSERT INTO
  `jobs` (id, job)
VALUES
  (2, 2);
INSERT INTO
  `jobs` (id, job)
VALUES
  (3, 3);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1999-12-12', '2019-12-12', 3000000, 1);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1993-11-11', '2017-12-12', 2000000, 2);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1998-10-10', '2016-12-12', 6000000, 3);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1992-02-02', '2012-12-12', 1000000, 1);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1990-02-02', '2014-12-12', 3000000, 2);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1988-02-02', '2010-02-12', 1000000, 3);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1983-01-12', '2002-12-12', 1000000, 1);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1991-12-08', '2009-12-12', 3000000, 2);
INSERT INTO
  `data` (date_admission, date_retirement, salary, job)
VALUES
  ('1982-01-03', '2001-12-12', 4000000, 3);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Henry', 26, 0, 1, 1);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Luis', 19, 4, 2, 2);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Jose', 22, 1, 3, 3);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Victor', 29, 2, 1, 4);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Julio', 19, 0, 2, 5);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Shamaru', 20, 0, 3, 6);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Marielys', 21, 1, 1, 7);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Drivanys', 29, 3, 2, 8);
INSERT INTO
  `employees` (name, age, children, job, data)
VALUES
  ('Carhen', 25, 2, 3, 9);

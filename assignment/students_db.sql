CREATE DATABASE students;

CREATE TABLE stud_info
(
  stud_ID INT(10) PRIMARY KEY NOT NULL,
  f_name VARCHAR(50) NOT NULL,
  m_name VARCHAR(50) NOT NULL,
  l_name VARCHAR(50) NOT NULL,
  suffix VARCHAR(10) NOT NULL,
  course VARCHAR(20) NOT NULL,
  yr_sec VARCHAR(30) NOT NULL
);
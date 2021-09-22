-- Table Structure for Admin Table

CREATE TABLE `admin` (
  `Admin_id` int(7) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
);

-- Inserting Dummy records

insert into `admin` (1, `Admin`, `admin@gmail.com','admin@123');

-- Table sturucture for employee table

CREATE TABLE `employee` (
  `Emp_name` varchar(50) NOT NULL,
  `Emp_email` varchar(100) NOT NULL,
  `Emp_pwd` varchar(50) NOT NULL,
  `allocated_project` varchar(250) NOT NULL,

  `Address` varchar(250) NOT NULL,

`Skill` varchar(250) NOT NULL,

  `Phone_no` varchar(50) NOT NULL,
  `Reporting_manager` varchar(250) NOT NULL,
`Emp_id` varchar(50) primary key
);

-- Inserting Dummy records

insert into `employee` ('Aaaa','Aaaa@gmail.com','123','ROBOTICS','kiet','AI,Ml','1212','Naresh',1);

insert into `employee` ('Abbb','Abbb@gmail.com','456','Student24','kiet','blockchain,React','4545','Prashant',2);

insert into `employee` ('Accc','Accc@gmail.com','789','RYBH','kiet','Kotlin,JAVA','7878','Ankit',3);

insert into `employee` ('Addd','Addd@gmail.com','741','Chatting Systems','kiet','Mern','7474','Vipin',4);

insert into `employee` ('Aeee','Aeee@gmail.com','852','chatbots','kiet','AI','8585','Neelam',5);

insert into `employee` ('Afff','Afff@gmail.com','963','portfolio','kiet','AI','9696','Arun',6);

insert into `employee` ('Daaa','Daaa@gmail.com','111','ROBOTICS','GZB','Mern','1000','Garud',101);





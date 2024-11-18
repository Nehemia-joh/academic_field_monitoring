create database field;

use field;

create table users(
    id int auto_increment primary key,
    username varchar(50),
    password varchar(20),
    role int(1)
    );


    create table students(
        FullName varchar(100),
        RegNo varchar(15) primary key,
        FieldLocation text,
        Organization text,
        Level text
    );

    create table Activity(
        Activity text,
        date date,
        RegNo varchar(15),
        FOREIGN KEY (`RegNo`) REFERENCES students(`RegNo`)
    );


create table supervisors(
    FullName varchar(100),
    PhoneNumber varchar(13),
    email varchar(50) primary key 
);

create table appointed(
    RegNo varchar(15),
    email text,
    value text,
    FOREIGN KEY (`RegNo`) REFERENCES students(`RegNo`)
);

create table onsitesupervisors(
    FullName varchar(100),
    PhoneNumber varchar(13),
    email varchar(50) primary key 
);

create table siteappointed(
    RegNo varchar(15),
    email text,
    value int,
    FOREIGN KEY (`RegNo`) REFERENCES students(`RegNo`)
);

create table onsitesupervisorsComments(
    RegNo varchar(15),
    email text,
    Comment text,
    date date,
    FOREIGN KEY (`RegNo`) REFERENCES students(`RegNo`)
);

create table fieldQuestions(
    RegNo varchar(15),
    ActivitySummary int,
    challengesAndSolution int,
    KnowledgeGain int,
    RelationshipClassAndField int,
    LearningObjectives int,
    FOREIGN KEY (`RegNo`) REFERENCES students(`RegNo`)
);

create table attend(
    RegNo varchar(15),
    email text,
    value text,
    FieldLocation text,
    FOREIGN KEY (`RegNo`) REFERENCES students(`RegNo`)
);

create table ReportSubmission(
    Report nvarchar(100),
    RegNo varchar(15),
    FOREIGN KEY (`RegNo`) REFERENCES students(`RegNo`)
);

create table FinalScore(
    Score int,
    Grade text,
    RegNo varchar(15),
    FOREIGN KEY (`RegNo`) REFERENCES students(`RegNo`)

);
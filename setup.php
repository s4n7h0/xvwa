<?php 
// setup xvwa
/* Database Structure & Queries

CREATE DATABASE `xvwa` ;

Comments 

CREATE TABLE `xvwa`.`comments` (
`id` INT NOT NULL ,
`user` VARCHAR( 20 ) NOT NULL ,
`comment` TEXT NOT NULL ,
`date` DATE NOT NULL ,
PRIMARY KEY ( `id` )
) ENGINE = MYISAM ;

INSERT INTO comments (id,user,comment,date) VALUES ('1', 'admin', 'Keep posting your comments here ', '2015-08-10');

===================================================

//connection successfull.
        $dbselect=mysql_select_db($dbname,$conn);
        if($dbselect){
            echo "<span class=\"glyphicon glyphicon-star\"></span>&nbsp;&nbsp;";
            echo "Connected to database Sucessfully.<br>";   
            // creating tables
            $table_comment=mysql_query('create table comments(id int,comment varchar(100),date date)',$conn);
            if(table_comment){
                $insert_comment=mysql_query('INSERT INTO comments (id,user,comment,date) VALUES ('1', 'admin', 'Keep posting your comments here ', '2015-08-10');
',$conn);
                if(insert_comment){
                    echo "<span class=\"glyphicon glyphicon-star\"></span>&nbsp;&nbsp;";
                    echo "Table comments sucessfully.<br>"; 
                }else{
                    echo "<span class=\"glyphicon glyphicon-star\"></span>&nbsp;&nbsp;";
                    echo "Can not create table comment. Try submit/reset again. <br>"; 
                }
            }else{            
                echo "<span class=\"glyphicon glyphicon-star\"></span>&nbsp;&nbsp;";
                echo "Failed to use/select database. Check the configuration file.<br>";
            }
        }


?>



Title: Photo Tagging
Author: Neill Horsman
URL: http://www.neillh.com.au
Credits:
 jQuery - http://www.jquery.com/
 jQuery ImgAreaSelect - http://odyniec.net/projects/imgareaselect/


Notes.

Feel free to edit and redistribute this code as you wish, keen to see what people come up with so send me over an email info@neillh.com.au

Working in Firefox, Chrome, Safari, IE8

Edit includes/conn.php to add your own database connection details


Databases.

CREATE TABLE phototags (
   id int(255) NOT NULL AUTO_INCREMENT,
   photoid int(11) NOT NULL,
   title varchar(255) NOT NULL,
   x1 int(11) DEFAULT NULL,
   y1 int(11) DEFAULT NULL,
   x2 int(11) DEFAULT NULL,
   y2 int(11) DEFAULT NULL,
   width int(11) DEFAULT NULL,
   height int(11) DEFAULT NULL,
   PRIMARY KEY (id)
)
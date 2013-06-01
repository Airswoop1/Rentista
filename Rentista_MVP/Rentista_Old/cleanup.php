<?php
/**
Clean up script for DB and files
**/

system('rm -f ZippedFiles/*');
system('rm -f UserNotes/*'); 
system('rm -f UploadedFiles/*');

system('mysql -u root -proot RentistaMVP < SQL_Files/rentista_db_createtables.sql');
system('mysql -u root -proot RentistaMVP < SQL_Files/insert_dummy_data.sql');

echo "done";


?>
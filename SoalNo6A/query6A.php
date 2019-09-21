<!-- bisa digunakan di dbms phpmyadmin dengan database arkademy.sql  -->
<!-- query -->
SELECT `name`.`name` AS name, `work`.`name` AS work, `salary` FROM `name` JOIN `work` ON `name`.`id_work` = `work`.`id`JOIN `salary`ON `name`.`id_salary` = `salary`.`id`;
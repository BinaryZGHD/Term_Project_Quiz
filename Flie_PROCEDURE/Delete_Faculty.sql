DELIMITER $$
DROP PROCEDURE IF EXISTS Delete_Faculty$$
CREATE PROCEDURE Delete_Faculty
(IN fac_code VARCHAR(3))
BEGIN
    
       DELETE FROM faculty
        WHERE faculty.fac_code = fac_code;
    
END$$
DELIMITER ;

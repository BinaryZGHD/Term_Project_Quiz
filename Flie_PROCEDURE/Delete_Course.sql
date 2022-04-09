DELIMITER $$
DROP PROCEDURE IF EXISTS Delete_Course$$
CREATE PROCEDURE Delete_Course
(IN crs_code VARCHAR(10))
BEGIN
    
        DELETE FROM course
        WHERE course.crs_code = crs_code;
    
END$$
DELIMITER ;

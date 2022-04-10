DELIMITER $$
DROP PROCEDURE IF EXISTS GetStudentByFaculty $$

CREATE PROCEDURE GetStudentByFaculty
(IN StudentName VARCHAR(255))
BEGIN

    SELECT * FROM student WHERE std_fac_code = StudentName;

END$$

DELIMITER ;
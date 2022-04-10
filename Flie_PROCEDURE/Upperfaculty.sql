DELIMITER $$
DROP TRIGGER IF EXISTS Upperfaculty $$
CREATE TRIGGER Upperfaculty
    BEFORE INSERT ON faculty
    FOR EACH ROW
BEGIN
    IF (New.fac_code IS NOT NULL) THEN
        SET New.fac_code = UPPER(New.fac_code);
        
    END IF;

END $$
DELIMITER ;
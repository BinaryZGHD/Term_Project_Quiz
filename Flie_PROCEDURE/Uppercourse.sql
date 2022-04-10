DELIMITER $$
DROP TRIGGER IF EXISTS Uppercourse $$
CREATE TRIGGER Uppercourse
    BEFORE INSERT ON course
    FOR EACH ROW
BEGIN
    IF (New.crs_code IS NOT NULL) THEN
        SET New.crs_code = UPPER(New.crs_code);
        
    END IF;

END $$
DELIMITER ;
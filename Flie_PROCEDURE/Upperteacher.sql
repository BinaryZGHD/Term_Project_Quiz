DELIMITER $$
DROP TRIGGER IF EXISTS Upperteacher$$
CREATE TRIGGER Upperteacher
    BEFORE INSERT ON teacher
    FOR EACH ROW
BEGIN
    IF (New.tch_code IS NOT NULL) THEN
        SET New.tch_code = UPPER(New.tch_code);
        
    END IF;

END $$
DELIMITER ;
DELIMITER $$
DROP TRIGGER IF EXISTS Upperstudent$$
CREATE TRIGGER Upperstudent
    BEFORE INSERT ON student
    FOR EACH ROW
BEGIN
    IF (New.std_code IS NOT NULL) THEN
        SET New.std_code = UPPER(New.std_code);
        
    END IF;

END $$
DELIMITER ;
DELIMITER $$
DROP TRIGGER IF EXISTS Qquestion $$
CREATE TRIGGER Qquestion
    BEFORE INSERT ON question
    FOR EACH ROW
BEGIN
    IF (New.qs_question IS NOT NULL) THEN
        SET New.qs_question = qs_question +'?';
        
    END IF;

END $$
DELIMITER ;
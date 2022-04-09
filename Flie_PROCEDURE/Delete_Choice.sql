DELIMITER $$
DROP PROCEDURE IF EXISTS Delete_Choice$$
CREATE PROCEDURE Delete_Choice
(IN ch_qs_id INT(11), IN ch_no INT(11))
BEGIN

    DELETE FROM choice
    WHERE choice.ch_qs_id = ch_qs_id
    AND choice.ch_no = ch_no;

END$$

DELIMITER ;




DELIMITER $$
CREATE PROCEDURE Edit_config
(INOUT in_ccf_year CHAR(4), 
INOUT in_ccf_term CHAR(1), 
INOUT in_ccf_crs_code VARCHAR(10), 
INOUT in_ccf_num_exam INT(11))
    NO SQL
BEGIN
    DECLARE in_ccf_year   CHAR(4);
    DECLARE in_ccf_term CHAR(1);
    DECLARE in_ccf_crs_code VARCHAR(10);
    DECLARE in_ccf_num_exam INT(11);
    
    
    SET  in_ccf_year = ccf_year;
    SET  in_ccf_term = ccf_term;
    SET  in_ccf_crs_code = ccf_crs_code;
    SET  in_ccf_num_exam = ccf_num_exam;
   
     
    DELETE FROM course_config
    WHERE choice.ch_qs_id =  ch_qs_id 
    AND choice.ccf_term =  ccf_term
    AND choice.ccf_crs_code =  ccf_crs_code
    AND choice.ccf_num_exam =  ccf_num_exam
    ;

INSERT INTO course_config(ccf_year, ccf_term, ccf_crs_code, ccf_num_exam) 
VALUES (ccf_year,ccf_term,ccf_crs_code,ccf_num_exam)




END$$
DELIMITER ;
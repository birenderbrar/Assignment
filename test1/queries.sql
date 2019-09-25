CREATE TABLE AirSuiteInterview(
    ID INT NOT NULL,
    Value_Key CHAR(6),
    Value_Data VARCHAR(120),
    PRIMARY KEY (ID)
);
INSERT INTO AirSuiteInterview
VALUES (1, FIRSTK, NULL),
       (2, SECOND,This is second entery ),
       (3, THIRD, THIS is THE third ENTRY);
      
SELECT * REVERSE(Value_Data) FROM AirSuiteInterview 
WHERE ID ==3;

SELECT * FROM AirSuiteInterview 
WHERE Value_Key == SECOND; 
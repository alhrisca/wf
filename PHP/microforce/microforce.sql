use microforce;

INSERT INTO students(firstname, lastname) values
	('Darryl', 'Bellard'), 
	('Lizette', 'Homer'), 
    ('Dorothy', 'Madison'),
    ('Virginia', 'Albright'),
    ('Stephanie', 'Chadwick'),
    ('Cynthia', 'Foley');
    
INSERT INTO students(firstname, lastname) value
    ('Margie', '<script>alert("hello world");</script>');

SELECT * FROM microforce.students;
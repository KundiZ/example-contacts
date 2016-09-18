

DROP TABLE IF EXISTS contacts;
CREATE TABLE contacts 
(
`id` varchar(3) NOT NULL,
`surname` varchar(80),
`firstname` varchar(80),
`phone` varchar(80),
`email` varchar(80),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO contacts (id, surname, firstname, phone, email) VALUES
    ('js', 'Smith', 'John', '555-1234', 'john@smith.com'),
    ('007', 'Bond', 'James', '555-0007', '007@spiesrus.org'),
    ('ls', 'Skywalker', 'Luke', '604-555-9999', 'luke@rebelalliance.com');



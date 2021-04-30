USE ucode_web;
INSERT INTO heroes (name, description, class_role, race) VALUES
    ('hero1', 'some description', 'healer', 'orc'),
    ('hero8', 'some description', 'tankman', 'elf'),
    ('anton', 'some description', 'tankman', 'daun');
INSERT INTO heroes (name, description, class_role) VALUES
    ('hero2', 'some description', 'dps'),
    ('hero3', 'some description', 'healer'),
    ('hero4', 'some description', 'tankman'),
    ('hero5', 'some description', 'dps'),
    ('hero6', 'some description', 'healer'),
    ('hero7', 'some description', 'dps'),
    ('hero9', 'some description', 'healer');
SELECT * FROM heroes;

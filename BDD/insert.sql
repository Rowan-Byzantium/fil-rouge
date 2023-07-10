INSERT INTO characters(name, faceclaim, credit, age)
VALUES  ('Alexander of Kylsant')
        ('Blade Shinwara', 'Bible Wichapas Sumettikul', 'mooncalf', 30),
        ('Edden Ikarius', 'Gauge Burek', 'poesiescendrees', 361),
        ('Kurogane Reiji', 'Miyavi', 'hel', 41),
        ('Cobalt Hopkins', 'Tripp Kilpatrick', 'hel', 25);

INSERT INTO faction (faction)
VALUES  ('evolutionniste'),
        ('conservateur'),
        ('the damned'),
        ('the passenger'),
        ('the outsider');

INSERT INTO universe (forum_name)
VALUES  ('Maleficis Ambulare'),
        ('The Red Tide');

INSERT INTO gender (gender)
VALUES  ('M'),
        ('F'),
        ('NB');

INSERT INTO divide (id_universe, id_faction)
VALUES  (1, 1),
        (1, 2),
        (2, 3),
        (2, 4),
        (2, 5);

INSERT INTO belong (id_characters, id_faction)
VALUES  (1, 4),
        (2, 3),
        (3, 1),
        (5, 2),
        (6, 6);

INSERT INTO status (status_name)
VALUES  ('active'),
        ('inactive');
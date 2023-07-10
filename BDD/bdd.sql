CREATE DATABASE fil_rouge;

CREATE TABLE characters(
        id_characters SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        faceclaim VARCHAR(50) NOT NULL,
        credit VARCHAR(50)NOT NULL,
        age INT(8),
        id_gender SMALLINT UNSIGNED NOT NULL,

        PRIMARY KEY (id_characters),
        FOREIGN KEY (id_gender) REFERENCES gender(id_gender)
);

CREATE TABLE gender(
    id_gender SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    gender VARCHAR(2) NOT NULL,

    PRIMARY KEY(id_gender)
);

CREATE TABLE colors(
    id_colors INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
    color VARCHAR(7) NOT NULL DEFAULT '#1F1F1F',

    PRIMARY KEY(id_colors)
);

CREATE TABLE present(
    id_characters SMALLINT UNSIGNED NOT NULL,
    id_colors INT(8) UNSIGNED NOT NULL,

    PRIMARY KEY (id_characters, id_colors),
    FOREIGN KEY(Id_characters) REFERENCES characters(id_characters),
    FOREIGN KEY(Id_colors) REFERENCES colors(id_colors)
);

CREATE TABLE faction(
    id_faction SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    faction VARCHAR(50) NOT NULL DEFAULT '-',

    PRIMARY KEY(id_faction)
);

CREATE TABLE belong(
    id_characters SMALLINT UNSIGNED NOT NULL,
    id_faction SMALLINT UNSIGNED NOT NULL,

    PRIMARY KEY(id_characters, id_faction),
    FOREIGN KEY(id_characters) REFERENCES characters(id_characters)
);

CREATE TABLE universe(
    id_universe SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    forum_name VARCHAR(30) NOT NULL,

    PRIMARY KEY (id_universe)
);

CREATE TABLE divide(
    id_universe SMALLINT UNSIGNED NOT NULL,
    id_faction SMALLINT UNSIGNED NOT NULL,

    PRIMARY KEY(id_universe, id_faction),
    FOREIGN KEY(id_universe) REFERENCES universe(id_universe),
    FOREIGN KEY(id_faction) REFERENCES faction(id_faction)
);

CREATE TABLE carac(
    id_carac SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    carac_name VARCHAR(50),

    PRIMARY KEY(id_carac)
);

CREATE TABLE possess(
    id_characters SMALLINT UNSIGNED NOT NULL,
    id_carac SMALLINT UNSIGNED NOT NULL,
    carac_value TEXT,

    PRIMARY KEY(id_characters, id_carac),
    FOREIGN KEY(id_characters) REFERENCES characters(id_characters),
    FOREIGN KEY(id_carac) REFERENCES carac(id_carac)
);

CREATE TABLE status(
    id_status SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT, 
    status_name VARCHAR(10) NOT NULL DEFAULT 'active',

    PRIMARY KEY (id_status)
)
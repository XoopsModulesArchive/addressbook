CREATE TABLE addressbook (
    id        INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255)    NOT NULL,
    lastname  VARCHAR(255)    NOT NULL,
    address   TEXT            NOT NULL,
    home      TEXT            NOT NULL,
    mobile    TEXT            NOT NULL,
    work      TEXT            NOT NULL,
    email     TEXT            NOT NULL,
    email2    TEXT            NOT NULL,
    bday      TINYINT(2)      NOT NULL,
    bmonth    VARCHAR(50)     NOT NULL,
    byear     VARCHAR(4)      NOT NULL,
    PRIMARY KEY (id)
);

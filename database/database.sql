-- ============================================================
-- base de données : mvc_db
-- type : MySQL V5.0 (non en vrai je sais pas)
-- date de création : janvier 2021
-- auteurs : Thomas GRAULLE
-- ============================================================
START TRANSACTION;

-- ============================================================================
--   mot de passe par défaut
-- ============================================================================
SET @defautMotDePasse = "1xxxxxx!";

-- ============================================================
--   Suppression et création de la base de données
-- ============================================================

DROP DATABASE IF EXISTS php_database_connexion;
CREATE DATABASE php_database_connexion;
USE php_database_connexion;

CREATE TABLE user (
                      id_user              BIGINT UNSIGNED AUTO_INCREMENT,
                      pseudo_user          VARCHAR(40) NOT NULL,
                      password_user        VARCHAR(130) NOT NULL,
                      CONSTRAINT PK_user PRIMARY KEY (id_user)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ===============================================================================================================
--   insertion des utilisateurs dans la base de données
-- ===============================================================================================================
INSERT INTO user(pseudo_user, password_user) VALUES("thomas", @defautMotDePasse);
INSERT INTO user(pseudo_user, password_user) VALUES("bily", @defautMotDePasse);
INSERT INTO user(pseudo_user, password_user) VALUES("user1", @defautMotDePasse);
INSERT INTO user(pseudo_user, password_user) VALUES("user2", @defautMotDePasse);
INSERT INTO user(pseudo_user, password_user) VALUES("titi", @defautMotDePasse);
INSERT INTO user(pseudo_user, password_user) VALUES("francis", @defautMotDePasse);
INSERT INTO user(pseudo_user, password_user) VALUES("anto", @defautMotDePasse);
INSERT INTO user(pseudo_user, password_user) VALUES("bernard", @defautMotDePasse);

-- ===============================================================================================================
--   validation de la transaction
-- ===============================================================================================================
COMMIT;

+-------------------------+
| Tables_in_projet_europe |
+-------------------------+
| centre_interet          |
| commentaire_membre      |
| interesse               |
| membre                  |
| membre_centre_interet   |
| participer              |
| salon_rdv               |
| sujet                   |
+-------------------------+

DESC centre_interet;
+-------------------+--------------+------+-----+---------+----------------+
| Field             | Type         | Null | Key | Default | Extra          |
+-------------------+--------------+------+-----+---------+----------------+
| id_centre_interet | int(11)      | NO   | PRI | NULL    | auto_increment |
| nom_ci            | varchar(20)  | NO   | UNI | NULL    |                |
| description_ci    | varchar(100) | NO   |     | NULL    |                |
+-------------------+--------------+------+-----+---------+----------------+

DESC commentaire_membre;
+-------------------+-------------+------+-----+---------+-------+
| Field             | Type        | Null | Key | Default | Extra |
+-------------------+-------------+------+-----+---------+-------+
| id_membre         | int(11)     | NO   |     | NULL    |       |
| id_sujet          | int(11)     | NO   |     | NULL    |       |
| commentaire_sujet | varchar(11) | NO   |     | NULL    |       |
+-------------------+-------------+------+-----+---------+-------+

DESC interesse;
+-------------------+--------------+------+-----+---------+-------+
| Field             | Type         | Null | Key | Default | Extra |
+-------------------+--------------+------+-----+---------+-------+
| id_sujet          | int(11)      | NO   |     | NULL    |       |
| id_membre         | int(11)      | NO   |     | NULL    |       |
| commentaire_sujet | varchar(200) | NO   |     | NULL    |       |
| statut            | int(1)       | NO   |     | NULL    |       |
+-------------------+--------------+------+-----+---------+-------+

DESC membre;
+------------------+-----------------------+------+-----+---------+-------+
| Field            | Type                  | Null | Key | Default | Extra |
+------------------+-----------------------+------+-----+---------+-------+
| id_membre        | int(11)               | NO   |     | NULL    |       |
| prenom           | varchar(20)           | NO   |     | NULL    |       |
| nom              | varchar(20)           | NO   |     | NULL    |       |
| pseudo           | varchar(20)           | NO   |     | NULL    |       |
| mail             | varchar(50)           | NO   |     | NULL    |       |
| nationalite      | varchar(20)           | NO   |     | NULL    |       |
| statut           | int(1)                | NO   |     | NULL    |       |
| photo            | varchar(200)          | NO   |     | NULL    |       |
| genre            | enum('m','f','autre') | NO   |     | NULL    |       |
| date_naissance   | date                  | NO   |     | NULL    |       |
| age_public       | int(11)               | NO   |     | NULL    |       |
| date_inscription | datetime              | NO   |     | NULL    |       |
| autre            | text                  | NO   |     | NULL    |       |
+------------------+-----------------------+------+-----+---------+-------+

DESC membre_centre_interet;
+-------------------+---------+------+-----+---------+-------+
| Field             | Type    | Null | Key | Default | Extra |
+-------------------+---------+------+-----+---------+-------+
| id_membre         | int(11) | NO   |     | NULL    |       |
| id_centre_interet | int(11) | NO   |     | NULL    |       |
+-------------------+---------+------+-----+---------+-------+

DESC participer;
+-----------+---------+------+-----+---------+-------+
| Field     | Type    | Null | Key | Default | Extra |
+-----------+---------+------+-----+---------+-------+
| id_salon  | int(11) | NO   |     | NULL    |       |
| id_membre | int(11) | NO   |     | NULL    |       |
| statut    | int(11) | NO   |     | NULL    |       |
+-----------+---------+------+-----+---------+-------+

DESC salon_rdv;
+---------------------+-------------+------+-----+---------+----------------+
| Field               | Type        | Null | Key | Default | Extra          |
+---------------------+-------------+------+-----+---------+----------------+
| id_salon            | int(11)     | NO   | PRI | NULL    | auto_increment |
| id_sujet            | int(11)     | NO   |     | NULL    |                |
| nombre_participants | int(11)     | NO   |     | NULL    |                |
| id_membre_maitre    | int(11)     | NO   |     | NULL    |                |
| lieu_rdv            | varchar(50) | NO   |     | NULL    |                |
| date_rdv            | datetime    | NO   |     | NULL    |                |
+---------------------+-------------+------+-----+---------+----------------+

DESC sujet;
+-------------------+--------------+------+-----+---------+----------------+
| Field             | Type         | Null | Key | Default | Extra          |
+-------------------+--------------+------+-----+---------+----------------+
| id_sujet          | int(11)      | NO   | PRI | NULL    | auto_increment |
| nom_sujet         | varchar(20)  | NO   | UNI | NULL    |                |
| id_centre_sujet   | int(11)      | NO   |     | NULL    |                |
| photo_sujet       | varchar(200) | NO   |     | NULL    |                |
| description_sujet | varchar(50)  | NO   |     | NULL    |                |
+-------------------+--------------+------+-----+---------+----------------+
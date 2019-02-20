
CREATE TABLE static_countries (
  cn_short_ar varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_currencies (
  cu_name_ar varchar(50) DEFAULT '' NOT NULL,
  cu_sub_name_ar varchar(20) DEFAULT '' NOT NULL
);

CREATE TABLE static_languages (
  lg_name_ar varchar(30) DEFAULT '0' NOT NULL
);

CREATE TABLE static_territories (
  tr_name_ar varchar(30) DEFAULT '0' NOT NULL
);

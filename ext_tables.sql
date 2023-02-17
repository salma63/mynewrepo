#
# Add SQL definition of database tables
#

CREATE TABLE tt_content (
	color  VARCHAR(255) NOT NULL DEFAULT '',
	contentimage VARCHAR(255) NOT NULL DEFAULT '',

);

CREATE TABLE contentimage (
	
	bodytext mediumtext COLLATE utf8mb4_unicode_ci,
	image int UNSIGNED NOT NULL DEFAULT '0',
	header_link varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	sorting          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
	parent_uid       INT(11) DEFAULT '0'             NOT NULL,
	color  VARCHAR(255) NOT NULL DEFAULT '',
	 link                    VARCHAR(1024) NOT NULL DEFAULT '',


	

	 
);

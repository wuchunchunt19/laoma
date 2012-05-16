drop table if exists user_info;
create table user_info(
	user_id int(11) primary key,
	user_name varchar(20),
	user_psd varchar(20),
	user_level int(11) default 0
)


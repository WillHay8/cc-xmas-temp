drop user 'roosterPunkUser'@'%';
create user 'roosterPunkUser'@'%' identified by 'centreparks2001';
grant all privileges on *.* to 'roosterPunkUser'@'%' with grant option;

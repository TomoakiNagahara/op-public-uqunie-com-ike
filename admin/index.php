<h1>Counter Admin</h1>
<?php
if( !OP()->isAdmin() ){
	echo $_SERVER['REMOTE_ADDR'] .', '. $_SERVER['HTTP_CF_CONNECTING_IP'] .', '. OP()->Config('admin')['admin-ip'];
	return;
}

//	...
OP()->Template('asset:/module/counter/view.php');

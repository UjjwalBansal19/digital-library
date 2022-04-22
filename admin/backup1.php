<?php
include "config.php";
//copy('e:/backup/admin.frm','e:/backup/admin.frm');
//exit;
	if($_POST['check']=='backup')
	{
		$res=mysql_list_tables("library");
		while($fres=mysql_fetch_array($res))
		{
			$query="INSERT INTO `backup` (`tablename`) VALUES ('".$fres[0]."')";
			mysql_query($query);
		}
		if($_POST['backupone']=='single')
		{
			$query="backup table ".$_POST['txtbackupdata']." to 'e:/pravin'";
			mysql_query($query);
			copy('e:/backup/'.$_POST['txtbackupdata'].'.frm','e:/backup/'.$_POST['txtbackupdata'].'.frm');
			copy('e:/backup/'.$_POST['txtbackupdata'].'.MYD','e:/backup/'.$_POST['txtbackupdata'].'.MYD');
			chdir('e:/pravin');
			unlink($_POST['txtbackupdata'].'.MYD');
			unlink($_POST['txtbackupdata'].'.frm');
			header("location:backup.php?name=backup");
			exit;
		}
		else
		{
/*			$i=rand(0,500);
			$date='e:/pravin/backup'; 
			rename('e:/pravin/backup','e:/pravin/backup'.$i);
			mkdir('e:/pravin/backup',0);*/
			$res=mysql_list_tables("library");
			while($fres=mysql_fetch_array($res))
			{
				$query="backup table ".$fres[0]." to 'e:/pravin'";
				mysql_query($query);
				copy('e:/backup/'.$fres[0].'.frm','e:/backup/'.$fres[0].'.frm');
				copy('e:/backup/'.$fres[0].'.MYD','e:/backup/'.$fres[0].'.MYD');
				chdir('e:/backup');
				unlink($fres[0].'.MYD');
				unlink($fres[0].'.frm');
			}
				header("location:backup.php?name=backup");
				exit;
		}
	}
	else
	{ 
		mysql_query("restore table backup from 'e:/backup'");
		if($_POST['restoreone']=='single')
		{
			$query="restore table ".$_POST['txtrestoredata']." from 'e:/backup'";
			mysql_query($query);
			header("location:backup.php?name=restore");
		}
		else
		{
			$res="select * from backup";
			$res1=mysql_query($res);
			$query="restore table ";
			$i=0;
			while($fres=mysql_fetch_array($res1))
			{
				if($i==0)
				{
					$query=$query.$fres[0];
				}
				else
				{
					$query=$query.", ".$fres[0];
				}
				$i=2;
			}
			$query=$query." from 'e:/backup'";
			mysql_query($query);
			header("location:backup.php?name=restore");
		}
	}
?>

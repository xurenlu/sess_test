用来检测和记录session 过期时间;
用法:
	在crontab 里添加:
	* * * * * php client.php sessid_1
	* * * * * php client.php sessid_2
	* * * * * php client.php sessid_3
其中sessid_1 sessid_2 sessid_3 是任意的session_id.

然后访问index.php 查看最近的过期时间分布;

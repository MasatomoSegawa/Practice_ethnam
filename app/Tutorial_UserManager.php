<?php
class Tutorial_UserManager{

    public function auth($mailaddress, $password)
	{
		if($mailaddress != $password){
			return Ethna::raiseNotice('メールアドレスまたは名前が正しくありません。');
		}

		return null;
	}

}
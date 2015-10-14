<?php
class Tutorial_UserManager{

    public function auth($mailaddress, $password)
	{
		if($mailaddress != $password){
			return Ethna::raiseNotice('メールアドレスまたはが正しくありません。');
		}

		return null;
	}

}
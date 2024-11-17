<?php

namespace App\Controllers;

class Email extends BaseController
{
	public function enviarEmail()
	{
		$url = base_url('/web.local/public/email/enviarEmail');
        return redirect()->to($url);
	}
}

?>
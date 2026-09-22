<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Payment;
use App\Services\Referral\ReferralService;
use Illuminate\Http\Request;

class ReferalController extends Controller
{
	public static function attach(string $code = "MASHA10")
	{
		//нужно определить текущего мастера, и привязать его к пользователю, с кодом $code
		$referralService = new ReferralService();
		$referred = new Master();

		$referralService->registerReferral($referred, $code);
		$test = 'a';
    }
}

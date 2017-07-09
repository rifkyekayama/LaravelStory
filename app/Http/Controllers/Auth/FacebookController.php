<?php
/**
 * Created by PhpStorm.
 * User: krisnawijaya
 * Date: 7/9/17
 * Time: 5:54 PM
 */
namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Socialite;
use Log;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findORCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->intended('/home');
    }

    private function findORCreateUser($facebook)
    {
        if ($authUser = User::where('facebook_id', $facebook->id)->first()) {
            return $authUser;
        }

        return User::create([
            'id' => Uuid::uuid4(),
            'facebook_id' => $facebook->id,
            'name' => $facebook->name,
            'email' => $facebook->email
        ]);
    }
}
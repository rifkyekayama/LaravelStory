<?php
/**
 * Created by PhpStorm.
 * User: krisnawijaya
 * Date: 7/9/17
 * Time: 6:11 PM
 */

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Socialite;
use Log;
use Illuminate\Support\Facades\Auth;

class TwitterController extends Controller
{
    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();

        $authUser = $this->findORCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->intended('/home');
    }

    private function findORCreateUser($twitter)
    {
        if ($authUser = User::where('twitter_id', $twitter->id)->first()) {
            return $authUser;
        }

        return User::create([
            'id' => Uuid::uuid4(),
            'twitter_id' => $twitter->id,
            'name' => $twitter->name,
            'email' => $twitter->email
        ]);
    }

    public function privacyPolicy()
    {
        return view('privacy.privacy-policy');
    }

    public function termsOfService()
    {
        return view('privacy.privacy-policy');
    }
}
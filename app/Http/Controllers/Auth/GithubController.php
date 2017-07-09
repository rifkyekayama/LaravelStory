<?php
/**
 * Created by PhpStorm.
 * User: krisnawijaya
 * Date: 7/9/17
 * Time: 9:57 AM
 */

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Socialite;
use Log;
use Illuminate\Support\Facades\Auth;

class GithubController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        $authUser = $this->findORCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->intended('/home');
    }

    private function findORCreateUser($github)
    {
        if ($authUser = User::where('github_id', $github->id)->first()) {
            return $authUser;
        }

        return User::create([
            'id' => Uuid::uuid4(),
            'github_id' => $github->id,
            'name' => $github->name,
            'email' => $github->email
        ]);
    }
}


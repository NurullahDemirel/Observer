<?php


namespace App\Traits\Observer;


use App\Models\User;
use Illuminate\Support\Facades\Cache;

trait ObservableTrait
{
    protected function clearCaches()
    {
        Cache::forget('latestThreeUser');

        Cache::rememberForever('latestThreeUser',function (){
            return User::orderBy('id','desc')->limit(3)->get();
        });
    }
}

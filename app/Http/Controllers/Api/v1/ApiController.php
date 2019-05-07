<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as  UserResource;
use App\User;
class ApiController extends Controller
{
    public function profile(Request $request){
        return UserResource::collection(User::find($request->user()));
    }
}

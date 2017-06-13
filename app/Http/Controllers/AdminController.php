<?php
/**
 * Created by PhpStorm.
 * User: arlex
 * Date: 2017/6/13
 * Time: 15:05
 */

namespace App\Http\Controllers;

use App\Admin;

class AdminController extends Controller
{

    public function login(){
        $admin = Admin::where('name','=','admin')
            ->first();
        dd($admin);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: arlex
 * Date: 2017/6/12
 * Time: 13:12
 */
namespace App\Http\Controllers;

class MemberController extends Controller{
    public function info(){
        return 'member-info';
    }

    public function detail($id){
        return route('memberinfo');//.' user id is '.$id;
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class WebsiteController extends Controller
{
    //
    public function confirm_account(){
        
        $query = \App\User::where('uuid', request('link'))->first();
        if(!empty($query)){
            if(empty($query->email_verified_at)){
                
                $query->email_verified_at = date('Y-m-d');
                $query->status = 'active';
                $query->save();
                Auth::loginUsingId($query->id);
                $data['msg'] = '<h6 class="has-text-success">Thank you for confirming your account. You have become verified part of Elite Discount</h6>';
            }else{ 
                $data['msg'] = '<h6 class="has-text-link">This link has been expired.</h6>';
            }
        }
            else{
                $data['msg'] = '<h6 class="has-text-link">User not found.</h6>';
            }
            $data['title'] = 'Account Confirmation';
     	$data['actives'] = 'email_verify';
     	return view('site/email_verify', $data);
        }

}

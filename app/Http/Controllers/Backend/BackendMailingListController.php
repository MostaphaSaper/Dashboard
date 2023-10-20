<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MailingList;

class BackendMailingListController extends Controller
{
    public function index(Request $request)
    {
        $mailing_lists =  MailingList::where(function($q)use($request){
            if($request->id!=null)
                $q->where('id',$request->id);
            if($request->user_id!=null)
                $q->where('user_id',$request->user_id);
            if($request->q!=null)
                $q->where('name','LIKE','%'.$request->q.'%')->orWhere('email','LIKE','%'.$request->q.'%');
        })->orderBy('id','DESC')->paginate();

        return view('admin.mailing-list.index',compact('mailing_lists'));
    }
}

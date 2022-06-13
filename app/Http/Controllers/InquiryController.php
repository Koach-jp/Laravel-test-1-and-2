<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function inquiryGet() {
        $items=Inquiry::all();
        return view('index',['items'=>$items]);
    }

    public function inquiryPost(inquiryRequest $request) {
        $data = $request->all();
        $isCreated = Inquiry::create($data);
        if ($isCreated) {
            return view('thanks', ['data' => $isCreated]);
        } else {
            return 'エラーが発生しました。';
        }
    }
}

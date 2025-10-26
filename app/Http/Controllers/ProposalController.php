<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function store(Request $request){
        $proposal= $request->validate([
            'template'=>'required|string',
            'businessInfo.companyName'=>'required|string',
            'businessInfo.contactPerson'=>'required|string',
            'businessInfo.email'=>'required|email',
            'businessInfo.phone'=>'required|phone',
            'businessInfo.title'=>'required|string',
            'objectives.items'=>'required|array',
            'budgets.items'=>'required|array',
            'timeline.startDate'=>'required|date',
            'timeline.endDate'=>'required|date',
            'timeline.milestones'=>'required|date'
        ]);
    }
}

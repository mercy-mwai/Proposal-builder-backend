<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function allTemplates(){
        return response()->json([
            'categories'=>[
                'business'=>'Business Proposals',
                'tenders'=> 'Government Tender Format',
                'donors'=> 'NGO/Donor Proposal',
                'quotes'=> 'Freelancer Quote',
                'Quotation'=> 'Events/Service Quotation'
            ]
        ]);
    }
    public function sortByCategory($category){
        $template= $this->getAllTemplates();
        $filteredCategory= array_filter($templates, function($category){
            return $template['$category'] === $category;
        });

        return response()->json([
            'category'=>$category,
            'templates'=>array_values($filteredCategory)
        ]);

    }
    public function sortbyId($id){
        $templates=$this->getAllTemplate();
        $template = colllect($templates)->where('id', $id)->values();
       
        if(!$template){
            return response()->json(['error'=>'Template not found']);
        }

        return response()->json([
            'template'=>$template
        ]);
    }
    private function templates(){
        return [
            [
                'id'=>1,
                'name'=> 'business-proposal',
                'category'=> 'business',
                'description'=> 'Standard business proposal Template'
            ],
            [
                'id'=>2,
                'name'=> 'Government Tender Format',
                'category'=> 'government-tenders',
                'description'=> 'Standard Government Tender Format '
            ],
            [
                'id'=>3,
                'name'=> 'NGO/Donors Proposal',
                'category'=> 'ngo-proposal',
                'description'=> 'Standard NGO/Donors Proposal '
            ],
            [
                'id'=>4,
                'name'=> 'Freelancer Quote',
                'category'=> 'freelancer-quote',
                'description'=> 'Standard Freelancer Quote '
            ],
            [
                'id'=>5,
                'name'=> 'Event/Services Quotation',
                'category'=> 'event-quotation',
                'description'=> 'Standard Event/Services Quotation'
            ],
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class Admin extends Controller {
    
    public function index() {
        return view('index');
    }
    
    public function calc()
    {
        $lumpSum = Request::get('lumpSum');
        $annualAmount = (Request::get('annualAmount'))/12;
        $minInvestLevel = Request::get('minInvestLevel');
        $exptectedMarketReturn = Request::get('exptectedMarketReturn');
        
        $yearLumpSum = $lumpSum + ($lumpSum * ($exptectedMarketReturn)/100);
        $cnt = 0;
        $months = 0;
        
        do{
            $yearLumpdiff = $yearLumpSum - ($annualAmount * 12);
            if($yearLumpdiff < $minInvestLevel)
            {
                $months = ($yearLumpSum - $minInvestLevel)/$annualAmount;
                break;
            }
            
            $yearLumpSum = $yearLumpdiff + ($yearLumpdiff * ($exptectedMarketReturn)/100);
            $cnt++;
        }while($yearLumpSum > $minInvestLevel);
         
        $months = $months + $cnt * 12;
        return Redirect::back()->with('status-results',$months);
    }
}
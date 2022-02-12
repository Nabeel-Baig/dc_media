<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(Request $request)
    {
        if (\request()->get('id') == 'membership-benefits')
        {
            $request->session()->put([
                'package_name' => \request()->get('id'),
                'amount' => 250
            ]);
            return redirect()->route('register');

        } elseif (\request()->get('id') == 'non-member')
        {
            $request->session()->put([
                'package_name' => \request()->get('id'),
                'amount' => 0
            ]);
            return redirect()->route('register');
        }elseif (\request()->get('id') == 'acting-academy')
        {
            $request->session()->put([
                'package_name' => \request()->get('id'),
                'amount' => 1800
            ]);
            return redirect()->route('register');
        }
        else {
            return redirect()->back()->withToastError('Please select a package.');
        }
    }
}

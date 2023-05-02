<?php

namespace App\Http\Controllers;

use App\Models\ViewTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EconetController extends Controller
{
    public function completed()
    {
        $completed = [];
        $trans = 0;
       



        if (request()->query('filter') == 'true') {
            $data = $this->filters();

            $completed = (!empty($data['completed'])) ? $data['completed'] : [];
            $trans = (!empty($data['count'])) ? $data['count'] : 0;
        } else {
            $trans = DB::select('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "airtime" AND status_id= 4 GROUP BY item_type ');
            $completed = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="airtime" AND tv.status_id=4 ');

           $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
        }



        $data = [
            'completed' => $completed,
            'trans' => $trans
        ];
        return view('pages.econet.completed', $data);
    }


    public function pending()
    {
        $pending = [];
        $trans = 0;
       



        if (request()->query('filter') == 'true') {
            $data = $this->filters();

            $pending = (!empty($data['completed'])) ? $data['completed'] : [];
            $trans = (!empty($data['count'])) ? $data['count'] : 0;
        } else {

            $trans = DB::select ('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "airtime" AND status_id=1 GROUP BY item_type '); 
            $pending = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="airtime" AND tv.status_id=1 ');
        
           $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
        }



        $data = [
            'pending' => $pending,
            'trans' => $trans
        ];
        return view('pages.econet.pending', $data); 
    }

    public function failed_tokens()
    {
        $tokens = [];
        $trans = 0;
       



        if (request()->query('filter') == 'true') {
            $data = $this->filters();

            $tokens = (!empty($data['tokens'])) ? $data['tokens'] : [];
            $trans = (!empty($data['count'])) ? $data['count'] : 0;
        } else {
            $trans = DB::select ('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "airtime" AND status_id= 12 GROUP BY item_type ');
            $tokens = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="airtime" AND tv.status_id=12 ');
       
        
           $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
        }



        $data = [
            'tokens' => $tokens,
            'trans' => $trans
        ];
        return view('pages.econet.tokens', $data);
        
    }

    public function failed_payements()
    {
        $failed = [];
        $trans = 0;
       



        if (request()->query('filter') == 'true') {
            $data = $this->filters();

            $failed = (!empty($data['failed'])) ? $data['failed'] : [];
            $trans = (!empty($data['count'])) ? $data['count'] : 0;
        } else {
            
            $trans = DB::select ('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "airtime" AND status_id= 13 GROUP BY item_type ');
            $failed = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="airtime" AND tv.status_id=13 ');
        
        
           $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
        }



        $data = [
            'failed' => $failed,
            'trans' => $trans
        ];
        return view('pages.econet.failed', $data);
    }

    public function filters()
    {
        try {
          $count = ViewTransaction::filter()->count();
          $failed =  ViewTransaction::filter()->get(); 
          $tokens =  ViewTransaction::filter()->get();
          $pending =  ViewTransaction::filter()->get();
          $data =  ViewTransaction::filter()->get();
          return [
            'failed' => $failed,
            'tokens' => $tokens,
            'pending' => $pending,
            'completed' => $data,
            'count' => $count,
           
            
          ];
        } catch (\Throwable $th) {
            return [];
        }
    }
}

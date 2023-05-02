<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewTransaction;
use Illuminate\Support\Facades\DB;

class DstvController extends Controller
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

            $trans = DB::select ('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "dstv" AND status_id= 4 GROUP BY item_type ');
            $completed = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="dstv" AND tv.status_id=4 ');
         


            $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
        }



        $data = [
            'completed' => $completed,
            'trans' => $trans
        ];
        return view('pages.dstv.completed', $data);
    }

    public function paid()
    {
        $paid = [];
        $trans = 0;

        if (request()->query('filter') == 'true') {
            $data = $this->filters();

            $paid = (!empty($data['paid'])) ? $data['paid'] : [];
            $trans = (!empty($data['count'])) ? $data['count'] : 0;
        } else {
            $trans = DB::select('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "dstv" AND status_id= 9 GROUP BY item_type ');
            $paid = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="dstv" AND tv.status_id=9 ');


            $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
        }



        $data = [
            'paid' => $paid,
            'trans' => $trans
        ];
        return view('pages.dstv.paid', $data);
    }

   public function pending()
   {
    $pending = [];
    $trans = 0;

    if (request()->query('filter') == 'true') {
        $data = $this->filters();

        $pending = (!empty($data['pending'])) ? $data['pending'] : [];
        $trans = (!empty($data['count'])) ? $data['count'] : 0;
    } else {
        $trans = DB::select ('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "dstv" AND status_id=1 GROUP BY item_type '); 
        $pending = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="dstv" AND tv.status_id=1 ');
        
        


        $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
    }



    $data = [
        'pending' => $pending,
        'trans' => $trans
    ];
    return view('pages.dstv.pending', $data);
   }



   public function processing()
   {
    $processing = [];
    $trans = 0;

    if (request()->query('filter') == 'true') {
        $data = $this->filters();

        $processing = (!empty($data['processing'])) ? $data['processing'] : [];
        $trans = (!empty($data['count'])) ? $data['count'] : 0;
    } else {
        
        $trans = DB::select ('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "dstv" AND status_id=2 GROUP BY item_type '); 
        $processing = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="dstv" AND tv.status_id=2 ');
        

        $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
    }



    $data = [
        'processing' => $processing,
        'trans' => $trans
    ];
    return view('pages.dstv.processing', $data);
   }

   public function failed()
   {
    $failed = [];
    $trans = 0;

    if (request()->query('filter') == 'true') {
        $data = $this->filters();

        $failed = (!empty($data['failed'])) ? $data['failed'] : [];
        $trans = (!empty($data['count'])) ? $data['count'] : 0;
    } else {

        $trans = DB::select ('select COUNT(item_type) AS items FROM transactionviews WHERE item_type = "dstv" AND status_id= 13 GROUP BY item_type ');
        $failed = DB::select('SELECT tv.* FROM transactionviews tv WHERE tv.item_type="dstv" AND tv.status_id=13 ');
        


        $trans =  (!empty($trans[0]->items)) ? $trans[0]->items : 0;
    }



    $data = [
        'failed' => $failed,
        'trans' => $trans
    ];
    return view('pages.dstv.failed', $data);
   }


   public function filters()
    {
        try {
          $count = ViewTransaction::filter()->count();
          $failed =  ViewTransaction::filter()->get(); 
          $processing =  ViewTransaction::filter()->get();
          $pending =  ViewTransaction::filter()->get();
          $data =  ViewTransaction::filter()->get();
          $paid =  ViewTransaction::filter()->get();
          return [
            'paid' => $paid,
            'failed' => $failed,
            'processing' => $processing,
            'pending' => $pending,
            'completed' => $data,
            'count' => $count,
           
            
          ];
        } catch (\Throwable $th) {
            return [];
        }
    }
}

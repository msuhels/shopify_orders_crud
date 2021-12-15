<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use Illuminate\Routing\UrlGenerator;
use Response;
use Headers;
use DB;
use File;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Signifly\Shopify\Shopify;
use App\Models\OrderModel;


class OrderController extends Controller
{
    public function __construct()
    {
    
    
    }

    /*
    Order View/Table with filter
    */
    public function index(Request $request)
    {   
        die('0');
        $data['page_name']  = "Dashboard";
        $data['header']  = "";
        $data['slot']  = "";
        return view('pages.dashboard', $data);
    }

    /*
    To update order status on shopify via shopify API calling & fetch the updated orders from shopify
    */
    public function update_order_status(Request $request){
        echo 'To update the order status, call the shopify api ';

    }

    /*
    To update order notes on shopify via shopify API calling & fetch the updated orders from shopify
    */
    public function update_order_note(Request $request){
        echo 'To update the order notes by calling the shopify api ';

    }

    public function list(Request $request)
    {   
        $data['listData'] = OrderModel::
                          paginate(2)
                         ->appends(request()->except('page')); //die('ordercontroller list function die');
        return view('pages.order.list', $data);
                         
    }

    public function getList(Request $request)
    {   // die('get list');
        //$data = '';
        $searchParameters = array();
        if (isset($request->sku)) {
            $searchParameters['sku']    = $request->sku;
        }
          $data['listData'] =  OrderModel::
           where(function($query) use ($searchParameters)
            {
                if( isset($searchParameters['sku']) && ($searchParameters['sku'] != '' ))
                 {
                    $query->where('sku', $searchParameters['sku']);
                }
            })
            ->join('products', 'order_details.id', '=', 'products.id' )
            ->select(['order_details.*','products.*' ])
            ->paginate(2)
            ->appends(request()->except('page'));

            $ordrs['listTest'] =  OrderModel::
            where('order_status', '=', 'unfulfilled' )
            ->join('products', 'order_details.id', '=', 'products.id' )
            ->paginate(2)
            ->appends(request()->except('page'));
         
         //$all_ticktes['liststatus'] = OrderModel::where('order_status', '=', 'unfulfilled')->get();

        return view('pages.order.crud-table', $data, $ordrs);
    }


    public function order_filter_by_status(Request $request){
        $ordrs_draft =  OrderModel::
                    where('order_status', '=', 'unfulfilled' )
                    ->join('products', 'order_details.id', '=', 'products.id' )
                    ->paginate(2)
                    ->appends(request()->except('page'));
            echo json_encode($ordrs_draft);
                   // return view('pages.order.crud-table', $ordrs_draft);
        
    }

}
/*
//Sample

1. To load & call another controller function 
    //app('App\Http\Controllers\ShopifyController')->index();

2. To handle the request (Get Parameter / Post Parameters)
    print_r($request->all());
    echo $name = $request->input('s');
    echo $name = $request->s;
        



*/ 

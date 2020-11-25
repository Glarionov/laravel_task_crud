<?php

namespace App\Http\Controllers;

use App\Helpers\ApiCode;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder as RB;

class OrderController extends Controller
{

    const ORDER_TABLE = 'orders';

    /**
     * Creates new Order
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $postData = $request->validate([
            'name' => ['required', 'string'],
            'necessary_execution_date' => ['date_format'],
            'description' => ['string'],
            'percent_for_mediator' => ['between:0,100'],
//            'status_id' => ['between:0,100'],
        ]);

//        $Order = new Order();
//
//        $Order->name = $postData['name'];
//
//        $Order->save();
//
//        $result['status_id'] = $Order->status_id;
//        $orderData = $Order;

//        $orderData = Order::create($postData);

        $insertResult = DB::table('orders')->insertGetId($postData);

        if ($insertResult) {
            return RB::success(['new_order_id' => $insertResult]);
        } else {
            return RB::error(ApiCode::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Cancels order
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function cancel(Request $request)
    {
        $postData = $request->validate([
            'id' => ['required'],
        ]);

        $cancelResult = DB::table(self::ORDER_TABLE)->where('id', $postData['id'])->update(['canceled' => 1]);

//        $Order = new Order();
//
//        $Order->name = $postData['name'];
//
//        $Order->save();
//
//        $result['status_id'] = $Order->status_id;
//        $orderData = $Order;

//        $orderData = Order::create($postData);


        if ($cancelResult) {
            return RB::success();
        } else {
            return RB::error(ApiCode::INTERNAL_SERVER_ERROR);
        }
    }
}

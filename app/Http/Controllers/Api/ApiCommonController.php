<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiCommonController extends Controller
{


    protected $page;
    protected $limit;
    protected $order;
    protected $by;

    public function getRequestPage($request)
    {
        $this->page = $request->get('page', 1);
        $this->limit = $request->get('limit', 10);
        $this->order = $request->get('order', 'created_at');
        $this->by = $request->get('by', 'desc');
    }

    public function apiSuccessResponse($data = [], $msg = 'success', $code = 0)
    {
        return response()->json([
            'data' => $data,
            'msg' => $msg,
            'code' => $code
        ]);
    }


}

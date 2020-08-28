<?php

namespace App\Http\Controllers\Api;

use App\Serves\CourseServe;
use Illuminate\Http\Request;

class CourseController extends ApiCommonController
{

    private $serve;

    public function __construct()
    {
        $this->serve = new CourseServe();
    }

    public function index(Request $request)
    {
        $this->getRequestPage($request);
        $res = $this->serve->index($this->page, $this->limit, $this->order, $this->by);
        return $this->apiSuccessResponse($res);
    }


}

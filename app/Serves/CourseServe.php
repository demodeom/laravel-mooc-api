<?php


namespace App\Serves;


use App\Models\Course;

class CourseServe extends CommonServe
{
    public function index($page, $limit, $order, $by)
    {
        $courseModel =  Course::select('*')->orderBy($order, $by)->paginate($limit, '', '', $page);
        return $this->getPageData($courseModel);
    }
}

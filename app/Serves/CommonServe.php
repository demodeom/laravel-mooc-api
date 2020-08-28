<?php


namespace App\Serves;


use phpDocumentor\Reflection\Types\Null_;

class CommonServe
{
    public function getPageData($model)
    {
        return [
            'list' => $model->items(),
            'page' => [
                'total' => $model->total(),
                'current_page' => $model->currentPage(),
                'count' => $model->count()
            ]
        ];
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;

class HomePageHelper
{
    public static function bestArticle()
    {
        $records = bestArticles::orderBy('id', 'desc')->limit(4)->get();
        return self::bundle('اموزش های متنی و تصویری', $records,null,'article');
    }

    public static function bestCourses($tag)
    {
        $records = bestCourse::where('tag',$tag)->orderBy('id', 'desc')->get();
        return self::bundle('بهترین دوره های آموزشی', $records,$tag,'course');
    }

    public static function statements()
    {
        $records = Statement::orderBy('id', 'desc')->limit(3)->get();
        return self::bundle('لیست مطالب', $records,null,'statement');
    }

    public static function bundle($title, $records,$tag=null,$dataType=null)
    {
        return [
            'dataType'=>$dataType,
            'title' => $title,
            'tag'=>$tag,
            'items' => $records,
        ];

    }
}

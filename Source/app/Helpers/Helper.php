<?php

namespace App\Helpers;

use app\Models\Category;
use Illuminate\Support\Str;
class Helper
{
    public static function category($categories){
        $html='';
        $i=1;
        foreach ($categories as $key=>$category){
                $html .= '
                    <tr>
                        <td><input onclick="selectManycategory('.$category->id.')" id="check_category'.$category->id.'"type="checkbox"/></td>
                        <td>'. $category->id .'</td>
                        <td>'. $category->tenDanhmuc .'</td>
                        <td>'. $category->mota .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" onclick="show_category('.$category->id.')">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" onclick="deleteEventcategory('.$category->id.')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
        }
        return $html;
    }
    public static function event($events){
        $html='';
        $i=1;
        foreach ($events as $key=>$event){
                $html .= '
                    <tr>
                        <td><input onclick="selectManyevent('.$event->id.')" id="check_event'.$event->id.'"type="checkbox"/></td>
                        <td>'. $event->id .'</td>
                        <td>'. $event->tenSukien .'</td>
                        <td>'. $event->motaSuKien .'</td>
                        <td>'. $event->category->tenDanhmuc .'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" onclick="show_event('.$event->id.')">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" onclick="deleteEvent('.$event->id.')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
        }
        return $html;
    }
}

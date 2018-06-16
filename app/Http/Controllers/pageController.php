<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
class pageController extends Controller
{
    public function index()
    {
    	$hot_new = News::orderBy('id','desc')
    					->where('isDraft',0)
    					->where('isBrowse',0)
    					->where('isPublish',0)
    					->first();
    	$list_new = News::orderBy('id','desc')
    					->where('isDraft',0)
    					->where('isBrowse',0)
    					->where('isPublish',0)
                        ->skip(0)
                        ->take(10)
                        ->get();
        unset($list_new[0]);
        $new_news = News::orderBy('id','desc')
                        ->where('isDraft',0)
                        ->where('isBrowse',0)
                        ->where('isPublish',0)
                        ->skip(0)
                        ->take(5)
                        ->get();
        unset($new_news[1]);

        $list_cate_parent = Category::where('parentID',0)
                            ->where('isShowContent',1)
                            ->where('status',1)->get();

    	return view('client.pages.index',compact('hot_new','list_new','new_news','list_cate_parent'));
    }

    public function newletters_detail($alias)
    {
        $newletter = News::where('alias',$alias)->get()->first();
        $list_cate_newletter = News::orderBy('id','desc')
                                    ->where('cate_id',$newletter->cate_id)
                                    ->paginate(10);
        unset($list_cate_newletter[0]);
        return view('client.pages.news.detail',[
            'newletter' => $newletter,
            'list_newcate'=>$list_cate_newletter
        ]);
    }

    public function newletter_list($alias)
    {
        $cate_new = Category::where('alias',$alias)->first();
        return view('client.pages.news.list',['cate_new'=>$cate_new]);
    }

}


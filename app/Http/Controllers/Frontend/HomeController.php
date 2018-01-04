<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use App\Post;
use App\PostCategory;
use App\Section;
use App\SectionCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Gallery;
use App\HomeManagement;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeData = HomeManagement::all();
        $charAni = $homeData->toArray();
        $charArr = [];
        $start = 0;
        for ($i = 0; $i < strlen($charAni[0]['animation_title']); $i++) {
            if (($charAni[0]['animation_title'][$i]) == ',') {
                $word = str_split(substr($charAni[0]['animation_title'], $start, $i - $start));
                array_push($charArr, $word);
                $start = $i + 1;
            }
            if ($i == strlen($charAni[0]['animation_title']) - 1) {
                $word = str_split(substr($charAni[0]['animation_title'], $start, $i - $start + 1));
                array_push($charArr, $word);
            }
        }
        foreach ($homeData as $value){
                    $value->animation_title = $charArr;
        }

        $listMenu = PostCategory::where('parent_id',0)->orderBy('view','asc')->get();

        return view('theme/index', compact('homeData','listMenu'));
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return response()->json(['msg' => 'Send Successfully!'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}

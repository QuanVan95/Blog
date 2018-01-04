<?php

namespace App\Http\Controllers\Frontend;

use App\CaseStudyManagement;
use App\ContactManagement;
use App\OurVisionManagement;
use App\WhatWeDoManagement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SectionCategory;
use App\Section;
use App\PostCategory;
use App\Post;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOurVision()
    {

        $postCategory = PostCategory::where('key', 'our_vision')->first();
        $postOurVision = Post::where('category_id',$postCategory->id )->orderBy('position', 'asc')->get();
        $subCategories = PostCategory::where([['parent_id', $postCategory->id],['active',1]])->orderBy('id','asc')->get();
        $postCategory->sub_categories = $subCategories;
        $postArr = [];

        //Separate 3 posts on each row
        foreach ($subCategories as $value){
            $posts = Post::where('category_id',$value->id )->orderBy('position', 'asc')->get();
            $postArray = $posts->toArray();
            if($value->key == 'think'){
                $start = 0;
                for ($i = 0; $i < ceil(count($postArray)/3); $i++){
                    if(count($postArray) - $start >= 3){
                        $postArrSplice = array_slice($postArray, $start, 3);
                        array_push($postArr,$postArrSplice);
                        $start = $start + 3;
                    }
                    else{
                        $postArrSplice = array_slice($postArray, $start, count($postArray) - $start);
                        array_push($postArr,$postArrSplice);
                    }
                }
                $value->posts = $postArr;
            }
            else{
                $value->posts = $postArray[0];
            }
        }
        //End separate 3 posts on each row

        //Animation title
        $charArr = [];
        $start = 0;
        for ($i = 0; $i < strlen($postOurVision[0]['animation_title']); $i++) {
            if (($postOurVision[0]['animation_title'][$i]) == ',') {
                $word = str_split(substr($postOurVision[0]['animation_title'], $start, $i - $start));
                array_push($charArr, $word);
                $start = $i + 1;
            }
            if ($i == strlen($postOurVision[0]['animation_title']) - 1) {
                $word = str_split(substr($postOurVision[0]['animation_title'], $start, $i - $start + 1));
                array_push($charArr, $word);
            }
        }
        $postOurVision[0]->animation_title = $charArr;
        //End Animation title

        $listMenu = PostCategory::where('parent_id',0)->orderBy('view','asc')->get();

        return view('theme/our-vision', compact('ourVision','postOurVision', 'postCategory','listMenu'));
    }

    public function getWhatWeDo()
    {
        $cate = PostCategory::where('key','what_we_do')->first();
        if($cate){
            $allPost = Post::where('category_id',$cate->id)->orderBy('position','asc')->get();
            $clientPost = Post::where([ ['category_id',$cate->id],['position',3],['active',1] ])->orderBy('id','asc')->get();
        }

        //Display 3 logos of client on each row
        $clientPostArr = $clientPost->toArray();
        $clientArr = [];
        $start = 0;
        for($i = 0; $i < ceil(count($clientPostArr)/3); $i++){
           if(count($clientPostArr) - $start >= 3){
               $clientPostSlice = array_slice($clientPostArr,$start,3);
               array_push($clientArr,$clientPostSlice);
               $start = $start+3;
           }else{
               $clientPostSlice = array_slice($clientPostArr,$start,count($clientPostArr) - $start);
               array_push($clientArr, $clientPostSlice);
           }
        };
        $clientPost = $clientArr;
        //End display 3 logos of client on each row

        //Animation title
        $charArr = [];
        $start = 0;
        for ($i = 0; $i < strlen($allPost[0]['animation_title']); $i++) {
            if (($allPost[0]['animation_title'][$i]) == ',') {
                $word = str_split(substr($allPost[0]['animation_title'], $start, $i - $start));
                array_push($charArr, $word);
                $start = $i + 1;
            }
            if ($i == strlen($allPost[0]['animation_title']) - 1) {
                $word = str_split(substr($allPost[0]['animation_title'], $start, $i - $start + 1));
                array_push($charArr, $word);
            }
        }
        $allPost[0]->animation_title = $charArr;
        //End Animation title
        $listMenu = PostCategory::where('parent_id',0)->orderBy('view','asc')->get();

        return view('theme/what-we-do', compact('allPost','clientPost','firstClientArray','secondClientArray','thirdClientArray','listMenu'));
    }

    public function getCaseStudy()
    {

        $cate = PostCategory::where('key', 'case_study')->get();
        if($cate){
            $allPost = Post::where('category_id', $cate[0]->id)->orderBy('position','asc')->get();
            $allCate = PostCategory::where('parent_id',$cate[0]->id)->orderBy('id','asc')->get();
        }
        $keyList = ['print','product_design','ui_ux','web_design'];
        $cateIdList =[];
        $listCateId = PostCategory::whereIn('key',$keyList)->get();
        foreach($listCateId as $cateId){
            $cateIdList[] += $cateId->id;
        }
        $listPostMiddle = [];
        $listPost = Post::whereIn('category_id',$cateIdList)->get();
        foreach ($listPost as $post){
            array_push($listPostMiddle,$post);
        }
        $listMenu = PostCategory::where('parent_id',0)->orderBy('view','asc')->get();
        return view('theme/case-study', compact('allPost','allCate', 'listPostMiddle','listMenu'));
    }

    public function getContact()
    {
        $cate = PostCategory::where('key','contact')->first();
        $contactPost = Post::where('category_id',$cate->id)->first();
        //Animation title
        $charArr = [];
        $start = 0;
        for ($i = 0; $i < strlen($contactPost->animation_title); $i++) {
            if ($contactPost->animation_title[$i] == ',') {
                $word = str_split(substr($contactPost->animation_title, $start, $i - $start));
                array_push($charArr, $word);
                $start = $i + 1;
            }
            if ($i == strlen($contactPost->animation_title) - 1) {
                $word = str_split(substr($contactPost->animation_title, $start, $i - $start + 1));
                array_push($charArr, $word);
            }
        }
        $contactPost->animation_title = $charArr;
        //End Animation title
        $listMenu = PostCategory::where('parent_id',0)->orderBy('view','asc')->get();
        return view('theme/contact', compact('contactPost','listMenu'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\BOD;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\MultiImg;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    /* #################### About Us #################### */
    public function our_story()
    {
        return view('pages.about_us.our_story');
    }
    public function vision_mission()
    {
        return view('pages.about_us.vision_mission');
    }
    public function board_of_directors()
    {
        return view('pages.about_us.board_of_directors');
    }
    public function management_team()
    {
        return view('pages.about_us.management_team');
    }
    public function companies()
    {
        return view('pages.about_us.companies');
    }
    public function our_clients()
    {
        return view('pages.about_us.our_clients');
    }
    public function csr()
    {
        return view('pages.about_us.csr');
    }


    /* #################### Projects #################### */
    public function ongoing()
    {
        $ongoing=Product::where('project_status','ongoing')->get();
        return view('pages.projects.ongoing',compact('ongoing'));
    }
    public function upcoming()
    {
        $upcomming=Product::where('project_status','upcomming')->get();
        return view('pages.projects.upcoming',compact('upcomming'));
    }
    public function completed()
    {
        $completed=Product::where('project_status','completed')->get();
        return view('pages.projects.completed',compact('completed'));
    }
    public function project_details($id)
    {
        $project_details = Product::findOrFail($id);
        $multiImage = MultiImg::where('project_id', $id)->get();

        return view('pages.project_details', compact('project_details', 'multiImage'));
    }



    /* #################### News #################### */
    public function news()
    {
        return view('pages.news');
    }
    public function news_details($post_slug)
    {
        $BlogPost = BlogPost::where('post_slug', $post_slug)->get();

        return view('pages.news_details', compact('BlogPost',));
    }


    /* #################### Career #################### */
    public function career()
    {
        return view('pages.career');
    }


    /* #################### Contact #################### */
    public function buyers()
    {
        return view('pages.contact.buyers');
    }
    public function contact_us()
    {
        return view('pages.contact.contact_us');
    }
    public function customers()
    {
        return view('pages.contact.customers');
    }
    public function landowners()
    {
        return view('pages.contact.landowners');
    }
    public function bod()
    {
        $bod = BOD::orderby('id', 'ASC')->get();
        return view('pages.about_us.board_of_directors', compact('bod'));
        //     
    }

    //     public function bod()
    //     {
    //         $bod_1=BOD::select('id')->orderby ('id','ASC')->get();
    //         $d=$bod_1%2;
    //         $bod=BOD::orderby ('id','ASC')->get();
    //         return view('pages.about_us.board_of_directors',compact('d','bod'));
    //     }
}

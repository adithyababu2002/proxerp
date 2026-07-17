<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Review;
use App\Models\Attraction;
use App\Models\Team;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Home(){
         $blogs = Blog::latest()->get();
         $reviews = Review::where('status', 1)
                     ->latest()
                     ->get();
                     $attractions = Attraction::where('status', 1)->latest()->get();
$teams = Team::where('status', 1)->latest()->get();
    return view('pages.home', compact('blogs','reviews', 'attractions' , 'teams'));
    }
    public function About(){
        $teams = Team::where('status', 1)->latest()->get();

        return view('pages.about' , compact('teams'));
    }
    public function Service(){

    return view('pages.service');
    }
     public function Contact(){
        return view('pages.contact');
    }
    public function blogs()
{
    $blogs = Blog::latest()->get();
    return view('pages.blogs', compact('blogs'));
}
public function showFrontend(Blog $blog)
{
    return view('pages.read_blog', compact('blog'));
}

    public function Features(){
        return view('pages.features');
    }
    public function Ourteam(){
        $teams = Team::where('status', 1)->latest()->get();

        return view('pages.ourteam',compact('teams'));
    }

    public function showTeam(Team $team)
{
    return view('pages.read_team', compact('team'));
}
      public function Testimonial(){
          $reviews = Review::where('status', 1)
                     ->latest()
                     ->get();
        return view('pages.testimonial',compact('reviews'));
    }
}

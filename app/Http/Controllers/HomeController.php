<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Portal;
use App\Models\SuggestionBox;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function multilingual()
    {
        $announcements = Announcement::all()->sortByDesc('created_at')->take(3);
        $pengumuman = Announcement::all();
        $portals = Portal::all();
        $portalsByCategory = Portal::all()->groupBy('category');
        $suggestions = SuggestionBox::all()->sortByDesc('created_at');
        // dd ($portals);
        return view('home/multilingual', compact('announcements', 'portals', 'portalsByCategory', 'pengumuman', 'suggestions'));
    }

    public function pengumuman($id)
    {
        $pengumuman = Announcement::findOrFail($id);
        // dd ($pengumuman);
        return view('home/pengumuman', compact('pengumuman'));
    }

}

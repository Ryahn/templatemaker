<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tags;
use App\Models\Software;
use App\Models\Template;
use App\Models\Languages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $template = Template::all()->count();
        $tags = Tags::all()->count();
        $software = Software::all()->count();
        $lang = Languages::all()->count();
        return view('admin.index', compact('template', 'tags', 'software', 'lang'));
    }

    public function logs()
    {
        $data = json_decode(Http::get(config('app.url').'/api/logs')->body());
        return Datatables::of($data['data']['logs'])->make(true);
    }
}

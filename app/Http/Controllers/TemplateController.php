<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;
use App\Models\Languages;
use App\Models\OsSystems;
use App\Models\Software;
use App\Models\Template;

class TemplateController extends Controller
{
    public function index()
    {
        $tags = Tags::all();
        $sexual = $tags->filter(function ($tag) {
            return $tag->optgroup == 'sexual';
        })->values();
        $assets = $tags->filter(function ($tag) {
            return $tag->optgroup == 'assets';
        })->values();
        $nonsexual = $tags->filter(function ($tag) {
            return $tag->optgroup == 'nonsexual';
        })->values();
        $technical = $tags->filter(function ($tag) {
            return $tag->optgroup == 'technical';
        })->values();
        $languages = Languages::all();
        $os = OsSystems::all();
        $software = Software::all();
        $unreal = $software->filter(function ($soft) {
            return $soft->group == 'unreal';
        });
        $blender = $software->filter(function ($soft) {
            return $soft->group == 'blender';
        });
        $none = $software->filter(function ($soft) {
            return $soft->group == 'none';
        });

        return view('template.index', compact('tags', 'sexual', 'assets', 'nonsexual', 'technical', 'languages', 'os', 'unreal', 'blender', 'none'));
    }

    public function store(Request $request)
    {
        $inputs = $request->except(['_token','/maker/store']);
        $data = Template::create($inputs);
        // return dd($data);
        return response()->json(['msg' => 'Template created successfully!', 'id' => $data->id, 'status' => 200]);
    }

    public function ajax(string $id)  
    {
        $template = Template::findOrFail($id);
        $returnHTML = view('template.bbcode')->with('template', $template)->render();
        return response()->json(['status' => 200, 'msg' => 'OK', 'template' => $template, 'html' => $returnHTML]);
        // return response($returnHTML, 200)->header('Content-Type', 'text/html');
    }

    
}

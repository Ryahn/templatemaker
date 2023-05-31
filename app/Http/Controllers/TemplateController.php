<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Software;
use App\Models\Template;
use App\Models\Languages;
use App\Models\OsSystems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'trailer' => ['url', 'sometimes', 'nullable', 'regex:/(youtube|drive.google|imgur|vimeo)(.com|.net)/'],
        ],
        [
            'type.required' => 'You must choose a template type!',
            'trailer.url' => 'Trailer must a URL and be supported. See help text below input for support sites.'
        ]);

        if (!$validator->fails()) {
            $data = Template::create($inputs);
            // return dd($data);
            return response()->json(['msg' => 'Template created successfully!', 'id' => $data->id, 'status' => 200]);
        }
        return response()->json(['errors' => $validator->errors()->all()]);
    }

    public function ajax(string $id)  
    {
        $template = Template::findOrFail($id);
        $returnHTML = view('template.bbcode')->with('template', $template)->render();
        return response()->json(['status' => 200, 'msg' => 'OK', 'template' => $template, 'html' => $returnHTML]);
        // return response($returnHTML, 200)->header('Content-Type', 'text/html');
    }

    public function edit(string $id)
    {
        $template = Template::findOrFail($id);
        $returnHTML = view('template.bbcode')->with('template', $template)->render();
        return response($returnHTML);
    }

    
}

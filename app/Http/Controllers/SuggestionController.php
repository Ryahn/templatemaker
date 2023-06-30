<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;


class SuggestionController extends Controller
{
    public function index() {
        return view('suggestion.index');
    }

    public function store(Request $request) {
        $inputs = $request->except(['_token']);

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'name' => 'required',
        ],
        [
            'type.required' => 'You must choose a suggestion type!',
            'name.required' => 'Name field is required!'
        ]);

        if (!$validator->fails()) {
            $data = Suggestion::create($inputs);
            return response()->json(['msg' => 'Suggestion added successfully!', 'status' => 200]);
        }
        return response()->json(['errors' => $validator->errors()->all()]);
    }

    public function recent(Request $request) {
        if ($request->ajax()) {
            $data = Suggestion::select('id', 'type', 'name', 'notes', 'requested_by', 'approved')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('type', function ($data) {
                return strtoupper($data->type);
            })
            ->editColumn('approved', function ($data) {
                $icon = '';
                if ($data->approved) {
                    $icon = '<i class="fas fa-lg fa-fw me-2 fa-check" style="color:lime;"></i>';
                } else {
                    $icon = '<i class="fas fa-lg fa-fw me-2 fa-x" style="color:red;"></i>';
                }
                return $icon;
            })
                ->addColumn('action', function($row){
                    $approved = '';
                    if (Auth::user()->is_admin) {
                        $approved = '<button id="approve" class="btn btn-primary btn-sm" data-id="'. $row->id.'">Approve</button>';
                    } else {
                        $approved = '<button class="btn btn-primary btn-sm" disabled>Approve</button>';
                    }
                    return $approved;
                })
                ->rawColumns(['action', 'approved'])
                ->make(true);
        }
        return view('suggestion.recent');
    }

    public function approve(string $id) {
        $suggest = Suggestion::where('id',$id)->update(['approved' => 1]);
        if ($suggest) return response()->json(['msg' => 'Suggestion was approved!', 'status' => 200]);
        return response()->json(['msg' => 'Suggestion was not approved!', 'status' => 200]);
    }
}

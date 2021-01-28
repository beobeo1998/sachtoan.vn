<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories     = Category::orderBy('id', 'DESC')->paginate(20);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        // $categories = Category::with('childrenRecursive')->where('c_parent_id', 0)->get();
        $category     = Category::where('c_status', 1)->get();
        return view('admin.category.create', compact('category'));
    }
    public function store(AdminCategoryRequest $request)
    {
        $data                   = $request->except('_token', 'c_avatar');
        $data['c_slug']         = Str::slug($request->c_name);

        if ($request->c_avatar) {
            $image = upload_image('c_avatar');
            if ($image['code'] == 1) {
                $data['c_avatar'] = $image['name'];
            }
        }
        Category::create($data);
        \Session::flash('toastr',[
            'type'      => 'success',
            'message'   => 'Insert thành công !'
            ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $categorys = Category::where('c_status', 1)->get();
        $category = Category::findOrfail($id);
        return view('admin.category.update', compact('categorys', 'category'));
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        $category = Category::findOrfail($id);
        $data = $request->except('_token', 'c_avatar');
        $data['c_slug']         = Str::slug($request->c_name);

        if ($request->c_avatar) {
            $image = upload_image('c_avatar');
            if ($image['code'] == 1) {
                $data['c_avatar'] = $image['name'];
            }
        }

        $category->update($data);
        \Session::flash('toastr',[
            'type'      => 'success',
            'message'   => 'Update thành công !'
            ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $category   = Category::findOrfail($id);
        if ($category) {
            $category->delete();
        }
        \Session::flash('toastr',[
            'type'      => 'success',
            'message'   => 'Delete thành công !'
            ]);
        return redirect()->back();
    }

    public function hot(Request $request, $id)
    {
        $category           = Category::findOrfail($id);
        $category->c_hot = !$category->c_hot;
        $category->updated_at = Carbon::now();
        $category->save();

        if ($request->ajax()) {
            $categories     = Category::orderBy('id', 'DESC')->paginate(20);
            $query  = $request->query();
            $html = view('admin.category.data',compact('categories','query'))->render();
            return response([
                'data'      => $html ?? null,
                'messages'  => 'Update hot thành công !'
            ]);
        }
        return redirect()->back();
    }

    public function active(Request $request, $id)
    {
        $category           = Category::findOrfail($id);
        $category->c_status = !$category->c_status;
        $category->updated_at = Carbon::now();
        $category->save();

        if ($request->ajax()) {
            $categories     = Category::orderBy('id', 'DESC')->paginate(20);
            $query  = $request->query();
            $html = view('admin.category.data',compact('categories','query'))->render();
            return response([
                'data'      => $html ?? null,
                'messages'  => 'Update status thành công !'
            ]);
        }

        return redirect()->back();
    }
}

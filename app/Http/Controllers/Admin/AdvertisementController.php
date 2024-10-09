<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\advertisement\StoreAdvertisementRequest;
use App\Models\Advertisement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    public function index(Request $request)
    {
        $query = Advertisement::query();

        if ($request->has('search')) {
            $query->where('link', 'like', '%' . $request->search . '%');
        }

        // Thay thế get() bằng paginate(10) để phân trang 10 sản phẩm mỗi trang
        $advertisements = $query->paginate(10);
        return view('admin/advertisements/index', compact('advertisements'));
    }
    public function create()
    {

        return view("admin.advertisements.create");
    }
    public function store(Request $request)
    {

        $request->validate([
            'link'=>'required',
        ],[
            'link.required'=>'Bắt buộc nhập vào trường này'
        ]);
        $fileName = $request->file('image_url')->getClientOriginalName();

        $request->file('image_url')->storeAs("public/images", $fileName);

        $data = [
            'image_url' => $fileName,
            'link' => $request->link,
            'position' => $request->position
        ];

        try {
            Advertisement::create($data);
            return redirect()->route('advertisement.index')->with('success', 'advertisements created successfully.');
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while creating the articles.']);
        }
    }
    public function edit(string $id)
    {
        $advertisements = Advertisement::find($id);
        return view("admin.advertisements.edit", compact('advertisements'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'link'=>'required',
        ],[
            'link.required'=>'Bắt buộc nhập vào trường này'
        ]);
        $data = [
            'link' => $request->link,
            'position' => $request->position
        ];
        $advertisement = Advertisement::find($id);
        if ($request->hasFile('image_url_new')) {
            Storage::delete('public/images/'.$advertisement->image_url);
            $imageUrl = '';
            $image = $request->file('image_url_new');
            $nameImage = time() . "." . $image->getClientOriginalExtension();
           
            $image->storeAs("public/images", $nameImage);
            $imageUrl =  $nameImage;
            $data['image_url'] = $imageUrl;
        }
        try {
            $advertisement->update($data);
            return redirect()->route('advertisement.index')->with('success', 'advertisements updated successfully.');
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the advertisements.']);
        }
    }
    public function destroy(Advertisement $advertisement)
    {
        try {
            $advertisement->delete();
            return redirect()->route('advertisements.index')->with('success', 'Xóa Thành Công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xóa Thất Bại');
        }
    }
}

<?php
 
namespace App\Http\Controllers;
 
use App\Models\Books;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
 
class BookController extends Controller
{

    //add book
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'name' => 'required|string|max:200|min:3',
                'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2000',
                'pdf' => 'required|mimes:pdf,xlx,csv',
                'sinopsis' => 'required|min:5'
                
            ]);
            
            $cover_name = time() . '_' . $request->file('cover')->getClientOriginalName();
            $upload_cover = $request->cover->storeAs('/public/book_cover', $cover_name);
            $cover_path = Storage::url($upload_cover);

            $pdf_name = time() . '_' . $request->file('pdf')->getClientOriginalName();
            $upload_pdf = $request->pdf->storeAs('/public/book_pdf', $pdf_name);
            $pdf_path = Storage::url($upload_pdf);
            
            Books::create([
                'name' => $request->name,
                'cover' => $cover_path,
                'pdf' => $pdf_path,
                'sinopsis' => $request->sinopsis
            ]);

            return redirect('/admin/perpustakaan')->with('status', 'Data tersimpan di database');
 
        }

        return view('admin.add-book');
    }

    //edit book
    public function edit(string $id): View
    {
        $book = Books::findOrFail($id);
        return view('admin.edit-book', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200|min:3',
            'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2000',
            'pdf' => 'required|mimes:pdf,xlx,csv',
            'sinopsis' => 'required|min:5'
        ]);

        $book = Books::findOrFail($id);

        $cover_name = time() . '_' . $request->file('cover')->getClientOriginalName();
        $upload_cover = $request->cover->storeAs('/public/book_cover', $cover_name);
        $cover_path = Storage::url($upload_cover);

        $pdf_name = time() . '_' . $request->file('pdf')->getClientOriginalName();
        $upload_pdf = $request->pdf->storeAs('/public/book_pdf', $pdf_name);
        $pdf_path = Storage::url($upload_pdf);

        $book->update([
                'name'     => $request->name,
                'cover'    => $cover_path,
                'pdf'      => $pdf_path,
                'sinopsis' => $request->sinopsis
            ]);

        return redirect('/admin/perpustakaan')->withSuccess('Book has been updated successfully!');
    }
    
}
<?php

namespace App\Http\Controllers;

use App\Models\SuratTeregistrasi;
use Illuminate\Http\Request;

class SuratTeregistrasiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // If there is a search input, filter the results
        $data = $search 
            ? sSuratTeregistrasi::where('no_surat', 'LIKE', "%{$search}%")
                          ->orWhere('cetakan_surat', 'LIKE', "%{$search}%")
                          ->get()
            : SuratTeregistrasi::all();

        return view('surat_teregistrasi.index', compact('data'));
    }

    public function create()
    {
        return view('surat_teregistrasi.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'no_surat' => 'required|string|max:15',
            'nip_pegawai' => 'required|string|max:15',
            'tgl_surat' => 'required|date',
            'perihal' => 'required|string|max:30',
            'cetakan_surat' => 'required|file|mimes:jpg,jpeg,png,xls,xlsx,doc,docx,pdf|max:10240', // Max 10MB
        ]);

        // Store the uploaded file
        if ($request->hasFile('cetakan_surat')) {
            $file = $request->file('cetakan_surat');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/surat_teregistrasi'), $filename);

            // Create a new record in the database
            SuratTeregistrasi::create([
                'no_surat' => $request->no_surat,
                'nip_pegawai' => $request->nip_pegawai,
                'tgl_surat' => $request->tgl_surat,
                'perihal' => $request->perihal,
                'cetakan_surat' => $filename,
            ]);
        }

        return redirect()->route('surat_teregistrasi.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $data = SuratTeregistrasi::findOrFail($id);
        return view('surat_teregistrasi.show', compact('data'));
    }

    public function edit($id)
    {
        $data = SuratTeregistrasi::findOrFail($id);
        return view('surat_teregistrasi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_surat' => 'required|string|max:15',
            'nip_pegawai' => 'required|string|max:15',
            'tgl_surat' => 'required|date',
            'perihal' => 'required|string|max:30',
            'cetakan_surat' => 'file|mimes:jpg,jpeg,png,xls,xlsx,doc,docx,pdf|max:10240',
        ]);

        $surat_teregistrasi = SuratTeregistrasi::findOrFail($id);

        // Update file if it exists
        if ($request->hasFile('cetakan_surat')) {
            $file = $request->file('cetakan_surat');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/surat_teregistrasi'), $filename);
            $surat_teregistrasi->cetakan_surat = $filename;
        }

        // Update other attributes
        $surat_teregistrasi->update($request->except('cetakan_surat'));
        
        return redirect()->route('surat_teregistrasi.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function print($id)
    {
        $data = SuratTeregistrasi::findOrFail($id);
        $filePath = public_path('uploads/surat_teregistrasi/' . $data->cetakan_surat);

        // Check if the file exists
        if (!file_exists($filePath)) {
            return redirect()->route('surat_teregistrasi.index')->with('error', 'File tidak ditemukan.');
        }

        // Determine the file's content type
        $extension = pathinfo($data->cetakan_surat, PATHINFO_EXTENSION);
        $contentType = match (strtolower($extension)) {
            'pdf' => 'application/pdf',
            'jpg', 'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            default => 'application/octet-stream',
        };

        return response()->file($filePath, [
            'Content-Type' => $contentType,
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
        ]);
    }

    public function destroy($id)
    {
        $surat_teregistrasi = SuratTeregistrasi::findOrFail($id);
        $filePath = public_path('uploads/surat_teregistrasi/' . $surat_teregistrasi->cetakan_surat);

        // Delete the file if it exists
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $surat_teregistrasi->delete();
        return redirect()->route('surat_teregistrasi.index')->with('success', 'Data berhasil dihapus.');
    }
}

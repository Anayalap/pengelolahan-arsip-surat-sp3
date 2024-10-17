<?php

namespace App\Http\Controllers;

use App\Models\Sktm;
use Illuminate\Http\Request;

class SktmController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Jika ada input pencarian, lakukan query dengan filter
        if ($search) {
            $data = Sktm::where('no_surat', 'LIKE', "%{$search}%")
                        ->orWhere('cetakan_surat', 'LIKE', "%{$search}%")
                        ->get();
        } else {
            // Jika tidak ada input pencarian, ambil semua data
            $data = Sktm::all();
        }

        return view('sktm.index', compact('data'));
    }

    public function create()
    {
        return view('sktm.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'no_surat' => 'required|string|max:15',
            'nip_pegawai' => 'required|string|max:15',
            'tgl_surat' => 'required|date',
            'perihal' => 'required|string|max:30',
            'cetakan_surat' => 'required|file|mimes:jpg,jpeg,png,xls,xlsx,doc,docx,pdf|max:10240', // Max 10MB
        ]);

        // Menyimpan file yang diunggah
        if ($request->hasFile('cetakan_surat')) {
            $file = $request->file('cetakan_surat');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sktm'), $filename);

            Sktm::create([
                'no_surat' => $request->no_surat,
                'nip_pegawai' => $request->nip_pegawai,
                'tgl_surat' => $request->tgl_surat,
                'perihal' => $request->perihal,
                'cetakan_surat' => $filename,
            ]);
        }

        return redirect()->route('sktm.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $data = Sktm::findOrFail($id);
        return view('sktm.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Sktm::findOrFail($id);
        return view('sktm.edit', compact('data'));
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

        $sktm = Sktm::findOrFail($id);

        if ($request->hasFile('cetakan_surat')) {
            $file = $request->file('cetakan_surat');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sktm'), $filename);
            $sktm->cetakan_surat = $filename;
        }

        $sktm->update($request->all());
        return redirect()->route('sktm.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function print($id)
    {
        $data = Sktm::findOrFail($id);
        $filePath = public_path('uploads/sktm/' . $data->cetakan_surat);

        if (!file_exists($filePath)) {
            return redirect()->route('sktm.index')->with('error', 'File tidak ditemukan.');
        }

        $extension = pathinfo($data->cetakan_surat, PATHINFO_EXTENSION);
        $contentType = match(strtolower($extension)) {
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
        $sktm = Sktm::findOrFail($id);
        $filePath = public_path('uploads/sktm/' . $sktm->cetakan_surat);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $sktm->delete();
        return redirect()->route('sktm.index')->with('success', 'Data berhasil dihapus.');
    }
}

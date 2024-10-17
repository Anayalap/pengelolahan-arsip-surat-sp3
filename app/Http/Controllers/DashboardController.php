<?php

namespace App\Http\Controllers;

use App\Models\Sktm; // Import models
use App\Models\SkMenika;
use App\Models\BelumMenika;
use App\Models\Kematian;
use App\Models\RekomRumahIbadah;
use App\Models\Sprpt;
use App\Models\SkPindahWilaya;
use App\Models\SuratTeregistrasi;
use App\Models\SkgrHiba;
use App\Models\SkBedaData ;
use App\Models\DomisiliUsaha;
use App\Models\SkPenghasilan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // 
        $sktmCount = Sktm::count();
        $skMenikaCount = SkMenika::count();
        $skBelumMenikaCount = BelumMenika::count();
        $skKematianCount = Kematian::count();
        $skRekomRumahIbadahCount = RekomRumahIbadah::count();
        $skgrCount = SkgrHiba::count();
        $sprptCount = Sprpt::count();
        $skPindahwilayaCount = SkPindahWilaya::count();
        $suratTeregistrasiCount = SuratTeregistrasi::count();
        $skPenghasilanCount = SkPenghasilan::count();
        $skBedaDataCount = SkBedaData::count();
        $domisiliUsahaCount = DomisiliUsaha::count();



        
        // Return the view with the counted data
        return view('dashboard', compact(
            'sktmCount',          
            'skMenikaCount',      
            'skBelumMenikaCount', 
            'skKematianCount', 
            'skRekomRumahIbadahCount',
            'skgrCount',
            'sprptCount',
            'skPindahwilayaCount',
            'suratTeregistrasiCount',
            'skPenghasilanCount',
            'skBedaDataCount',
            'domisiliUsahaCount',
           
        ));
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doanhnghiep;
use App\Models\Doanhnghiep_SDT;
use App\Models\Doanhnghiep_Loaihinh;
use Illuminate\Support\Facades\DB;


class DoanhnghiepController extends Controller
{
    protected $doanhnghiepsdt = 'doanhnghiep_sdt';
    public function __construct()
    {
        
    }
    public function index() {
        $doanhnghieps = Doanhnghiep::paginate(5);
        $dnsdt = DB::table('doanhnghiep__s_d_t_s')->get();
        $dnlh = DB::table('doanhnghiep__loaihinhs')->get();
        // $config = $this->config();
        $config['seo'] = config('apps.doanhnghiep');
        return view('backend.doanhnghiep.index', 
        compact('doanhnghieps', 'config', 'dnsdt', 'dnlh'));
    }
}

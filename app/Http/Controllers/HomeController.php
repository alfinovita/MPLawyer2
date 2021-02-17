<?php

namespace App\Http\Controllers;

use App\Komentars;
use App\User;
use App\Konsultasi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $user_total = User::get()->count();
        $lawyer_aktif = User::where('role', 'LAWYER')->where('status', 'true')->count();
        $client_aktif = User::where('role', 'CLIENT')->where('status', 'true')->count();
        $kasus = Konsultasi::get()->count();
        

        $finish = Konsultasi::where('status', 'FINISH')->count();
        $lainnya = Konsultasi::where('status', '!=', 'ON_GOING')->where('status', '!=' , 'FINISH')->count();
        $ongoing = Konsultasi::where('status', 'ON_GOING')->count();

        $status = Konsultasi::where('status', 'FINISH')->count();

        $konsultasi = Konsultasi::where('status', 'FINISH')->get();
        
        $september_f = Konsultasi::where('status', 'FINISH')->count();

        $september_o = Konsultasi::where('status', 'ON_GOING')->count();


        $total_kasus = Konsultasi::where('status', 'FINISH')->where('lawyer_id', 24)->count();

       
        $month = collect(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);

        $data = [
            'user_total' => $user_total,
            'lawyer_aktif' => $lawyer_aktif,
            'client_aktif' => $client_aktif,
            'kasus' => $kasus,
            'status' => $status,
            'september_o' => $september_o,
            'september_f' => $september_f,
            'total_kasus' => $total_kasus,
            'month' => $month,
        ];
        return view('home', compact('data', 'status', 'konsultasi'  ))
        ->with('ongoing', $ongoing)
        ->with('finish', $finish)
        ->with('lainnya', $lainnya);
    }


    public function getDataChart(Request $request)
    {
        $date = Carbon::now()->day(1)->month(1)->year($request->year);
        
        for($i = 0; $i <= 11; $i++){
            $dataSelesai[] = Konsultasi::whereBetween('created_at', [$date->startOfMonth()->addMonthsNoOverflow($i)->toDateString(), $date->endOfMonth()->addMonthsNoOverflow($i)->toDateString()])->where('status', 'FINISH')->count();
            $dataBerlangsung[] = Konsultasi::whereBetween('created_at', [$date->startOfMonth()->addMonthsNoOverflow($i)->toDateString(), $date->endOfMonth()->addMonthsNoOverflow($i)->toDateString()])->whereIn('status', 'ON_GOING')->count();
        }
  
        $data = [
            'dataSelesai'  => $dataSelesai, 
            'dataBerlangsung'     => $dataBerlangsung, 
        ];
        return $data;
    }


    public function getDataChartMonth(Request $request)
    {
        $service_id = session()->get('user')->service_id;
        $date = Carbon::now()->day(1)->month($request->month)->year($request->year);
        $dayofMonth = $date->daysInMonth;
        
        if($service_id != 0){
            for($i = 1; $i <= $dayofMonth; $i++){
                $dataSelesai[] = Konsultasi::whereHas('service', function ($query) use($service_id)
                {
                    $query->where('service_id', $service_id);
                })->whereDay('created_at', $i)->whereMonth('created_at', $request->month)->whereYear('created_at', $request->year)->where('status', 'FINISH')->count();
                $dataBerlangsung[] = Konsultasi::whereHas('service', function ($query) use($service_id)
                {
                    $query->where('service_id', $service_id);
                })->whereDay('created_at',$i)->whereMonth('created_at', $request->month)->whereYear('created_at', $request->year)->whereIn('status', 'ON_GOING')->count();
                $label[] = $i;
            }
    
        }else{
            for($i = 1; $i <= $dayofMonth; $i++){
                $dataSelesai[] = Konsultasi::whereDay('created_at', $i)->whereMonth('created_at', $request->month)->whereYear('created_at', $request->year)->where('status', 'FINISH')->count();
                $dataBerlangsung[] = Konsultasi::whereDay('created_at',$i)->whereMonth('created_at', $request->month)->whereYear('created_at', $request->year)->whereIn('status', 'ON_GOING')->count();
                $label[] = $i;
            }
        }
        $data = [

            'label'         => $label,
            'dataSelesai'  => $dataSelesai, 
            'dataBerlangsung'     => $dataBerlangsung,  
        ];
        return $data;
    }
    public function under()
    {
        return view('under');
    }
    
}

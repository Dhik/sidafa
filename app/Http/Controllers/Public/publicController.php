<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class publicController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('public.index');
    }

    public function analysis(Request $request, $id)
    {
        $dafa = \DB::table('embed')
            ->select('*')
            ->where('id', '=', $id)
            ->get();

        return view('public.analysis', ['dafa' => $dafa]);
    }

    public function lingkungan(Request $request, $id)
    {
        $dafa = \DB::table('embed')
            ->select('*')
            ->where('id', '=', $id)
            ->get();

        return view('public.lingkungan', ['dafa' => $dafa]);
    }

    public function hukum(Request $request, $id)
    {
        $dafa = \DB::table('embed')
            ->select('*')
            ->where('id', '=', $id)
            ->get();

        return view('public.hukum', ['dafa' => $dafa]);
    }

    public function cctv(Request $request, $id)
    {
        $dafa = \DB::table('cctv_jogja')
            ->select('stream-url as cctv', 'idc', 'name')
            ->where('location', '=', $id)
            ->where('connection', '=', 1)
            ->orderBy('idc', 'DESC')
            ->get();

        return view('public.cctv', ['dafa' => $dafa]);
    }

    public function cctv2()
    {
        return view('public.cctv2');
    }

    public function kepegawaian()
    {
        return view('public.kepegawaian');
    }

    public function perumahan()
    {
        return view('public.perumahan');
    }

    public function politik()
    {
        return view('public.politik');
    }

    public function politik2()
    {
        return view('public.politik2');
    }

    // public function daftar()
    // {
    //     return view('public.register.index');
    // }

    public function pekerjaan()
    {
        return view('public.pekerjaan');
    }

    public function kematian()
    {
        return view('public.kematian');
    }

    public function transportasi()
    {
        return view('public.transportasi');
    }

    public function taman()
    {
        return view('public.taman');
    }

    public function lkpp()
    {
        return view('public.lkpptwitter');
    }

    public function lkpphukum()
    {
        return view('public.lkpphukum');
    }

    public function perhutaniyoutube()
    {
        return view('public.perhutaniyoutube');
    }

    public function perhutaniproduct()
    {
        return view('public.perhutaniproduct');
    }

    public function lkppsentiment()
    {
        return view('public.lkppsentiment');
    }

    public function penjualankayu()
    {
        return view('public.perhutanipenjualan');
    }

    public function manggrove()
    {
        return view('public.luashutan');
    }
    public function putusanma()
    {
        return view('public.putusanma');
    }
    public function sentimentma()
    {
        return view('public.sentimentma');
    }
    public function putusanmk()
    {
        return view('public.putusanmk');
    }
    public function sentimentlkpp()
    {
        return view('public.sentimentlkpp');
    }
    public function youtubebappenas()
    {
        return view('public.youtubebappenas');
    }
    public function sentimentbkn()
    {
        return view('public.sentimentbkn');
    }
    //--------------------------------------------------------
    public function pemilu24()
    {
        return view('public.pemilu24');
    }
    public function capres24()
    {
        return view('public.capres24');
    }
    //------------------------------------------------
    public function prodalum()
    {
        return view('public.prodalum');
    }
    //--------------------------------------------------
    public function h_t()
    {
        return view('public.h_t');
    }
    public function survey_airlines()
    {
        return view('public.airlines');
    }
}

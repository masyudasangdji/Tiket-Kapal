<?php

namespace App\Controllers;

use App\Models\M_pesantiket;
use App\Models\M_kapal;
use App\Models\M_pengguna;
use App\Models\M_rekening;


class Home extends BaseController
{
    protected $M_pesantiket;
    protected $M_kapal;
    protected $M_pengguna;
    protected $M_rekening;

    public function __construct()
    {
        $this->M_pesantiket = new M_pesantiket();
        $this->M_kapal = new M_kapal();
        $this->M_pengguna = new M_pengguna();
        $this->M_rekening = new M_rekening();
    }
    public function index()
    {
        $jmltiket = $this->M_pesantiket->ambilData();
        $jlhkpl = $this->M_kapal->ambilData();
        $jmlpg = $this->M_pengguna->ambilData();
        $jmlrek = $this->M_rekening->ambilData();

        $jt = 0;
        $jkpl = 0;
        $jp = 0;
        $jrek = 0;

        foreach ($jmltiket as $j) {
            $jt++;
        }
        foreach ($jlhkpl as $jk) {
            $jkpl++;
        }
        foreach ($jmlpg as $jpp) {
            $jp++;
        }
        foreach ($jmlrek as $rek) {
            $jrek++;
        }

        $data = [
            'title' => "Tiket Kapal",
            'jt' => $jt,
            'jkpl' => $jkpl,
            'jp' => $jp,
            'jrek' => $jrek
        ];
        return view('v_beranda', $data);
    }


    public function landingpage()
    {
        return view('landingpage');
    }
}

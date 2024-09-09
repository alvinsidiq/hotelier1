<?php

namespace App\Controllers;
use App\Models\ModelLayanan;
use App\Models\ModelCarousel;
use App\Models\ModelTestimoni;
use App\Models\ModelStaff;
use App\Models\ModelRoom;

class Home extends BaseController
{
    public function __construct() 
    {
        $this->ModelLayanan = new ModelLayanan();
        $this->ModelCarousel = new ModelCarousel();
        $this->ModelTestimoni = new ModelTestimoni();
        $this->ModelStaff = new ModelStaff();
        $this->ModelRoom = new ModelRoom();
    }
    public function index(): string
    {
        $data = [
             'layanan' => $this->ModelLayanan->allData(),
             'carousel' => $this->ModelCarousel->allData(),
             'testimoni' => $this->ModelTestimoni->allData(),
             'staff' => $this->ModelStaff->allData(),
             'room' => $this->ModelRoom->allData(),
        ];
        return view('front/v_home', $data);
    }
}

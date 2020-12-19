<?php

namespace App\Controllers;

use \App\Models\SepatuModel;

class Pages extends BaseController
{

    public function __construct()
    {
        $this->sepatuModel = new SepatuModel();
    }

    // index page
    public function index()
    {
        $data = [
            'title' => 'Planet Shoes ID',
        ];
        return view('pages/home', $data);
    }

    // shoes page
    public function shoes()
    {
        $data = [
            'title'     => 'Shoes',
            'sepatu'    => $this->sepatuModel->getSepatu()
        ];
        return view('pages/shoes', $data);
    }

    public function shoesJenis($jenis)
    {
        $data = [
            'title'     => 'Shoes',
            'sepatu'    => $this->sepatuModel->getJenisSepatu($jenis)
        ];
        if (empty($data['sepatu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sepatu dengan jenis ' . $jenis . ' tidak ditemukan');
        }
        return view('pages/shoes', $data);
    }

    //detail page
    public function detail($id)
    {
        $data = [
            'title'     => 'Detail',
            'brand'     => $this->sepatuModel->getBrand($id),
            'sepatu'    => $this->sepatuModel->getDetail($id)
        ];
        return view('pages/detail', $data);
    }

    // cart page
    public function cart()
    {
        $data = [
            'title' => 'Cart',
            // 'sepatu' => $this->sepatuModel->getSepatu($id_sepatu)
        ];
        return view('pages/cart', $data);
    }

    // payment page
    public function payment()
    {
        $data = [
            'title' => 'Payment',
        ];
        return view('pages/payment', $data);
    }

    //--------------------------------------------------------------------

}

<?php

namespace App\Controllers;

use \App\Models\SepatuModel;
use \App\Models\BrandModel;
use \App\Models\ModelUser;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->sepatuModel = new SepatuModel();
        $this->brandModel = new BrandModel();
        $this->userModel = new ModelUser();
    }

    public function index()
    {
        $data = [
            'title' => 'Profile'
        ];
        return view('admin/profile', $data);
    }

    public function catalogue()
    {
        $data = [
            'title' => 'Admin Catalogue',
            'brand'     => $this->brandModel->getBrandAll(),
            'sepatu'    => $this->sepatuModel->getSepatu()
        ];
        return view('admin/catalogue', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Form tambah data',
            'brand' => $this->brandModel->getBrandAll(),
            'sepatu' => $this->sepatuModel->getSepatu(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'foto1' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'],
            ],
            'foto2' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'],
            ],
            'foto3' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'],
            ],
            'foto4' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!']
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/admin/create')->withInput()->with('validation', $validation);
        }

        //ambil foto 1
        $foto1 = $this->request->getFile('foto1');
        if ($foto1->getError() == 4) {
            $namaFoto1 = 'defaultSepatu.jpg';
        } else {
            //generate nama
            $namaFoto1 = $foto1->getRandomName();
            //pindahkan file ke img
            $foto1->move('img/shoes', $namaFoto1);
        }

        // ambil foto 2
        $foto2 = $this->request->getFile('foto2');
        if ($foto2->getError() == 4) {
            $namaFoto2 = 'defaultSepatu.jpg';
        } else {
            //generate nama
            $namaFoto2 = $foto2->getRandomName();
            //pindahkan file ke img
            $foto2->move('img/shoes', $namaFoto2);
        }

        //ambil foto 3
        $foto3 = $this->request->getFile('foto3');
        if ($foto3->getError() == 4) {
            $namaFoto3 = 'defaultSepatu.jpg';
        } else {
            //generate nama
            $namaFoto3 = $foto3->getRandomName();
            //pindahkan file ke img
            $foto3->move('img/shoes', $namaFoto3);
        }

        //ambil foto 4
        $foto4 = $this->request->getFile('foto4');
        if ($foto4->getError() == 4) {
            $namaFoto4 = 'defaultSepatu.jpg';
        } else {
            //generate nama
            $namaFoto4 = $foto4->getRandomName();
            //pindahkan file ke img
            $foto4->move('img/shoes', $namaFoto4);
        }

        $this->sepatuModel->save([
            'id_sepatu' => substr(md5(uniqid(rand(), true)), 16, 16),
            'tipe' => $this->request->getVar('tipe'),
            'jenis' => $this->request->getVar('jenis'),
            'warna' => $this->request->getVar('warna'),
            'harga' => $this->request->getVar('harga'),
            'foto1' => $namaFoto1,
            'foto2' => $namaFoto2,
            'foto3' => $namaFoto3,
            'foto4' => $namaFoto4,
            'id_brand' => $this->request->getVar('id_brand')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/catalogue');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Form edit data',
            'brand' => $this->brandModel->getBrandAll(),
            'selected_brand' => $this->sepatuModel->getBrand($id),
            'sepatu' => $this->sepatuModel->getSepatu($id)
        ];
        return view('/admin/update', $data);
    }

    public function updateSepatu($id)
    {

        //validasi input
        if (!$this->validate([
            'foto1' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto2' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto3' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ],
            'foto4' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Upload file gambar!',
                    'mime_in' => 'Upload file gambar!'
                ]
            ]
        ])) {

            return redirect()->to('/admin/create')->withInput();
        }

        //ambil foto 1
        $foto1 = $this->request->getFile('foto1');
        if ($foto1->getError() == 4) {
            $namaFoto1 = $this->request->getVar('foto1Lama');
        } else {
            //generate nama
            $namaFoto1 = $foto1->getRandomName();
            //pindahkan file ke img
            $foto1->move('img/shoes', $namaFoto1);
        }

        // ambil foto 2
        $foto2 = $this->request->getFile('foto2');
        if ($foto2->getError() == 4) {
            $namaFoto2 = $this->request->getVar('foto2Lama');
        } else {
            //generate nama
            $namaFoto2 = $foto2->getRandomName();
            //pindahkan file ke img
            $foto2->move('img/shoes', $namaFoto2);
        }

        //ambil foto 3
        $foto3 = $this->request->getFile('foto3');
        if ($foto3->getError() == 4) {
            $namaFoto3 = $this->request->getVar('foto3Lama');
        } else {
            //generate nama
            $namaFoto3 = $foto3->getRandomName();
            //pindahkan file ke img
            $foto3->move('img/shoes', $namaFoto3);
        }

        //ambil foto 4
        $foto4 = $this->request->getFile('foto4');
        if ($foto4->getError() == 4) {
            $namaFoto4 = $this->request->getVar('foto4Lama');
        } else {
            //generate nama
            $namaFoto4 = $foto4->getRandomName();
            //pindahkan file ke img
            $foto4->move('img/shoes', $namaFoto4);
        }

        $this->sepatuModel->where('id_sepatu', $id)
            ->set([
                'tipe' => $this->request->getVar('tipe'),
                'jenis' => $this->request->getVar('jenis'),
                'warna' => $this->request->getVar('warna'),
                'harga' => $this->request->getVar('harga'),
                'foto1' => $namaFoto1,
                'foto2' => $namaFoto2,
                'foto3' => $namaFoto3,
                'foto4' => $namaFoto4,
                'id_brand' => $this->request->getVar('id_brand')
            ])
            ->update();
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/admin/catalogue');
    }


    public function deleteSepatu($id)
    {
        //cari gambar berdasarkan id
        $sepatu = $this->sepatuModel->find($id);
        if ($sepatu['foto1'] != 'default.jpg') {
            //hapus gambar
            unlink('img/shoes/' . $sepatu['foto1']);
        } else if ($sepatu['foto2'] != 'default.jpg') {
            //hapus gambar
            unlink('img/shoes/' . $sepatu['foto2']);
        } else if ($sepatu['foto3'] != 'default.jpg') {
            //hapus gambar
            unlink('img/shoes/' . $sepatu['foto3']);
        } else if ($sepatu['foto4'] != 'default.jpg') {
            //hapus gambar
            unlink('img/shoes/' . $sepatu['foto4']);
        }

        $this->sepatuModel->where('id_sepatu',  $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/catalogue');
    }

    public function updateProfile($id)
    {
        $data = [
            'title' => 'Update',
            'sepatu' => $this->userModels->getDetail($id)
        ];
        $this->userModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('nama'),
            'foto' => $this->request->getVar('foto')
        ]);
        return view('/admin/updateProfile', $data);
    }

    public function deleteProfile($id)
    {
    }
    //--------------------------------------------------------------------
    //untuk edit user
    public function users()
    {
        $data = [
            'title' => 'Users',
        ];
        return view('admin/users', $data);
    }

    public function updateUser()
    {
    }

    public function deleteUser()
    {
    }
}

<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PlaceModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class AdminController extends BaseController
{
    public function login()
    {
        helper(['form']);
        echo view('admin/login');
    }

    public function loginAuth()
    {
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'username' => $data['username'],
                    'email'    => $data['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/mastering/dashboard');
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/mastering');
            }
        } else {
            $session->setFlashdata('msg', 'Email tidak ditemukan');
            return redirect()->to('/mastering');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/mastering');
    }

    public function dashboard()
    {
        $model = new PlaceModel();
        $data['places'] = $model->findAll();
        echo view('admin/dashboard', $data);
    }

    public function addPlace()
    {
        helper(['form']);
        echo view('admin/add_place');
    }

    public function savePlace()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/mastering');
        }

        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'photo' => 'uploaded[photo]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
            'latitude' => 'required|decimal',
            'longitude' => 'required|decimal',
            'link' => 'permit_empty|valid_url',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $model = new PlaceModel();
        $photo = $this->request->getFile('photo');
        $photoName = $photo->getRandomName();
        $photo->move(ROOTPATH . 'public/uploads', $photoName); 

        $data = [
            'name' => $this->request->getPost('name'),
            'location' => $this->request->getPost('location'),
            'description' => $this->request->getPost('description'),
            'photo' => $photoName,
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'link' => $this->request->getPost('link'),
        ];
        $model->insert($data);
        return redirect()->to('/mastering/dashboard');
    }

    public function editPlace($id)
    {
        $model = new PlaceModel();
        $data['place'] = $model->find($id);
        echo view('admin/edit_place', $data);
    }

    public function updatePlace($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/mastering');
        }

        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'photo' => 'if_exist|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
            'latitude' => 'required|decimal',
            'longitude' => 'required|decimal',
            'link' => 'permit_empty|valid_url',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $model = new PlaceModel();
        $place = $model->find($id);

        $photo = $this->request->getFile('photo');
        if ($photo && $photo->isValid() && !$photo->hasMoved()) {
            $photoName = $photo->getRandomName();
            $photo->move(ROOTPATH . 'public/uploads', $photoName); 
            // Hapus foto lama
            if ($place['photo'] && file_exists(ROOTPATH . 'public/uploads/' . $place['photo'])) {
                unlink(ROOTPATH . 'public/uploads/' . $place['photo']);
            }
        } else {
            $photoName = $this->request->getPost('old_photo');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'location' => $this->request->getPost('location'),
            'description' => $this->request->getPost('description'),
            'photo' => $photoName,
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'link' => $this->request->getPost('link'),
        ];
        $model->update($id, $data);
        return redirect()->to('/mastering/dashboard');
    }

    public function deletePlace($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/mastering');
        }

        $model = new PlaceModel();
        $place = $model->find($id);

        if ($place) {
            $photoPath = ROOTPATH . 'public/uploads/' . $place['photo'];
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
            $model->delete($id);
        }

        return redirect()->to('/mastering/dashboard');
    }
}

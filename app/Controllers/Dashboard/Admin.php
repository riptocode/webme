<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Admin extends BaseController
{
    protected $usersModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }


    public function index()                                   // Fungsi Index
    {
        $users = $this->usersModel->findAll();

        $db      = \Config\Database::connect();
        $count = $db->table('users');
        $sum_users = $count->countAllResults();

        $data = [
            'title' => 'Dashboard Ricode Apps',
            'users' => $users,
            'sum_users' => $sum_users,
            'ids' => $this->usersModel->getUsers()
        ];



        return view('admin/index', $data);
    }

    public function detail($username)                          // Fungsi Username
    {
        $data = [
            'title' => 'Detail Users',
            'ids' => $this->usersModel->getUsers($username)
        ];

        if (empty($data['ids'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User ' . $username . ' Tidak Ditemukan');
        }

        return view('admin/detail', $data);
    }

    public function create()                                   // Fungsi Create
    {
        $data = [
            'title' => 'Create User',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function members()                                  // Fungsi Members
    {
        $users = $this->usersModel->findAll();
        $data = [
            'title' => 'List Users',
            'users' => $users
        ];

        return view('admin/members', $data);
    }

    public function save()                                     // Fungsi Save
    {
        // Validasi Input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();
            return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
        }

        $this->usersModel->save([
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'telp' => $this->request->getVar('telp')
        ]);

        session()->setFlashdata('pesan', 'User Berhasil Ditambahkan.');

        return redirect()->to('/dashboard/create');
    }

    public function delete($id)                                          // Fungsi delete
    {
        $this->usersModel->delete($id);
        session()->setFlashdata('msgdel', 'User Berhasil Dihapus.');
        return redirect()->to('/dashboard/members');
    }

    public function edit($id)                                      // Fungsi edit
    {
        $data = [
            'title' => 'Edit User',
            'validation' => \Config\Services::validation(),
            'id' => $this->usersModel->getUsers($id)

        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();
            return redirect()->to('/dashboard/edit/' . $this->request->getVar($id))->withInput()->with('validation', $validation);
        }

        $this->usersModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'telp' => $this->request->getVar('telp')
        ]);

        session()->setFlashdata('msgupdate', 'User Berhasil Diubah.');

        return redirect()->to('/dashboard/members');
    }
}
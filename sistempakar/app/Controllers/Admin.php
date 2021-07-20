<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\UserModels;


class Admin extends Controller
{
	protected $db, $builder, $adm;

	public function __construct()
	{
		$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('users');
		$this->adm = new UserModels();
	}
	public function index()
	{
		$data['title'] = 'User List';
		// $users = new \Myth\Auth\Models\UserModel();
		// $data['users'] = $users->findAll();
		$this->builder->select('users.id as userid, username, email, name');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$query = $this->builder->get();

		$data['users'] = $query->getResult();
		
		return view('admin/index', $data);
	}

	public function detail($id = 0)
	{

		$this->builder->select('users.id as userid, username, email, fullname, user_image, name');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$this->builder->where('users.id', $id);
		$query = $this->builder->get();

		$data['user'] = $query->getRow();

		if(empty($data['user'])){
			return redirect()->to('/admin');
		}
		
		return view('admin/detail', $data);
	}

	//Method Update
    public function update($id)
    {
        // ambil artikel yang akan diedit
        $admin = new UserModels();
        $data['admin'] = $admin->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $admin->update($id, [
                "name" => $this->request->getPost('name'),
                "email" => $this->request->getPost('email'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('/admin/edit');
        }

        // tampilkan form edit
        echo view('/admin/edit', $data);
    }


    public function save()
    {
        // var_dump($_POST);
        // die;
        $id = $this->request->getPost('id');
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $data = [
            'email' => $email,
            'username' => $username,
        ];
        // var_dump($this->db);
        // die;
        
        $this->builder->where('id', $id);
        $this->builder->update($data);


        // $this->session->set_flashdata('flash', 'Data Diubah ');
        return redirect('admin/index');
    }
	

	public function delete()
    {
        $id = $this->request->getPost('id');
        // $email = $this->request->getPost('email');
        // $username = $this->request->getPost('username');
        // var_dump($this->db);
        // die;
        $hapus = $this->adm->delete_list($id);
 
        // Jika berhasil melakukan hapus
        if($hapus)
        {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect('/admin/index');
        }
        
        // $this->builder->delete($data);
        // return redirect('admin/index');
    }
    // echo view('/admin/index', $id);
    // public function delete($id = NULL)
    // {
    //     // cek id
    //     $cekid = $this->adm->deleteUser($id);
        
    //     if(!empty($cekid)){
    //         // delete data
    //         $this->adm->deleteUser($id);
    //         $msg = ['message' => 'Deleted user successfully'];
    //         $response = [
    //             'status' => 200,
    //             'error' => false,
    //             'data' => $msg,
    //         ];
    //         return $this->respond($response, 200);
    //     } else {
    //         $msg = ['message' => 'Deleted user failed'];
    //         $response = [
    //             'status' => 500,
    //             'error' => false,
    //             'data' => $msg,
    //         ];
    //         return $this->respond($response, 500);
    //     }
    // }
}
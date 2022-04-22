<?php

namespace App\Controllers;

class Gawe extends BaseController
{
    public function index()
    {
        // cara pertama query builder 
        $builder = $this->db->table('sems');
        $query   = $builder->get();

        // cara kedua query manual
        // $query = $this->db->query("SELECT * FROM sems");

        $data['gawe'] =  $query->getResult();

        return view('gawe/get', $data);
    }
    public function create()
    {
        return view('gawe/add');
    }
    public function store()
    {
        // cara 1 name sama
        $data = $this->request->getPost();

        // cara 2 name spesifik
        // $data = [
        //     'name_sems' => $this->request->getVar('name_sems'),
        //     'data_sems' => $this->request->getVar('data_sems'),
        //     'info_sems' => $this->request->getVar('info_sems'),
        // ];

        $this->db->table('sems')->insert($data);

        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('gawe'))->with('success', 'Data Berhasil di Simpan');
        }
    }

    public function edit($id = null) 
    {
        if($id !=null) {
            $query = $this->db->table('sems')->getWhere(['id_sems' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['gawe'] = $query->getRow();
                return view('gawe/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('sems')->where(['id_sems' => $id])->update($data);
        return redirect()->to(site_url('gawe'))->with('success', 'Data Berhasil di Update');
    }

    public function destroy($id)
    {
        $this->db->table('sems')->where(['id_sems' => $id])->delete();
        return redirect()->to(site_url('gawe'))->with('success', 'Data Berhasil di Hapus');

    }
}

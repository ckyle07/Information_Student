<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

class MainController extends BaseController
{
    public function Save()
    {
        $ID = $_POST['ID'];
        $data = [
            'StudName' => $this->request->getPost('StudName'),
            'StudGender' => $this->request->getPost('StudGender'),
            'StudCourse' => $this->request->getPost('StudCourse'),
            'StudSection' => $this->request->getPost('StudSection'),
            'StudYear' => $this->request->getPost('StudYear'),
        ];

        if($id!= null){
            $main = new MainModel();
            $main->set($data)->where('id', $id)->Update();
        }else{
            $main = new MainModel();
            $main->Save($data);
        }
        return redirect()->to('/test');
    }

    public function Delete($id)
    {
        $main = new MainModel();
        $main->Delete($id);
        return redirect()->to('/test');
    }

    public function Update($id)
    {
        $mmodel = new MainModel();
        $data = [
            'main' => $mmodel->findAll(),
            'var' => $mmodel->where('id', $id)->first(),
        ];
        return view('main', $data);
    }    

    public function test()
    {
        $mmodel = new MainModel();
        $data['main'] = $mmodel->findAll();
        //var_dump(data);
        return view('main', $data);
    }

    public function index()
    {
        //
    }
}
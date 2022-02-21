<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function salvar()
    {
        $post = $this->request->getPost();
        $model = new \App\Models\Quantidades();
        $model->insert($post);
        return redirect()->route('/');
    }
}

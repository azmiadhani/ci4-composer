<?php

namespace App\Libraries;

class Layout
{
    public function render($page = 'home', $data = array())
    {
        if (!is_file(APPPATH . '/Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($data['title']); // Capitalize the first letter

        echo view('templates/header', $data);
        echo view($page, $data);
        echo view('templates/footer', $data);
    }

    public function frender($page = 'home', $data = array())
    {
        if (!is_file(APPPATH . '/Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($data['title']); // Capitalize the first letter

        echo view('templates/frest/headerView', $data);
        echo view($page, $data);
        echo view('templates/frest/footerView', $data);
    }
}

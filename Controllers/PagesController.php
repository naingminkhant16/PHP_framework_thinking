<?php
namespace Controllers;
use core\App;
class PagesController
{
    public function home()
    {
        $result = App::get("database")->getAll('user');

        view('index', ["users" => $result]);
    }
    public function about()
    {
        view('about');
    }
    public function contact()
    {
        view('contact');
    }
    public function customers()
    {
        view('customers');
    }
    public function delete()
    {
        App::get("database")->delete($_POST, "user");
        redirect('/');
    }
    public function createUser()
    {

        App::get("database")->insert([
            'name' => request('name')
        ], 'user');
        redirect('/');
    }
}

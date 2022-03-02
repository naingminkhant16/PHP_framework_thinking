<?php
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
        header("location: /pdo/");
    }
    public function createUser()
    {
        App::get("database")->insert([
            'name' => $_POST['name']
        ], 'user');
        header("location: /pdo/");
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Auth extends BaseController
{
    public function index()
    {
        return  view('peserta/pages/login');
    }

    public function setting()
    {
        return  view('sip/pages/setting');
    }

    public function store()
    {
        $user = new User();
        $data = [
            'name' => 'test',
            'password' => password_hash('password-raw', PASSWORD_DEFAULT),
            'email' => 'test@mail.com'
        ];
        $user->insert($data); // bikin menggunakan model
        // user create 'dafsa', 'asdfa' value 'asdfdas', 'asdfasfa';
        // INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...); 

        dd($user);
        // return  view('cms/pages/setting');
    }

    public function update()
    {
        $user = new User();
        $data = [
            'name' => 'test2',
            'password' => password_hash('password-raw', PASSWORD_DEFAULT),
            'email' => 'test2@mail.com'
        ];
        $user->update(4,$data);
        dd($user);
        // return  view('cms/pages/setting');
    }

    public function destory()
    {
        $user = new User();
        // $data = [
        //     'name' => 'test2',
        //     'password' => password_hash('password-raw', PASSWORD_DEFAULT),
        //     'email' => 'test2@mail.com'
        // ];
        $user->delete(1);
        dd($user);
        // return  view('cms/pages/setting');
    }

    public function show()
    {
        $user = new User();
        // $data = [
        //     'name' => 'test2',
        //     'password' => password_hash('password-raw', PASSWORD_DEFAULT),
        //     'email' => 'test2@mail.com'
        // ];
        // $user->delete(1);
        dd($user->findall());
        // return  view('cms/pages/setting');
    }

    public function edit()
    {
        $user = new User();
        // $data = [
        //     'name' => 'test2',
        //     'password' => password_hash('password-raw', PASSWORD_DEFAULT),
        //     'email' => 'test2@mail.com'
        // ];
        // $user->delete(1);
        dd($user->find(4));
        // return  view('cms/pages/setting');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/9/9
 * Time: 22:09
 */

class Json_demo extends CI_Controller
{

    public function diff()
    {
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("e" => "red", "f" => "green", "g" => "blue", "z" => 'haha');

        print_r(array_diff($a1, $a2));
    }

    public function index()
    {
        $url = APPPATH . 'third_party/followings.json';
        $request_data = file_get_contents($url);
        $request_arr = json_decode($request_data);
        $followings = [];
        foreach ($request_arr as $each_request) {
            $users = $each_request->data->users;
            foreach ($users as $user) {
                array_push($followings, $user->name);
            }
        }

        print_r("<pre>");
        print_r("我关注的人：\n\n");
        print_r($followings);

        $url = APPPATH . 'third_party/followers.json';
        $request_data = file_get_contents($url);
        $request_arr = json_decode($request_data);
        $followers = [];
        foreach ($request_arr as $each_request) {
            $users = $each_request->data->users;
            foreach ($users as $user) {
                array_push($followers, $user->name);
            }
        }

        print_r("<pre>");
        print_r("我的粉丝：\n\n");
        print_r($followers);

        print_r("没有关注我的：\n\n");
        print_r(array_diff($followings, $followers));

    }
}
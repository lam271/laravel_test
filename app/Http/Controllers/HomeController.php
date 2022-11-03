<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public $data = [];
    public function index() {

        // $this->data['welcome'] = 'Học lập trình tại';
        // $this->data['content'] = '<h3>Chương 1: Nhập môn Laravel</h3>
        // <p>Kiến thức 1</p>
        // <p>Kiến thức 1</p>
        // <p>Kiến thức 1</p>
        // ';

        // $this->data['index'] = 1;

        // $this->data['dataArr'] = [
        //     'Item1',
        //     'Item2',
        //     'Item3'
        // ];

        // $this->data['number'] = 10; 

        // $this->data['message'] = 'Đăt hàng thành công';

        $this->data['title'] = 'Trang Chủ';

        $this->data['message'] = 'Đăng kí tài khoản thành công';
        return view('clients.home', $this->data);
    }

    public function products(){
        $this->data['title'] = 'Sản Phẩm';
        return view('clients.products', $this->data);
    }

    public function getAdd(){
        $this->data['title'] = 'Thê, sản phẩm';
        return view('clients.add', $this->data);
    }

    public function postAdd(Request $request){
        $request->validate([
            'product_name' => 'required'
        ]);
    }

    public function putAdd(Request $request){
        return 'phương thức put';
        dd($request);
    }

    public function getArr(){
        $contentArr = [
            'name' => 'laravel 8.x',
            'lesson' => 'khóa học lập trình laravel',
            'academy' => 'Unicode academi' 
        ];
    
        return $contentArr;
    }

    public function downloadImage(Request $request){
        if(!empty($request->image)){
            $image = trim($request->image);

            $fileName = 'image_'.uniqid().'.jpg';

            // $fileName = basename($image);

            // return response()->streamDownload(function() use ($image){
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // }, $fileName);

            return response()->download($image, $fileName);
        }
    }

    public function downloadDoc(Request $request){
        if(!empty($request->file)){
            $file = trim($request->file);

            $fileName = 'tai-lieu_'.uniqid().'.pdf';

            // $fileName = basename($image);

            // return response()->streamDownload(function() use ($image){
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // }, $fileName);

            $header = [
                'Content-Type' => 'application/pdf'
            ];

            return response()->download($file, $fileName, $header);
        }
    }
}


<?php
namespace App\Controllers;


use App\Models\UserModel;

use CodeIgniter\Controller;

use Config\Database;

class Pages extends Controller
{
    public function page1()
    {
        // Xử lý logic cho trang page1
        return view('page1_view');
    }

    public function page2()
    {
        // Xử lý logic cho trang page2
        return view('page2_view');
        
    }

    public function page3()
    {
        // Xử lý logic cho trang page3
        return view('page3_view');
    }
    public function dataAjax()
    {
          $model = new UserModel();
        // Kiểm tra nếu dữ liệu POST tồn tại
        if (isset($_POST['myVariable'])) {
            // Lấy dữ liệu gửi từ AJAX lên
            $data = $_POST['myVariable'];

            // Gom dữ liệu thành một mảng duy nhất
            $mergedArray = is_array($data) ? array_reduce($data, 'array_merge', []) : $data;

            // Hiển thị kết quả
            print_r($mergedArray);

            // Kiểm tra kết nối cơ sở dữ liệu
            $db = Database::connect();
            if ($db->connect()) {
                echo "Kết nối cơ sở dữ liệu thành công!";
            } else {
                echo "Lỗi kết nối cơ sở dữ liệu: " . $db->getConnection()->error();
            }

            // Chèn dữ liệu vào cơ sở dữ liệu
          
            if ($model->insert($mergedArray)) {
                echo "Chèn dữ liệu thành công!";

            } else {
                echo "Lỗi khi chèn dữ liệu!";
            }
        } else {
            // Xử lý khi dữ liệu không tồn tại
        }
    }

    public function renderDB()
    {
        $model = new UserModel();
        // khỏi tạo model và lấy tất cả các trường trong user đưa vào model để tương tác vs db
        $data['users'] = $model->findAll();
        
        return view('info_user', $data);
    }

    public function deleteDB(){
         if (isset($_POST['myid'])) {
            // Lấy dữ liệu gửi từ AJAX lên
            $dataid = $_POST['myid'];
            $model = new UserModel();
            // xóa trường trong db theo id truyền $ vô model
            $model->deleteData($dataid); 

             // Gửi phản hồi về client (nếu cần)
        echo json_encode(['status' => 'success']);
        }

    }

    public function updateDB(){
        if(isset($_POST['myvalueips'])){

            $data = $_POST['myvalueips'];// lấy giá trị từ ajax
            $usermodel = new UserModel();// khỏi tạo model
            $usermodel->update($data['id'],$data);// lấy id trong dữ liệu từ ajax

            //phản hồi lại ajax
             $response = [
            'status' => 'success',
            'message' => 'Dữ liệu đã được cập nhật thành công'
        ];

        return $this->response->setJSON($response);
        }
        
    }
}
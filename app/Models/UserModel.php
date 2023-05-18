<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel  extends Model
{
    protected $table = 'users'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id';
    protected $allowedFields = ['verify_code', 'fullname', 'licence_code', 'end_date', 'phone', 'email', 'rank', 'url_img', 'vehicle']; // Các trường cho phép thao tác

    // Các phương thức khác trong mô hình...
    public function deleteData($id){
        //xóa trương trong db theo id 
        $this->where('id',$id)->delete();
    }

//    public function updateData($id, $data)
//     {
//         $this->where('id', $id)->update($data);
//     }
}
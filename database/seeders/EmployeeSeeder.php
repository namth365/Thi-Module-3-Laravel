<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Employee;
        $item->id = 1;
        $item->code = "012837382";
        $item->name = "Nguyễn Vũ Tiến";
        $item->birthday = "1997/09/09";
        $item->sex = "Nam";
        $item->phone = "012345678";
        $item->cmnd = "123234344";
        $item->email = "tien@gmail.com";
        $item->address = "123 Lý Thường Kiệt";
        $item->manage_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Employee;
        $item->id = 2;
        $item->code = "012837382";
        $item->name = "Nguyễn Phương Anh";
        $item->birthday = "2001/10/12";
        $item->sex = "Nữ";
        $item->phone = "0123345678";
        $item->cmnd = "1232342344";
        $item->email = "anh1@gmail.com";
        $item->address = "1123 Lý Thường Kiệt";
        $item->manage_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Employee;
        $item->id = 3;
        $item->code = "0128337382";
        $item->name = "Lê Văn Định";
        $item->birthday = "1999/10/12";
        $item->sex = "Nam";
        $item->phone = "0123435678";
        $item->cmnd = "1232324344";
        $item->email = "dinh@gmail.com";
        $item->address = "123b1 Lý Thường Kiệt";
        $item->manage_id = 3;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Employee;
        $item->id = 4;
        $item->code = "01283337382";
        $item->name = "Bùi Thị Nhung";
        $item->birthday = "2001/10/12";
        $item->sex = "Nữ";
        $item->phone = "01235345678";
        $item->cmnd = "12323434344";
        $item->email = "nhung@gmail.com";
        $item->address = "123a Lý Thường Kiệt";
        $item->manage_id = 4;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Employee;
        $item->id = 5;
        $item->code = "012827382";
        $item->name = "Nguyễn Đức Anh";
        $item->birthday = "2001/10/12";
        $item->sex = "Nam";
        $item->phone = "002345678";
        $item->cmnd = "023234344";
        $item->email = "anh@gmail.com";
        $item->address = "1223 Lý Thường Kiệt";
        $item->manage_id = 5;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manage;

class ManageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Manage;
        $item->id = 1;
        $item->code = "QLHT";
        $item->name = "Quản trị hệ thống";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Manage;
        $item->id = 2;
        $item->code = "QLNS";
        $item->name = "Quản lý nhân sự";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Manage;
        $item->id = 3;
        $item->code = "LT";
        $item->name = "Lễ Tân";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Manage;
        $item->id = 4;
        $item->code = "QLP";
        $item->name = "Quản lý phòng";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Manage;
        $item->id = 5;
        $item->code = "QLDV";
        $item->name = "Quản lý dịch vụ";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}

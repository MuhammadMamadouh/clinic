<?php

namespace Bitwise\PermissionSeeder\Traits;

trait PermissionSeederTrait{


    public function getPermissionDisplayName(){
        return basename(str_replace('\\', '/', static::class));
    }

    public function getPermissionActions(){
   
        return config('permission_seeder.actions',[
            'List',
            'Create',
            'Show',
            'Edit'
        ]);
    }

    public function getPermissionActionsAr(){
   
        return [
            'List'=>'قائمة',
            'Show'=>'عرض',
            'Create'=>'انشاء',
            'Edit'=>'تعديل',
        ];
    }

}

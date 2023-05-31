<?php
namespace Bitwise\PermissionSeeder;


interface PermissionSeederContract{
    public function getPermissionDisplayName();
    public function getPermissionActions();
    public function getPermissionActionsAr();
}

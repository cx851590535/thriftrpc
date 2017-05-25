<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/5/24
 * Time: 16:11
 */

namespace Services\Permission;


use App\Service\PermissionService;

class PermissionHandler implements PermissionIf{
	public function getPermissions($userId, $projectName)
	{
		// TODO: Implement getPermissions() method.
		return PermissionService::getPermissions($userId,$projectName);
	}

	public function checkPermission($uid, $projectName, $uri)
	{
		// TODO: Implement checkPermission() method.
		return  PermissionService::checkPermission($uid, $projectName, $uri);
	}
}
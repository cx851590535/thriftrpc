namespace php Services.Permission
service Permission
{
	    string getPermissions(1:string userId 2:string projectName);
	    string checkPermission(1:string uid 2:string projectName 3:string uri);
}
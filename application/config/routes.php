<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_page';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'home/login_page';
$route['logout'] = 'home/logout';

// department routes
$route['add-department'] = 'department';
$route['insert-department'] = 'department/insert';
$route['manage-department'] = 'department/manage_department';
$route['edit-department/(:num)'] = 'department/edit/$1';
$route['update-department'] = 'department/update';
$route['delete-department/(:num)'] = 'department/delete/$1';

// client routes
$route['add-client'] = 'client';
$route['client-updates'] = 'client/client_updates';
$route['client-invoices'] = 'client/client_invoices';
$route['insert-client'] = 'client/insert';
$route['client-updates-insert'] = 'client/client_updates_insert';
$route['client-invoices-insert'] = 'client/client_invoices_insert';
$route['updates-client'] = 'client/updates_client';
$route['invoices-client'] = 'client/invoices_client';
$route['manage-client'] = 'client/manage_client';
$route['edit-client/(:num)'] = 'client/edit/$1';
$route['update-client'] = 'client/update';
$route['delete-client/(:num)'] = 'client/delete/$1';

$route['edit-quote/(:num)'] = 'client/edit_quote/$1';
$route['view-quote/(:num)'] = 'client/view_quote/$1';

//staff routes
$route['add-staff'] = 'staff';
$route['manage-staff'] = 'staff/manage';
$route['insert-staff'] = 'staff/insert';
$route['admin-profile'] = 'staff/admin_profile';
$route['profile'] = 'staff/profile';
$route['delete-staff/(:num)'] = 'staff/delete/$1';
$route['edit-staff/(:num)'] = 'staff/edit/$1';
$route['update-staff'] = 'staff/update';
$route['delete-staff-file/(:num)/(:any)'] = 'staff/deleteFile/$1/$2';
$route['update-status'] = 'staff/updatestatus';

//holidays routes
$route['add-holidays'] = 'holidays';
$route['manage-holidays'] = 'holidays/manage';
$route['view-holidays'] = 'holidays/view';
$route['insert-holidays'] = 'holidays/insert';
$route['delete-holidays/(:num)'] = 'holidays/delete/$1';
$route['edit-holidays/(:num)'] = 'holidays/edit/$1';
$route['update-holidays'] = 'holidays/update';

//appointments routes
$route['add-appointments'] = 'appointments';
$route['manage-appointments'] = 'appointments/manage';
$route['insert-appointments'] = 'appointments/insert';
$route['delete-appointments/(:num)'] = 'appointments/delete/$1';
$route['edit-appointments/(:num)'] = 'appointments/edit/$1';
$route['update-appointments'] = 'appointments/update';
$route['delete-marketing-file/(:num)/(:any)'] = 'appointments/deleteFile/$1/$2';

$route['add-staff-appointments'] = 'appointments/staff_add';
$route['view-staff-appointments'] = 'appointments/view';
$route['insert-staff-appointments'] = 'appointments/staff_insert';
$route['delete-staff-appointments/(:num)'] = 'appointments/staff_delete/$1';
$route['edit-staff-appointments/(:num)'] = 'appointments/staff_edit/$1';
$route['update-staff-appointments'] = 'appointments/staff_update';

//projects routes
$route['add-projects'] = 'projects';
$route['manage-projects'] = 'projects/manage';
$route['view-projects'] = 'projects/view';
$route['insert-projects'] = 'projects/insert';
$route['delete-projects/(:num)'] = 'projects/delete/$1';
$route['edit-projects/(:num)'] = 'projects/edit/$1';
$route['delete-file/(:num)/(:any)'] = 'projects/deleteFile/$1/$2';

//projects tasks routes
$route['add-project-tasks'] = 'Project_Tasks';
$route['manage-project-tasks'] = 'Project_Tasks/manage';
$route['view-project-tasks'] = 'Project_Tasks/view';
$route['insert-project-tasks'] = 'Project_Tasks/insert';
$route['delete-project-tasks/(:num)'] = 'Project_Tasks/delete/$1';
$route['edit-project-tasks/(:num)'] = 'Project_Tasks/edit/$1';

//work reports tasks routes
$route['add-work-reports'] = 'Work_Reports';
$route['manage-work-reports'] = 'Work_Reports/manage';
$route['insert-work-reports'] = 'Work_Reports/insert';
$route['delete-work-reports/(:num)'] = 'Work_Reports/delete/$1';
$route['edit-work-reports/(:num)'] = 'Work_Reports/edit/$1';
$route['view-work-reports'] = 'Work_Reports/view';
$route['add-staff-work-reports'] = 'Work_Reports/staff_index';
$route['insert-staff-work-reports'] = 'Work_Reports/staff_insert';
$route['delete-staff-work-reports/(:num)'] = 'Work_Reports/staff_delete/$1';
$route['edit-staff-work-reports/(:num)'] = 'Work_Reports/staff_edit/$1';

//salary routes
$route['add-salary'] = 'salary';
$route['manage-salary'] = 'salary/manage';
$route['view-salary'] = 'salary/view';
$route['salary-invoice/(:num)'] = 'salary/invoice/$1';
$route['print-invoice/(:num)'] = 'salary/invoice_print/$1';
$route['delete-salary/(:num)'] = 'salary/delete/$1';
$route['staff-salary-invoice/(:num)'] = 'salary/staff_invoice/$1';
$route['staff-print-invoice/(:num)'] = 'salary/staff_invoice_print/$1';

$route['apply-leave'] = 'leave';
$route['approve-leave'] = 'leave/approve';
$route['leave-history'] = 'leave/manage';
$route['leave-approved/(:num)'] = 'leave/insert_approve/$1';
$route['leave-rejected/(:num)'] = 'leave/insert_reject/$1';
$route['view-leave'] = 'leave/view';

$route['manage-attendance'] = 'attendance/manage';
$route['view-attendance'] = 'attendance/staff_attendance';

//suppliers routes
$route['add-suppliers'] = 'suppliers';
$route['manage-suppliers'] = 'suppliers/manage';
$route['delete-suppliers/(:num)'] = 'suppliers/delete/$1';
$route['edit-suppliers/(:num)'] = 'suppliers/edit/$1';

//products routes
$route['add-products'] = 'products';
$route['manage-products'] = 'products/manage';
$route['delete-products/(:num)'] = 'products/delete/$1';
$route['edit-products/(:num)'] = 'products/edit/$1';

//worksheet routes
$route['view-worksheets'] = 'Project_Tasks/view_worksheets';  //added route
$route['manage-worksheets'] = 'Project_Tasks/manage_worksheets';
$route['delete-worksheets/(:num)'] = 'Project_Tasks/delete_worksheets/$1';
$route['view-worksheet/(:num)'] = 'Project_Tasks/view_worksheets/$1';


//Content Routes

$route['content'] = 'Content';
$route['content/insert'] = 'Content/insert';
$route['content_details'] = 'Content/view';
$route['edit-content/(:num)'] = 'Content/edit/$1';
$route['content/update'] = 'Content/update';
$route['delete-content/(:num)'] = 'Content/delete/$1';
$route['view_staff_content'] = 'Content/view_staff_content';


//assign-clients
$route['assign-clients'] = 'Assign_clients';
$route['insert-asssign-client'] = 'Assign_clients/insert';
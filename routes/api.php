<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require(dirname(__FILE__) . '/mockdata/EmployeeClass.php');
require(dirname(__FILE__) . '/mockdata/MockData.php');

Route::get('/userinfo', function () {
    $empData = mockData();
    $objEmployee = new Employee($empData);    
    return [
        'emp' => $objEmployee->getData()
    ];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



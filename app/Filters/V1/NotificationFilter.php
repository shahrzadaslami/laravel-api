<?php
namespace App\Filters\V1;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class NotificationFilter extends ApiFilter {
    protected $allowedParms = [
        'id' => ['eq', 'gt', 'lt'],
        'serverId'=> ['eq'],
        'title'=>['eq'],
        
    ];

    protected $columnMap = [

        'serverId' => 'servers_id', 
    ];


    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
    ];


}
<?php
namespace App\Filters\V1;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ServerFilter extends ApiFilter {
    protected $allowedParms = [
        'id' => ['eq', 'gt', 'lt'],
        'state'=> ['eq'],
        'title'=>['eq'],
        'ip'=>['eq'],
        'sshPort'=>['eq']
    ];

    protected $columnMap = [
        // any column that is called with different name than its name in table 
        //EXAMPLE
        //'serverId' = 'server_id', 
        //in this one we don't have such column
    ];


    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
    ];


}
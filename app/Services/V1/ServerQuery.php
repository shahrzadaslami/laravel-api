<?php
namespace App\Services\V1;
use Illuminate\Http\Request;


class ServerQuery {
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

    public function transform(Request $request){
        $eloQuery = [];


        foreach($this->allowedParms as $parm => $operators){
            $query = $request->query($parm);
            if(!isset($query)){
                continue;
            }

            $column = $this->columnMap[$parm] ?? $parm;

            foreach($operators as $operator ){
                if(isset($query[$operator])){
                    $eloQuery[]=[$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }
}
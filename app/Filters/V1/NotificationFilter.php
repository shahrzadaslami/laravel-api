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
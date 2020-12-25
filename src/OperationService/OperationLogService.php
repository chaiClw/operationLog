<?php


namespace Record\OperationService;

use Illuminate\Http\Request;
use Record\OperationService\Contracts\OperationLogServiceInterface;

class OperationLogService implements OperationLogServiceInterface
{
    public function recordOperation(Request $request)
    {
        echo '哈哈。这块是代码逻辑';
    }
}
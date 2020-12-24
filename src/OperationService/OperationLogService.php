<?php


namespace Record\OperationService;

use Record\OperationService\Contracts\OperationLogServiceInterface;

class OperationLogService implements OperationLogServiceInterface
{
    public function recordOperation()
    {
        echo '哈哈。这块是代码逻辑';
    }
}
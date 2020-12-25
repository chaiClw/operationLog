<?php
namespace Record\OperationService\Contracts;

use Illuminate\Http\Request;

Interface OperationLogServiceInterface
{
    public function recordOperation(Request $request);
}
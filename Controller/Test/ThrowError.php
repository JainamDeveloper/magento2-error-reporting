<?php
declare(strict_types=1);

namespace Hryvinskyi\ErrorReporting\Controller\Test;

use Magento\Framework\App\Action\HttpGetActionInterface;

class ThrowError implements HttpGetActionInterface
{
    public function execute(): \Magento\Framework\Controller\ResultInterface|\Magento\Framework\App\ResponseInterface
    {
        throw new \RuntimeException('Test error: triggered via /hryvinskyi_errorreporting/test/throwerror');
    }
}

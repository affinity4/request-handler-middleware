<?php
declare(strict_types=1);

namespace Affinity4\Middleware\RequestHandler;

use Affinity4\Dispatcher\Contract\HttpFactoryMiddlewareInterface;
use Nyholm\Psr7\Factory\Psr17Factory;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;

class RequestHandlerMiddleware implements HttpFactoryMiddlewareInterface
{
    private $HttpFactory;

    public function __construct(Psr17Factory $HttpFactory)
    {
        $this->HttpFactory = $HttpFactory;
    }

    public function process(ServerRequestInterface $Request, RequestHandlerInterface $RequestHandler): ResponseInterface
    {
        return $this->HttpFactory->createResponse(200);
    }
}

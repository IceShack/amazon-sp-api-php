<?php

namespace ClouSale\AmazonSellingPartnerAPI;

use Exception;
use Throwable;

class SellingPartnerOAuthException extends Exception
{
    public function __construct(string $description, string $code, Throwable $previous = null)
    {
        $message = sprintf('Code "%s" - %s', $code, $description);

        parent::__construct($message, $code, $previous);
    }
}

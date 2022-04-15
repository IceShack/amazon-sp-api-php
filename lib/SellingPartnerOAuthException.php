<?php

namespace ClouSale\AmazonSellingPartnerAPI;

use Exception;
use Throwable;

class SellingPartnerOAuthException extends Exception
{

    private string $errorMessage;

    private string $errorCode;

    public function __construct(string $errorMessage, string $errorCode, Throwable $previous = null)
    {
        $message = sprintf('Code "%s" - %s', $errorCode, $errorMessage);

        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;

        parent::__construct($message, 0, $previous);
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
}

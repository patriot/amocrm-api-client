<?php


namespace ddlzz\AmoAPI\Validator;

use ddlzz\AmoAPI\Exception\InvalidArgumentException;
use ddlzz\AmoAPI\Utils\StringUtil;


/**
 * Class CredentialsValidator
 * @package ddlzz\AmoAPI\Validator
 * @author ddlzz
 */
class CredentialsValidator
{
    /**
     * @param string $subdomain
     * @return bool
     * @throws InvalidArgumentException
     */
    public function validateSubdomain($subdomain)
    {
        if (!StringUtil::isAlNum($subdomain)) {
            $message = sprintf('"%s" is not a valid subdomain', $subdomain);
            throw new InvalidArgumentException($message);
        }

        return true;
    }

    /**
     * @param string $login
     * @return bool
     * @throws InvalidArgumentException
     */
    public function validateLogin($login)
    {
        if (!StringUtil::isEmail($login)) {
            $message = sprintf('"%s" is not a valid login', $login);
            throw new InvalidArgumentException($message);
        }

        return true;
    }

    /**
     * @param string $hash
     * @return bool
     * @throws InvalidArgumentException
     */
    public function validateHash($hash)
    {
        if (!StringUtil::isAlNum($hash)) {
            $message = sprintf('"%s" is not a valid hash', $hash);
            throw new InvalidArgumentException($message);
        }

        return true;
    }
}
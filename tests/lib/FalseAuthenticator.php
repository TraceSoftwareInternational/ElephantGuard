<?php

/*
 * This file is part of Slim HTTP Basic Authentication middleware
 *
 * Copyright (c) 2013-2018 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   https://github.com/tuupola/slim-basic-auth
 *
 */

namespace Test;

use Psr\Http\Message\ServerRequestInterface;
use TraceSoftware\Middleware\ElephantGuard\AuthenticatorInterface;

class FalseAuthenticator implements AuthenticatorInterface
{
    public function __invoke(ServerRequestInterface $request): bool
    {
        return false;
    }

    public function getLastError(): string
    {
        return "";
    }
}

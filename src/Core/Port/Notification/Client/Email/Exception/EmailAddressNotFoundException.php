<?php

declare(strict_types=1);

/*
 * This file is part of the Explicit Architecture POC,
 * which is created on top of the Symfony Demo application.
 *
 * (c) Herberto Graça <herberto.graca@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\App\Core\Port\Notification\Client\Email\Exception;

use Acme\App\Core\SharedKernel\Exception\AppRuntimeException;

/**
 * @author Rodrigo Prestes
 * @author Herberto Graca <herberto.graca@gmail.com>
 */
class EmailAddressNotFoundException extends AppRuntimeException
{
    public function __construct(string $pattern)
    {
        parent::__construct('No e-mail address found with the pattern ' . $pattern);
    }
}

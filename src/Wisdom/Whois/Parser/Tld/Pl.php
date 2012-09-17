<?php

/**
 * This file is part of the Wisdom project.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Wisdom\Whois\Parser\Tld;

use Wisdom\Whois\Parser\AbstractParser;

/**
 * Whois parser for .pl domains.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class Pl extends AbstractParser
{
    public function isAvailable()
    {
        return $this->contains('No information available about domain name %s in the Registry NASK database.');
    }
}

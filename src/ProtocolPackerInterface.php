<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Protocol;

use Hyperf\Contract\PackerInterface;

interface ProtocolPackerInterface extends PackerInterface
{
    const HEAD_LENGTH = 4;

    public function length(string $head): int;
}

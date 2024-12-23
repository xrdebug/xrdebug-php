<?php

/*
 * This file is part of xrDebug.
 *
 * (c) Rodolfo Berrios <rodolfo@chevere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Chevere\xrDebug\Controllers;

use Chevere\Filesystem\File;
use Chevere\Filesystem\Interfaces\DirectoryInterface;
use Chevere\Http\Attributes\Description;
use Chevere\Http\Attributes\Response;
use Chevere\Http\Controller;
use Chevere\Http\Header;
use Chevere\Http\Status;
use Chevere\Parameter\Attributes\StringAttr;
use Chevere\Parameter\Interfaces\ParameterInterface;
use Chevere\xrDebug\Constants\UrlPathRegex;
use Chevere\xrDebug\Controllers\Traits\PauseTrait;
use function Chevere\Parameter\arrayp;
use function Chevere\Parameter\bool;

#[Description('Get a pause')]
#[Response(
    new Status(200, 404),
    new Header('Content-Type', 'application/json')
)]
final class PauseGetController extends Controller
{
    use PauseTrait;

    public function __construct(
        private DirectoryInterface $directory
    ) {
    }

    public static function acceptResponse(): ParameterInterface
    {
        return arrayp(
            stop: bool()
        );
    }

    protected function main(
        #[StringAttr(UrlPathRegex::UUID)]
        string $id
    ): array {
        $path = $this->directory->path()->getChild($id);
        $file = new File($path);
        $this->assertExists($file);
        $contents = $file->getContents();
        /** @var array<string, boolean> */
        return json_decode($contents, true);
    }
}

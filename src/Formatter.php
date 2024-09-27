<?php

namespace Php\Project\Formatter;

use function Php\Project\Formatters\Stylish\makeStylish;
use function Php\Project\Formatters\Plain\makePlain;
use function Php\Project\Formatters\Json\makeJson;

function getFormattedDiff(array $diff, string $format): string
{
    return match ($format) {
        'stylish' => makeStylish($diff),
        'plain' => makePlain($diff),
        'json' => makeJson($diff),
        default => throw new \Exception("The format '$format' is not supported."),
    };
}

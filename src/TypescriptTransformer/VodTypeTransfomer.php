<?php

namespace Vod\Vod\TypescriptTransformer;

use ReflectionClass;
use Spatie\TypeScriptTransformer\Structures\TransformedType;
use Spatie\TypeScriptTransformer\Transformers\Transformer;

class VodTypeTransfomer implements Transformer
{
    public function transform(ReflectionClass $class, string $name): ?TransformedType
    {
        // Your transformation logic here
        // ...

        // If no transformation is possible, return null
        return null;
    }
}

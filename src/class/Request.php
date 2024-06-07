<?php

#[Attribute(Attribute::TARGET_PROPERTY)]
class NotBlank
{
}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public ?int $min;
    public ?int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[Length(min: 4, max: 10)]
    #[NotBlank]
    public ?string $username;

    #[Length(min: 8, max: 10)]
    #[NotBlank]
    public ?string $password;
}

function validate(object $request): void
{
    $class = new ReflectionClass($request);
    $properties = $class->getProperties(ReflectionProperty::IS_PUBLIC);

    foreach ($properties as $property) {
        validateNotBlank($property, $request);
        validateLength($property, $request);
    }
}

function validateNotBlank(ReflectionProperty $property, object $request): void
{
    $attributes = $property->getAttributes(NotBlank::class);

    if (!empty($attributes)) {
        if (!$property->isInitialized($request)) {
            throw new Exception("$property->name is not set");
        } else if (is_null($property->getValue($request))) {
            throw new Exception("$property->name is null");
        } else if (trim($property->getValue($request)) === "") {
            throw new Exception("$property->name is empty");
        }
    }
}

function validateLength(ReflectionProperty $property, object $request): void
{
    $value = $property->getValue($request);
    $attributes = $property->getAttributes(Length::class);

    foreach ($attributes as $attribute) {
        $length = $attribute->newInstance();
        $valueLength = strlen($value);

        if ($valueLength < $length->min) {
            throw new Exception("$property->name is to short");
        } else if ($valueLength > $length->max) {
            throw new Exception("$property->name is to long");
        }
    }
}

$loginRequest = new LoginRequest();

$loginRequest->username = "john-doe";
$loginRequest->password = "jd10";

try {
    validate($loginRequest);
} catch (Exception $exception) {
    echo "error = {$exception->getMessage()}\n";
}

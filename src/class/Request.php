<?php

class ValidationException extends Exception
{
}

class LoginRequest
{
    public ?string $username;
    public ?string $password;
}

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

function validate(object $request): void
{
    $reflection = new ReflectionClass($request);
    $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

    foreach ($properties as $property) {
        if (!$property->isInitialized($request)) {
            throw new ValidationException("$property->name is not set");
        } else if (is_null($property->getValue($request))) {
            throw new ValidationException("$property->name is null");
        } else if (trim($property->getValue($request)) === "") {
            throw new ValidationException("$property->name is empty");
        }
    }
}

$loginRequest = new LoginRequest();
$registerUserRequest = new RegisterUserRequest();

$loginRequest->username = "john-doe";
$loginRequest->password = "jd10";

try {
    validate($loginRequest);
    echo "valid\n";

    validate($registerUserRequest);
    echo "valid\n";
} catch (ValidationException $error) {
    echo "error = {$error->getMessage()}\n";
}

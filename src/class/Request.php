<?php

class ValidationException extends Exception
{
}

class LoginRequest
{
    public ?string $username;
    public ?string $password;
}

function validateLoginRequest(LoginRequest $request): void
{
    if (!isset($request->username)) {
        throw new ValidationException("username is null");
    } else if (!isset($request->password)) {
        throw new ValidationException("password is null");
    } else if (trim($request->username) === "") {
        throw new Exception("username is empty");
    } else if (trim($request->password) === "") {
        throw new Exception("password is empty");
    }
}

$loginRequest = new LoginRequest();

$loginRequest->username = "john-doe";
$loginRequest->password = "";

try {
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "validation error = {$exception->getMessage()}\n";
} catch (Exception $exception) {
    echo "error = {$exception->getMessage()}\n";
} finally {
    echo "done\n";
}

echo "==================================================\n";

try {
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "error = {$exception->getMessage()}\n";

    echo "==================================================\n";

    echo "$exception\n";

    echo "==================================================\n";

    echo "{$exception->getTraceAsString()}\n";

    echo "==================================================\n";

    var_dump($exception->getTrace());
}

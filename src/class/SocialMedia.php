<?php

class SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

final class Facebook extends SocialMedia
{
     public function login(string $username, string password): bool
     {
        return false;
     }

}

class FakeFacebook extends Facebook
{
}

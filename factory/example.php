<?php

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();

        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }
}

class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): \SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}

// 

interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}

class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user {$this->login} with password {$this->password}\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user {$this->login}\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API request to create a post in Facebook timeline.\n";
    }
}

function clientCode(SocialNetworkPoster $creater)
{
    $creater->post("Hello World!");
    $creater->post("I had a large hamburger this moring!");
}

echo "Testing ConcreteCraeteor1:\n";
clientCode(new FacebookPoster("john", "qwer1234"));
echo "\n\n";
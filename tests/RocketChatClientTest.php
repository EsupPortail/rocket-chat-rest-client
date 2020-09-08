<?php
namespace RocketChat;

use PHPUnit\Framework\TestCase;
use RocketChat\Client;




final class ClientTest extends TestCase
{
    public function testCanCreateConnexionWithConfigFile(): void
    {
        include_once(dirname(dirname(__FILE__))."/config-sample.php");
        $this->assertInstanceOf(
            Client::class,
            new Client()
        );
    }
    public function testCanCreateConnexionWithoutConfigFile(): void
    {
        $this->assertInstanceOf(
            Client::class,
            new Client('https://chat.yourorganisation.org', '/api/v1/')
        );
    }
}
?>

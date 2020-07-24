<?php
use PHPUnit\Framework\TestCase;
use RocketChat\Client;

include_once(dirname(dirname(__FILE__))."/config.php");

final class ClientTest extends TestCase
{
    public function testCanCreateConnexion(): void
    {
        $this->assertInstanceOf(
            Client::class,
            new Client()
        );
    }
}
?>

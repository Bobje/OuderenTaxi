<?php
    namespace Stevenmaguire\Uber\Test;

    use Stevenmaguire\Uber\Client as Uber;
    use Mockery as m;
    use GuzzleHttp\Client as HttpClient;
    use GuzzleHttp\Handler\MockHandler;
    use GuzzleHttp\HandlerStack;
    use GuzzleHttp\Psr7\Response;
    use GuzzleHttp\Exception\ClientException as HttpClientException;

    class UberTest extends \PHPUnit_Framework_TestCase {

        public function setUp() {
            $this->client = new Uber([
                'access_token'  =>  getenv('UBER_ACCESS_TOKEN'),
                'server_token'  =>  getenv('UBER_SERVER_TOKEN'),
                'use_sandbox'   =>  getenv('UBER_USE_SANDBOX'),
                'version'       =>  getenv('UBER_VERSION'),
                'locale'        =>  getenv('UBER_LOCALE'),
            ]);
        }

        public function testConfiguration() {
            $client = new Uber([
                'access_token' => getenv('UBER_ACCESS_TOKEN'),
                'server_token' => getenv('UBER_SERVER_TOKEN'),
                'use_sandbox' => getenv('UBER_USE_SANDBOX'),
                'version' => getenv('UBER_VERSION'),
                'locale' => getenv('UBER_LOCALE'),
            ]);

            $this->assertEquals($client->getAccessToken(), getenv('UBER_ACCESS_TOKEN'));
            $this->assertEquals($client->getServerToken(), getenv('UBER_SERVER_TOKEN'));
            $this->assertEquals($client->getUseSandbox(), getenv('UBER_USE_SANDBOX'));
            $this->assertEquals($client->getVersion(), getenv('UBER_VERSION'));
            $this->assertEquals($client->getLocale(), getenv('UBER_LOCALE'));
        }

        public function testConfigurationDefaults() {
            $client = new Uber();
            $this->assertEquals(null, $client->getAccessToken());
            $this->assertEquals(null, $client->getServerToken());
            $this->assertEquals(false, $client->getUseSandbox());
            $this->assertEquals('v1.2', $client->getVersion());
            $this->assertEquals('en_US', $client->getLocale());
        }

        public function testUrlIncludesVersion() {
            $version = uniqid();
            $this->client->setVersion($version);
            $url = $this->client->getUrlFromPath('/');
            $this->assertContains($version, $url);
        }
    }
?>
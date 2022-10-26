<?php

namespace DPRMC\Tests\Unit;

abstract class BaseTestCase extends \Orchestra\Testbench\TestCase {

    protected function getEnvironmentSetUp($app) {
        /**
         * 'mailers' => [
            'microsoft-graph' => [
            'transport' => 'microsoft-graph',
            'tenant' => env('MAIL_MSGRAPH_TENANT', 'common'),
            'client' => env('MAIL_MSGRAPH_CLIENT'),
            'secret' => env('MAIL_MSGRAPH_SECRET')
            ]
         */
        $app['config']->set('mail.mailers.microsoft-graph.transport', 'microsoft-graph');
        $app['config']->set('mail.mailers.microsoft-graph.tenant', env('MAIL_MSGRAPH_TENANT', 'common'));
        $app['config']->set('mail.mailers.microsoft-graph.client', env('MAIL_MSGRAPH_CLIENT'));
        $app['config']->set('mail.mailers.microsoft-graph.secret', env('MAIL_MSGRAPH_SECRET'));
    }



}

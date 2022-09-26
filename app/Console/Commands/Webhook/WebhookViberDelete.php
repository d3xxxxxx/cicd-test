<?php

namespace App\Console\Commands\Webhook;

use App\Facades\Viber;
use Illuminate\Console\Command;
use App\Libraries\Viber\Webhook as ViberWebhook;

class WebhookViberDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webhook:viber-delete {--type= : The type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete viber webhook';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->option('type') == 'merchant') {
            return Viber::withToken(
                config('services.viber.merchant_auth_token'),
                function () {
                    return ViberWebhook::remove();
                }
            );
        }

        return ViberWebhook::remove();
    }
}

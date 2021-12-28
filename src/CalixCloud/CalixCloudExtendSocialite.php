<?php

namespace SocialiteProviders\CalixCloud;

use SocialiteProviders\Manager\SocialiteWasCalled;

class CalixCloudExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('calixcloud', Provider::class);
    }
}

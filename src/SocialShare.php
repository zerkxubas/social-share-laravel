<?php

declare(strict_types=1);

namespace Zerkxubas\SocialShareLaravel;

final class SocialShare
{
    public static function generate($platform, $url, $og_title = '', $og_description = '')
    {
        $encodedUrl = urlencode($url);

        switch ($platform) {
            case 'facebook':
                return "https://www.facebook.com/sharer/sharer.php?u={$encodedUrl}";
            case 'messenger':
                return "https://www.facebook.com/dialog/send?link={$encodedUrl}&app_id=" . config('socialshare.facebook_app_id') . "&redirect_uri=" . url('/');
            case 'twitter':
                return "https://twitter.com/intent/tweet?url={$encodedUrl}&text={$og_title}";
            case 'linkedin':
                return "https://www.linkedin.com/shareArticle?mini=true&url={$encodedUrl}&title={$og_title}&summary={$og_description}";
            case 'whatsapp':
                return "https://api.whatsapp.com/send?text={$encodedUrl}";
            case 'reddit':
                return "https://www.reddit.com/submit?url={$encodedUrl}";
            // more platforms to be added.
            default:
                throw new \Exception("Platform not supported");
        }
    }
}

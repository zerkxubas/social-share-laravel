<?php

namespace Zerkxubas\SocialShareLaravel\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Zerkxubas\SocialShareLaravel\SocialShare;

class SocialShareTest extends TestCase
{

    /**
     * Facebook Share
     */
    #[Test]
    public function it_generates_facebook_share_url()
    {
        $url = 'http://example.com';
        $expected = "https://www.facebook.com/sharer/sharer.php?u=" . urlencode($url);

        $this->assertEquals($expected, SocialShare::generate('facebook', $url));
    }

    /**
     * Twitter Share Link
     */
    #[Test]
    public function it_generates_twitter_share_url()
    {
        $url = 'http://example.com';
        $title = 'Example Title';
        $expected = "https://twitter.com/intent/tweet?url=" . urlencode($url) . "&text=" . $title;

        $this->assertEquals($expected, SocialShare::generate('twitter', $url, $title));
    }

    /**
     * LinkedIn Share
     */
    #[Test]
    public function it_generates_linked_in_share_url()
    {
        $url = 'http://example.com';
        $og_title = 'Example Title';
        $og_description = 'Example Description';
        $expected = "https://www.linkedin.com/shareArticle?mini=true&url=".urlencode($url)."&title={$og_title}&summary={$og_description}";

        $this->assertEquals($expected, SocialShare::generate('linkedin', $url, $og_title,$og_description));       
    }

    /**
     * Unsupported platforms
     */
    #[Test]
    public function it_throws_exception_for_unsupported_platform()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Platform not supported');

        SocialShare::generate('unknownPlatform', 'https://example.com');
    }
}
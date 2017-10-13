<?php

namespace TencentTH\TCPlayer;

class Constants {

  /**
   * @return string[]
   */
  public static function getScripts() {
    return [
      "vod-ima-0.1.0" => "vendor-ext/tcplayer/vod-ima-0.1.0.js",
      "vod-ima-0.1.1" => "vendor-ext/tcplayer/vod-ima-0.1.1.js",
      "vod-ima-0.1.3" => "vendor-ext/tcplayer/vod-ima-0.1.3.js",
      "vod-ima-0.1.4" => "vendor-ext/tcplayer/vod-ima-0.1.4.js",
      "vod-ima-0.1.6" => "vendor-ext/tcplayer/vod-ima-0.1.6-2.js",
      "vod-ima-0.1.10 Beta" => "vendor-ext/tcplayer/vod-ima-0.1.10-1.js",
      // "TcPlayer-2.2.0.js" => "//imgcache.qq.com/open/qcloud/video/vcplayer/TcPlayer-2.2.0.js"
    ];
  }

  /**
   * @return \TencentTH\TCPlayer\Testcase[]
   */
  public static function getTestcases() {
    return [
      "play" => new Testcase(
        "play.part.html",
        "Play",
        "Able to playback the video and audio",
        "1) The video can be played and audio can be heard but the piggybacking to the reporting server failed over SSL as well as there is no option to disable it
2) Occasionally error XMLHttpRequest cannot load http://tcplayer.qcloud.com/api/tcplayer/sync. Response for preflight is invalid (redirect)",
        FALSE
      ),
      "play-multi-birates" => new Testcase(
        "multi-bitrates.part.html",
        "Play: Multiple bitrates",
        "Supports 240p, 360p, 480p, 720p, 1080p and auto-scale to the best resolution",
        "1) It only auto-scale to 360p whereas my network is at 1Gbps",
        FALSE
      ),
      "play-volumn" => new Testcase(
        "play.part.html",
        "Play: Volumn",
        "Volumn settings is maintained across page refresh",
        "Volumn settings is maintained across page refresh",
        TRUE
      ),
      "ui-volumn" => new Testcase(
        "play.part.html",
        "UI: Volumn",
        "Volumn button is correctly displayed on mouseover",
        "It is correctly displayed",
        TRUE
      ),
      "ui-onpause" => new Testcase(
        "play.part.html",
        "UI: On Pause",
        "The video is paused and no audio plays",
        "The video screen is paused and audio is muted",
        TRUE
      ),
      "ui-responsive" => new Testcase(
        "responsive.part.html",
        "UI: Responsive",
        "All UI should be responsive",
        "All UI is responsive",
        TRUE
      ),
      "ad-autoplay" => new Testcase(
        "ad-autoplay.part.html",
        "Ad: Autoplay ?",
        "Linear preroll ad is displayed when the video has autoplay set",
        "Ads correctly shown every time",
        TRUE
      ),
      "ad-multivast" => new Testcase(
        "ad-multivast.part.html",
        "Ad: Multi-Vast",
        "Ad is displayed at pre, mid, and end of the video",
        "Occasionally exceptions thrown e.g.
* Uncaught Error: The play() request was interrupted by a call to pause(),
* Uncaught DOMException: Failed to read the 'buffered' property from 'SourceBuffer',
and few other exceptions",
        FALSE
      ),
      "error-custom" => new Testcase(
        "error-custom.part.html",
        "Error: Messages",
        "Custom error message is displayed",
        "Custom error message is displayed",
        TRUE
      ),
      "api-method" => new Testcase(
        "api-method.part.html",
        "API: Methods",
        "Basic methods such as play, pause, togglePlay and mute are working correctly.",
        "All basic method works correctly.",
        TRUE
      ),
      "listener" => new Testcase(
        "api-listener.part.html",
        "API: Events",
        "Capable of detecting events",
        "Support all events.",
        TRUE
      ),
      "seperator-01" => "<hr/>",
      "event-ready" => new Testcase(
        "event-ready.part.html",
        "API: Event - Ready",
        "Able to detect when the video is ready for playback",
        "The event loadedmetadata is fired. The event fires when \"the user agent has just determined the duration and dimensions of the media resource\"
Ref: https://www.w3.org/wiki/HTML/Elements/video#Media_Events",
        TRUE
      ),
      "event-player-ready" => new Testcase(
        "event-ready.part.html",
        "API: Event - Player Ready",
        "Able to detect when the player is initialized and is ready for playback. This is the earliest point at which any API calls e.g. playAd should be made.",
        "The event is ready",
        TRUE
      ),
    ];
  }

}

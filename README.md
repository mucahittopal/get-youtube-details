# get-youtube-details
Get video details from a youtube url

video details content example: 

<pre>
  stdClass Object
(
    [videoId] => GwHLY-fI2q8
    [title] => Barış Manço - Dağlar Dağlar 1991 HD Ikeda Concert Hall - Japan
    [lengthSeconds] => 264
    [keywords] => Array
        (
            [0] => Barış
            [1] => Manço
            [2] => Programları
            [3] => Mix
            [4] => moda
            [5] => boyut
            [6] => dizi
            [7] => film
            [8] => 7'den
            [9] => 77'ye
            [10] => yediden
            [11] => yetmiş
            [12] => yediye
            [13] => adam
            [14] => olacak
            [15] => çocuk
            [16] => ikinci
            [17] => kahvaltı
            [18] => kavak
            [19] => yelleri
            [20] => mançoloji
            [21] => dünya
            [22] => turu
            [23] => çelebi
            [24] => gezgin
            [25] => dere
            [26] => tepe
            [27] => türkiye
            [28] => türk
            [29] => istanbul
            [30] => kadıköy
            [31] => vapur
            [32] => turk
            [33] => turkey
            [34] => mustafa
            [35] => kemal
            [36] => aAtaturk
            [37] => japonya
            [38] => japan
            [39] => tokyo
            [40] => kurtlar
            [41] => vadisi
            [42] => pusu
            [43] => terör
            [44] => telegol
            [45] => am
        )

    [channelId] => UCvExluvX2vvaE2nFrHfkZgA
    [isOwnerViewing] => 
    [shortDescription] => Barış Manço - Dağlar Dağlar 1991 Japonya Konseri Japan Japanese Ikeda Concert Hall
    [isCrawlable] => 1
    [thumbnail] => stdClass Object
        (
            [thumbnails] => Array
                (
                    [0] => stdClass Object
                        (
                            [url] => https://i.ytimg.com/vi/GwHLY-fI2q8/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLClCNGWrpBMFh4ZHSfp03hVQlhwjQ
                            [width] => 168
                            [height] => 94
                        )

                    [1] => stdClass Object
                        (
                            [url] => https://i.ytimg.com/vi/GwHLY-fI2q8/hqdefault.jpg?sqp=-oaymwEbCMQBEG5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLA5IoaemyA7W-OqEl7xCCQkuPHE0w
                            [width] => 196
                            [height] => 110
                        )

                    [2] => stdClass Object
                        (
                            [url] => https://i.ytimg.com/vi/GwHLY-fI2q8/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDGss_qnI8RfugD6eCgYBFRzrj6Eg
                            [width] => 246
                            [height] => 138
                        )

                    [3] => stdClass Object
                        (
                            [url] => https://i.ytimg.com/vi/GwHLY-fI2q8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLD-WKGrBLSUODHfcfx3v2ts7sMPNQ
                            [width] => 336
                            [height] => 188
                        )

                )

        )

    [allowRatings] => 1
    [viewCount] => 93239
    [author] => MancoTv
    [isPrivate] => 
    [isUnpluggedCorpus] => 
    [isLiveContent] => 
)
</pre>

<strong>Using the function</strong>
<code>
  <?php
  $url="https://www.youtube.com/watch?v=GwHLY-fI2q8";
  $data=getVideoDetails($url);
  print_r($data);
</code>

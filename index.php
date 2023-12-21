<?php
  require_once 'random-user-agent.php'; 

  function getVideoDetails($url="")
  {
      $video_id=getYouTubeVideoID($url);
  	  $s = file_get_contents("https://www.youtube.com/watch?v=$video_id");
    
      preg_match_all('/"INNERTUBE_API_KEY":"(.*?)"/s', $s, $data);
      $key=$data[1];

  	  $hc = randomUserAgent();
    
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://www.youtube.com/youtubei/v1/player?key=$key&prettyPrint=false");
  	  curl_setopt($ch, CURLOPT_USERAGENT, $hc);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, '{
        "context": {
            "client": {
                "userAgent": "'.$hc.',gzip(gfe)",
                "clientName": "WEB",
                "clientVersion": "2.20231219.04.00",
                "originalUrl": "https://www.youtube.com/watch?v=GwHLY-fI2q8",
                "acceptHeader": "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
            },     
        },
        "videoId": "'.$video_id.'",
    }');
      curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

      $headers = array();
      $headers[] = 'Cache-Control: no-cache';
      $headers[] = 'Content-Type: application/json';
      $headers[] = 'Origin: https://www.youtube.com';
      $headers[] = 'Pragma: no-cache';
      $headers[] = "Referer: https://www.youtube.com/watch?v=$video_id";
      $headers[] = "User-Agent: $hc";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      curl_close($ch);
      return json_decode($result)->videoDetails;
  }

  function getYouTubeVideoID($url) {
      $videoID = '';
      if (strpos($url, 'youtu.be') !== false) {
          $path = parse_url($url, PHP_URL_PATH);
          $videoID = substr($path, 1);
      } elseif (strpos($url, 'youtube.com') !== false) {
          parse_str(parse_url($url, PHP_URL_QUERY), $query);
          $videoID = isset($query['v']) ? $query['v'] : '';
      }
      return $videoID;
  }
  ?>

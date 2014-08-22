<?php

header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');
$random = substr(number_format(time() * rand(),0,'',''),0,10);

echo '<config>
   <ova.title>
       Video Ads - streaming.eratvonline.com
   </ova.title>
   <ova.json>
       {
          "debug": {
              "levels": "fatal, config, vast_template, vpaid, http_calls, playlist, api"
          },

          "ads": {
              "skipAd": {
                  "enabled": true,
                  "showAfterSeconds": 6
              },
              "providers": {
                  "enforceSettingSubscribeRTMP":true,
                  "subscribeRTMP": false
              },
              "schedule": [
                  {
                      "position": "pre-roll",
                      "tag": "http://serve.vdopia.com/adserver/vastxml/f65cc920fba56972c31af69c6d0c1936/preroll/category:LF;api_test:false;format:vast;tagtype:publisher;ru=http://www.poztmo.com;rand='.$random.'"
                 }
              ]
          }
       }
   </ova.json>
</config>';
?>


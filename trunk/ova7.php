<config>
   <ova.title>
       Video Ads - indostar-tv.Com
   </ova.title>
   <ova.json>
       {
          "debug": {
              "levels": "fatal, config, vast_template, vpaid, http_calls, playlist, api"
          },

          "ads": {
              "skipAd": {
                  "enabled": false,
                  "showAfterSeconds": 6
              },
          "notice": {
              "show": true,
              "region": "my-ad-notice",
              "message": "Your TV Channel will resume in _countdown_ second(s)"
            },
              "providers": {
                  "enforceSettingSubscribeRTMP":true,
                  "subscribeRTMP": false
              },
              "schedule": [
                  {
                      "position": "pre-roll",
                      "tag": "http://serve.vdopia.com/adserver/vastxml/82949eefa5da26c036d38d15a033f2c1/preroll/category:EN;api_test:false;format:both;tagtype:publisher;ru=http://indostar-tv.com;rand=1938007413"                 }
              ]
          }
       }
   </ova.json>
</config>
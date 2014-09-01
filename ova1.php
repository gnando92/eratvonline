<config>
   <ova.title>
       Video Ads - www.streamingseru.Com
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
              "providers": {
                  "enforceSettingSubscribeRTMP":true,
                  "subscribeRTMP": false
              },
              "schedule": [
                  {
                      "position": "pre-roll",
                      "tag": "http://delivery.ambient-platform.com/247/xmlvideoad/zid_1401690255/wid_1401690137/type_inline/cb_[timestamp]/category:EN;api_test:false;format:both;tagtype:publisher;ru=http://www.streamingseru.com/;rand=4772668124"                 }
              ]
          }
       }
   </ova.json>
</config>
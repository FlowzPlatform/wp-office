

ENV_ID=`curl -u ""$RANCHER_ACCESSKEY":"$RANCHER_SECRETKEY"" -X GET -H 'Accept: application/json' -H 'Content-Type: application/json' "http://209.50.52.18:8080/v2-beta/projects?name=uat" | jq '.data[].id' | tr -d '"'`
echo $ENV_ID

SERVICE_ID=`curl -u ""$RANCHER_ACCESSKEY":"$RANCHER_SECRETKEY"" -X GET -H 'Accept: application/json' -H 'Content-Type: application/json' "http://209.50.52.18:8080/v2-beta/projects/$ENV_ID/services?name=officebeacon-uat" | jq '.data[].id' | tr -d '"'`
echo $SERVICE_ID


curl -u ""$RANCHER_ACCESSKEY":"$RANCHER_SECRETKEY"" \
-X POST \
-H 'Accept: application/json' \
-H 'Content-Type: application/json' \
-d '{
     "inServiceStrategy":{
           "launchConfig": {
                       "imageUuid":"docker:obdev/flz-wdp-v6-demo:new",
                       "kind": "container",
                       "labels":{
                               "io.rancher.container.pull_image": "always",
                               "io.rancher.scheduler.affinity:host_label": "machine=wordpress"
                                },
                        "networkMode": "managed"
                        }
        },
     "toServiceStrategy":null
    }' \
http://209.50.52.18:8080/v2-beta/projects/$ENV_ID/services/$SERVICE_ID?action=upgrade

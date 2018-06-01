if [ "$TRAVIS_BRANCH" = "master" ]
then
    {
    echo "call $TRAVIS_BRANCH branch"
    ENV_ID=`curl -u ""$RANCHER_ACCESSKEY_MASTER":"$RANCHER_SECRETKEY_MASTER"" -X GET -H 'Accept: application/json' -H 'Content-Type: application/json' "$RANCHER_URL_MASTER/v2-beta/projects?name=uat" | jq '.data[].id' | tr -d '"'`
    echo $ENV_ID

    SERVICE_ID=`curl -u ""$RANCHER_ACCESSKEY_MASTER":"$RANCHER_SECRETKEY_MASTER"" -X GET -H 'Accept: application/json' -H 'Content-Type: application/json' "$RANCHER_URL_MASTER/v2-beta/projects/$ENV_ID/services?name=officebeacon-uat-demo" | jq '.data[].id' | tr -d '"'`
    echo $SERVICE_ID

    TAG="master";
    HOST="$HOST_FOR_MASTER";
    RANCHER_ACCESSKEY="$RANCHER_ACCESSKEY_MASTER";
    RANCHER_SECRETKEY="$RANCHER_SECRETKEY_MASTER";
    RANCHER_URL="$RANCHER_URL_MASTER";
  }
elif [ "$TRAVIS_BRANCH" = "develop" ]
then
    {
      echo "call $TRAVIS_BRANCH branch"
      ENV_ID=`curl -u ""$RANCHER_ACCESSKEY_DEVELOP":"$RANCHER_SECRETKEY_DEVELOP"" -X GET -H 'Accept: application/json' -H 'Content-Type: application/json' "$RANCHER_URL_DEVELOP/v2-beta/projects?name=uat" | jq '.data[].id' | tr -d '"'`
      echo $ENV_ID
      
      SERVICE_ID=`curl -u ""$RANCHER_ACCESSKEY_DEVELOP":"$RANCHER_SECRETKEY_DEVELOP"" -X GET -H 'Accept: application/json' -H 'Content-Type: application/json' "$RANCHER_URL_DEVELOP/v2-beta/projects/$ENV_ID/services?name=officebeacon-uat" | jq '.data[].id' | tr -d '"'`
      echo $SERVICE_ID

      TAG="dev";
      HOST="$HOST_FOR_DEVELOP";
      RANCHER_ACCESSKEY="$RANCHER_ACCESSKEY_DEVELOP";
      RANCHER_SECRETKEY="$RANCHER_SECRETKEY_DEVELOP";
      RANCHER_URL="$RANCHER_URL_DEVELOP";
  }
fi


curl -u ""$RANCHER_ACCESSKEY":"$RANCHER_SECRETKEY"" \
-X POST \
-H 'Accept: application/json' \
-H 'Content-Type: application/json' \
-d '{
     "inServiceStrategy":{
           "launchConfig": {
                       "imageUuid":"docker:'$DOCKER_USERNAME_OBDEV'/flz-wdp-v6-demo:'$TAG'",
                       "kind": "container",
                       "labels":{
                               "io.rancher.container.pull_image": "always",
                               "io.rancher.scheduler.affinity:host_label": "'"$HOST"'"
                                },
                        "networkMode": "managed"
                        }
        },
     "toServiceStrategy":null
    }' \
$RANCHER_URL/v2-beta/projects/$ENV_ID/services/$SERVICE_ID?action=upgrade

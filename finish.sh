

ENV_ID=`curl -u ""$RANCHER_ACCESSKEY":"$RANCHER_SECRETKEY"" -X GET -H 'Accept: application/json' -H 'Content-Type: application/json' "http://209.50.52.18:8080/v2-beta/projects?name=uat" | jq '.data[].id' | tr -d '"'`
echo $ENV_ID

SERVICE_ID=`curl -u ""$RANCHER_ACCESSKEY":"$RANCHER_SECRETKEY"" -X GET -H 'Accept: application/json' -H 'Content-Type: application/json' "http://209.50.52.18:8080/v2-beta/projects/$ENV_ID/services?name=officebeacon-uat" | jq '.data[].id' | tr -d '"'`
echo $SERVICE_ID

echo "waiting for service to upgrade "
    while true; do

      case `curl -u ""$RANCHER_ACCESSKEY":"$RANCHER_SECRETKEY"" \
          -X GET \
          -H 'Accept: application/json' \
          -H 'Content-Type: application/json' \
          "http://209.50.52.18:8080/v2-beta/projects/$ENV_ID/services/$SERVICE_ID/" | jq '.state'` in
          "\"upgraded\"" )
              echo "completing service upgrade"
              curl -u ""$RANCHER_ACCESSKEY":"$RANCHER_SECRETKEY"" \
                -X POST \
                -H 'Accept: application/json' \
                -H 'Content-Type: application/json' \
                "http://209.50.52.18:8080/v2-beta/projects/$ENV_ID/services/$SERVICE_ID?action=finishupgrade"
              break ;;
          "\"upgrading\"" )
              echo "still upgrading"
              echo -n "."
              sleep 60
              continue ;;
          *)
              die "unexpected upgrade state" ;;
      esac
    done





### The First, 记录一下 Yar_Client 请求到 Yar_Server 的请求头及请求数据.
```shell
curl http://www.local.com/separate_test_yar_server/Yar_Client.php
```
关闭 Yar_Server 端文件记录语句, 准备进行测试.

### Curl 测试.
```shell
curl --user-agent "PHP Yar Rpc-2.0.2" -H 'Content-Type:application/x-www-form-urlencoded' --data-binary @Yar_client_request_post_data.dump http://www.local.com/separate_test_yar_server/Yar_Server.php
```
### Ab 压测.
```shell
ab -H 'user-agent:PHP Yar Rpc-2.0.2' -T 'application/x-www-form-urlencoded' -p ./Yar_client_request_post_data.dump -c 1000 -n 10000 http://www.local.com/separate_test_yar_server/Yar_Server.php
```

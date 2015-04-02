<?php
class adminApp extends Client
{
    public function getAppList()
    {
        return $this->client->get('/api/platform/manageapp/list', array());
    }

    /**
     * app绑定api的
     * $params app_id app对应的id
     * $params api_id api对应的id
     * $params api_name api对应的name
     * $params limit_count 允许一定时间内请求的次数
     * $params limit_seconds 上面的一定时间，单位：秒
     */
    public function setBindApi($params)
    {
        $requestParams['app_id']        = $params['app_id']        ;
        $requestParams['api_id']        = $params['api_id']        ;
        $requestParams['path']          = $params['path']      ;
        $requestParams['limit_count']   = $params['limit_count']   ;
        $requestParams['limit_seconds'] = $params['limit_seconds'] ;

        return $this->client->post('/api/platform/manageapp/bind',$requestParams);
    }

    /**
     * 查看app绑定的api
     * $params app_id app对应的id
     */
    public function getBindApiList($params)
    {
        $requestParams['app_id']        = $params['app_id'];
        return $this->client->post('/api/platform/manageapp/bindlist',$requestParams);
    }
}

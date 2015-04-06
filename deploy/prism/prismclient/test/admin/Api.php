<?php
class adminApi extends Client
{
    public function getApiList()
    {
        return $this->client->get('/api/platform/manageapi/list', array());
    }

    /**
     * 上线api
     * $params Id api_id
     * $params doc Api配置信息, JSON数据
     */
    public function online($params)
    {
        $requestParams['Id']  = $params['Id'];
        return $this->client->post('/api/platform/manageapi/online', $requestParams);
    }

    /**
     * 下线api
     * $params Id api_id
     * $params doc Api配置信息, JSON数据
     */
    public function offline($params)
    {
        $requestParams['Id']  = $params['Id'];
        return $this->client->post('/api/platform/manageapi/offline', $requestParams);
    }
}


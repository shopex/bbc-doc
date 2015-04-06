<?php
class userApi extends Client
{
    public function get_conf($params)
    {
        $requestParams['Id'] = $params['Id'];
        return $this->client->post('/api/platform/service/config/get', $requestParams);
    }

    public function set_conf($params)
    {
        $requestParams['Id'] = $params['Id'];
        $requestParams['key'] = $params['key'];
        $requestParams['value'] = $params['value'];
        return $this->client->post('/api/plaform/service/config/set', $requestParams);
    }

    public function import($params)
    {
        $requestParams['url'] = $params['url'];
        return $this->client->post('/api/platform/service/import', $requestParams);
    }

    public function refresh($params)
    {
        $requestParams['url'] = $params['url'];
        return $this->client->post('/api/platform/service/refresh', $requestParams);
    }
}


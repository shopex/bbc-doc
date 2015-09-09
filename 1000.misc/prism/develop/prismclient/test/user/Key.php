<?php
class userKey extends Client
{
    public function create($params)
    {
        $requestParams['app_id'] = $params['app_id'];
        $requestParams['desc'] = isset($params['desc']) ? $params['desc'] : '';
        $requestParams['expired_date'] = isset($params['expired_date']) ? $params['expired_date'] : '';
        $requestParams['meta'] = isset($params['meta']) ? $params['meta'] : '';
        return $this->client->post('/api/platform/key/create',$requestParams);
    }

    public function delete($params)
    {
        $requestParams['key'] = $params['key'];
        return $this->client->post('/api/platform/key/delete',$requestParams);
    }

    public function info($params)
    {
        $requestParams['key'] = $params['key'];
        return $this->client->get('/api/platform/key/info/'.$requestParams['key']);
    }

    public function getList($params)
    {
        $requestParams['app_id'] = $params['app_id'];
        return $this->client->post('/api/platform/key/list',$requestParams);
    }

}


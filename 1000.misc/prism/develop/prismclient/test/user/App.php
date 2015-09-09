<?php
class userApp extends Client
{
    public function create($params)
    {
        $requestParams['id'] = isset($params['id']) ? $params['id'] : '';
        $requestParams['name'] = $params['name'];
        $requestParams['desc'] = isset($params['desc']) ? $params['desc'] : '';
        return $this->client->post('/api/platform/app/create',$requestParams);
    }

    public function delete($params)
    {
        $requestParams['app_id'] = $params['app_id'];
        return $this->client->post('/api/platform/app/delete',$requestParams);
    }

    public function info($params)
    {
        $requestParams['app_id'] = $params['app_id'];
        return $this->client->get('/api/platform/app/info/'.$requestParams['app_id']);
    }

    public function getList()
    {
        return $this->client->post('/api/platform/app/list');
    }
}

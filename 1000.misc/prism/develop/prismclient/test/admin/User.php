<?php

class adminUser extends client
{
    public function create($params)
    {
        $requestParams['email']    = $params['email'];
        $requestParams['password'] = $params['password'];
        $requestParams['summary']  = isset($params['summary'])? $params['summary'] : '';

        return $this->client->post('/api/platform/manageuser/create', $requestParams);
    }


    public function active($params)
    {
        $requestParams['email'] = $params['email'];
        return $this->client->post('/api/platform/manageuser/active', $requestParams);
    }

    public function apiprovider($params)
    {
        $requestParams['email'] = $params['email'];
        return $this->client->post('/api/platform/manageuser/apiprovider', $requestParams);
    }

    public function disable($params)
    {
        $requestParams['email'] = $params['email'];
        return $this->client->post('/api/platform/manageuser/disable', $requestParams);
    }

    public function info($params)
    {
        $requestParams['email'] = $params['email'];
        return $this->client->get('/api/platform/manageuser/info/'.$requestParams['email']);
    }
}

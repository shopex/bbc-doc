<?php
class adminOauth //extends Client
{

    public function getConf($params)
    {
        $requestParams['is_sandbox'] = ($params['is_sandbox'] == 'true') ? true : false;
        return $this->client->post('/api/platform/manageoauth/config/get', $requestParams);
    }

    public function setConf($params)
    {
        $requestParams['CfgIdColumn'] = isset($params['CfgIdColumn']) ? $params['CfgIdColumn'] : '';
        $requestParams['CheckAccountSQL'] = isset($params['CheckAccountSQL']) ? $params['CheckAccountSQL'] : '';
        $requestParams['Database'] = isset($params['Database']) ? $params['Database'] : '';
        $requestParams['FailedSQL'] = isset($params['FailedSQL']) ? $params['FailedSQL'] : '';
        $requestParams['Host'] = isset($params['Host']) ? $params['Host'] : '';
        $requestParams['Password'] = isset($params['Password']) ? $params['Password'] : '';
        $requestParams['SuccessSQL'] = isset($params['SuccessSQL']) ? $params['SuccessSQL'] : '';
        $requestParams['User'] = isset($params['User']) ? $params['User'] : '';

        $json = json_encode($requestParams);
        unset($requestParams);
        $requestParams = array('is_sandbox'=>false, 'config'=>$json);
        return $this->client->post('/api/platform/manageoauth/config/set',$requestParams);
    }
}


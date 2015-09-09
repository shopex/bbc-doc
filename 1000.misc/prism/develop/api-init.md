# prism初始化
- [开发者账号注册](#user-sign)
- [API提供者账号注册](#api-sign)
- [创建API](#create-api)
- [创建应用](#create-app)
- [创建key和secret](#create-key)
- [以ecstore做后端的连接](#connect-ecstore)


<a name="user-sign"></a>
## 开发者账号注册
  - 用户在前台注册开发者用户。
  - 管理员在后台->开发者页面审核用户。
  - 在后台->开发者页面待审批项中，激活该用户。


<a name="api-sign"></a>
## API提供者账号注册
  - 用户获取开发者用户权限后，登陆前台。
  - 在个人中心，点击“申请成为api提供者”
  - 管理员登陆后台，在开发者页面中，Api申请项中，批准申请用户成为api提供者。
  - 成为开发者后，用户在前台刷新页面即可看到“我提供的Api”一项。

<a name="create-api"></a>
## 创建API
  - 登陆拥有“Api提供者”权限的账号，进入“我提供的Api”页面
  - 点击“添加新Api”
  - 选择“托管在本平台”->"创建Api描述文件"
  - 填写api相关数据
  - 保存

<a name="create-app"></a>
## 创建应用
  - 登陆拥有“开发者”权限的账号（前台）
  - 选择“我的应用”页面
  - 点击“添加新应用”
  - 选择创建新应用，输入名称和说明，点击保存

<a name="create-key"></a>
## 创建key和secret
  - 前台登陆开发者账户
  - 打开“我的应用”页面
  - 点击“添加新Key”
  - 点击“生成新Key”

<a name="connect-ecstore"></a>
## 以ecstore做后端的连接
  - 新建api
  - 配置api信息
  - 新增签名参数“sign”
  - 签名为“ECOS.md5”
  - 保存
  - 在api的后端配置页面中填写目标机器的Token（不可在token的默认值处配置，否则会报错sign失败）


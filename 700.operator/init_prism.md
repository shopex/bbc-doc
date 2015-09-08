# Prism数据自动初始化操作流程

## 名词解释

### prism模式  

在配置文件中可以控制是否开启，当开启以后系统中的api访问将通过prism去访问，以支持服务化的系统架构。

## ONEX BBC config配置

- 将```config/prism.php```文件复制到```config/production```目录中
- 修改配置文件中的参数（参数的解释请参照配置文件中的内容）

## APP和API初始化

 将prism的配置信息做好后，执行如下命令就可以自动完成初始化。

```shell
 ./cmd system:prism init
```

## APP和API升级

 如果代码升级以后，需要更新app或者api在prism的信息，可以执行这条命令

```shell
 ./cmd system:prism update
```

## Oauth 初始化

完成APP和API的初始化以后，执行该命令，自动完成Oauth初始化

```shell
 ./cmd system:prism oauthUpdate
```

## ONEX BBC 中的关于prism的命令详解

### system:prism init

当启用prism模式以后，执行prism数据初始化任务。

该命令会自动判断当前系统是否执行过初始化命令，当系统已经初始化过，该命令就不会再次被执行了。

```shell
 ./cmd system:prism init
```

### system:prism update

当启用prism模式以后，执行prism数据升级任务。

该命令会自动判断当前系统是否执行过初始化命令，当系统从未初始化过，该命令会自动执行初始化任务，可以代替```system:prism init```命令使用。

```shell
 ./cmd system:prism init
```

### system:prism forceinit

强制执行```system:prism init```命令，而不验证系统当前是否打开prism模式和是否已初始化过.

当系统更新


```shell
 ./cmd system:prism forceinit
```

### system:prism forceupdate

强制执行```system:prism update```命令，而不验证系统当前是否打开prism模式

```shell
 ./cmd system:prism forceupdate
```

### system:prism oauthUpdate

更新oauth配置到prism。要求prism采用的oauth是api方式的

```shell
 ./cmd system:prism oauthUpdate
```

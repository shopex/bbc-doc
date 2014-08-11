# 异常处理机制

> **注意** 


**前台错误处理流程** 
1. `app/base/start.php` kernel::startExceptionHandling();
2. `app/base/lib/exception/handler` register(), 注册各种异常处理回调函数
   - registerErrorHandler(), 注册错误处理回调函数. 当遇到错误时, 抛出ErrorException. 
   - registerExceptionHandler(), 注册异常处理回调函数.
     - 如果`app.debug`设置为true,
     则调用whoops显示漂亮的调试界面
   - registerShutdownHandler(), 注册异常shutdown处理回调函数.
3. `app/site/lib/router.php`, default_dispatchh(). 通过try catch. 捕获异常. 如果是`app.debug`为true.


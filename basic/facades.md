# Facades

- [简介](#introduction)
- [说明](#explanation)
- [实际用例](#practical-usage)
- [创建 Facades](#creating-facades)
- [模拟 Facades](#mocking-facades)
- [Facade Class Reference](#facade-class-reference)

Facades 提供了一个“静态”接口到 工作类 。系统 含有很多 facades，你可能不知道你在某些地方已经使用过它们了。

有时候， 你可能想为你的应用程序或包创建自己的 facades， 所以，让我们来讨论一下如何开发和使用这些类。

<a name="explanation"></a>
## 说明

在 应用程序中， facade 是提供从访问对象方法的类。`Facade` 类实现了该机制。 

你的 facade 类只需要实现一个方法： `getFacadeAccesor` 。 `getFacadeAccessor` 方法的工作是定义如何创建对象。 `Facades` 基类构建了 `__callStatic()` 魔术方法来从 facade 延迟访问取得对象。

<a name="practical-usage"></a>

## 实际用例

在以下示例中，执行 缓存系统， 查看该代码，我们可能会假定 `get` 静态方法是执行在 `cache` 类。

In the example below, a call is made to the Laravel cache system. By glancing at this code, one might assume that the static method `get` is being called on the `Cache` class.

	$value = Cache::get('key');

然后，如果我们查看 `Illuminate\Support\Facades\Cache` 类， 你会发现该类没有任何 `get` 静态方法：

	class Cache extends Facade {

		/**
		 * Get the registered name of the component.
		 *
		 * @return string
		 */
		protected static function getFacadeAccessor() { return 'cache'; }

	}

Cache 类继承基本 `Facade` 类，并且定义了个 `getFacadeAccessor()` 方法。注意，该方法的工作是返回 IoC 绑定的名字。

当用户引用任何在 `Cache` facade 静态方法， Laravel 从 IoC 容器绑定中取得 `cache`，并且执行请求该对象方法（在该例子中为`get`）。

所以，我们 `Cache::get` 执行可以重写为：

	$value = $app->make('cache')->get('key');

<a name="creating-facades"></a>


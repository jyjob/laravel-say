# laravel-say
这个一个输出的测试案例

## 基本使用
1. 先发布配置文件在config目录下面
```bash
php artisan vendor:publish
```
2. app.php 添加 providers
```php
Jywang\Say\SayProvider::class,
```
3. app.php 添加 aliases
```php
'Say' => Jywang\Say\Facades\Say::class,
```
4 开始使用
```php
// 第一个参数姓名，第二个参数图片生成位置
Say::write('Hello World')
```

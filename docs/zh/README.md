# SevensMultiLang-Plugn
>为了在我们现有系统中实现多语言功能，往往我们需要修改系统代码并且做更多额外的工作。为了解决这个问题，我在一个项目中提取了这个多语言插件并加以修改。你可以更容易在你的项目中实现多语言功能。

[English Document](../../../README.md)

# 安装
1.下载 **SevensMultiLang** 文件夹并放置到项目根目录(注意访问路径的设置)。
2.在项目入口文件里配置插件, 这里以 [OneThink CMS](http://www.onethink.cn/) 为例子:
```PHP
/**
 *  [加入这段代码]
 *  在引入核心入口前引入插件入口文件。
 */
require './SevensMultiLang/MultiLang.php';

/**
 * 引入核心入口
 * ThinkPHP亦可移动到WEB以外的目录
 */
require './ThinkPHP/ThinkPHP.php';
```
# 配置默认语言
```PHP
$config['lang'] = 'zh-tw';
return $config;
```
修改 config/config.php 文件和修改 **lang**. 请注意这个值必须对应
**lang** 文件夹里面的语言文件夹名称.

# 填满语言文件
语言文件在 **lang** 下,你可以根据需要增减文件.

# 怎么使用
通过上面的配置, 你只需要修改你的显示文件来触发使用即可，
```HTML
<header class="jumbotron subhead" id="overview">
        <div class="container">
            <h2><?php echo mlang('slogen'); ?></h2>
            <p class="lead"></p>
        </div>
    </header>
```
这是我的一个文件,在调用以前我已经在语言文件中设置了 slogen 的语言值. 只要通过 ```mlang()``` 函数就可以获得对应目前系统语言的值。
# 更改语言
**SevensMultiLang-Plugn** 提供了一个叫 ```changeMlang``` 的函数用以修改当前的语言.

# License
`SevensMultiLang-Plugn` is licensed under [The MIT License (MIT)](LICENSE).
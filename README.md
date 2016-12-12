# SevensMultiLang-Plugn
>In order to implement the multi-language feature in a exist system,we always have to rebuild the system and do a lot of job.
To solve this problem, I have extracted a multi-language plugin from one of my project. You can implement multi-language feature 
easily.

[中文文档](/docs/zh/README.md)

# Installation
1.Download the **SevensMultiLang** folder and put it to the root directory of your project(Note the access path settings).
2.Setting up plugin in the entry file of project, take [OneThink CMS](http://www.onethink.cn/) as example:
```PHP
/**
 *  [Here you need to add the code]
 *  Require the Mult-Lang core file before require entry file.
 */
require './SevensMultiLang/MultiLang.php';

/**
 * 引入核心入口
 * ThinkPHP亦可移动到WEB以外的目录
 */
require './ThinkPHP/ThinkPHP.php';
```
# Set up the default Language
```PHP
$config['lang'] = 'zh-tw';
return $config;
```
Modify the config/config.php file and change the value of **lang**. Noted that this value must correspond 
to the name of the folder of the **lang** folder.

# Fill up language file
The language files stay in the **lang** folder.

# How to use
After above configuration, you need to modify the view files for trigger the multi-language plugin.
```HTML
<header class="jumbotron subhead" id="overview">
        <div class="container">
            <h2><?php echo mlang('slogen'); ?></h2>
            <p class="lead"></p>
        </div>
    </header>
```
This is one of my file. I have set the slogen value in lang file before. And Then I use the ```mlang()``` function for getting
the true value.
# Change Language
**SevensMultiLang-Plugn** provides a function call ```changeMlang``` function for changing the current language.

# License
`SevensMultiLang-Plugn` is licensed under [The MIT License (MIT)](LICENSE).

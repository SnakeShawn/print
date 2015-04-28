## 代码规范

### 命名
* 类文件：首字母大写驼峰，并以‘.class.php’为后缀
* 类名：首字母大写驼峰(CodingStandars)
* 类变量：首字母小写驼峰(codingStandars)
* 类方法：首字母小写驼峰
* 公共函数：全小写下划线(coding_standars)
* 变量名：全小写下划线
* 参数名：与变量名保持一致
* 全局配置：全大写下划线(CODING_STANDARS)
* 实例化模型：首字母大写 M('User')

### 布局
* 符号之间加空格($i = $j而不是$i=$j)
* 提前抛出错误：this->error等
* 大括号独占一行：
```
function(param)
{
    if(condition)
    {
        ...
    } 
    else
    {
        ...
    }
    while(condition)
    {
        ...
    }
}
```

### 注释
* 单行注释：//位于代码的上方独占一行
* 函数库、控制器文件头部列出所有函数列表：
```
/**
* function()
* function()
* ...
*/
```
* 函数：
```
/**
* 函数用途  
* @method functionname
* @author 作者[联系邮箱]
* @param  参数
* @return 返回值
* ...
*/
```

推荐编辑器`sublime text 3`
插件 `phpfmt` ,`DocBlockr`
最简单的方式构建你的项目文档

**Daux.io** 是一个文档生成器,可以帮助用户快速生成漂亮的项目文档，此外，用户还可以通过简单的文件结构和Markdown文件来创建自定义格式的文档。 它可以帮助你使用对于开发更加友好的方式创建文档。

## 产品特征

* 100%移动响应
* 支持GitHub Flavored Markdown
* 自动创建主页/登陆页
* 自动语法提示
* 自动生成导航
* 4款内置主题并支持自定义主题
* 功能、扁平化设计
* 共享/可链接的SEO友好性URL
* 基于Bootstrap构建
* 无需设置步骤
* 友好的Git/SVN
* 支持Google统计以及Piwik统计
* 可选的代码浮动布局

## 案例

这是一个使用Daux.io的站点列表:

* [Daux.io](http://daux.io)
* [Munee: Standalone PHP 5.3 Asset Optimisation & Manipulation](http://mun.ee)

看到Daux.io了吗? 给我发送pull request或者新建一个[issue](https://github.com/justinwalsh/daux.io/issues),我将会将你的站点加入到这个列表里面!

## 下载

下载zip格式的版本库文件, 并且解压. 拷贝这些文件到一个可以运行高于PHP5.3版本的服务器上. 你还可以在本地使用Grunt.js运行这些文档，使用方法会在readme结尾处讨论.

## 目录结构

默认文档生成器会搜索目录`/docs`. 添加你的目录到`/docs`目录中. 该项目已经包括一些实例文件夹和文件帮助你快速使用.

你可以嵌套任意级别的文件夹来达到你所希望的结构. 目录结构将会被转化为嵌套折叠导航.

如果你希望保留你的文档在其他位置(例如在 daux.io根目录之外的目录)，你可以通过在配置文件`config.json` 中指定文档路径.

## 文件

生成器将会搜索`/docs`目录及其子目录中的Markdown `*.md` 文件. 译者注:[Markdown](http://zh.wikipedia.org/zh/Markdown)是一种轻量级的标记语言.

你必须使用`.md` 文件扩展名命名你的文档文件. 另外文件名你需要使用下划线来代替空格 这里有一些文件名的案例已经它们转化为可以被接受的格式:

**推荐的格式:**

* 01_Getting_Started.md = Getting Started
* API_Calls.md = API Calls
* 200_Something_Else-Cool.md = Something Else-Cool

**不推荐:**

* File Name With Space.md = FAIL

## 排序

如果你需要对你的文件和文件夹进行排序,你可以为他们添加数字和下划线前缀, 例如: `/docs/01_Hello_World.md` 和 `/docs/05_Features.md` 这将会在*Features*之前列出 *Hello World* 从而覆盖了默认的字母数字排序顺序. 这些数字将会从导航和urls中剥离出去,不会显示.

## 着陆页

(译者注:[Landing page](http://article.yeeyan.org/view/nia/66096))有时被称为首要捕获用户页,就是当潜在用户点击广告或者搜索引擎搜索结果页后显示给用户的网页)

如果你希望为你的项目创建一个漂亮的着陆页,只需要简单的创建一个`index.md` 文件在你的文档根目录`/docs` 中. 该文件将会被用于创建着陆页. 你还可以通过配置文件添加一个品牌口号和图片到该页面,配置如下:

```json
{
	"title": "Daux.io",
	"tagline": "最简单的方式构建你的项目文档",
	"image": "img/app.png"
}
```

注意:图像可以是本地图像或者远程图像.

## 配置

你可以在文件夹`/docs`中创建`config.json`配置文件来定制项目文档的外观和感觉.  `config.json`配置文件是一个简单的JSON对象,你可以修改该文件来改变文档一些基础设置.

###标题:
在这些文档中修改标题栏

```json
{
	"title": "Daux.io"
}
```

###文档路径:
如果你更希望你的文档在Daux.io以外的文件夹,你可以提供一个文件路径在配置文件中.

注意:你的配置文件 `config.json` 需要任然保存在目录 `/daux.io/docs`之下.

```json
{
	"docs_path": "../../my_docs"
}
```

###主题:
我们提供了4中内置的Bootstrap主题样式. 如果要使用这些主题,仅仅需要在配置文档中,设置`theme`选项为以下值:

* blue
* green
* navy
* red

```json
{
	"theme": "blue"
}
```

###用户定制:
用户可以定制文档配色,通过设置设置 `theme` 属性 `custom` 然后再定义不同内容的颜色即可. 拷贝以下配置文件开始自定义文档配色:

```json
{
	"theme": "custom",
	"colors": {
		"sidebar-background": "#f7f7f7",
		"sidebar-hover": "#c5c5cb",
		"lines": "#e7e7e9",
		"dark": "#3f4657",
		"light": "#82becd",
		"text": "#2d2d2d",
		"syntax-string": "#022e99",
		"syntax-comment": "#84989b",
		"syntax-number": "#2f9b92",
		"syntax-label": "#840d7a"
	}
}
```

###代码悬浮:
默认设置你的文档中的代码块会被悬浮于内容的右侧.(译者注:当屏幕超过1150px的时候) 如果需要关闭该特性,只需要设置 `float` 属性为 `false`.

```json
{
	"float": false
}
```


###GitHub 版本控制:
添加一个带有 'Fork me on GitHub'内容的横幅彩带的配置项如下:

```json
{
	"repo": "justinwalsh/daux.io"
}
```

###Twitter:
包含twitter关注按钮在侧边栏.

```json
{
	"twitter": ["justin_walsh", "todaymade"]
}
```

###链接:
包含用户定制链接在侧边栏配置如下:

```json
{
	"links": {
		"GitHub Repo": "https://github.com/justinwalsh/daux.io",
		"Help/Support/Bugs": "https://github.com/justinwalsh/daux.io/issues",
		"Made by Todaymade": "http://todaymade.com"
	}
}
```

###添加Google分析:
这里将会嵌入Google分析跟踪码.

```json
{
	"google_analytics": "UA-XXXXXXXXX-XX"
}
```

###Piwik分析:
这里将会嵌入Piwik跟踪码.

```json
{
	"piwik_analytics": "my-url-for-piwik.com"
}
```

###过滤忽视文件:
设置忽略`/docs` 文件夹中特定的文件和文件夹 ,使其不显示在文档中. 对于文件,确保文件扩展名包含在配置文件中. 对于文件和文件夹,名字时大小写敏感的.

```json
	{
		"ignore": {
			"files": ["Work_In_Progress.md"],
			"folders": ["99_Not_Ready"]
		}
	}
```

###关闭URLs重写
默认Daux.io将创建url重写,url中将不包含index.php. 如果服务器端运行的Apache,上传 .htaccess 文件,将会实现该url重写. 如果服务器端没有运行Apache或者不能自定义 .htaccess 文件, 你可能需要关闭clean_url功能,方法如下:

```json
{
		"clean_urls": false
}
```

###日期修改
默认daux.io将会显示最后更新时间在每个文档标题下面,该时间来自系统反馈. 关闭该功能,需要更改 config.json 中的date_modified选项为 false.

```json
{
	"date_modified": false
} 
```

###时区设置
如果你的服务器没有在php.ini中设置默认时区,文档在获取最后修改日期时间时会返回错误. 修改该错误,需要在配置文件中指定时区. 有效的设置选项参考PHP手册 [PHP Manual](http://php.net/manual/en/timezones.php).

```json
{
	"timezone": "America/Los_Angeles"
}
```

## 远程托管运行

从版本库复制文件到基于PHP5.3或更高的web服务器.

## 本地运行

这里有一些本地运行该文档生成器的方法. 你可以使用类似于<a href="http://www.mamp.info/en/index.html" target="_blank">MAMP</a> 或者 <a href="http://www.wampserver.com/en/" target="_blank">WAMP</a>的服务器集成架设软件. 如果你想我一样经常使用Node.js和 <a href="http://gruntjs.com/" target="_blank">Grunt.js</a>, 那么你可以使用我已经预先打包好的可选的grunt命令,它将会在项目文件夹中启动PHP web 服务器.

Grunt.js将会利用内置的PHP 5.4 web服务器为你构建本地的文档. 这是仅仅为了被用于当你希望撰写或更新大量的文档并且仅仅希望本地查看其更改.

**使用可选的Grunt命令,你需要:**

* Node.js
* npm
* Grunt.js
* PHP 5.4 或更高 (这是因为内置的web服务器使用5.4打包)

该项目包含一个 package.json 文件, 所以一旦你的系统满足以上要求,你只需要运行命令`npm install` 然后在项目文件夹中进行 `grunt` 操作来启动本地web服务器. 默认的服务器地址为: <a href="http://localhost:8085" target="_blank">http://localhost:8085</a>

## 在IIS上运行

如果你已经建立的本地或远程的IIS web站点,你需要一个 `web.config` 文件包含以下内容:

* 一个rewrite配置,为了是urls更简洁,取消index.php.
* 如果使用自定义样式,需要一个为处理less文件的mime类型的处理器.

### 整理 URLs

`web.config` 文件需要在`<system.webServer>`之下一个入口名为`<rewrite>`  :

```xml
<configuration> 
	<system.webServer>
		<rewrite>
			<rules>
				<rule name="Main Rule" stopProcessing="true">
					<match url=".*" />
					<conditions logicalGrouping="MatchAll">
						<add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
						<add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />
					</conditions>
					<action type="Rewrite" url="index.php" appendQueryString="false" />
				</rule>
			</rules>
		</rewrite>
	</system.webServer>
</configuration>
```

在IIS6上使用整理URLs,你需要使用自定义的URL重写规则,例如[URL Rewriter](http://urlrewriter.net/).

### Less Mime Type

 `web.config` 文件需要一个新的 `<mimeMap>` 入口, 在  `<system.webServer>`中的`<staticContent>` 之下:

```xml
<staticContent>
	<mimeMap fileExtension=".less" mimeType="text/css" />
</staticContent>
```

你将仅仅需要mine map入口,如果你正在使用自定义样式并且出现 `.less` 文件404s 错误.

如果你为服务器的`.less` 文件设置了全局的mime map入口,你将会收到一个内部服务的错误 internal server (500) error ,是因为mime map入口重复了.

## 支持

如果你需要帮助关于使用Daux.io或者发现bug,请在Github上创建 issue 反馈,地址为<a href="https://github.com/justinwalsh/daux.io/issues" target="_blank">GitHub repo</a>.
中文翻译issue反馈地址:<a href="https://github.com/xin-meng/daux/issues" target="_blank">Daux.io中文</a>.

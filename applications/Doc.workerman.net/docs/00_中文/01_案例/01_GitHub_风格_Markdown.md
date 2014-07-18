让我从"linebreak" 开始. 下面的段落包含两个短语并且用单行分割.

Roses are red
Violets are blue

下面的段落有同样的词组,但是这回他们使用两个空格和新的一行来分割:

Roses are red
Violets are blue


哦,这里有一件事我还是无法忍受的,那就是使用多个下划线分割文字,类似于perform_complicated_task 或者 do_this_and_do_that_and_another_thing.

有一点GitHub的味道
-------------------------

除了前一个部分的改变外,这些参考是自动链接的:

* SHA: be6a8cc1c1ecfe9489fb51e4869af15a13fc2cd2
* User@SHA ref: mojombo@be6a8cc1c1ecfe9489fb51e4869af15a13fc2cd2
* User/Project@SHA: mojombo/god@be6a8cc1c1ecfe9489fb51e4869af15a13fc2cd2
* \#Num: #1
* User/#Num: mojombo#1
* User/Project#Num: mojombo/god#1

这里有一些危险的东西,我们需要重申一下email地址是不能分割的:

我的邮箱地址是 tom@github.com.

数学很难,让我一起去购物吧
-------------------------------

在一年级,我学会了5>3和2<7. 或者需要一些箭头. 1 -> 2 -> 3. 9 <- 8 <- 7.

三角等式! a^2 + b^2 = c^2

我们都喜欢建列表
------------------------

上面的header标签应该是 H2 标签. 现在,建立一个水果列表:

* Red Apples
* Purple Grapes
* Green Kiwifruits

让我们开始疯狂:

1.  这是一个两个段落的列表 Lorem ipsum dolorsit amet, consectetuer adipiscing elit. Aliquam hendreritmi posuere lectus.

    Vestibulum enim wisi, viverra nec, fringilla in, laoreetvitae, risus. Donec sit amet nisl. Aliquam semper ipsumsit amet velit.

2.  Suspendisse id sem consectetuer libero luctus adipiscing.

那么列表中的代码怎么办呢? **in**  疯了吧,是不是?

1. 在 Ruby 中你可能要映射,就像这样:

        ['a', 'b'].map { |x| x.uppercase }

2. 在Rails, 你可以做一个简写:

        ['a', 'b'].map(&:uppercase)

一些人更喜欢定义列表

我是一个机器人
------------

或许你想打印`robot` 到控制台1000次. 为什么不呢?

    def robot_invasionputs("robot " * 1000)end

你看到了吗,那被格式化为代码了,因为它已经被缩进了4个空格.

那如果我们扔一些单箭头口号和&符号会怎么样呢?

    <div class="footer">
    	&copy; 2004 Foo Corporation
    </div>

一成不变
------------

展示块对于ASCII艺术十分有用:

<pre>
             ,-.
    ,     ,-.   ,-.
   / \   (   )-(   )
   \ |  ,.>-(   )-<
    \|,' (   )-(   )
     Y ___`-'   `-'
     |/__/   `-'
     |
     |
     |    -hrr-
  ___|_____________
</pre>

推卸责任
----------------------

如果你需要责备他人,最好的方式是引用他们:

> I, at any rate, am convinced that He does not throw dice.

或者一些人没有太厉害的口才:

> I wish you'd have given me this written question ahead of time so I
> could plan for it... I'm sure something will pop into my head here in
> the midst of this press conference, with all the pressure of trying to
> come up with answer, but it hadn't yet...
>
> I don't want to sound like
> I have made no mistakes. I'm confident I have. I just haven't - you
> just put me under the spot here, and maybe I'm not as quick on my feet
> as I should be in coming up with one.

两个表格
-------------

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Rank</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Tom Preston-Werner</td>
		<td>Awesome</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Albert Einstein</td>
		<td>Nearly as awesome</td>
	</tr>
</table>

疯狂的链接
--------------------

I get 10 times more traffic from [Google] [1] than from
[Yahoo] [2] or [MSN] [3].

  [1]: http://google.com/        "Google"
  [2]: http://search.yahoo.com/  "Yahoo Search"
  [3]: http://search.msn.com/    "MSN Search"

*查看以上内容的源码 [source of this content](http://github.github.com/github-flavored-markdown/sample_content.html).*
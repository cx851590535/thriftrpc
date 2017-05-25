# composer包PhpRpc开发

   本扩展基于thriftRpc开发，过程中配合workMan使用，关于文件生成可参考[教程](http://www.workerman.net/workerman-thrift)。本人初步接触，技术小菜鸟一枚，以我理解的方式将其整合进laravel5.*框架，欢迎各位大佬指导。
 
 
上文所提到的教程，我在使用过程中其实疑问蛮多的，以下先列出问题：
 
1.  RPC（远程调用协议），如何实现的远程？
2.  哪些文件是公用的？哪些文件是客户端的，哪些文件是服务端的？

其实上述问题本质一样，如果解决了问题1那么问题2也会有答案了。经过本菜鸟多次尝试，大概答案如下：

在客户端的文件开始会配置thriftClient,其中包含了服务端的ip和端口号及其服务名称，在服务端的Applications\ThriftRpc目录下的start.php文件会包含接收端口号和IP信息（框架优化可将配置取出）
客户端可以不需要生成的Applications\ThriftRpc\服务名\服务名Handler.php 文件，同样服务端不需要client文件
  
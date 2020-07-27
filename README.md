# LoginSystem
A simple user login system for websites. Written in PHP. 

![Image](https://github.com/Jingming517/LoginSystem/blob/master/img/loginSystem_screenshot.png)  


## Testing
- Go to server : http://119.45.184.236/index.php
- Testing account
  User name: test
  Password: 123
- Can sign up your own account also
---------------------------------------------------------

### Logic Flowchart
![Image](https://github.com/Jingming517/LoginSystem/blob/master/img/User_Login_Flowchart.jpg). 

搭建个人网站：
- 购买域名及云服务器
-- https://cp.freehostia.com/
- Hosted Domain -> File Manager -> FTP Accounts (记住自己的FTP Host, Username 和 Password)
- 下载开源免费的下载工具 https://filezilla-project.org/
- 在Filezilla中输入Host，Username和Password，上传写好的php文件

Run localhost on xampp:
- Save the folder to C:/xampp/htdocs
- Open localhost on browser

### Setup database:
- Download xampp
- open localhost/phpmyadmin
- create new database  
- go to SQL tab and key in:
```
CREATE TABLE users (
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL
);
```


--------------------------------------------------------------------------------  
## 腾讯云服务器配置完整过程：
- 腾讯云官网： [https://cloud.tencent.com/](https://cloud.tencent.com/) 购买你需要的云服务器
- 登录 - 右上角控制台 - 云服务器
- 配置安全组 （图方便可开发所有端口 但不太安全）
  https://www.notion.so/Linux-bacca7af4f3f487bbe23223b68650a44#ed4bf5945ba945ddb323ad7182c33aa0
- 实例 - 登录 （用户名密码在信息中心-站内信里）
- 登录后进入一个linux面板
- 配置宝塔面板：
  Centos安装命令：
  ```
  yum install -y wget && wget -O install.sh http://download.bt.cn/install/install_6.0.sh && sh install.sh 57c9a8
  ```
  详情参照官网： [https://www.bt.cn/bbs/thread-19376-1-1.html](https://www.bt.cn/bbs/thread-19376-1-1.html)
-面板上会显示宝塔网址，用户名和密码，建议记一下
忘了的话输入：
  ```
  bt default
  ```
- 输入网址用户名密码，进入宝塔控制面板
  可参考这篇文章： https://baijiahao.baidu.com/s?id=1619011794535813620&wfr=spider&for=pc
- 首先设置服务器环境，这里选择的是lamp环境，点击一键安装
- 软件商店 - 宝塔插件 - 宝塔一键部署源码 1.1 （安装）
- （以下部分基本照抄）
- 第一步：创建网站，在左侧桌面我们点击“网站”，在右侧选择“添加站点”；
  域名就是IP地址
- 填写相关信息

  域名：如果线上请填写真实域名，线下请填写ip地址

  备注：自行填写

  根目录：默认是以网站域名文件夹

  FTP：选择创建

  FTP：设置用户名和密码，个人觉得使用系统提供的就好

  数据库：选择mysql，其他信息默认即可，数据库用户名和密码可自行设定

  后续参数可不做更改即可

  添加成功后会提示数据库和ftp的用户名和密码，可保留记录下来，如果忘记了可在面板左侧FTP和数据库进行查看；
- 第二步：将我们刚刚填写的域名（本地ip）在浏览器中打开，如果提示域名或者ip未被绑定，请重启面板（重启方式：点击左侧“首页”，在右侧页面中点击重启，选择重启面板）
- 把写好的php文件上传至wwwroot目录
-----------------------------------------------------------------------------------
### 数据库
建立数据库
- 进入宝塔Linux面板
- 左侧数据库 - 添加数据库
- phpmyadmin

```
CREATE TABLE users (
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL
);
```


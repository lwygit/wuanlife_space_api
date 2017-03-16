#user.send_mail

邮件发送接口-用于发送包含修改密码验证码的邮件

##接口调用请求说明

接口URL：http://dev.wuanlife.com:800/?service=User.SendMail

请求方式：POST

参数说明：

|参数名字   | 类型|  是否必须   | 默认值   | 范围      |  说明|
|:--|:--|:--|:--|:--|:--|
|user_email    |   字符串| 必须     ||           最小：1  |  用户邮箱|


##返回说明
|参数|        类型|   说明|
|:--|:--|:--|
|msg           |  字符串 |提示信息|
|code            |整型 |  操作码，1表示发送成功，0表示发送失败|


##示例

发送验证码到邮箱

http://dev.wuanlife.com:800/?service=User.SendMail&Email=1195417752@qq.com
   
    JSON:
    {
    "ret": 200,
    "data": {
        "code": 1,
        "msg": "系统已向您的邮箱发送了一封找回密码邮件，请登录到您的邮箱查看验证码！"
    },
    "msg": ""
    }
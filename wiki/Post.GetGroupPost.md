#Post.GetGroupPost

星球页面帖子显示

##接口调用请求说明

接口URL：http://apilost/?service=Post.GetGroupPost

请求方式：GET

参数说明：

|参数|类型|是否必须|默认值|说明|
|:--|:--|:--|:--:|:--|
|group_id|int|必须|-|星球ID|
|user_id|int|不必须|-|用户ID|
|pn|int|不必须|1|第几页|
##返回说明
|参数|类型|说明|
|:--|:--|:--|
|creatorID	|int|	星球创建者id|
|creatorName  |string|   星球创建者名称|
|groupID|int	|星球ID|
|groupName	|string|	星球名称|
|identity    |int    |01创建者 02成员 03非成员|
|private    |int    |0否 1私密|
|posts.digest	|	int|	是否加精|
|posts.text	|string|	内容|
|posts.createTime|	date|	发帖时间|
|posts.id	|	int|	帖子ID|
|posts.nickname|string	|发帖人|
|posts.sticky	|string|	是否置顶|
|pageCount	|int	|总页数|
|currentPage	|int	|当前页|


##示例

显示星球ID为1的第1页帖子

http://apilost/?service=Post.GetGroupPost&group_id=1&pn=1

    JSON:
    {
    "ret": 200,
    "data": {
    "creatorID": "1",
    "groupID": "1",
    "groupName": "装备2014中队",
        "posts": [
            {
                "postID": "40",
                "title": "title40",
                "text": "40texttexttexttexttexttexttexttexttexttext ",
                "createTime": "2016-04-06 01:19:00",
                "nickname": "陶陶20",
                "groupID": "1",
                "groupName": "鬼扯1"
            },
            {
                "postID": "39",
                "title": "title39",
                "text": "39texttexttexttexttexttexttexttexttexttext ",
                "createTime": "2016-04-06 01:18:00",
                "nickname": "陶陶19",
                "groupID": "1",
                "groupName": "鬼扯1"
            },
            {
                "postID": "38",
                "title": "title38",
                "text": "38texttexttexttexttexttexttexttexttexttext ",
                "createTime": "2016-04-06 01:17:00",
                "nickname": "陶陶18",
                "groupID": "1",
                "groupName": "鬼扯1"
            },
            {
                "postID": "37",
                "title": "title37",
                "text": "37texttexttexttexttexttexttexttexttexttext ",
                "createTime": "2016-04-06 01:16:00",
                "nickname": "陶陶17",
                "groupID": "1",
                "groupName": "鬼扯1"
            },
            {
                "postID": "36",
                "title": "title36",
                "text": "36texttexttexttexttexttexttexttexttexttext ",
                "createTime": "2016-04-06 01:15:00",
                "nickname": "陶陶16",
                "groupID": "1",
                "groupName": "鬼扯1"
            },
            {
                "postID": "35",
                "title": "title35",
                "text": "35texttexttexttexttexttexttexttexttexttext ",
                "createTime": "2016-04-06 01:14:00",
                "nickname": "陶陶15",
                "groupID": "1",
                "groupName": "鬼扯1"
            }
        ],
        "pageCount": 4,
        "currentPage": 1
    },
    "msg": ""
    }
define({ "api": [
  {
    "type": "get",
    "url": "/customer",
    "title": "用户列表接口",
    "version": "0.0.2",
    "name": "article_list",
    "group": "user_admin",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "int",
            "optional": false,
            "field": "page",
            "defaultValue": "1",
            "description": "<p>页数</p>"
          },
          {
            "group": "Parameter",
            "type": "int",
            "optional": false,
            "field": "pageNum",
            "defaultValue": "10",
            "description": "<p>分页大小</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "keyword",
            "description": "<p>关键词</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "sortType",
            "description": "<p>排序类型</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "成功返回",
          "content": "    {\n\"code\": \"200\",\n\"msg\": \"获取数据成功\",\n\"data\": [\n{\n\"user_id\": 3,\n\"name\": \"??\",\n\"nickname\": \"chi爷\",\n\"address\": \"四川省成都市\"\n}\n],\n\"pageInfo\": {\n\"count\": null\n}\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "失败返回",
          "content": "HTTP/1.1 500 fail\n{\n  \"code\":\n  \"msg\": \"xxx\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "application/admin/controller/userAdmin/User.php",
    "groupTitle": "user_admin"
  },
  {
    "type": "get",
    "url": "/demo/edit",
    "title": "修改用户信息",
    "name": "user_edit",
    "group": "user_admin",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "int",
            "optional": false,
            "field": "id",
            "description": "<p>用户ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "firstname",
            "description": "<p>用户姓</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "firstname",
            "description": "<p>用户姓</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "lastname",
            "description": "<p>用户名</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "成功返回",
          "content": "HTTP/1.1 200 OK\n{\n  \"code\": 200,\n  \"data\": {},\n  \"msg\": \"xxx\",\n  \"url\":\"\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "application/admin/controller/userAdmin/User.php",
    "groupTitle": "user_admin",
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserNotFound",
            "description": "<p>The <code>id</code> of the User was not found</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"用户未找到\"\n}",
          "type": "json"
        }
      ]
    }
  }
] });

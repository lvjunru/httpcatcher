{
	"rules": [{
		"action": "body",
		"matchField": "",
		"field": "",
		"value": "is_vip\":1",
		"matchValue": "is_vip\":\\d",
		"destiontion": "response",
		"isRegex": true
	}, {
		"action": "body",
		"matchField": "",
		"field": "",
		"value": "vip_end_time\":1645467742",
		"matchValue": "vip_end_time\":\\d+",
		"destiontion": "response",
		"isRegex": true
	}, {
		"action": "body",
		"matchField": "",
		"field": "",
		"value": "vip_grade\":2",
		"matchValue": "vip_grade\":\\d",
		"destiontion": "response",
		"isRegex": true
	}, {
		"action": "body",
		"matchField": "",
		"field": "",
		"value": "vip_type\":2",
		"matchValue": "vip_type\":\\d",
		"destiontion": "response",
		"isRegex": true
	}],
	"enabled": true,
	"isReadOnly": false,
	"name": "卡点视频 解锁会员 A+",
	"locations": [{
		"method": "POST",
		"scheme": "http",
		"enabled": true,
		"port": 80,
		"query": "",
		"host": "kadian.nineton.cn",
		"path": "\/api\/v1.user\/info"
	}],
	"description": "A+"
}
# -*- coding: utf-8 -*-
import urllib2,json
#调用和风天气的API city可以通过https://cdn.heweather.com/china-city-list.txt城市列表获取
city='北京'
app_key = '8a439a7e0e034cdcb4122c918f55e5f3'
url = 'https://free-api.heweather.com/v5/weather?city='+city+'&key='+app_key
#用urllib2创建一个请求并得到返回结果
req = urllib2.Request(url)
resp = urllib2.urlopen(req).read()
print resp
# print type(resp)

#将JSON转化为Python的数据结构
json_data = json.loads(resp)
city_data=json_data['HeWeather5'][0]
hourly_data= json_data['HeWeather5'][0]['hourly_forecast']
daily_data = json_data['HeWeather5'][0]['daily_forecast']
print json_data
print u'当前时间：' + daily_data[0]['date']
print u'城市：' + city_data['basic']['city']
print u'PM指数：' + city_data['aqi']['city']['pm25']
print u'白天天气：' + daily_data[0]['cond']['txt_d']
print u'夜间天气：' + daily_data[0]['cond']['txt_n']
print u'今天{0}: 气温：{1}°/{2}°'.format(str(daily_data[0]['date']),daily_data[0]['tmp']['min'],daily_data[0]['tmp']['max'])
print u'未来小时天气：{0} {1}'.format(str(hourly_data[0]['date']).split()[1],hourly_data[0]['cond']['txt'])
# print u'未来小时天气：{0} {1}'.format(str(hourly_data[1]['date']).split()[1],hourly_data[1]['cond']['txt'])
# print u'未来小时天气：{0} {1}'.format(str(hourly_data[2]['date']).split()[1],hourly_data[2]['cond']['txt'])
# print u'未来{0} 天气：{1}°/{2}°'.format(daily_data[1]['date'],daily_data[1]['tmp']['min'],daily_data[1]['tmp']['max'])
# print u'未来{0} 天气：{1}°/{2}°'.format(daily_data[2]['date'],daily_data[1]['tmp']['min'],daily_data[2]['tmp']['max'])
# print u'穿衣建议：' + json_data['HeWeather5'][0]['suggestion']['drsg']['txt']
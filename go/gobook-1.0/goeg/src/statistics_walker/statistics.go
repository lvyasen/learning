package main

import (
	"fmt"
	"log"
	"net/http"
	"strconv"
	"strings"
)

const (
	pageTop = `<!DOCTYPE HTML><html><head>
<style>.error{color:#FF0000;}</style></head><title>统计</title>
<body><h3>统计</h3>
<p>计算给定的数字的基本统计信息</p>`
	form = `<form action="/" method="POST">
<label for="numbers">请输入数字:</label><br />
<input type="text" name="numbers" size="30"><br />
<input type="submit" value="计算">
</form>`
	pageBottom = `</body></html>`
	anError    = `<p class="error">%s</p>`
)

type statistics struct {
	numbers []float64
	mean float64
	median float64
}
func main() {
	http.HandleFunc("/", homePage)
	// 启动一个http服务
	if err := http.ListenAndServe(":9001", nil); err != nil {
		log.Fatal("启动 http 服务失败", err)
	}
}
func homePage(writer http.ResponseWriter, request *http.Request) {
	err := request.ParseForm() // 获取表单数据
	fmt.Fprint(writer, pageTop, form)
	if err != nil {
		fmt.Fprint(writer, anError, err) //使用占位符打印错误信息
	} else {
		if numbers,message,ok :=processRequest(request);ok {
			stats :=
		}
	}
	fmt.Fprint(writer, pageBottom)
}

func processRequest(request *http.Request) ([]float64, string, bool) {
	var numbers []float64
	if slice, found := request.Form["numbers"]; found && len(slice) > 0 {
		text := strings.Replace(slice[0],","," ",-1)
		for _,field := range strings.Fields(text){

			if x,err:=strconv.ParseFloat(field,64);err !=nil {
				return numbers,"'"+field+"' is invalid",false;
			}else {
				numbers=append(numbers,x)
			}
		}
	}
	if len(numbers)==0 {
		return numbers,"",false
	}
	return numbers,"",true
}

func getStats(numbers []float64)(stats stats)  {

}
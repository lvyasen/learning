package main

import (
	"fmt"
	"math"
	"strings"
)

var c, python, java bool // 声明变量的时候类型在最后面
var i, j int = 1, 2      // 变量初始化
const FILE_PATH = "/go/src/main"
const FILE_TYPE string = "png"

var (
	price float32
	isFirst bool
	name bool
)

func add(x int, y int) int {
	return x + y
}

// 简化写法
func add2(x, y int) int {
	return x + y
}

// 多值返回
func swap(x, y string) (string, string) {
	return y, x
}

// 命名返回值
/*Go 的返回值可被命名，它们会被视作定义在函数顶部的变量。

返回值的名称应当具有一定的意义，它可以作为文档使用。

没有参数的 return 语句返回已命名的返回值。也就是 直接 返回。*/
func split(sum int) (x, y int) {
	x = sum * 4 / 9
	y = sum - 4
	return
}
func shortVar() (int, int) {
	//这种声明只能用户函数内部
	k, m := 1, 2
	return k, m
}

// 数据类型
// int  int8  int16  int32  int64
// uint uint8 uint16 uint32 uint64 uintptr
// bool
// string
// byte
// rune int32 的别名
// float32 float64
// complex64 complex128

// for
func testFor() int {
	sum := 0
	for i := 0; i < 10; i++ {
		sum += i
	}
	return sum
}

// 简化的 for
func testFor1() int {
	sum := 1
	for ; sum < 4; {
		sum += sum
	}
	return sum
}

// for 是 go 中的 while
func testWhile() int {
	sum := 1
	for sum < 11 {
		sum += sum
	}
	return sum
}

// if 不需要小括号
func testIf(x float64) string {
	if x < 0 {
		return testIf(-x) + "i"
	}
	return fmt.Sprint(math.Sqrt(x))
}

// if 简短语句
func testIf1(x, y ,z float64) float64 {
	if v := math.Pow(x, y);v< z{
		return v
	}
	return z
}
// if else
func testIf2(x float64) float64  {
	if x>100 {
		return x
	}else {
		return x+1
	}
}

func main() {
	str:= "walker_lv \"wa\""

	fmt.Printf("%d",strings.Index(str,"wa"))
}

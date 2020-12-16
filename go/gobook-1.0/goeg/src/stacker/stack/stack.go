// Copyright © 2010-12 Qtrac Ltd.
// 
// This program or package and any associated files are licensed under the
// Apache License, Version 2.0 (the "License"); you may not use these files
// except in compliance with the License. You can get a copy of the License
// at: http://www.apache.org/licenses/LICENSE-2.0.
// 
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

package stack

import "errors"

type Stack []interface{} // 声明一个接口类型的变量
/**
  内置的数据集合类型(映射和切片)、通信通道、和字符串都可以使用 len() 函数获取长度
  切片和通道通过 cap() 获取容量
  通常所有自定义的集合类型(包括我们自己实现的以及 Go 语言标准库中的自定义数据集合类型) 都应该实现 Len() 和 Cap() 方法
*/
/**
  函数和方法都用 func 声明
  但是定义方法时 (方法所作用的值的类型) 方法名 (参数列表) (返回值列表如果一个值的话可以不适用括号) {}
  作为参数传进去的 stack Stack 叫做接收器
  指针是指一个保存了另一值的内存地址的变量 使用指针的原因是为了效率 还有一个原因就是可以是一个值可以被修改
  指针一般在类型前面加 * 号表示
  Go 语言中的通道（channel）、映射（map）、和切片（slice）等数据结构必须通过 make() 函数创建,
  而使用 make() 函数返回的是该类型的一个引用,因此大部分情况下无需使用 * ,但是如果在一个函数或方法内部使用 append()
  修改一个切片(不同于仅仅修改一个元素内容)则必须使用该切片的引用如 Push() 方法
  Go 语言中使用 nil 表示空指针以及空引用 用于条件判断或者赋值
  Go 语言会保证当一个值被创建时,他会初始化成相应的空值 eg: 数字默认 0 、字符串默认 '' 这样做减少了出错的麻烦

*/
func (stack *Stack) Pop() (interface{}, error) {
    theStack := *stack // 这里为什么不直接使用指针而是使用变量?
    //因为开销小 *stack 指向的是切片的引用,而 theStack 是切片值
    if len(theStack) == 0 {
        return nil, errors.New("can't Pop() an empty stack")
    }
    x := theStack[len(theStack)-1] // 取出栈顶元素
    *stack = theStack[:len(theStack)-1] // 利用切片找到0:len(theStack)-1 的新切片这时该切片容量不变长度-1
    // 并不是真的将所有数据都拷贝到另一新的切片
    // 切片通过 [] 操作符和一个索引范围形成新的切片 eg: [first:end] first和end可以省略
    // 可以通过 len(切片)-1 获取最后一个
    return x, nil
}

func (stack *Stack) Push(x interface{}) { //使用引用方式修改值
    *stack = append(*stack, x) //这里边因为传的是指针该指针已经被修改过了所以无需返回 error
}

func (stack Stack) Top() (interface{}, error) { // 返回栈顶元素 error 是一个接口类型
    if len(stack) == 0 {
        // 使用 error 接口返回错误
        return nil, errors.New("can't Top() an empty stack")
    }
    return stack[len(stack)-1], nil
}

func (stack Stack) Cap() int {
    return cap(stack)
}

func (stack Stack) Len() int {
    return len(stack)
}

func (stack Stack) IsEmpty() bool {
    return len(stack) == 0
}

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

package main

import (
	"bufio" // 提供了针对字符和字符串的缓冲机制,因此很适合读写 UTF-8 编码的文件
	"fmt"
	"io"        // 包含了底层的I/O功能
	"io/ioutil" // ioutil 是 io 的子集 提供了高级文件处理函数
	"log"
	"os"
	"path/filepath"
	"regexp" // 提供强大的正则表达式支持
	"strings"
)

var britishAmerican = "british-american.txt"

func init() {
	//dir, _ := filepath.Split(os.Args[0])
	baseDir, _ := os.Getwd()
	britishAmerican = filepath.Join(baseDir, britishAmerican)
}

func main() {
	inFilename, outFilename, err := filenamesFromCommandLine() // 将输入输出对的文件名放到相应的变量中
	if err != nil {
		fmt.Println(err)
		os.Exit(1) // 如果调用此函数则任何延迟执行的语句都会丢失
	}
	inFile, outFile := os.Stdin, os.Stdout //使用 os 的标准输入标准输出的指针
	if inFilename != "" {
	    // os.Open 从文件中读取数据
	    // 可以自由的控制文件的打开模式和权限
		if inFile, err = os.Open(inFilename); err != nil {
		    // log.Fatal(err) 会传入相应的错误信息同时记录日期、时间。并调用 os。Exit 终止程序
			// os.Exit() 函数调用是程序会立即停止,任何延迟的语句都会被丢失
		    // 在 Go 语言中 panic 是一个运行时错误相当于异常
		    log.Fatal(err)
		}
		// defer 会保证执行但不会马上执行会在函数返回值被调用
		defer inFile.Close()
	}
	if outFilename != "" {
	    // os.Create(文件名) 从文件中读取数据或者将数据写入文件如果文件不存在则创建文件 返回一个指向文件的句柄
		if outFile, err = os.Create(outFilename); err != nil {
			log.Fatal(err)
		}
		defer outFile.Close()
	}
	// 这里传入的是 inFile outFile 但是我们传入的是 *os.File 原因是 *os.File 实现了 io.ReadWrite 也就是 io.Read 和 io.Write 结构
	// 这是一个典型的鸭子类型的实例,也就是任何类型只要实现了接口所定义的方法,他的值都可以用于这个接口
	if err = americanise(inFile, outFile); err != nil { //
		log.Fatal(err)
	}
}

/**
将参数中的值赋值给变量并 return
返回值用 () 包起来并指明数据类型
*/
func filenamesFromCommandLine() (inFilename, outFilename string,
	err error) {
	// 获取参数 os.Args
	if len(os.Args) > 1 && (os.Args[1] == "-h" || os.Args[1] == "--help") {
		// 创建一个适合打印的错误信息
		err = fmt.Errorf("usage: %s [<]infile.txt [>]outfile.txt",
			filepath.Base(os.Args[0]))
		return "", "", err
	}
	if len(os.Args) > 1 {
		inFilename = os.Args[1]
		if len(os.Args) > 2 {
			outFilename = os.Args[2]
		}
	}
	if inFilename != "" && inFilename == outFilename {
		log.Fatal("won't overwrite the infile")
	}
	return inFilename, outFilename, nil
}
/**
处理转换

 */
func americanise(inFile io.Reader, outFile io.Writer) (err error) {
	reader := bufio.NewReader(inFile) // 只需要实现 io.Reader 接口就能得到一个带有缓冲的 reader
	writer := bufio.NewWriter(outFile)
	defer func() {
		if err == nil {
			err = writer.Flush()
		}
	}()

	var replacer func(string) string
	if replacer, err = makeReplacerFunction(britishAmerican); err != nil {
		return err
	}
	wordRx := regexp.MustCompile("[A-Za-z]+")
	eof := false
	for !eof {
		var line string
		line, err = reader.ReadString('\n')
		if err == io.EOF {
			err = nil  // io.EOF isn't really an error
			eof = true // this will end the loop at the next iteration
		} else if err != nil {
			return err // finish immediately for real errors
		}
		line = wordRx.ReplaceAllStringFunc(line, replacer)
		if _, err = writer.WriteString(line); err != nil {
			return err
		}
	}
	return nil
}

func makeReplacerFunction(file string) (func(string) string, error) {
	rawBytes, err := ioutil.ReadFile(file)
	if err != nil {
		return nil, err
	}
	text := string(rawBytes)

	usForBritish := make(map[string]string)
	lines := strings.Split(text, "\n")
	for _, line := range lines {
		fields := strings.Fields(line)
		if len(fields) == 2 {
			usForBritish[fields[0]] = fields[1]
		}
	}

	return func(word string) string {
		if usWord, found := usForBritish[word]; found {
			return usWord
		}
		return word
	}, nil
}

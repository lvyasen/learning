package interface_test

import "testing"

type Programer interface {
	WriteHelloWorld() string
}

type GoProgramer struct {
	Name string
	Age int
	Avatar string
}

func (g *GoProgramer) WriteHelloWorld()string  {
	return "fmt.Println(\"hello world\")"
}
func TestClient(t *testing.T)  {
	var p Programer
	p = new(GoProgramer)
	t.Log(p.WriteHelloWorld())
}
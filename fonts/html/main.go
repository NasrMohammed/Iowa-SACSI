package main

import (
	"html/template"
	"log"
	"os"
)

func main() {
	tpl, err := template.ParseFiles("index.html")
	if err != nil {
		log.Fatalln(err)
	}

	file, err := os.Create("nas.html")
	if err != nil {
		log.Fatalln(err)
	}

	err = tpl.ExecuteTemplate(file, "index.html", nil)
	if err != nil {
		log.Fatalln(err)
	}
}

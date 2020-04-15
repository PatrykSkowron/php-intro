
PWD = $(shell pwd)
.PHONNY: build
build: Dockerfile
	docker build --tag php_apache .

.PHONNY: run
run: build
	docker run -d --rm -p 8000:80 -v ${PWD}:/var/www/html php_apache:latest
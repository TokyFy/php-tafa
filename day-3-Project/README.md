# Docker-php-helloworld

An image to start a little Php project (Alternative to Xamp)

to run the image : 

```shell
docker build -t hellophp .

docker run -p 80:80 -v ${pwd}:/source hellophp
```
git clone https://github.com/ed-an/php81.git

instale docker:
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04

instale docker-compose:
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04


```
mkdir -p src/public 
```

```
touch src/public/index.php
```

```
<?php

echo 'hello world';
```
```
chown -R $user:$user -R src
```
```
export USER=$(whoami) && export  IDUSER=$(id -u)
```
```
docker-compose up -d --build
```

```
localhost:8000
```